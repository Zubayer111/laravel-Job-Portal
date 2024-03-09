<div class="container m-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Job Application Form</div>
          <div class="card-body">
            <form action="{{route("storeJobApplication",["job"=>$job->id])}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="cover_letter">Cover Letter</label>
                <textarea class="form-control" id="cover_letter" name="cover_letter" rows="4" required></textarea>
              </div>
              <div class="form-group">
                <label for="resume">Resume</label>
                <input type="file" class="form-control-file" id="resume" name="resume" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit Application</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>