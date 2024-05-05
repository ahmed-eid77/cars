@extends('site.layouts.app')

@section('content')

    <style>
        .comment-form {
            margin-top: 20px;
        }

        .comment-form .form-group {
            margin-bottom: 20px;
        }

        .comment-form textarea {
            resize: vertical;
            /* Allow vertical resizing */
        }

        .comment-form #rateYo {
            margin-top: 10px;
        }

        .comment-form .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .comment-form .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .panel-body.flex {
            display: flex;
            align-items: flex-start;
            /* Align items to the top */
        }

        .comment-info {
            flex-grow: 1;
            /* Allow the comment info to grow */
        }

        .rateyo-wrapper {
            text-align: right;
            max-width: 150px;
            margin-right: 20px;
        }

        .rateyo {
            display: inline-block;
        }
    </style>

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
                                    <a href="#" class="text-dark font-weight-bold" style="font-size: 14px">By :
                                        {{ $blog->author }}</a>
                                    <p class="text-muted" style="font-size: 12px">{{ $blog->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <p class="large text-muted">{{ $blog->description }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column">
                <!-- Display Existing Comments -->
                <div class="existing-comments mb-3">
                    <h3><strong>Comments</strong></h3>
                    @if ($blog->comments->count() > 0)
                        @foreach ($blog->comments as $comment)
                            <div class="panel panel-default">
                                <div class="panel-body flex">
                                    <div class="comment-info">
                                        <h4><strong>{{ $comment->user->name }}</strong> said:</h4>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                    @if ($comment->rate)
                                        <div class="rateyo-wrapper">
                                            <div class="rateyo" data-read-only="true"
                                                data-rating="{{ $comment->rate->value }}">
                                            </div>
                                        </div>
                                    @else
                                        <p>No rating provided</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4 class="text-center"><strong>There are no comments</strong></h4>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Comment Form -->
                @if (Auth::check())
                    <div class="comment-form">
                        <form action="{{ route('comments.store') }}" method="POST" class="form-horizontal">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">

                            <div class="form-group">
                                <label for="content" class="col-sm-2 control-label">Comment:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                                </div>
                            </div>

                            <!-- If users need to be logged in to comment, you can include the user_id field here -->
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                            <div class="form-group">
                                <label for="rating" class="col-sm-2 control-label">Rating:</label>
                                <div class="col-sm-10">
                                    <div id="rateYo"></div>
                                    <input type="hidden" name="rating" id="rating_input">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Add Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p class="text-center">Please <a href="{{ route('login') }}"><button style="color: #007bff;"
                                        type="button" class="">login</button></a> to add comments</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @endsection

    @push('scripts')
        <!-- Include RateYo CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

        <!-- Include RateYo JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.rateyo').each(function() {
                    var rating = $(this).data('rating'); // Get the rating value from data-rating attribute
                    var readOnly = $(this).data(
                        'read-only'); // Get the read-only flag from data-read-only attribute

                    $(this).rateYo({
                        rating: rating, // Set the initial rating value
                        readOnly: readOnly // Set read-only mode based on data-read-only attribute
                    });
                });

                $("#rateYo").rateYo({
                    fullStar: true,
                    onSet: function(rating, rateYoInstance) {
                        $("#rating_input").val(rating);
                    }
                });
            });
        </script>
    @endpush
