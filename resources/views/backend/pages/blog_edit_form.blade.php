@extends("backend.layouts.default")

@section('title', 'Dashboard')
@section('description', 'Dashboard')

@section('content')

    {{-- Content --}}

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Blog post form</h4>
                
                <form method="POST" action="{{route("updateBlog",["blog"=>$data->id])}}" enctype="multipart/form-data">
                    @csrf 
                
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}"  required>
                    </div>
                
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <input type="text" class="form-control" id="short_description" name="short_description" value="{{$data->short_description}}" required>
                    </div>
                
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter job description" rows="4" required>{{$data->description}}</textarea>
                    </div>
                
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file" accept="image/*"/>
                            <img src="{{asset($data->image)}}" alt="" height="50" width="50">
                        </div>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
                
            </div>
        </div>
    </div>



    {{-- /Content --}}

@endsection
