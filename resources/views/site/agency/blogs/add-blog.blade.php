@extends('site.layouts.app')


@section('content')
    <div class="container">
        <section class="panel panel-default">
            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left">بيانات السيارات</h3>
                <div class="pull-right">
                    <a href="{{ route('agency.blogs') }}">
                        <button type="button" class="btn btn-primary"> عرض المدونات</button>
                    </a>
                </div>
            </div>
            <div class="panel-body">

                <form action="{{ route('agency.blogs.store') }}" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="col-sm-3 control-label">العنوان</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" id="title" placeholder="" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="short_description" class="col-sm-3 control-label">التفاصيل الختصرة</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="short_description" id="short_description" placeholder="" required>
                            @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">التفاصيل الختصرة</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="description" id="description" placeholder="" required>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="image" class="col-sm-3 control-label">الصورة</label>
                        <div class="col-sm-3">
                            <input type="file" name="image" id="image" required>
                            <img id="preview-image" src="https://via.placeholder.com/150" alt="Preview Image" style="max-width: 100%; margin-top: 10px;">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary">إضافة</button>
                        </div>
                    </div> <!-- form-group // -->
                </form>
            </div><!-- panel-body // -->
        </section><!-- panel// -->
    </div>
@endsection

@push('scripts')
<script>
    // Add event listener to file input field
    document.getElementById('image').addEventListener('change', function(event) {
        // Get the selected file
        var file = event.target.files[0];

        // Check if a file is selected
        if (file) {
            // Create a FileReader object
            var reader = new FileReader();

            // Set up FileReader onload function
            reader.onload = function(event) {
                // Update the src attribute of the image element to display the selected image
                document.getElementById('preview-image').src = event.target.result;
            };

            // Read the selected file as a data URL
            reader.readAsDataURL(file);
        }
    });
</script>
@endpush