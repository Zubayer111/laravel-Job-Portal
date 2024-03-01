@extends("backend.layouts.default")

@section('title', 'Dashboard')
@section('description', 'Dashboard')

@section('content')

    {{-- Content --}}

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Catagory</h4>
                <p class="card-description">
                    Add Catagory
                </p>
                
                <form class="forms-sample" action="{{route("addJobCatagory")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Catagory Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Catagory Name">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>



    {{-- /Content --}}

@endsection
