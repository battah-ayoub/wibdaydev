@extends('master')
@section('content')
        <!-- Start Home
    ================================================== -->
    <section id="home" class="d-flex align-items-center section text-white half-home" data-parallax data-speed="0" data-src="{{asset('storage/'.$post->image)}}">
        <div class="overlay-black"></div>
        <div class="container">
            <div class="row text-center mt-80">
                <div class="col-lg-12">
                    <h3 class="mb-3 fw-6 text-white">{{$post->title}}</h3>
                    <nav class="d-inline-block fw-5" aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Accuiel</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item"><a href="#"></a>{{$post->category->name}}</li>
                            <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home
    ================================================== -->

    <!-- Start Our Latest News
    ================================================== -->
    <section class="section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pr-lg-5 mb-5 mb-lg-0">
                    <div class="post-box">
                        <div class="main-post mb-100">
                            {{-- <div class="post-img" >
                                <img class="img-thumbnail blog-image " src="{{asset('storage/'.$post->image)}}" alt="Blog Image">
                            </div> --}}
                            <div class="post-content mt-50">
                                <div class="post-meta">
                                    <h4 class="text-black fw-4 mb-3">{{$post->title}}</h4>
                                    <ul class="blog-meta list-unstyled mt-10">
                                        {{-- <li><a href="#0"><i class="fa fa-user mr-1" aria-hidden="true"></i>{{$post->author_id->name}}</a></li> --}}
                                        <li><a href="#0"><i class="fa fa-folder-open mr-1" aria-hidden="true"></i>{{$post->category->name}}</a></li>
                                        <li><a href="#0"><i class="fa fa-calendar mr-1" aria-hidden="true"></i>{{$post->created_at->diffForHumans()}}</a></li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <blockquote class="bg-grey text-black pt-20 pb-20 pl-30 pr-30 mt-30 mb-30">
                                        {{$post->excerpt}}
                                        
                                    </blockquote>
                                    <p>
                                        {!! $post->body !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                
                  
                    </div>
                </div>
              {{-- Start section sidebar --}}
              {{-- End section sidebar --}}
            </div>
        </div>
    </section>
    <!-- End Our Latest News
    ================================================== -->
@endsection