@extends('layouts.main')

@section('content')


<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">User</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{url('/supplierentry')}}">Customer</a></li>
                <li class="breadcrumb-item active">Add Customer</li>
            </ul>
        </div>

    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Supplier</h4>
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
                <form action="{{ url('/supplierupdate/'.$tests->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Supplier Name</label>
                                <input type="text" class="form-control" id="suppliername" name="suppliername" value="{{$tests->suppliername}}">
                            </div>
                            <div class="form-group">
                                <label>Supplier Address</label>
                                <textarea name="supplieraddress" class="form-control" rows="2" cols="20">"{{$tests->supplieraddress}}"</textarea>
                            </div>
                            <div class="form-group">
                                <label>CIN NO</label>
                                <input type="text" class="form-control pass-input" name="cinno" id="cinno" value="{{$tests->cinno}}">
                            </div>


                            <div class="form-group">
                                <label>GST NO</label>
                                <input type="text" class="form-control pass-input" name="gstno"
                                    id="gstno" value="{{$tests->gstno}}">
                            </div>
                            
                            <div class="form-group">
                                <label>Contact Person</label>
                                <input type="text" class="form-control pass-input" name="contactperson"
                                    id="contactperson" value="{{$tests->contactperson}}">
                            </div>
                            
                            <div class="form-group">
                                <label>Contact No</label>
                                <input type="text" class="form-control pass-input" name="contactno"
                                    id="contactno"value="{{$tests->contactno}}">
                            </div>
                            
                            <div class="form-group">
                                <label>Contact Email</label>
                                <input type="email" class="form-control pass-input" name="contactemail"
                                    id="contactemail"value="{{$tests->contactemail}}">
                            </div>

                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection