@extends('layouts.app')

@section('title', ' - Loyalty Program')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/service/loyalty.css') }}">    
@endpush

@section('content')
    
    {{-- Banner Loyalty Program --}}
    <div class="container pt-5 banner-loyalty" 
        style="background-image: url('{{ asset('images/service/loyalty-program/loyalty.png') }}');">
        
        <div class="text-center mb-5">
            <h1 class="fw-bold banner-loyalty-title">
                Loyalty <span class="text-info">Program</span>
            </h1>
    
            <h3 class="fw-bold mb-5 banner-loyalty-subtitle">
                Personalized your Loyalty Program as a
                <span class="text-break">
                    Part of Sustainability Business Process
                    <span class="text-info" style="display: block">Easy Redemption, Easy to Use</span>
                </span>
            </h3>
        </div>
        <div class="container text-center pb-5">
            <img src="{{ asset('images/product/mouse_icon.png') }}" alt="">
        </div>
    </div>  
    {{-- End of Banner Loyalty Program --}}
    
    {{-- Banner Digital Program Feature --}}
    <div class="container-fluid">
        <div class="row ps-5 pe-5 bg-light pt-5 pb-5 shadow-sm">
            <div class="col-lg-7 col-md-12 col-sm-12 mb-5">
                <div class="row mb-3">
                    <h1 class="fw-bold banner-digital-title">
                        <span class="text-info">Digital Program</span>
                        <span style="display: block">Features</span>
                    </h1>
                </div>
                <div class="row">
                    <div class="mb-3 border-3 border-dark border-bottom feature-item" onclick="showQuote('Personalize Rewards', '&rdquo;Offer your best rewards to customers that you need in various product, services, promotion, experience such as concert, wellness, travelling and etc.&rdquo;')">
                        Personalize Rewards
                    </div>
                    <div class="mb-3 border-3 border-dark border-bottom feature-item" onclick="showQuote('Loyalty Systems That Suite For You', '&rdquo;Not only rewards, loyalty systems can be personalized based that are suitable for your industries. You can use the tier and points as part of loyalty.&rdquo;')">
                        Loyalty Systems That Suite For You
                    </div>
                    <div class="mb-3 border-3 border-dark border-bottom feature-item" onclick="showQuote('Data Communications System', '&rdquo;Aldmic COOPN ensure that data communication systems can be seamless with all digital platforms through email and push notifications on demand&rdquo;')">
                        Data Communications System
                    </div>
                    <div class="mb-3 border-3 border-dark border-bottom feature-item" onclick="showQuote('The Best Customer Service', '&rdquo;As Merchant Aggregator Solution, Aldmic COOPN ensures the best customer service 7 x 24 Hours with high Service Level Agreement.&rdquo;')">
                        The Best Customer Service
                    </div>
                </div>
            </div>
    
            <div class="col-lg-5 col-md-8 col-sm-12 text-center mb-5 center-container d-none d-lg-block">
                <img class="pt-5 mb-3" src="{{ asset('images/service/loyalty-program/loyalty_banner.png') }}" alt="" style="width: auto; max-width: 100%;">
                <h4 class="fw-bold quote pt-3" style="white-space: pre-line;"></h4>
            </div>
        </div>
    </div>
    {{-- End Banner Digital Program Feature --}}

    {{-- Banner Loyalty Program Benefits --}}
    <div class="container">
        <div class="row">
            <h1 class=" mt-5 mb-3 text-left fw-bold text-center banner-benefits-title">
                Aldmic COOPN Loyalty Program Benefits
            </h1>
            

            <div class="d-none d-md-block">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 text-center mb-5">
                        <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_1.png') }}" alt="">
                        <div class="box-benefit-text">
                            <p>
                                <span class="fw-bold">Customer Retention To Increase Sales KPI’s</span>
                                 Loyalty makes the
                                customer retention to repeat
                                order as part of being a loyalty
                                brand. On the otherside, retention
                                helps to increase KPI of sales as
                                part of sustainability business.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-5">
                        <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_2.png') }}" alt="">
                        <div class="box-benefit-text">
                            <p>
                                <span class="fw-bold">Multi Channel Engagement:</span>
                                 As a
                                part of Merchant Aggregator
                                services, loyalty programs can be
                                used in multi various channels
                                including in-store, online, mobile
                                apps, and social media, to ensure a
                                seamless customer experience.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-5">
                        <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_3.png') }}" alt="">
                        <div class="box-benefit-text">
                            <p>
                                <span class="fw-bold">Data Collection:</span>
                                 Enable your
                                business to collect customer
                                historical data to create sales
                                target KPI and improve the
                                Loyalty Program benefits as part
                                of Consumer Insights.
                            </p>
                        </div>
                    </div>
                </div>
        
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 text-center mb-5">
                        <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_4.png') }}" alt="">
                        <div style="margin-left: 3rem; margin-right:3rem;">
                            <p>
                                <span class="fw-bold">Brand Loyalty:</span>
                                 Aldmic COOPN
                                ensure that customer effective
                                programs can foster a deeper
                                emotional between customer and
                                brand to long term relationship.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-5">
                        <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_5.png') }}" alt="">
                        <div style="margin-left: 3rem; margin-right:3rem;">
                            <p>
                                <span class="fw-bold">Data Collection:</span>
                                 Enable your
                                business to collect customer
                                historical data to create sales
                                target KPI and improve the
                                Loyalty Program benefits as part
                                of Consumer Insights.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-5">
                        <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_6.png') }}" alt="">
                        <div style="margin-left: 3rem; margin-right:3rem;">
                            <p>
                                <span class="fw-bold">Cost Efficiency:</span>
                                 Loyalty Program
                                not only make the customer
                                retention but make the cost
                                effectiveness strategy and
                                maintain the number of growth
                                marketing and ROIs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-md-none">
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="benefits-text">
                                <span class="fw-bold">Customer Retention To Increase Sales KPI’s</span>
                                Loyalty makes the
                                customer retention to repeat
                                order as part of being a loyalty
                                brand. On the otherside, retention
                                helps to increase KPI of sales as
                                part of sustainability business.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="benefits-text">
                                <span class="fw-bold">Multi Channel Engagement:</span>
                                As a
                                part of Merchant Aggregator
                                services, loyalty programs can be
                                used in multi various channels
                                including in-store, online, mobile
                                apps, and social media, to ensure a
                                seamless customer experience.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="benefits-text">
                                <span class="fw-bold">Data Collection:</span>
                                Enable your
                                business to collect customer
                                historical data to create sales
                                target KPI and improve the
                                Loyalty Program benefits as part
                                of Consumer Insights.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="benefits-text">
                                <span class="fw-bold">Brand Loyalty:</span>
                                Aldmic COOPN
                                ensure that customer effective
                                programs can foster a deeper
                                emotional between customer and
                                brand to long term relationship.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_5.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="benefits-text">
                                <span class="fw-bold">Data Collection:</span>
                                Enable your
                                business to collect customer
                                historical data to create sales
                                target KPI and improve the
                                Loyalty Program benefits as part
                                of Consumer Insights.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="text-center">
                            <img class="mb-3 img-fluid" src="{{ asset('images/service/loyalty-program/loyalty_program_benefits_6.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-break gift-text">
                            <p class="benefits-text">
                                <span class="fw-bold">Cost Efficiency:</span>
                                Loyalty Program
                                not only make the customer
                                retention but make the cost
                                effectiveness strategy and
                                maintain the number of growth
                                marketing and ROI's.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    {{-- End of Banner Loyalty Program Benefits --}}

    {{-- Banner Projects --}}
    <div class="container pt-5 pb-5">
        <div class="row text-center mb-5">
            <h1 class="fw-bold banner-projects-title">
                Check our <span class="text-info">Project</span>
            </h1>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 mb-3 text-center d-md-none">
                <img src="{{ asset('images/service/loyalty-program/loyalty_project_1.png') }}" alt="" class=" img-fluid">
            </div>
            <div class="col-md-6">
                <h5>
                    BRAND CAMPAIGN
                </h5>
                <h1 class="text-info fw-bold">
                    ACTIVATION.
                </h1>
                <span style="text-align: justify">
                    DSS's very own 108th anniversary to create magnificent online
                    offline collaboration events with Asli Indonesia experiences journey
                    from virtual exhibition full of music performance, local business,
                    content creators to offlines culinary delicacy, creative communities
                    and many more.
                </span>
            </div>
            <div class="col-md-6 text-center d-none d-md-block">
                <img src="{{ asset('images/service/loyalty-program/loyalty_project_1.png') }}" alt="" class=" img-fluid">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 mb-3 text-center mb-6">
                <img src="{{ asset('images/service/loyalty-program/loyalty_project_2.png') }}" alt="" class=" img-fluid">
            </div>
            <div class="col-md-6">
                <h5>
                    BRAND CAMPAIGN
                </h5>
                <h1 class="text-info fw-bold">
                    ACTIVATION.
                </h1>
                <span style="text-align: justify">
                    Banda Aceh Medan Pekanbaru Padang Batam Bengkulu Jambi
                    Palembang Bandar Lampung Pangkalpinang Serang Jakarta
                    Bandung Semarang Yogyakarta Surabaya
                </span>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-6 mb-3 text-center d-md-none">
                <img src="{{ asset('images/service/loyalty-program/loyalty_project_3.png') }}" alt="" class=" img-fluid">
            </div>
            <div class="col-md-6">
                <h5>
                    BRAND CAMPAIGN
                </h5>
                <h1 class="text-info fw-bold">
                    ACTIVATION.
                </h1>
                <span style="text-align: justify">
                    <ul>
                        <li>IQOS Home Service</li>
                        <li>Iqos Space</li>
                        <li>Iqos Society Jabodetabek, Semarang, Makassar, Surabaya & Bali Concept, Journey & Man Power</li>
                    </ul>
                </span>
            </div>
            <div class="col-md-6 text-center d-none d-md-block">
                <img src="{{ asset('images/service/loyalty-program/loyalty_project_3.png') }}" alt="" class=" img-fluid">
            </div>
        </div>

        <div class="row mt-5 text-center">
            <a href="{{ route('service.index') }}" class="show-more-link">
                <h3 class="text-secondary fw-bold">
                    Show More
                </h3>
            </a>
        </div>
    </div>
    {{-- End of Banner Projects --}}
@endsection

@push('script')
<script>
function showQuote(feature, quoteContent) {
    // Hide all quotes
    document.querySelectorAll('.quote').forEach(function (quote) {
      quote.classList.remove('fade-up'); // Remove fade-up class
      quote.style.display = 'none';
    });

    // Show the quote corresponding to the clicked feature with fade-up animation
    var quote = document.querySelector('.quote');
    if (quote) {
      quote.textContent = quoteContent;
      quote.style.display = 'block';
      setTimeout(function() {
        quote.classList.add('fade-up'); // Add fade-up class after a short delay
      }, 10);
    }

  }
</script>
@endpush