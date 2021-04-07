@extends('layouts.main')

@section('content')
<?php
$supplier=DB::table('suppliers')
->get();
$purchase=DB::table('purchase order')
->get();
?>
<div class="container">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">User</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('/purchase_order')}}">Purchase</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
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
                    <form action="{{ url('/purchase_order_store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-table">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-center table-hover datatable">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th><b>SI</b></th>
                                                        <th><b>Date</b></th>
                                                        <th><b>Po Number</b></th>
                                                        <th><b>Supplier</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($purchase as $purchase_order)
                                                    <tr>
                                                        <td>{{$purchase_order->id}}</td>
                                                        <td>{{$purchase_order->po_date}}</td>
                                                        <td>{{$purchase_order->po_number}}</td>
                                                        <td>{{$purchase_order->supplier}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>