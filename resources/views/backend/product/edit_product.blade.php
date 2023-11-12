@extends('backend.master')
@section('content')
<section class="content-main">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Edit Product</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update', $request->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Select A Category</label>
                                    <select class="form-select" name="category_id">
                                        @foreach ($categories as $category)
                                         <option value="{{ $category->id }}"> {{ $category->category_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Product Name</label>
                                    <input type="text" placeholder="Entire Name" class="form-control" name="product_name" value="{{ $request->product_name }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">SEO Titile</label>
                                    <input type="text" placeholder="Entire Email" class="form-control"  name="seo_title" value="{{ $request->seo_title }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">SEO Tags</label>
                                    <input type="text" placeholder="Entire Tags" class="form-control"  name="seo_tags" value="{{ $request->seo_tags }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">SEO Description</label>
                                    <textarea class="form-control" name="seo_description" id="" cols="30" rows="10">{{ $request->seo_description }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Product Description</label>
                                    <textarea class="form-control" name="product_description" id="" cols="30" rows="10">{{ $request->product_description }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" name="product_image">
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