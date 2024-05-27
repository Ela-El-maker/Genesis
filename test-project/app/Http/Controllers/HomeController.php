<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
    //     DB::table('posts')->insert([
    //         'title' => 'This is a test title 1',
    //         'description' => 'This is a test description 1',
    //         'status' => 1

    //     ],
    //     [
    //         'title' => 'This is a test title 2',
    //         'description' => 'This is a test description 2',
    //         'status' => 1

    //     ],
    //     [
    //         'title' => 'This is a test title 3',
    //         'description' => 'This is a test description 3',
    //         'status' => 0

    //     ],
    // );

    // return DB::table('posts')-> where('id', 3)->update([
    //     'title' => 'This title 1 is updated',
    //     'description' => 'This description 1 is updated'
    // ]);

    // return DB::table('posts')->where('id', 2)->delete();
    //     dd('success');

        // $blogs = [
        //     [
        //         'title' => 'Title one',
        //         'body' => 'This is body One for title One',
        //         'status' => 1,
        //     ],
        //     [
        //         'title' => 'Title two',
        //         'body' => 'This is body Two for title Two',
        //         'status' => 0,
        //     ],
        //     [
        //         'title' => 'Title Three',
        //         'body' => 'This is body Three for title Three',
        //         'status' => 1,
        //     ],
        //     [
        //         'title' => 'Title Four',
        //         'body' => 'This is body Four for title Four',
        //         'status' => 1,
        //     ],
        //     [
        //         'title' => 'Title Five',
        //         'body' => 'This is body Five for title Five',
        //         'status' => 0,
        //     ],
        //     [
        //         'title' => 'Title Six',
        //         'body' => 'This is body Six for title Six',
        //         'status' => 1,
        //     ],
        // ];
        // return view('home', compact('blogs'));
        // $posts = Post::all();


        # Inserting data into the database

        // $post = new Post();

        // $post -> title = "Hello Ela title";
        // $post -> description = "Hello Ela description";
        // $post -> status = 1;
        // $post -> publish_date = date('Y-m-d');
        // $post -> user_id = 1;
        // $post -> category_id =2;
        // $post -> views= 320;

        // $post->save;

        // dd('success');

        # Updating data in the database

        // $post = Post::find(5);
        // $post -> title= 'This is ela new title';
        // // return $post;

        // $post->save();
        // dd('success');

        # Deleting
        Post::find(4)->delete();
        dd('success');

    }
}
