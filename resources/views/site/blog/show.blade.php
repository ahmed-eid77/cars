@extends('site.layouts.app')


@section('content')
    <!-- Component Code -->
   <div class="container">
    <div class="relative">
        <div class="p-10 relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="bg-cover bg-center"
                            style="min-height: 400px; background-image:url({{ asset($blog->image) }});">
                        </div>
                    </div>
                    <div class="col-md-7 p-10">
                        <h1 class="text-gray-900 font-weight-bold" style="font-size: 3rem;">{{ $blog->title }}</h1>
                        <p class="small text-muted my-4">{{ $blog->short_description }}</p>
                        <div class="flex items-center">
                            <div class="text-sm">
                                <a href="#" class="text-dark font-weight-bold" style="font-size: 14px">By : {{ $blog->author }}</a>
                                <p class="text-muted" style="font-size: 12px">{{ $blog->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <p class="large text-muted">{{ $blog->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection
