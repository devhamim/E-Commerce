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
                    <h4>Edit Product Configuration</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('product-configuration.update', $ProductConfigurations->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Select A Products Item</label>
                                        <select class="form-select" name="product_item_id">
                                            @foreach ($productsitems as $products)
                                                <option value="{{ $products->id }}"{{ $products->id == $ProductConfigurations->product_item_id?'selected':'' }}> {{ $products->rel_to_product->product_name }} </option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Select A Product</label>
                                    <select class="form-select" name="variation_option_id">
                                        @foreach ($variationoption as $variation)
                                         <option value="{{ $variation->id }}" {{ $variation->id == $ProductConfigurations->variation_option_id?'selected':'' }}> {{ $variation->option_name }} </option>
                                        @endforeach
                                    </select>
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
