<section class="section bg-grey">
    <div class="container">
        <div class="row">
            @foreach ($Myposts as $post)
            <div class="col-lg-4 mb-30">
                <div class="blog">
                    <div class="blog-img">
                        <a class="d-block" href="{{url('/post/'.$post->slug )}}">
                            <img class="img-fluid mx-auto d-block" src="{{asset('/storage/'.$post->image)}}" alt="Blog Image">
                        </a>
                    </div>
                    <div class="blog-content">
                      
                        <h5><a href="{{url('/post/'.$post->slug )}}">{{Str::limit($post ->title, 30) }}</a></h5>
                        <p>{{Str::limit($post ->excerpt, 100) }}</p>
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
                    <div class="blog-bottom-border bg-blue"></div>
                </div>
            </div>
            @endforeach
           


        </div>
     




    </div>
</section>