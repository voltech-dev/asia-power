@extends('layouts.main')

@section('content')


<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Supplier</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{url('/supplierentry')}}">Customer</a></li>
                <!-- <li class="breadcrumb-item active">Add Customer</li> -->
            </ul>
        </div>

    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <!-- <h4 class="card-title">Add Supplier</h4> -->
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
                <form action="{{ url('/supplierstore') }}" method="POST">
                    @csrf
                    <div class="row">
                    <div class="col-md-6">
                    <label>Supplier Name</label>
                    <input type="text" id="suppliername" name="suppliername">
                    </div>
                    </div>
                        
                </form>
            </div>
        </div>
    </div>
</div>
@endsection