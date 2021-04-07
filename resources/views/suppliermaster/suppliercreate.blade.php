@extends('layouts.main')

@section('content')
<html>

<head>
    <style>
    input[type=text] {
        width: 70%;
        padding: 2px;
        margin: 2px 0;
        box-sizing: border-box;
        border: 1px solid #555;
        outline: none;
        -moz-box-shadow: 0 2px 4px #bbb inset;
        -webkit-box-shadow: 0 2px 4px #BBB inset;
        box-shadow: 0 2px 4px #BBB inset;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;

    }

    input[type=text]:focus {
        background-color: #E7E8E7;
        outline: 0;
    }

    textarea {
        width: 70%;
        padding: 2px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #555;
        outline: none;
        -moz-box-shadow: 0 2px 4px #bbb inset;
        -webkit-box-shadow: 0 2px 4px #BBB inset;
        box-shadow: 0 2px 4px #BBB inset;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;

    }

    textarea:focus {
        background-color: #E7E8E7;
        outline: 0;
    }

    body {
        font-family: Tahoma, Arial, sans-serif;
        font-size: 13px;
        color: black;
        font-weight: bold
    }
    </style>
</head>

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
                        <div class="col-md-2">
                            <label>Supplier Name</label>
                        </div>
                        <!-- <div class="col-md-2">
                    </div> -->
                        <div class="col-md-5" align="left">
                            <input type="text" id="supname" class="supname">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-2">
                            <label>Supplier Address</label>
                        </div>
                        <div class="col-md-5">
                            <textarea rows=4 cols=100></textarea>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-2">
                            <label>State</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" id="state" class="state">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-2">
                            <label>CIN No</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" id="cinno" class="cinno">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-2">
                            <label>GST No</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" id="gstno" class="gstno">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-2">
                            <label>Contact Person</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" id="contact_person" class="contact_person">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-2">
                            <label>Contact No</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" id="contactno" name="contactno">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-2">
                            <label>Contact Email</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" id="contactemail" name="contactemail">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="submit" value="Submit" id="submit">
                        </div>
                        <div>

                </form>
            </div>
        </div>
    </div>
</div>

</html>
@endsection