@extends('layouts.main')

@section('content')

<?php
$test = DB::table('suppliers')
->orderBy('id', 'ASC')
->get();
?>

<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Supplier</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Supplier</li>
            </ul>
        </div>
        <div class="col-auto">
            <a href="{{url('/suppliercreate')}}" class="btn btn-primary mr-1">
                <i class="fas fa-plus"></i>
            </a>
            <a class="btn btn-primary filter-btn" href="javascript:void(0);" id="filter_search">
                <i class="fas fa-filter"></i>
            </a>
        </div>
    </div>
</div>
<!-- /Page Header -->

<!-- Search Filter -->
<div id="filter_inputs" class="card filter-card">
    <div class="card-body pb-0">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group">
                   

<label>Supplier Name</label>
</div>
                </div>
                
        </div>
    </div>
</div>
</div>
<!-- /Search Filter -->

<div class="row">
    <div class="col-sm-12">

        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>SI</th>
                                <th>Supplier Name</th>
                                <th>Supplier Address</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($test as $tests)
                            <tr>

                                <td>{{$tests->id}}</td>
                                <td>{{$tests->suppliername}}</td>
                                <td> {{ $tests->supplieraddress}} </td>
                                <td class="text-right">
                                    <a href="{{ url('/supplieredit/'.$tests->id) }}"
                                        class="btn btn-sm btn-white text-success mr-2"><i
                                            class="far fa-edit mr-1"></i></a>
                                    <a href="{{ url('/deletes/'.$tests->id) }}"
                                        class="btn btn-sm btn-white text-danger mr-2"><i
                                            class="far fa-edit mr-1"></i></a>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection