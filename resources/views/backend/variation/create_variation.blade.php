@extends('backend.master')
@section('content')
<section class="content-main">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Add New Variation</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('variation.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="product_name" class="form-label">Variation Name</label>
                                    <input type="text" placeholder="Entire Name" class="form-control" name="variation_name">
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