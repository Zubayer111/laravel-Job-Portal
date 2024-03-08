<div class="row justify-content-center">
    <div class="col-xl-10">
        <!-- single-job-content -->
        @foreach ($jobs as $job)
            
        <div class="single-job-items mb-30">
            <div class="job-items">
                <div class="company-img">
                    <a href="job_details.html"><img src="{{$job->company->logo}}" alt=""></a>
                </div>
                <div class="job-tittle">
                    <a href="{{url("/Job-detail-Page",["job"=>$job->id])}}"><h4>{{$job->title}}</h4></a>
                    <ul>
                        <li>{{$job->company->name}}</li>
                        <li><i class="fas fa-map-marker-alt"></i>{{$job->location}}</li>
                        <li>{{$job->salary}}</li>
                    </ul>
                </div>
            </div>
            <div class="items-link f-right">
                <a href="{{url("/Job-detail-Page",["job"=>$job->id])}}">{{$job->employmentstatus}}</a>
                <span>7 hours ago</span>
            </div>
        </div>
        
        @endforeach
    </div>
</div>