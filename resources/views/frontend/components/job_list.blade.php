<section class="featured-job-area">
    <div class="container">
        <!-- Count of Job list Start -->
        <div class="row m-5">
            <div class="col-lg-12">
                <div class="count-job m-35">
                    <span>39, 782 Jobs found</span>
                    <!-- Select job items start -->
                    <div class="select-job-items">
                        <span>Sort by</span>
                        <select name="select">
                            <option value="">None</option>
                            <option value="">job list</option>
                            <option value="">job list</option>
                            <option value="">job list</option>
                        </select>
                    </div>
                    <!--  Select job items End-->
                </div>
            </div>
        </div>
        <!-- Count of Job list End -->
        <!-- single-job-content -->
        @foreach ($jobs as $job)
            
        <div class="single-job-items mb-30">
            <div class="job-items">
                <div class="company-img">
                    <a href="#"><img src="{{$job->company->logo}}" alt=""></a>
                </div>
                <div class="job-tittle job-tittle2">
                    <a href="{{url("/Job-detail-Page",["job"=>$job->id])}}">
                        <h4>{{$job->title}}</h4>
                    </a>
                    <ul>
                        <li>{{$job->company->name}}</li>
                        <li><i class="fas fa-map-marker-alt"></i>{{$job->location}}</li>
                        <li>{{$job->salary}}</li>
                    </ul>
                </div>
            </div>
            <div class="items-link items-link2 f-right mt-3">
                <a href="{{url("/Job-detail-Page",["job"=>$job->id])}}">View Detail</a>
                <span>7 hours ago</span>
            </div>
        </div>
        
        @endforeach
    </div>
</section>
