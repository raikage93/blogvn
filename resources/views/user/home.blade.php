@extends('app')
@section('url_header','user/img/home-bg.jpg')
@section('header_title','BLOGVN')
@section('header_content','A Clean Blog Theme by Start Bootstrap')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach ($posts as $post)
            <div class="post-preview">
                <a href="post/{{$post->slug}}">
                    <h2 class="post-title">
                       {{$post->title}}
                    </h2>
                    <h3 class="post-subtitle">
                        {{$post->subtitle}}
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on {{$post->created_at}}</p>
            </div>
            <hr>
            @endforeach
           
            <!-- Pager -->
            <div class="text-center">
                {{$posts->links()}}
            </div>
        </div>
    </div>
</div>
@endsection