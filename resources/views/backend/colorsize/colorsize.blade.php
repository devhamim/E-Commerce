@extends('backend.master')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h2>Color & Size</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('color-size.store') }}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-label">Color Name</label>
                        <input type="text" class="form-control" placeholder="Color Name" name="color_name" required>
                        @error('color_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Color Code</label>
                        <input type="text" class="form-control" placeholder="Color Code" name="color_code">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="btn" value="1">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h2>Prodact Size</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('color-size.store') }}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-label">Size Name</label>
                        <input type="text" class="form-control" placeholder="Size Name" name="size_name" required>
                        @error('size_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="btn2" value="2">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h2></h2>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <h2>Color List</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Color Name</th>
                                <th>Color</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($colors as $key=>$color)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $color->color_name }}</td>
                                    <td>
                                        <span class="badge badge-pill" style="background-color: #{{ $color->color_code }}">{{ $color->color_name }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('color-size.destroy', $color->id) }}" class="btn btn-md bg-warning rounded font-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h2></h2>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <h2>Size List</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Size Name</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($sizes as $key=>$size)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $size->size_name }}</td>
                                    <td>
                                        <a href="{{ route('color-size.destroy', $size->id) }}" class="btn btn-md bg-warning rounded font-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
