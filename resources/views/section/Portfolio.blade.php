<section id="portfolio" class="pt-100 bg-grey">
    <div class="container">
        <div class="row justify-content-center text-center mb-60 wow animated slideInDown">
            <div class="col-lg-12">
                <h2 class="text-black fw-3">Nos <strong class="fw-7">références</strong></h2>
            </div>
            <div class="col-lg-6">
                <p><strong class="fw-7">Ils nous ont fait confiance</strong> </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        {{-- <div class="row wow animated slideInUp">
            <div class="col-lg-12">
                {{-- <ul class="portfolio-filter list-unstyled text-center text-black portfolio-filter">
                    <li class="d-inline-block active" data-filter=".all">All</li>
                    <li class="d-inline-block" data-filter=".design">Design</li>
                    <li class="d-inline-block" data-filter=".web">Web</li>
                    <li class="d-inline-block" data-filter=".branding">Branding</li>
                    <li class="d-inline-block" data-filter=".print">Print</li>
                </ul> --}}
            {{-- </div> --}}
        {{-- </div> --}}
        
        <ul class="row list-unstyled mb-0 portfolio-row">
            @foreach ($Myportefeuilles as $portefeuilles)
            <li class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-30 portfolio-col all branding wow animated slideInLeft">
                <div class="portfolio-item" onClick="return true">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-img">
                            <img class="img-fluid d-block ml-auto mr-auto w-100" src="{{asset('/storage/'. $portefeuilles->image)}}" alt="Portfolio">
                        </div>
                        <div class="portfolio-item-content text-white d-flex justify-content-center align-items-center text-center">
                            <div>
                                <h6 class="text-uppercase mb-2 fw-6">{{$portefeuilles->title}}</h6>
                                <p class="mb-0">{{$portefeuilles->subtitle}}</p>
                                <a class="portfolio-item-view popup-image" href="{{asset('/storage/'. $portefeuilles->image)}}"><span class="ti-search"></span></a>
                                <a class="portfolio-item-link" href="#"><span class="ti-link"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <div class="row text-center wow animated slideInUp">
            <div class="col-lg-12">
                <a href="#" class="btn btn-green mt-60">Plus</a>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-100">
        <div class="row">
            <div class="col-lg-12">
                <h6 class="text-black text-center fw-6 mb-5">Some awesome companies we've had the pleasure to work with</h6>
            </div>
        </div>
        <div class="row">
            <div id="partner-slider-2" class="owl-carousel owl-theme partner-slider">
                @foreach ($Myportefeuilles as $portefeuilles)
                <a class="d-flex justify-content-center align-items-center item wow animated slideInLeft" href="javascript:void(0);">
                    <img class="img-fluid d-block ml-auto mr-auto" src="{{asset('/storage/'. $portefeuilles->image)}}" alt="Partner Logo">
                </a>
                @endforeach
                
                
                
              
                
                
               
            
            </div>
        </div>
    </div>
</section>