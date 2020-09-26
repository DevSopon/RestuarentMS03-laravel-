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
                    @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                        <span>{{ $error }}</span>
                                    </div>
                                @endforeach
                    @endif


                        <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add New Slider</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route ('info.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Header</label>
                                            <input type="text" class="form-control" name="head">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Parafraph</label>
                                            <input type="text" class="form-control" name="para">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                            <input type="file" name="image">
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                 <a href="{{route ('info.index')}}" class="btn btn-danger"> Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush