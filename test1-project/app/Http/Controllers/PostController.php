<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\File as FacadesFile;

use function Ramsey\Uuid\v1;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('authCheck2')->except('index');

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::paginate(5);

        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'image' => ['required', 'max:2028', 'image'],
            'title' => ['required', 'max:255'],
            'category_id' => ['required', 'integer'],
            'description' => ['required']
        ]);

        // dd('success');

        $fileName = time() . '_' . $request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('uploads', $fileName);
        $post = new Post();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->image = 'storage/' . $filePath;

        $post->save();

        return redirect()->route('posts.index');
        // return $fileName;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = Post::findOrFail($id);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = Post::findorfail($id);
        $categories = Category::all();
        return view('edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // return $request->all();
        // 'image' => ['', 'max:2028','image'],
        $request->validate([

            'title' => ['required', 'max:255'],
            'category_id' => ['required', 'integer'],
            'description' => ['required']
        ]);

        $post = Post::findOrFail($id);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['required', 'max:2028', 'image'],
            ]);

            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->image->storeAs('uploads', $fileName);

            File::delete(public_path($post->image));

            $post->image = 'storage/' . $filePath;

        }

        // dd('success');




        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $destroy = Post::findOrfail($id);
        $destroy->delete();

        return redirect()->route('posts.index');
    }

    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('trashed',compact('posts'));
    }

    public function restore($id)
    {
        $post = Post::onlyTrashed()->findorfail($id);
        $post -> restore();

        return redirect()->back();
    }
    public function forceDelete($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);

        File::delete(public_path($post->image));

        $post->forceDelete();

        return redirect()->back();
    }
}
