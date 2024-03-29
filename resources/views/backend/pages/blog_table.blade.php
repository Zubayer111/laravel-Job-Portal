@extends("backend.layouts.default")

@section('title', 'Dashboard')
@section('description', 'Dashboard')

@section('content')

    {{-- Content --}}

    <div class="col-lg-12 stretch-card">
        <div class="card">
          @if(session('success'))
                        <div class="text-success text-bold m-3 text-center">
                            {{ session('success') }}
                        </div>
              @endif
          <div class="card-body">
              <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{url("/dashboard/addBlog")}}" class="btn btn-sm btn-primary" ><i class="mdi mdi-plus-box"></i> </a>
              </div>
            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                       Short Description
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($blogs as $blog)
                    
                  <tr class="table-info">
                    <td>
                      {{$loop->iteration}}
                    </td>
                    <td>
                      {{$blog->title}}
                    </td>
                    <td>
                      {{$blog->short_description}}
                    </td>
                    
                    <td>
                            <a href="{{route("editBlog",["blog"=>$blog->id])}}" class="btn btn-sm btn-primary" ><i class="mdi mdi-table-edit"></i> </a>
                            <a href="{{route("deleteBlog",["blog"=>$blog->id])}}" class="btn btn-sm btn-primary py-2" ><i class="mdi mdi-delete-forever"></i> </a>
                            <a href="{{route("showBlog",["blog"=>$blog->id])}}" class="btn btn-sm btn-primary py-2" ><i class="mdi mdi-eye"></i> </a>
                    </td>
                    
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



    {{-- /Content --}}

@endsection
