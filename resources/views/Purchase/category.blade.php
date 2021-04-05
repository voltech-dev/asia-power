@extends('layouts.main')

@section('content')


<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Item Code Master</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{url('/category')}}">Purchase</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ul>
        </div>

    </div>
</div>
<!--</head>-->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
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
            <!-- <div style="border-radius:5px;background-color:#f2f2f2;padding:40px;"> -->
            <form action="{{ url('/category_store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label style="color:black">Category Name</label>
                        <input type="text" name="category_name" id="category_name">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-7">
                        <label style="color:black">Category Class</label>
                        <select id="category_class" name='category_class'>
                            <option id="a">Class A</option>
                            <option id="b">Class B</option>
                            <option id="c">Class C</option>
                        </select>
                    </div>
                </div><br>
                <input type="submit" value="Submit" id="submit" style="background-color:green">
            </form>



                @endsection
                @push('scripts')
                <script>
                </script>
                @endpush