@extends('backend.master')
@section('content')
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Product Item List </h2>
            {{-- <p>Here Your All Catego.</p> --}}
        </div>
        <div>
            <input type="text" placeholder="Search order ID" class="form-control bg-white">
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row gx-3">
                <div class="col-lg-4 col-md-6 me-auto">
                    <input type="text" placeholder="Search..." class="form-control">
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>Status</option>
                        <option>Active</option>
                        <option>Disabled</option>
                        <option>Show all</option>
                    </select>
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>Show 20</option>
                        <option>Show 30</option>
                        <option>Show 40</option>
                    </select>
                </div>
            </div>
        </header> <!-- card-header end// -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Stock Price</th>
                            <th scope="col">Sale Price</th>
                            <th scope="col">Image</th>
                            <th scope="col" class="text-end"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productitems as $key => $product)
                        <tr>
                            <td><b>{{ $product->rel_to_product->product_name }}</b></td>
                            <td><b>{{ $product->qty_in_stock }}</b></td>
                            <td><b>{{ $product->stock_price }}</b></td>
                            <td><b>{{ $product->sale_price }}</b></td>
                            <td>
                                <img style="width: 50px; height: 50px;" src="{{ asset('files/productitem/'. $product->product_image) }}" alt="">
                            </td>
                            <td class="text-end">
                                <a href="{{ route('product-item.edit', $product->id) }}" class="btn btn-md rounded font-sm">Edit</a>
                                <a href="" class="btn btn-md bg-warning rounded font-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- table-responsive //end -->
        </div> <!-- card-body end// -->
    </div> <!-- card end// -->
    <div class="pagination-area mt-15 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">16</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
            </ul>
        </nav>
    </div>
</section> <!-- content-main end// -->
@endsection