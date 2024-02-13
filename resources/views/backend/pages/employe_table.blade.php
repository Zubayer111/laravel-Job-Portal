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
                        Name
                    </th>
                    <th>
                        Role
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-info">
                    <td>
                      1
                    </td>
                    <td>
                      Herman Beck
                    </td>
                    <td>
                        Active
                    </td>
                    <td>
                            <a href="#" class="btn btn-sm btn-primary" ><i class="mdi mdi-table-edit"></i> </a>
                            <a href="#" class="btn btn-sm btn-primary py-2" ><i class="mdi mdi-delete-forever"></i> </a>
                    </td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

                        

    {{-- /Content --}}  

@endsection