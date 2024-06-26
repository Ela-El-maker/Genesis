@extends('layouts.master')

@section('content')
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Hello, world!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout
                    called a jumbotron and three supporting pieces of content. Use it as a starting point to create
                    something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>


            <div class="row mt-6">
                @foreach ($blogs as $blog)
                    @if ($blog['status'] == 1)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h2>{{ $blog['title'] }} </h2>
                                    <p>{{ $blog['body'] }}</p>
                                    <div class="btn-sm btn-success">Confirmed</div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h2>{{ $blog['title'] }} </h2>
                                    <p>{{ $blog['body'] }}</p>
                                    <div class="btn-sm btn-warning">Pending</div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach




            </div>
            @php
                $data = true;
                $i =2
            @endphp

            @isset($data)
                {{-- // Checks if a variable is set or not --}}
                <div class="alert alert-success">Success</div>
            @endisset

            @empty($i)
                <div class="alert alert-success">Successfully Empty</div>
            @endempty
        </div>


        <div class="container bg-dark">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id
                        ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>

            <hr>

        </div> <!-- /container -->

    </main>
@endsection
