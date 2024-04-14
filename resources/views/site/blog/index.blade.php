@extends('site.layouts.app')


@section('content')
    <!-- Blog Section -->
    <!-- Blog Section -->
    <div id="blog">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h3>اخر المدونات</h3>
                <p> كل ما يخصك من اخر الاخبار لاجدد السيارات</p>
            </div>
            <ul class="blogGrid">
                @foreach ($blogs as $blog)
                    <li class="item">
                        <div class="int">
                            <!-- Blog Image -->
                            <div class="postimg"> <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}"></div>
                            <!-- Blog info -->
                            <div class="post-header">
                                <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $blog->created_at->diffForHumans() }} </div>
                                <h4><a href="#.">{{ $blog->title }}</a></h4>
                                <div class="postmeta">By : <span>{{ $blog->author }} </span> Category : <a href="#.">{{ $blog->category }}</a>
                                </div>
                                <a href="#." class="readmore">Read More <i class="fa fa-long-arrow-right"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
