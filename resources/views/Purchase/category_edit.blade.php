@extends('layouts.main')

@section('content')
<?php

$category =App\Models\Category_Purchase::get();

?>
<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">User</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{url('/category')}}">Category</a></li>
                <li class="breadcrumb-item active">Edit Category</li>
            </ul>
        </div>

    </div>
</div>
<!-- /Page Header -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Category</h4>
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
                <form action="{{ url('/categoryupdate/'.$category_purchase->id) }}" method="POST">
                    @csrf
                    <div class="row">
                    <div class="col-md-6">
                        <label style="color:black">Category Name</label>
                        <input type="text" name="category_name" id="category_name" value="{{$category_purchase->category_name}}">
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-md-7">
                        <label style="color:black">Category Class</label>
                        <select id="category_class" name='category_class' >
                        <option value="{{$category_purchase->class}}" selected>{{$category_purchase->class}}</option>
                        <option disabled>Select Class..</option>
                            <option id="a" >Class A</option>
                            <option id="b" >Class B</option>
                            <option id="c" >Class C</option>
                        </select>
                    </div>
                </div><br>
                <input type="submit" value="Submit" id="submit" style="background-color:green">

                                       
                </form>
            </div>
        </div>
    </div>
</div>
@endsection