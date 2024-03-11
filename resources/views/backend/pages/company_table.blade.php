@extends("backend.layouts.default")

@section('title', 'Dashboard')
@section('description', 'Dashboard')

@section('content')

    {{-- Content --}}

    <div class="col-lg-12 stretch-card">
        <div class="card">
          <div class="card-body">
              
            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                        Comapnies Name
                    </th>
                    <th>
                        Status
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                @foreach ($datas as $data)
                  
                <tbody>
                  <tr class="table-info">
                    <td>
                      {{$loop->iteration}}
                    </td>
                    <td>
                      {{$data->name}}
                    </td>
                    <td>
                        {{$data->status}}
                    </td>
                    <td>
                            <a href="{{route("companiesDetails",["company"=>$data])}}" class="btn btn-sm btn-primary py-2" ><i class="mdi mdi-eye"></i> </a>
                    </td>
                </tbody>
                
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>



    {{-- /Content --}}

@endsection
