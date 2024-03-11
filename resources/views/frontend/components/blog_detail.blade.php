<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">

                        <img class="img-fluid" src="{{asset($blog->imag)}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>{{$blog->title}}
                        </h2>
                        
                        <p class="excert">
                           {{$blog->short_description}}
                        </p>
                        
                        <div class="quote-wrapper">
                            <div class="quotes">
                                {{$blog->description}}
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                {{-- @include("frontend.components.coments")
                @include("frontend.components.coment_from") --}}
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    @include("frontend.components.blog_search")
                    @include("frontend.components.blog_catagory")
                    @include("frontend.components.blog_recent_post")
                    @include("frontend.components.tag")

                </div>
            </div>
        </div>
    </div>
</section>
