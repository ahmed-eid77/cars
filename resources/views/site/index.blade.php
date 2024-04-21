@extends('site.layouts.app')

@section('content')
    <!-- Home Section -->
    <div id="home" class="parallax-section mb-5">
        <!--     <div class="overlay"></div>-->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="slide-text">
                        <h3>ماذا نقدم لك؟ <a href="#" class="typewrite" data-period="2000"
                                data-type='[ "استاجر سيارات" , "تقيمات مرتفة" , "تأجير اتجاه واحد", "مدينة إلى مدينة", "ركوب حرة"]'>
                                <span class="wrap"></span> </a> </h3>
                        <h1>اهلا بك في موقعنا</h1>
                        <p>الطريق في انتظارك، وسنوصلك إلى هناك</p>
                        <a href="{{ route('about-us.index') }}" class="btn btn-default section-btn">اقرأ المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <!-- <div class="container">
                <div class="bformBox">
                    <h3>احجز سيارتك اليوم</h3>
                    <form action="{{ route('car-rental.store') }}" method="POST">
                        @csrf
                        <div class="formrow">
                            <select class="form-control" name="car_id" required>
                                <option value="">اختار سيارتك</option>
                                @foreach ($cars as $car)
    <option value="{{ $car->id }}">{{ $car->name }}</option>
    @endforeach
                            </select>
                            @error('car_id')
        <span class="text-danger">{{ $message }}</span>
    @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="formrow">
                                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i> مكان الالتقاء</span>
                                        <select class="form-control" data-live-search="true" name="address_pickup" id="pickup"
                                            required="required">
                                            <option value="">Select Pick-Up</option>
                                            @foreach ($places as $place)
    <option value="{{ $place->id }}" data-lat="{{ $place->latitude }}"
                                                    data-lng="{{ $place->longitude }}">{{ $place->name }}</option>
    @endforeach
                                        </select>
                                        @error('address_pickup')
        <span class="text-danger">{{ $message }}</span>
    @enderror
                                        {{-- <input type="text" class="form-control" id="pickup" name="address_pickup" required> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="formrow">
                                    <div class="input-group date form_datetime">
                                        <input class="form-control" type="datetime-local" value=""
                                            placeholder="Select Date and Time" name="time_pickup" required>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                    @error('time_pickup')
        <span class="text-danger">{{ $message }}</span>
    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="formrow">
                                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i> مكان الوصول</span>
                                        <select class="form-control" data-live-search="true" name="address_dropoff" id="drop"
                                            required="required">
                                            <option value="">Select Drop-Off</option>
                                            {{-- @foreach ($places as $place)
                                        <option value="{{ $place->id }}" data-lat="{{ $place->latitude }}"
                                            data-lng="{{ $place->longitude }}">{{ $place->name }}</option>
                                    @endforeach --}}
                                        </select>
                                        @error('address_dropoff')
        <span class="text-danger">{{ $message }}</span>
    @enderror
                                        {{-- <input type="text" class="form-control" id="drop" name="address_dropoff" required> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="formrow">
                                    <div class="input-group date form_datetime">
                                        <input class="form-control" type="datetime-local" value=""
                                            placeholder="Select Date and Time" name="time_dropoff" required>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                    @error('time_dropoff')
        <p class="alert alert-danger">{{ $message }}</p>
    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="formrow">
                                    <input type="text" class="form-control" placeholder="اسمك" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="formrow">
                                    <input type="email" class="form-control" placeholder="بريدك الالكتروني" name="email"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="formrow">
                                    <input type="text" class="form-control" placeholder="رقم الهاتف" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="formbtn">
                            <input type="submit" class="btn" value="تأكيد حجز السيارة">
                        </div>
                    </form>
                </div>
            </div> -->

    <!-- Form Section -->
    <div class="container">
        <div class="bformBox">
            <h3>احجز سيارتك اليوم</h3>
            <form action="{{ route('car-rental.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="formrow">
                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker"
                                        aria-hidden="true"></i> محافظتك </span>
                                <select class="form-control" data-live-search="true" name="address_pickup"
                                    id="pickup" required="required">
                                    <option value="">Select Pick-Up</option>
                                    @foreach ($places as $place)
                                        <option value="{{ $place->id }}" data-lat="{{ $place->latitude }}"
                                            data-lng="{{ $place->longitude }}">{{ $place->name }}</option>
                                    @endforeach
                                </select>
                                @error('address_pickup')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                {{-- <input type="text" class="form-control" id="pickup" name="address_pickup" required> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="formrow">
                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker"
                                        aria-hidden="true"></i> المعرض</span>
                                <select class="form-control" data-live-search="true" name="address_dropoff"
                                    id="drop" required="required">
                                    <option value="">Select Drop-Off</option>
                                    {{-- @foreach ($places as $place)
                                        <option value="{{ $place->id }}" data-lat="{{ $place->latitude }}"
                                            data-lng="{{ $place->longitude }}">{{ $place->name }}</option>
                                    @endforeach --}}
                                </select>
                                @error('address_dropoff')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                {{-- <input type="text" class="form-control" id="drop" name="address_dropoff" required> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formrow">
                    <select class="form-control" name="car_id" id="car_id" required>
                        <option value="">اختار سيارتك</option>
                        @foreach ($cars as $car)
                            <option value="{{ $car->id }}">{{ $car->name }}</option>
                        @endforeach
                    </select>
                    @error('car_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="formrow">
                            <div class="input-group date form_datetime">
                                <input class="form-control" type="datetime-local" value=""
                                    placeholder="Select Date and Time" name="time_pickup" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            @error('time_pickup')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-6">
                        <div class="formrow">
                            <div class="input-group date form_datetime">
                                <input class="form-control" type="datetime-local" value=""
                                    placeholder="Select Date and Time" name="time_dropoff" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            @error('time_dropoff')
                                <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="formrow">
                            <input type="text" class="form-control" placeholder="اسمك" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="formrow">
                            <input type="email" class="form-control" placeholder="بريدك الالكتروني" name="email"
                                required>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="formrow">
                            <input type="text" class="form-control" placeholder="رقم الهاتف" name="phone" required>
                        </div>
                    </div>
                </div>
                <div class="formbtn">
                    <input type="submit" class="btn" value="تأكيد حجز السيارة">
                </div>
            </form>
        </div>
    </div>

    <!-- Cars Section -->
    <div class="parallax-section" id="cars">
        <div class="container">
            <div class="section-title">
                <h3>انواع السيارات <span>للتأجير</span></h3>
                <p>أطلق العنان للراحة والاختيار معنا . من الدرجة الاقتصادية إلى الرفاهية، نضمن لك رحلة سلسة مصممة خصيصًا
                    لتلبية احتياجاتك.</p>
            </div>
            <div class="vehiclesList">
                <ul class="carsmodals">
                    @foreach ($cars as $car)
                        <li class="item">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3>{{ $car->name }}S</h3>
                                    <div class="subtitle">{{ $car->mark }}</div>
                                    <div class="carPrice"> <strong>${{ $car->price }}</strong> <span>/يوم</span> </div>
                                    {{-- <form action="{{ route('car-rental.store') }}" method="POST">
                                        @csrf
                                        <button type="submit"><i class="fa fa-calendar" aria-hidden="true"></i>
                                            Reserve Now</button>
                                    </form> --}}
                                </div>
                                @if ($car->image && file_exists(public_path($car->image)))
                                    <div class="col-md-6">
                                        <a href="{{ asset($car->image) }}" class="image-popup">
                                            <img src="{{ asset($car->image) }}" alt="" />
                                        </a>
                                    </div>
                                @else
                                    <div class="col-md-6">
                                        <img src="{{ asset('assets/images/cars/default-car.jpg') }}" alt="default" />
                                    </div>
                                @endif
                                <div class="col-md-3">
                                    <div class="carinfo">
                                        <ul>
                                            <li>الابواب: <strong>{{ $car->doors }}</strong></li>
                                            <li>عدد المسافرين: <strong>{{ $car->passengers }}</strong></li>
                                            <li>حزم الامتعة: <strong>{{ $car->luggage }} Bags</strong></li>
                                            <li>نوع السيارة: <strong>{{ $car->transmission }}</strong></li>
                                            <li>التكيف: <strong>{{ $car->air_conditioning }}</strong></li>
                                            <li>عمر السيارة: <strong>{{ $car->minimum_age }}</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    {{-- <script>
        $(document).ready(function() {
            $('#pickup').change(function() {
                var pickupId = $(this).val();
                var pickupLat = $(this).find(':selected').data('lat');
                var pickupLng = $(this).find(':selected').data('lng');

                getNearestPlaces(pickupLat, pickupLng, pickupId);
            });
        });

        function getNearestPlaces(latitude, longitude, pickupId) {

            $.ajax({
                url: '/get-nearest-places',
                type: 'GET',
                data: {
                    latitude: latitude,
                    longitude: longitude,
                    exclude_place_id: pickupId
                },
                success: function(response) {
                    console.log(response);
                    // Populate the drop-off select box with the received places
                    $('#drop').empty().append('<option value="">Select Drop-Off</option>');
                    $.each(response.places, function(index, place) {
                        $('#drop').append('<option value="' + place.id + '">' + place.name +
                            '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    </script> --}}

    <script>
        $(document).ready(function() {
            $('#pickup').change(function() {
                var pickupId = $(this).val();
                var pickupLat = $(this).find(':selected').data('lat');
                var pickupLng = $(this).find(':selected').data('lng');

                getNearestPlaces(pickupLat, pickupLng, pickupId);
            });
        });

        function getNearestPlaces(latitude, longitude, pickupId) {

            $.ajax({
                url: '/get-nearest-agencys',
                type: 'GET',
                data: {
                    latitude: latitude,
                    longitude: longitude,
                    exclude_place_id: pickupId
                },
                success: function(response) {
                    console.log(response);
                    // Populate the drop-off select box with the received places
                    $('#drop').empty().append('<option value="">Select Drop-Off</option>');
                    $.each(response.places, function(index, place) {
                        $('#drop').append('<option value="' + place.id + '">' + place.name +
                            '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#drop').change(function() {
                var dropId = $(this).val();
                var dropLat = $(this).find(':selected').data('lat');
                var dropLng = $(this).find(':selected').data('lng');

                getAvailableCars(dropId);
            });
        });

        function getAvailableCars(dropId) {
            $.ajax({
                url: '/get-available-cars',
                type: 'GET',
                data: {
                    dropId: dropId
                },
                success: function(response) {
                    console.log(response);
                    $('#car_id').empty().append('<option value="">Select Car</option>');
                    $.each(response.cars, function(index, car) {
                        console.log(car.name);
                        $('#car_id').append('<option value="' + car.id + '">' + car.name + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    </script>
@endpush
