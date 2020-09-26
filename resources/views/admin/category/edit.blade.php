@extends ('layouts.app')
@section ('title', 'Edit')
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
                            <h4 class="card-title ">Edit Existing Category</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route ('category.update', $category->id)}}">
                                @csrf
                                @method ('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" value="{{$category->name}}" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>

                                <a href="{{route ('category.index')}}" class="btn btn-danger"> Back</a>
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
