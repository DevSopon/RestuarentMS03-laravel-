@extends ('layouts.app')
@section ('title', 'About')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section ('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route ('info.create')}}" class="btn btn-info"> Add New</a>
                    @include ('layouts.partial.ms')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">About Section</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered">
                                    <thead class=" text-primary">
                                    <th>Id</th>
                                    <th>Header</th>
                                    <th>Paragraph</th>
                                    <th>Image</th>
                                    <th>Logo</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th width="15%">Action E/D</th>
                                    </thead>
                                    <tbody>
                                    @foreach($infos as $key=>$info)
                                        <tr>
                                            <td>{{$key + 1 }}</td>
                                            <td>{{$info->head}}</td>
                                            <td>{{$info->para}}</td>
                                            <td>{{$info->image}}</td>
                                            <td>{{$info->file}}</td>
                                            <td>{{$info->created_at}}</td>
                                            <td>{{$info->updated_at}}</td>
                                            <td>
                                                <a href="{{ route('info.edit',$slider->id) }}" class="btn btn-info btn-sm">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>

                                                <form id="delete-form-{{ $About->id }}" action="{{ route('info.destroy',$About->id) }}" style="display: none;"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="if(confirm('Are you sure? You want to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $info->id }}').submit();
                                                        }else {
                                                        event.preventDefault();
                                                        }"><i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush