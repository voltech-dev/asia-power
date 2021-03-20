@extends('layouts.main')

@section('content')

<?php

?>

<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">HSN/SAC</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">HSN/SAC Code</li>
            </ul>
        </div>
        <div class="col-auto">
            <a href="{{url('/hsncreate')}}" class="btn btn-primary mr-1">
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
        <form action="{{url('/searchhsn')}}" method="POST" role="search">
            @csrf

            <div class="input-group">
                <input type="text" class="form-control" name="code" placeholder="Search"> 
                <span
                    class="input-group-btn">
                    <button type="submit" class="btn btn-default" style="border: 1px solid #dee2e6">
                        <i class="fas fa-search"></i>
                    </button>
                </span>

            </div>
        </form>
    </div>
</div>
<!-- /Search Filter -->

<div class="row">
    <div class="col-sm-12">

        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable" >
                        <thead class="thead-light">
                            <tr>
                            <th>SI</th>
                                <th>Division</th>
                                <th>Code</th>  
                                <th>Percentage</th>  
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hsn as $hsnsac)
                            <tr>                                                        
                               
                            <td>{{$hsnsac->id}}</td>
                                <td>{{$hsnsac->division}}</td>
                                <td> {{ $hsnsac->code}} </td>
                                <td> {{ $hsnsac->percentage}} </td>
                                <td class="text-right">
                                    <a href="{{ url('/hsnedit/'.$hsnsac->id) }}" class="btn btn-sm btn-white text-success mr-2"><i
                                            class="far fa-edit mr-1"></i></a>
                                            <a href="{{ url('/delete/'.$hsnsac->id) }}" class="btn btn-sm btn-white text-danger mr-2"><i
                                            class="far fa-edit mr-1"></i></a>                                </td> 
  
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