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
                    <h4>Add New Product Configuration</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('product-configuration.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Select A Product Item</label>
                                        <select class="form-select" name="product_item_id">
                                            @foreach ($productitem as $product)
                                             <option value="{{ $product->id }}"> {{ $product->rel_to_product->product_name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('product_item_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Select A Variation Option</label>
                                        <select class="form-select" name="variation_option_id">
                                            @foreach ($variationoption as $variation)
                                             <option value="{{ $variation->id }}"> {{ $variation->option_name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('variation_option_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
