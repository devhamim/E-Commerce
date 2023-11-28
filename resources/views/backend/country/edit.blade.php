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
                    <h4>Edit Country</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('country.update', $countrys->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Country Name</label>
                                    <input type="text" placeholder="Country Name" class="form-control"  name="country_name" value="{{ $countrys->country_name }}">
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
