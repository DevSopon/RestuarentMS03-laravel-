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
                    @include ('layouts.partial.ms')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add New Slider</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route ('info.update', $About->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method ('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Header</label>
                                            <input type="text" value="{{$info->head}}" class="form-control" name="head">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Paragraph</label>
                                            <input type="text" value="{{$info->Para}}" class="form-control" name="head">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="file" name="file">
                                    </div>
                                </div>
                                <a href="{{route ('info.index')}}" class="btn btn-danger"> Back</a>
                                <button type="submit" value="{{}}" class="btn btn-primary">Save</button>
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