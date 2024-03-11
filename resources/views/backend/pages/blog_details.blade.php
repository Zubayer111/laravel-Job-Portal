@extends("backend.layouts.default")

@section('title', 'Dashboard')
@section('description', 'Dashboard')

@section('content')

    {{-- Content --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>Blog Title</th>
                        <td>{{$data->title}}</td>
                    </tr>
                   
                    <tr>
                        <th>Short Description</th>
                        <td>{!! $data->short_description !!}</td>
                    </tr>
                    <tr>
                        <th>Long Description</th>
                        <td>{!! $data->description !!}</td>
                    </tr>
                    <tr>
                        <th>Feature Image</th>
                        <td>
                            <img height="100" width="100" src="{{asset($data->image)}}" alt="">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- /Content --}}

@endsection
