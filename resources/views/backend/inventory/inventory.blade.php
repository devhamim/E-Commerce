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
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h2>Prodact Inventory</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Product Name</th>
                        <th>Color Name</th>
                        <th>Size Name</th>
                        <th>Quantity</th>
                        <th scope="col" class="text-end"> Action </th>
                    </tr>
                    @foreach ($inventoryes as $key=>$inventory)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $inventory->rel_to_proitem->rel_to_product->product_name }}</td>
                            <td>
                                <span class="badge badge-pill" style="background-color: {{ $inventory->rel_to_color->color_name }}">{{ $inventory->rel_to_color->color_name }}</span>
                            </td>
                            <td>{{ $inventory->rel_to_size->size_name }}</td>
                            <td>{{ $inventory->quantity }}</td>
                            <td class="text-end">
                                <a href="" class="btn btn-md bg-warning rounded font-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h2>Prodact Inventory</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('inventory.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="" class="form-label">Product Name</label>
                        <input type="text" readonly class="form-control" value="{{ $prodact_info->rel_to_product->product_name }}">
                        <input type="hidden" name="prodact_id" class="form-control" value="{{ $prodact_info->id }}">
                    </div>
                    <div class="form-group mb-4">
                        <label for="" class="form-label">Color</label>
                        <select name="color_id" class="form-select" id="">
                            <option>-- Select Color --</option>
                            @foreach ($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->color_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="" class="form-label">Size</label>
                        <select name="size_id" class="form-select" id="">
                            <option>-- Select Color --</option>
                            @foreach ($sizes as $size)
                            <option value="{{ $size->id }}">{{ $size->size_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="" class="form-label">Quantity</label>
                        <input type="number"  class="form-control" placeholder="Quantity" name="quantity" required>
                        @error('quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
