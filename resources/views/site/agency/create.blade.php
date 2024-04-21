@extends('site.layouts.app')


@section('content')
    <div class="container">
        <section class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">بيانات المعرض</h3>
            </div>
            <div class="panel-body">

                <form action="{{ route('agency.add') }}" class="form-horizontal" role="form" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">اسم المعرض </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder=""
                                required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">العنوان</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" id="address" placeholder=""
                                required>
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">التليفون</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder=""
                                required>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->
                    
                    <div class="form-group">
                        <label for="latitude" class="col-sm-3 control-label">خط العرض</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="latitude" id="latitude" placeholder=""
                                required>
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="longitude" class="col-sm-3 control-label">خط الطول</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="longitude" id="longitude" placeholder=""
                                required>
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">الموقع على الخريطة</label>
                        <div class="col-sm-9">
                            <div id="map" style="height: 300px;"></div>
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
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                },
                zoom: 8
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: -34.397,
                    lng: 150.644
                },
                map: map,
                draggable: true
            });
            google.maps.event.addListener(marker, 'dragend', function(event) {
                document.getElementById("latitude").value = event.latLng.lat();
                document.getElementById("longitude").value = event.latLng.lng();
            });
        }
    </script>
@endpush
