@extends('layouts.app')

@section('content')
    <style>
        .blog_posts_container{
            width: 70%;
            margin-left: 15%;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .post_container{
            width: 100%;
            display:flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .post_user{
            line-height: 100px;
        }
    </style>
    <section class="content-header">
        <h1 class="pull-left">Blog Posts</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="blog_posts_container">
            @foreach($items as $item)
                <div class="post_container">
                    <div class="post_content">
                        <div class="post_title"><h3>{{$item->title}}</h3></div>
                        <div class="post_description"><p>{{$item->short_description}}</p></div>
                    </div>
                    <div class="post_auth">
                        <div class="post_user"><span>{{$item->user->first()->name}}</span></div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection

