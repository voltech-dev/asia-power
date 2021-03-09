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
                <li class="breadcrumb-item"><a href="{{url('/hsn')}}">HSN/SAC Code</a></li>
                <li class="breadcrumb-item active">Add HSN/SAC</li>
            </ul>
        </div>

    </div>
</div>
<!-- /Page Header -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add HSN/SAC</h4>
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
                <form action="{{ url('/hsnstore') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Division</label>
                              <select name="division" id="division">
                              <option>--SELECT--</option>
                              <option value="asiapower">Asia Power</option>
                              </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Code</label>
                                <input type="text" class="form-control pass-input" name="code" id="code">
                            </div>


                            <div class="form-group">
                                <label>Percentage</label>
                                <input type="percentage" class="form-control pass-input" name="percentage"
                                    id="percentage" >
                            </div>

                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" class="btn btn-primary">Add HSN/SAC</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


