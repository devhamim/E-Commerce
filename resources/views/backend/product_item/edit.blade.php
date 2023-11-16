@extends('backend.master')
@section('content')
<section class="content-main">
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
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Edit Product Item</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('product-item.update', $productitems->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Select A Product</label>
                                    <select class="form-select" name="product_id">
                                        @foreach ($products as $product)
                                         <option value="{{ $product->id }}"{{ $product->id == $productitems->product_id?'selected':'' }}> {{ $product->product_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Product Quantity</label>
                                    <input type="number" placeholder="Quantity" class="form-control" name="qty_in_stock" value="{{ $productitems->qty_in_stock }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Stock Price</label>
                                    <input type="number" placeholder="Stock Price" class="form-control"  name="stock_price" value="{{ $productitems->stock_price }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Sale price</label>
                                    <input type="text" placeholder="Sale price" class="form-control"  name="sale_price" value="{{ $productitems->sale_price }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" name="product_image" value="{{ $productitems->product_image }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label"></label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label"></label>
                                    <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">+ Admin</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- card end// -->
        </div>
    </div>
</section>
@endsection