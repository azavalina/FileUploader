<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"><script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Styles -->
<link href="{{ asset('css/display.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')

<div class="container">
    <div id="blog" class="row">
        <div class="col-md-12">
            <div class="col-md-2 paddingTop20">
                <nav class="nav-sidebar">
                    <ul class="nav">
                        <li class="active"><a href="javascript:;"><span class="glyphicon glyphicon-star"></span> Posts</a>
                        </li>
                        <li><a href="/post/create">New Post</a></li>
                        <li class="nav-divider"></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-10">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <h1>{{$post->text}}</h1>
                        <img src="/posts/{{$post->media}}" width="100" height="100" alt="post img"
                             class="pull-left img-responsive thumb margin10 img-thumbnail">
                        <br>
                        <a type="button" href="/post/delete/{{$post->id}}" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection