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
                    <h4>Add New User Address</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('useraddress.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Select A User</label>
                                        <select class="form-select" name="user_id">
                                            @foreach ($users as $user)
                                             <option value="{{ $user->id }}"> {{ $user->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Select A Address</label>
                                        <select class="form-select" name="address_id">
                                            @foreach ($addresss as $address)
                                             <option value="{{ $address->id }}"> {{ $address->city }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('product_id')
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
