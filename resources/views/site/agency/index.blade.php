@extends('site.layouts.app')


@section('content')
    <style>
        .product-list {
            padding: 0;
        }

        .product-list:not(.grid-products) {

            display: inline-block;
            margin: 0;
        }

        .product-list li {
            display: block;
            list-style: none;
        }

        .product-list li .product.product-style-3 {
            display: inline-block;
            padding: 0 10px;
            margin-top: 35px;
            margin-bottom: 5px;
        }

        .product-list:not(.grid-products) .wrap-product-list-item {
            display: block;
            float: left;
            width: 100%;
            padding: 30px 0 29px 10px;
        }

        .product-list:not(.grid-products) .wrap-product-list-item:first-child {
            padding-top: 35px;
        }

        .product-list:not(.grid-products) .wrap-product-list-item:not(:last-child) {
            border-bottom: 1px solid #e6e6e6;
        }

        .product-list:not(.grid-products) .wrap-product-list-item:last-child {
            padding-bottom: 15px;
        }

        .product-list-style {
            display: table;
        }

        .product-list-style .advance-info,
        .product-list-style .product-info,
        .product-list-style .product-thumnail {
            display: table-cell;
            vertical-align: top;
        }

        .product-list-style .product-info {
            padding: 39px 30px 5px 21px;
        }

        .product-list-style .product-name span {
            font-size: 14px;
            line-height: 18px;
            color: #222222;
            font-weight: 600;
        }

        .product-list-style .product-info .desc {
            margin-top: 16px;
        }

        .wrap-product-detail .detail-info .short-desc ul,
        .product-list-style .product-info .desc p,
        .product-list-style .product-info .desc ul {
            padding: 0;
            margin: 0;
        }

        .wrap-product-detail .detail-info .short-desc li,
        .product-list-style .product-info .desc p,
        .product-list-style .product-info .desc li {
            font-size: 14px;
            line-height: 20px;
            color: #666666;
            text-align: left;
            margin: 0;
        }

        .wrap-product-detail .detail-info .short-desc li::before,
        .product-list-style .product-info .desc li::before {
            content: "\f111";
            font-family: FontAwesome;
            font-size: 6px;
            line-height: 20px;
            color: #666666;
            float: left;
            margin-right: 8px;
        }

        .product-list-style .product-attribute {
            margin-top: 15px;
        }

        .product-list-style .product-attribute ul {
            padding: 0;
            margin: 0;
        }

        .product-list-style .product-attribute ul li {
            display: block;
            float: left;
            margin: 0 10px 0 0;
            padding: 0;
        }

        .product-list-style .product-attribute li span {
            display: inline-block;
            min-width: 22px;
            min-height: 22px;
            padding: 5px;
            border-radius: 50%;
        }

        .product-list-style .product-attribute li .attr-red-color {
            background-color: #ff2832;
        }

        .product-list-style .product-attribute li .attr-yellow-color {
            background-color: #ecbf33;
        }

        .product-list-style .product-attribute li .attr-blue-color {
            background-color: #1c9aea;
        }

        .product-list-style .product-attribute li .attr-black-color {
            background-color: #000000;
        }

        .wrap-product-detail .detail-info .short-desc li,
        .product-list-style .product-info .desc li {
            list-style: none;
        }

        .product-list-style .product-thumnail {
            margin: 0;
            padding: 0;
            width: 250px;
            vertical-align: top;
        }

        .product-list-style .advance-info {
            width: 270px;
            padding-left: 22px;
            padding-top: 45px;
            vertical-align: top;
        }

        .product-list-style .advance-info .stock-info p {
            font-size: 13px;
            line-height: 18px;
            color: #444444;
            text-align: left;
            margin: 0;
            padding: 0 0 6px 0;
            border-bottom: 1px solid #e6e6e6;
        }

        .wrap-product-detail .detail-info .stock-info p b,
        .product-list-style .advance-info .stock-info p b {
            color: #555555;
        }

        .product-list-style .advance-info .wrap-price {
            display: inline-block;
            width: 100%;
            text-align: left;
            margin-top: 19px;
            margin-bottom: 17px;
        }

        .product-list-style .advance-info .wrap-price .product-price {
            font-size: 22px;
            line-height: 18px;
            display: inline-block;
            margin: 0;
        }

        .product-list-style .advance-info .wrap-price span.product-price {
            font-weight: 600;
            color: #222222;
        }

        .product-list-style .advance-info .wrap-price ins>p {
            font-weight: 600;
            color: #ff2832;
            text-align: left;
            padding-right: 8px;
        }

        .product-list-style .advance-info .wrap-price del>p {
            font-family: 'Lato', san-serif;
            font-weight: 300;
            color: #aaaaaa;
            position: relative;
        }

        .product-list-style .advance-info .wrap-price del>p::before {
            content: '';
            display: block;
            height: 1px;
            background: #aaaaaa;
            position: absolute;
            top: 9px;
            left: -3px;
            right: -3px;
        }

        .product-list-style .advance-info .add-to-cart {
            display: block;
            font-size: 14px;
            line-height: 34px;
            color: #666666;
            background: #f5f5f5;
            border: 1px solid #e6e6e6;
            border-radius: 0;
            text-align: center;
            width: 100%;
            font-weight: 600;
            padding: 2px;
        }

        .product-list-style .advance-info .add-to-cart:hover {
            color: #ffffff;
        }

        .product-list-style .advance-info .wrap-btn {
            width: 100%;
            margin-top: 5px;
        }

        .product-list-style .advance-info .wrap-btn .btn {
            display: block;
            font-size: 13px;
            line-height: 40px;
            color: #666666;
            float: left;
            text-align: left;
            padding: 0;
            margin: 0;
        }

        .product-list-style .advance-info .wrap-btn .btn::before {
            font-size: 14px;
            line-height: 20px;
            color: #666666;
            font-family: FontAwesome;
            margin-right: 6px;
        }

        .product-list-style .advance-info .wrap-btn .btn-compare::before {
            content: "\f079";
        }

        .product-list-style .advance-info .wrap-btn .btn.btn-wishlist {
            text-align: right;
            float: right;
        }

        .product-list-style .advance-info .wrap-btn .btn-wishlist::before {
            content: "\f004";
        }
    </style>

    <div class="container">
        <section class="panel panel-default">
            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left"> السيارات</h3>
                <div class="pull-right">
                    <a href="{{ route('agency.cars.show') }}">
                        <button type="button" class="btn btn-primary">إضافة سيارة</button>
                    </a>
                </div>
            </div>
            <div class="panel-body">


                <div class="row">

                    <ul class="product-list grid-products equal-container">
                       @if(count($cars) > 0)
                            @foreach ($cars as $car )
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        @if ($car->image && file_exists(public_path($car->image)))
                                            <a href="#" >
                                                <figure><img src="{{ asset($car->image) }}"
                                                        alt="{{ $car->name }}"></figure>
                                            </a>
                                        @else
                                            <a href="#" >
                                                <figure><img src="{{ asset('assets/images/cars/default-car.jpg') }}"
                                                        alt="defaut"></figure>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>{{ $car->name }}</span></a>
                                        <div class="wrap-price"><span class="product-price">${{ $car->price }}</span></div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                       @else
                            <p class="text-center">لا يوجد بيانات</p>
                       @endif
                    </ul>

                </div>

            </div><!-- panel-body // -->
        </section><!-- panel// -->
    </div>
@endsection
