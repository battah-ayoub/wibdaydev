@extends('master')
@section('content')
   <!-- Start Home
    ================================================== -->
    <section id="home" class="d-flex align-items-center section text-white half-home" data-parallax data-speed="0" data-src="{{asset('/images/blog-background.jpg')}}">
        <div class="overlay-black"></div>
        <div class="container">
            <div class="row text-center mt-80">
                <div class="col-lg-12">
                    <h3 class="mb-3 fw-6 text-white">Blog</h3>
      
     
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
                <div class="col-lg-8 pr-lg-5 mb-5 mb-lg-0">
                    <div class="row justify-content-center">
                        @foreach ($Myposts as $post)
                        <div class="col-lg-6 mb-30">
                            <div class="blog">
                                <div class="blog-img">
                                    <a class="d-block" href="{{url('/post/'.$post->slug )}}">
                                        <img class="img-fluid mx-auto d-block" src="{{asset('/storage/'.$post->image)}}" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-content-top">
                                        <span class="text-blue">{{$post->created_at->diffForHumans()}}</span> / <span class="badge badge-primary"><a class="text-white " href="#" >{{$post->category->name}}</a></span>
                                    </div>
                                    <h5><a href="{{url('/post/'.$post->slug )}}">{{Str::limit($post ->title, 40) }}</a></h5>
                                    <p>{{Str::limit($post->excerpt, 200, '...') }}</p>
                                    <div class="blog-content-bottom clearfix">
                                        <div class="float-left">
                                            <a class="blog-read-more" href="{{url('/post/'.$post->slug )}}">Voir Plus<span class="fas fa-chevron-right"></span></a>
                                        </div>
                                        <div class="float-right">
                                            <ul class="list-unstyled mb-0 blog-social-share">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-bottom-border bg-green"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row mt-50">
                        <div class="col-lg-12">
                            <div class="pagination">
                                {{$Myposts->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-40">
                        <form class="widget-search">
                            <div class="input-group position-relative">
                                <input class="form-control" type="text">
                                <label class="text-black text-left">Rechercher ici...</label>
                                <span class="focus-border bg-blue"></span>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-blue"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-40">
                        <h6 class="text-black text-uppercase fw-7">Recent Posts</h6>
                        <hr>
                        <ul class="blog-widget list-unstyled mb-0">
                            @foreach ($Myposts as $post)
                            <li><a href="{{url('/post/'.$post->slug )}}">{{$post->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mb-40">
                        <h6 class="text-black text-uppercase fw-7">Categories</h6>
                        <hr>
                        <ul class="blog-widget list-unstyled mb-0">
                            @foreach ($myCategories as $categories)
                            <li><a href="{{ url('/blog/'.$categories->id) }}">{{$categories->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Latest News
    ================================================== -->
@endsection