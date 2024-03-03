@extends("backend.layouts.default")

@section('title', 'Dashboard')
@section('description', 'Dashboard')

@section('content')

    {{-- Content --}}

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="col-sm-6 col-md-4 col-lg-3 m-4">
                    <a href="{{url("/edit-jobs",["jobs"=>$data->id])}}" class="btn btn-sm btn-primary" ><i class="mdi mdi-table-edit"></i> </a>
                </div>
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>Title</th>
                        <td>{{$data->title}}</td>
                    </tr>
                    <tr>
                        <th>Description :</th>
                        <td>{!! $data->description !!}</td>
                    </tr>
                    <tr>
                        <th>Requirements :</th>
                        <td>{{$data->requirements}}</td>
                    </tr>
                    <tr>
                        <th>Experience :</th>
                        <td>{{$data->experience}}</td>
                    </tr>
                    <tr>
                        <th>Vacancy :</th>
                        <td>{{$data->vacancy}}</td>
                    </tr>
                    <tr>
                        <th>Skills :</th>
                        <td>{{$data->skills}}</td>
                    </tr>
                    <tr>
                        <th>Employment Status :</th>
                        <td>{{$data->employmentstatus}}</td>
                    </tr>
                    <tr>
                        <th>Salary :</th>
                        <td>{{$data->salary}}</td>
                    </tr>
                    <tr>
                        <th>Location :</th>
                        <td>{{$data->location}}</td>
                    </tr>
                    <tr>
                        <th>Deadline :</th>
                        <td>{{$data->deadline}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    {{-- /Content --}}

@endsection
