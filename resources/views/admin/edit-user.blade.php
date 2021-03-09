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
                <li class="breadcrumb-item"><a href="{{url('/user')}}">User</a></li>
                <li class="breadcrumb-item active">Edit User</li>
            </ul>
        </div>

    </div>
</div>
<!-- /Page Header -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit User</h4>
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
                <form action="{{ url('/userupdate/'.$user->id) }}" method="POST">
                @csrf                  
          
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name"  value="{{$user->name}}"
                                    required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email"  value="{{$user->email}}" required>
                            </div>
                            <div class="form-group">
                                <label>Change Password</label>
                                <input type="password" class="form-control pass-input" name="password" id="password">
                            </div>


                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control pass-input" name="password_confirmation"
                                    id="password_confirmation"/>
                            </div>

                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" class="btn btn-primary">Update User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection