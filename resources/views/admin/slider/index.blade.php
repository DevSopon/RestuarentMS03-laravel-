@extends ('layouts.app')
@section ('title', 'Slider')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section ('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route ('slider.create')}}" class="btn btn-info"> Add New Slider</a>
                    @include ('layouts.partial.ms')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Sliders Collection</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered">
                                    <thead class=" text-primary">
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Sub-Title</th>
                                    <th>Image</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th width="15%">Action E/D</th>
                                    </thead>
                                    <tbody>
                                    @foreach($sliders as $key=>$slider)
                                        <tr>
                                            <td>{{$key + 1 }}</td>
                                            <td>{{$slider->title}}</td>
                                            <td>{{$slider->sub_title}}</td>
                                            <td><img class="img-responsive" src="{{ asset('uploads/slider/'.$slider->image) }}" style="height: 120px; width: 200px" alt=""></td>
                                            <td>{{$slider->created_at}}</td>
                                            <td>{{$slider->updated_at}}</td>
                                            <td>
                                                <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-info btn-sm">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>

                                                <form id="delete-form-{{ $slider->id }}" action="{{ route('slider.destroy',$slider->id) }}" style="display: none;"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="if(confirm('Are you sure? You want to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $slider->id }}').submit();
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