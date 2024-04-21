@extends('site.layouts.app')


@section('content')
    <div class="container">
        <section class="panel panel-default">
            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left">بيانات السيارات</h3>
                <div class="pull-right">
                    <a href="{{ route('agency.index') }}">
                        <button type="button" class="btn btn-primary"> عرض السيارات</button>
                    </a>
                </div>
            </div>
            <div class="panel-body">

                <form action="{{ route('agency.cars.add') }}" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">نوع السيارة</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="mark" class="col-sm-3 control-label">العلامة التجارية</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mark" id="mark" placeholder="" required>
                            @error('mark')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="price" class="col-sm-3 control-label">السعر</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="price" id="price" placeholder="" required>
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="doors" class="col-sm-3 control-label">عدد الابواب</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="doors" id="doors" placeholder="" required>
                            @error('doors')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="passengers" class="col-sm-3 control-label">عدد الركاب</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="passengers" id="passengers" placeholder="" required>
                            @error('passengers')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="luggage" class="col-sm-3 control-label">عدد حزم الامتعة</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="luggage" id="luggage" placeholder="" required>
                            @error('luggage')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="minimum_age" class="col-sm-3 control-label">سنة التصنيع</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="minimum_age" id="minimum_age" placeholder="" required>
                            @error('minimum_age')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="transmission" class="col-sm-3 control-label">النوع</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="transmission" id="inlineRadio1" value="manual" required> Manual
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="transmission" id="inlineRadio2" value="automatic" required>
                                Automatic
                            </label>
                            @error('transmission')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="air_conditioning" class="col-sm-3 control-label">حالة التكاليف</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="air_conditioning" id="inlineRadio1" value="yes" required> يوجد
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="air_conditioning" id="inlineRadio2" value="no" required> لا يوجد
                            </label>
                            @error('air_conditioning')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- form-group // -->

                    <div class="form-group">
                        <label for="image" class="col-sm-3 control-label">الصورة</label>
                        <div class="col-sm-3">
                            <input type="file" name="image" required>
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
