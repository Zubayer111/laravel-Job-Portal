@extends("backend.layouts.default")

@section('title', 'Dashboard')
@section('description', 'Dashboard')

@section('content')

    {{-- Content --}}

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
              <div class="container">
                <h2 class="m-4">Job Posting Form</h2>
                <form action="{{route("createJob")}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                  </div>
                  <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="requirements">Requirements:</label>
                    <textarea class="form-control" id="requirements" name="requirements" rows="3" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="text" class="form-control" id="salary" name="salary" required>
                  </div>
                  <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                  </div>
                  <div class="form-group">
                    <label for="deadline">Deadline:</label>
                    <input type="date" class="form-control" id="deadline" name="deadline" required>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="employmentstatus">Employment Status:</label>
                          <select class="form-control" id="employmentstatus" name="employmentstatus" required>
                            <option selected>Select Employment Status</option>
                            <option value="full_time">Full-time</option>
                            <option value="part_time">Part-time</option>
                            <option value="junior">Junior</option>
                            <option value="senior">Senior</option>
                            <option value="internship">Internship</option>
                          </select>
                      </div>
                      <div class="col-md-6">
                        <label for="employmentstatus">Job Catagory:</label>
                          <select class="form-control" id="employmentstatus" name="job_category_id" required>
                            <option selected>Select Job Catagory</option>
                            @foreach ($datas as $data)
                              <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="experience">Experience:</label>
                    <input type="number" class="form-control" id="experience" name="experience" required>
                  </div>
                  <div class="form-group">
                    <label for="vacancy">Vacancy:</label>
                    <input type="number" class="form-control" id="vacancy" name="vacancy" required>
                  </div>
                  <div class="form-group">
                    <label for="skills">Skills:</label>
                    <input type="text" class="form-control" id="skills" name="skills" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
        </div>
    </div>



    {{-- /Content --}}

@endsection
