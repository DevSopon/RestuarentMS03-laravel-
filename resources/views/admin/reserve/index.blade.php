@extends ('layouts.app')
@section ('title', 'Reservation')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section ('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @include ('layouts.partial.ms')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Reservation</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered">
                                    <thead class=" text-primary">
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Date and Time</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th width="15%">Action E/D</th>
                                    <th>Created_at</th>
                                    </thead>
                                    <tbody>
                                    @foreach($reserves as $key=>$reserve)
                                        <tr>
                                            <td>{{$key + 1 }}</td>
                                            <td>{{$reserve->name}}</td>
                                            <td>{{$reserve->phone}}</td>
                                            <td>{{$reserve->email}}</td>
                                            <td>{{$reserve->date_and_time}}</td>
                                            <td>{{$reserve->message}}</td>
                                            <td>
                                                @if ($reserve->status==true)
                                                    <span class="label label-info">Confirmed</span>
                                                    @else
                                                    <span class="label label-danger">Not confirmed</span>
                                                @endif
                                            </td>

                                            <td>
                                                @if($reserve->status == false)
                                                    <form id="status-form-{{ $reserve->id }}" action="{{ route('reservation.status',$reserve->id) }}" style="display: none;" method="POST">
                                                        @csrf
                                                    </form>
                                                    <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you verify this request by phone?')){
                                                        event.preventDefault();
                                                        document.getElementById('status-form-{{ $reserve->id }}').submit();
                                                        }else {
                                                        event.preventDefault();
                                                        }"><i class="material-icons">done</i></button>
                                                @endif
                                                <form id="delete-form-{{ $reserve->id }}" action="{{ route('reservation.destory',$reserve->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $reserve->id }}').submit();
                                                    }else {
                                                    event.preventDefault();
                                                    }"><i class="material-icons">delete</i></button>
                                            </td>
                                            <td>{{$reserve->created_at}}</td>
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
