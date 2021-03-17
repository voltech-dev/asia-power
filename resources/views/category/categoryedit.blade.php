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
                <li class="breadcrumb-item"><a href="{{url('/categoryentry')}}">Item Code Master</a></li>
                <li class="breadcrumb-item active"> Add Item Code Master</li>
            </ul>
        </div>

    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Item Code Master</h4>
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

                    <form action="{{ url('/updatecs',$codemaster->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">

                            <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="decription" class="form-control pass-input" value="{{$codemaster->decription}}">
                                </div>

                                <div class="form-group">
                                    <label>Specification Code</label>
                                    <input type="text" class="form-control pass-input" name="specificationcode" value="{{$codemaster->specificationcode}}">


                                </div>


                                <div class="form-group">
                                    <label>Uom</label>
                                    <select name="uom">
                                    <option value="{{$codemaster->uom}}" selected>{{$codemaster->uom}}</option>
                                        <option value="kg">Kg</option>
                                        <option value="nos">NOS</option>
                                        <option value="ltrs">Ltrs</option>
                                        <option value="mtrs">Mtrs</option>
                                        <option value="roll">Roll</option>
                                        <option value="pkt">PKT</option>
                                        <option value="coils">COILS</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Make</label>
                                    <input type="text" name="make" class="form-control pass-input"value="{{$codemaster->make}}">
                                </div>
                                <div class="text-center">

                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                                </div>

                            </div>



                        </div>
                    </form>
                </div>





                




            </div>
        </div>
    </div>
</div>



@endsection