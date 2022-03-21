@extends('admin.master')
@section('content')
    <div class="main-body">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Url Shortener List</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 pl-0 mb-2">
                            <a href="{{route('url.create')}}"
                                class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Create Short
                                Url</a>
                        </div>
                        <br>
                        <br>
                        <div class="dt-responsive table-responsive">
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                            @if (Session::has('delete'))
                                <div class="alert alert-success">
                                    <p>{{ Session::get('delete') }}</p>
                                </div>
                            @endif
                        <div id="basic-btn_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <table id="basic-btn" class="table table-striped table-bordered nowrap dataTable no-footer"
                                    role="grid" aria-describedby="basic-btn_info">
                                    <thead>
                                        <tr role="row">
                                            <th>Sl</th>
                                            <th>Url</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>


                                        @foreach ($datas as $key => $data)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$key=$key+1}}</td>
                                            <td>{{ $data->link }}</td>
                                            <td>{{$data->created_at->diffForHumans()}}</td>
                                            <td class="text-center">
                                                <a href="#" onclick="return false;" class="dropdown dropdown"
                                                    data-toggle="dropdown" role="button" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu bg-info">
                                                    <a class="dropdown-item btn btn-sm btn-info"
                                                        href="{{route('url.show',$data->id) }}"><i
                                                            class="fa fa-eye"></i>show</a>
                                                    <a class="dropdown-item btn btn-sm btn-info"
                                                      href="{{ route('url.destroy',$data->id) }}">
                                                      <i class="fa fa-trash"></i>Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
@endsection
