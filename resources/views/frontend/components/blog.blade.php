<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach ($blogs as $blog)
                    <article class="blog_item mb-4">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{asset($blog->image)}}" alt="">
                            
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{url("/blog-details-page",["blog"=>$blog->id])}}">
                                <h2>{{$blog->title}}</h2>
                            </a>
                            <p>{{$blog->short_description}}</p>
                            
                        </div>
                    </article>
                    @endforeach
                    <div class="pagination justify-content-center">
                        {{ $blogs->links() }}
                    </div>
                    
                </div>
            </div>
            
            
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    @include("frontend.components.blog_search")

                    @include("frontend.components.blog_catagory")

                    
                    @include("frontend.components.tag")



                    @include("frontend.components.newsletter")
                </div>
            </div>
        </div>
    </div>
</section>