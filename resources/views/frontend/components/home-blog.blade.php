<div class="home-blog-area blog-h-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>Our latest blog</span>
                    <h2>Our recent news</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="{{asset($blog->image)}}" alt="">
                        </div>
                        <div class="blog-cap">
                            <h3><a href="{{url("/blog-details-page",["blog"=>$blog->id])}}">{{$blog->title}}</a></h3>
                            <a href="{{url("/blog-details-page",["blog"=>$blog->id])}}" class="more-btn">Read more »</a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>