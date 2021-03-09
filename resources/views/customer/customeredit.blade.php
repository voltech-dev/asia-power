@extends('layouts.main')

@section('content')

<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">User</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{url('/customerentry')}}">Customer</a></li>
                <li class="breadcrumb-item active">Edit Customer</li>
            </ul>
        </div>

    </div>
</div>
<!-- /Page Header -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Customer</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ url('/customerupdate/'.$item->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Customer Name</label>
                                <input type="text" class="form-control" id="customername" name="customername" value="{{$item->customername}}">
                            </div>
                            <div class="form-group">
                                <label>Customer Address</label>
                                <textarea name="address" class="form-control" rows="2" cols="20">{{$item->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>PAN NO</label>
                                <input type="text" class="form-control pass-input" value="{{$item->panno}}" name="panno" id="panno">
                            </div>


                            <div class="form-group">
                                <label>GST IN NO</label>
                                <input type="gstno" class="form-control pass-input" name="gstno"
                                    id="gstno" value="{{$item->gstno}}"/>
                            </div>

                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" class="btn btn-primary">Update Customer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection