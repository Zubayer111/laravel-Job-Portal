@extends("backend.layouts.default")

@section('title', 'Dashboard')
@section('description', 'Dashboard')

@section('content')

    {{-- Content --}}

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Blog post form</h4>
                
                <form method="POST" action="{{route("createBlog")}}" enctype="multipart/form-data">
                    @csrf 
                
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter job title" required>
                    </div>
                
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <input type="text" class="form-control" id="short_description" name="short_description" placeholder="Enter short description" required>
                    </div>
                
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter job description" rows="4" required></textarea>
                    </div>
                
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image" placeholder="Choose image file" required>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
                
            </div>
        </div>
    </div>



    {{-- /Content --}}

@endsection
