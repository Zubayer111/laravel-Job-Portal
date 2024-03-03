@extends("backend.layouts.default")

@section('title', 'Dashboard')
@section('description', 'Dashboard')

@section('content')

    {{-- Content --}}

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
              <div class="container">
                <h2 class="m-4">Job Update Form</h2>
                <form action="{{route("updateJob",["job"=>$data->id])}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}" required>
                  </div>
                  <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required>{{$data->requirements}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="requirements">Requirements:</label>
                    <textarea class="form-control" id="requirements" name="requirements" rows="3" required>{{$data->requirements}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="text" class="form-control" id="salary" value="{{$data->salary}}" name="salary" required>
                  </div>
                  <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" id="location" value="{{$data->location}}" name="location" required>
                  </div>
                  <div class="form-group">
                    <label for="deadline">Deadline:</label>
                    <input type="date" class="form-control" id="deadline" value="{{$data->deadline}}" name="deadline" required>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="employmentstatus">Employment Status:</label>
                          <select class="form-control" id="employmentstatus" name="employmentstatus" required>
                            <option value="{{$data->employmentstatus}}" selected>{{$data->employmentstatus}}</option>
                            <option value="full_time">Full-time</option>
                            <option value="part_time">Part-time</option>
                            <option value="junior">Junior</option>
                            <option value="senior">Senior</option>
                            <option value="internship">Internship</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="experience">Experience:</label>
                    <input type="number" class="form-control" id="experience" value="{{$data->experience}}" name="experience" required>
                  </div>
                  <div class="form-group">
                    <label for="vacancy">Vacancy:</label>
                    <input type="number" class="form-control" id="vacancy" value="{{$data->vacancy}}" name="vacancy" required>
                  </div>
                  <div class="form-group">
                    <label for="skills">Skills:</label>
                    <input type="text" class="form-control" id="skills" value="{{$data->skills}}" name="skills" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
        </div>
    </div>



    {{-- /Content --}}

@endsection
