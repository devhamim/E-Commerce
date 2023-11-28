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
                    <h4>Add New Address</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('address.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Unity Number</label>
                                    <input type="number" placeholder="Unity Number" class="form-control @error('unit_number') is-invalid @enderror" name="unit_number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Streat Number</label>
                                    <input type="number" placeholder="Streat Number" class="form-control @error('street_number') is-invalid @enderror"  name="street_number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Address Line 1</label>
                                    <input type="text" placeholder="Address Line 1" class="form-control"  name="address_line1">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Address Line 2</label>
                                    <input type="text" placeholder="Address Line 2" class="form-control"  name="address_line2">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">City</label>
                                    <input type="text" placeholder="City" class="form-control @error('city') is-invalid @enderror"  name="city">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Select A Country</label>
                                    <select class="form-select" name="country_id">
                                        @foreach ($countrys as $country)
                                         <option value="{{ $country->id }}"> {{ $country->country_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Region</label>
                                    <input type="text" placeholder="Region" class="form-control @error('region') is-invalid @enderror"  name="region">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Postal Code</label>
                                    <input type="number" placeholder="Postal Code" class="form-control @error('postal_code') is-invalid @enderror"  name="postal_code">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label"></label>
                                    <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">+ Add</button>
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
