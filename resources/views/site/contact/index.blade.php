@extends('site.layouts.app')

@section('content')
    <!-- Contact Section -->
    <div id="contact">
        <div class="container">

            <!-- Dection Title -->
            <div class="section-title">
                <h3>Contact <span>Us</span></h3>
                <p>Questions? Need help? We're here for you. Contact us by phone or email for prompt assistance throughout
                    your rental journey.</p>
            </div>

            <!-- CONTACT FORM HERE -->
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact-form" class="row" action="{{ route('contact.sendEmail') }}" method="POST">
                            @csrf
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button id="submit" type="submit" class="form-control">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-now">
                        <div class="contact"> <span><i class="fa fa-home"></i></span>
                            <div class="information"> <strong>Address:</strong>
                                <p>{{ $setting->address }}</p>
                            </div>
                        </div>
                        <!-- Contact Info -->
                        <div class="contact"> <span><i class="fa fa-envelope"></i></span>
                            <div class="information"> <strong>Email Address:</strong>
                                <p>{{ $setting->email }}</p>
                                {{-- <p>investigate@your-site.com</p> --}}
                            </div>
                        </div>
                        <!-- Contact Info -->
                        <div class="contact"> <span><i class="fa fa-phone"></i></span>
                            <div class="information"> <strong>Phone No:</strong>
                                <p>{{ $setting->phone_1 }}</p>
                                <p>{{ $setting->phone_2 }}</p>
                            </div>
                        </div>
                        <!-- Contact Info -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
