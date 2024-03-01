@extends("backend.layouts.default")

@section('title', 'Dashboard')
@section('description', 'Dashboard')

@section('content')

    {{-- Content --}}

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="container mt-5">
                    <h2>Job Posting Form</h2>
                    <form action="{{route("createJob")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <input type="text" class="form-control"  id="company_id" name="company_id" required>
                      </div>
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="requirements">Requirements</label>
                        <textarea class="form-control" id="requirements" name="requirements" rows="4" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="salary">Salary</label>
                        <input type="number" class="form-control" id="salary" name="salary" required>
                      </div>
                      <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                      </div>
                      <div class="form-group">
                        <label for="deadline">Deadline</label>
                        <input type="date" class="form-control" id="deadline" name="deadline" required>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
            </div>
        </div>
    </div>



    {{-- /Content --}}

@endsection
