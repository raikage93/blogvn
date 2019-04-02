@extends('app')
@section('url_header','user/img/post-bg.jpg')
@section('header_title',$post->title)
@section('header_content',$post->subtitle)
@section('header_author','Posted by Start Bootstrap on '.$post->created_at)
@section('content')

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <small class="pull-right">
               @foreach ($post->tags as $tag)
                    {{$tag->name}}
               @endforeach
                </small>
                {!! $post->body !!}
                <small class="pull-right alert alert-primary">
                    @foreach ($post->categories as $cat)
                        {{$cat->name}}
                    @endforeach
                </small>
            </div>
        </div>
        @comments(['model' => $post])
         @endcomments
    </div>
</article>
@endsection