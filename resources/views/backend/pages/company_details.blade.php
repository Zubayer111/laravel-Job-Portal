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
                        <th>Company Name</th>
                        <td>{{$data->name}}</td>
                    </tr>
                    <tr>
                        <th>Company Email</th>
                        <td>{{$data->user->email}}</td>
                    </tr>
                    <tr>
                        <th>Company Address</th>
                        {{-- <td>{{$data->address}}</td> --}}
                        <td><Address>{{$data->address}}</Address></td>
                    </tr>
                   
                    <tr>
                        <th>Description</th>
                        <td>{!! $data->description !!}</td>
                    </tr>
                    
                    <tr>
                        <th>Company Logo</th>
                        <td>
                            <img height="100" width="100" src="{{asset($data->logo)}}" alt="">
                        </td>
                    </tr>
                    <tr>
                        <th>Company Status</th>
                        <td>
                            {{$data->status}}
                            {{-- <form action="" method="post">
                                @csrf
                                <select name="company_status" id="company_status" class="form-select">
                                        <option value="active" {{ $data->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $data->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        <option value="suspended" {{ $data->status == 'suspended' ? 'selected' : '' }}>Suspended</option>
                                </select>
                            </form> --}}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- /Content --}}

@endsection
