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
                        <h4>Add New Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Select A Category</label>
                                        <select class="form-select" name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"> {{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Product Name</label>
                                        <input type="text" placeholder="Entire Name" class="form-control"
                                            name="product_name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Product Price</label>
                                        <input type="number" placeholder="0.00" class="form-control" name="price">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Discount %</label>
                                        <input type="number" placeholder="0%" class="form-control" name="product_name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Short Description</label>
                                        <textarea class="form-control" name="short_description" id="" cols="30" rows="10"
                                            placeholder="Short details"></textarea>
                                    </div>
                                </div>



                                <hr>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Description</label>
                                        <textarea id="summernote" class="form-control" name="description" id="" cols="30" rows="10"
                                            placeholder="Short details"></textarea>
                                    </div>
                                </div>
                                <hr>

                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">SEO Titile</label>
                                        <input type="text" placeholder="Entire Email" class="form-control"
                                            name="seo_title">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">SEO Tags</label>
                                        <input type="text" placeholder="Entire Tags" class="form-control"
                                            name="seo_tags">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">SEO Description</label>
                                        <textarea class="form-control" name="seo_description" id="" cols="30" rows="10"></textarea>
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
                                        <button type="submit"
                                            class="btn btn-light rounded font-sm mr-5 text-body hover-up">+ Add
                                            Product</button>
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

@section('script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Hello Bootstrap 5',
                tabsize: 2,
                height: 100
            });
        });
    </script>
@endsection
