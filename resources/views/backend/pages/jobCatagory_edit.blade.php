@extends("backend.layouts.default")

@section('title', 'Dashboard')
@section('description', 'Dashboard')

@section('content')

    {{-- Content --}}

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Catagory</h4>
                <form class="forms-sample" action="{{route("updateJobCatagory",["jobCatagory"=>$jobCatagory->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        
                        <input type="text" class="form-control" value="{{$jobCatagory->company_id}}" id="exampleInputName1" name="company_id" hidden>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Catagory Name</label>
                        <input type="text" class="form-control" value="{{$jobCatagory->name}}" id="exampleInputName1" name="name" placeholder="Catagory Name">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="description">{{$jobCatagory->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>



    {{-- /Content --}}

@endsection
