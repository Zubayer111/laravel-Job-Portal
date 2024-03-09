<div class="job-post-company pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Left Content -->
            <div class="col-xl-7 col-lg-8">
                <!-- job single -->
                <div class="single-job-items mb-50">
                    <div class="job-items">
                        <div class="company-img company-img-details">
                            <a href="#"><img src="{{$job->company->logo}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="#">
                                <h4>{{$job->title}}</h4>
                            </a>
                            <ul>
                                <li>{{$job->company->name}}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{$job->location}}</li>
                                <li>{{$job->salary}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- job single End -->

                <div class="job-post-details">
                    <div class="post-details1 mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Description</h4>
                        </div>
                        <p>{{$job->description}}</p>
                    </div>
                    <div class="post-details2  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Skills</h4>
                        </div>
                        <ul>
                            <li>{{$job->skills}}</li>
                        </ul>
                    </div> 
                    <div class="small-section-tittle">
                            <h4>Required</h4>
                        </div>
                        <ul>
                            <li>{{$job->requirements}}</li>
                        </ul>
                    </div>
                    <div class="post-details2  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Experience</h4>
                        </div>
                        <ul>
                            <li>{{$job->experience}}</li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- Right Content -->
            <div class="col-xl-4 col-lg-4">
                <div class="post-details3  mb-50">
                    <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Job Overview</h4>
                    </div>
                    <ul>
                        <li>Posted date : <span>12 Aug 2019</span></li>
                        <li>Location : <span>{{$job->location}}</span></li>
                        <li>Vacancy : <span>{{$job->vacancy}}</span></li>
                        <li>Job nature : <span>{{$job->employmentstatus}}</span></li>
                        <li>Salary :  <span>${{$job->salary}} yearly</span></li>
                        <li>Application date : <span>{{$job->deadline}}</span></li>
                    </ul>
                    <div class="apply-btn2">
                        <a href="{{route("jobApplication",["job"=>$job->id])}}" class="btn">Apply Now</a>
                    </div>
                </div>
                <div class="post-details4  mb-50">
                    <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Company Information</h4>
                    </div>
                    <span>{{$job->company->name}}</span>
                    <p>{{$job->company->description}}</p>
                    <ul>
                        <li>Name: <span>{{$job->company->user->name}}</span></li>
                        <li>Email: <span>{{$job->company->user->email}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
