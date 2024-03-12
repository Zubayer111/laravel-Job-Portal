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
                        <th>User Name</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$user->email}}</td>
                    </tr>
                   
                    <tr>
                        <th>First Name</th>
                        <td>{{$user->candidate->first_name}}</td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td>{{$user->candidate->last_name}}</td>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td>{{$user->candidate->mobile_no}}</td>
                    </tr>
                    <tr>
                        <th>Emergency Contact No</th>
                        <td>{{$user->candidate->emergency_contact_no}}</td>
                    </tr>
                    <tr>
                        <th>Father Name</th>
                        <td>{{$user->candidate->father_name}}</td>
                    </tr>
                    <tr>
                        <th>Mother Name</th>
                        <td>{{$user->candidate->mother_name}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$user->candidate->address}}</td>
                    </tr>
                    <tr>
                        <th>Birth Date</th>
                        <td>{{$user->candidate->date_of_birth}}</td>
                    </tr>
                    <tr>
                        <th>Blood Group</th>
                        <td>{{$user->candidate->blood_group}}</td>
                    </tr>
                    <tr>
                        <th>Skills</th>
                        <td>{{$user->candidate->skills}}</td>
                    </tr>
                    <tr>
                        <th>Whatsapp</th>
                        <td>{{$user->candidate->whatsapp}}</td>
                    </tr>
                    <tr>
                        <th>Linkedin</th>
                        <td>{{$user->candidate->linkedin_link}}</td>
                    </tr>
                    <tr>
                        <th>Github</th>
                        <td>{{$user->candidate->github_link}}</td>
                    </tr>
                    <tr>
                        <th>Facebook</th>
                        <td>{{$user->candidate->facebook_link}}</td>
                    </tr>
                    <tr>
                        <th>Behance Dribble</th>
                        <td>{{$user->candidate->behance_dribble_link}}</td>
                    </tr>
                    <tr>
                        <th>Portfolio</th>
                        <td>{{$user->candidate->portfolio_website}}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            <img height="100" width="100" src="{{asset($user->candidate->image_url)}}" alt="">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- /Content --}}

@endsection
