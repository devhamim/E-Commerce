@extends('backend.master')
@section('content')
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Address List </h2>
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
                            <th scope="col">Unit Number</th>
                            <th scope="col">Street Number</th>
                            <th scope="col">Address Iine 1</th>
                            <th scope="col">Address Iine 2</th>
                            <th scope="col">City</th>
                            <th scope="col">Country</th>
                            <th scope="col">Region</th>
                            <th scope="col">Postal Code</th>
                            <th scope="col" class="text-end"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($address as $key => $addres)
                        <tr>
                            <td><b>{{ $addres->unit_number }}</b></td>
                            <td><b>{{ $addres->street_number }}</b></td>
                            <td><b>{{ $addres->address_line1 }}</b></td>
                            <td><b>{{ $addres->address_line2 }}</b></td>
                            <td><b>{{ $addres->city }}</b></td>
                            <td><b>{{ $addres->rel_to_country->country_name }}</b></td>
                            <td><b>{{ $addres->region }}</b></td>
                            <td><b>{{ $addres->postal_code }}</b></td>
                            <td class="text-end">
                                <a href="{{ route('address.edit', $addres->id) }}" class="btn btn-md rounded font-sm">Edit</a>
                                <a href="{{ route('address.destroy', $addres->id) }}" class="btn btn-md bg-warning rounded font-sm">Delete</a>
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
