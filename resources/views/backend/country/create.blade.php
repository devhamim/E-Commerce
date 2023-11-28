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
                    <h4>Add New Country</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('country.store') }}" method="POST">
                        @csrf
                        <div cass="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Country Name</label>
                                        <input type="text" placeholder="Country Name" class="form-control @error('country_name') is-invalid @enderror" name="country_name">
                                        @error('country_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
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
