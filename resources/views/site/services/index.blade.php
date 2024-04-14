@extends('site.layouts.app')

@section('content')
    <!-- Service Section -->
    <div id="service" class="parallax-section">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title">
                <h3> خدمات <span>درايف ايز </span></h3>
                <p>نحن نقدم مجموعة واسعة من المركبات التي تناسب احتياجاتك، سواء كنت مسافرًا للعمل أو المتعة. يتضمن أسطولنا كل شيء بدءًا من السيارات الصغيرة المخصصة للقيادة في المدينة وحتى سيارات الدفع الرباعي الفسيحة لقضاء العطلات العائلية</p>
            </div>
            <div class="row">
                <!-- Service 1 -->
                @foreach ($services as $service)
                    <div class="col-md-4 col-sm-6">
                        <div class="service-thumb">
                            <div class="thumb-icon"><i class="{{ $service->icon }}" aria-hidden="true"></i></div>
                            <h4>{{ $service->title }}</h4>
                            <p>{{ \Illuminate\Support\Str::limit($service->description, 50, '...') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
