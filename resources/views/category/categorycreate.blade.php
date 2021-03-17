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
                <li class="breadcrumb-item"><a href="{{url('/categoryentry')}}">Item Code Master</a></li>
                <li class="breadcrumb-item active"> Add Item Code Master</li>
            </ul>
        </div>

    </div>
</div>
<!--</head>-->


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

                <div class="tab">
                    <input type="radio" name="check" class="tablinks" onclick="openCity(event, 'London')"
                        value="London" />
                    <label for="male">New Category</label>
                    <input type="radio" name="check" class="tablinks" onclick="openCity(event, 'Paris')"
                        value="Paris" />
                    <label for="male">New Specification</label>
                    <!--<input type="radio" name="check" class="tablinks" onclick="openCity(event, 'Tokyo')" value="Tokyo"/>
        <label for="male">Male</label>-->
                </div>

                <div id="London" class="tabcontent">
                    <h3>Add New Category</h3>
                    <form action="{{ url('/categorystore') }}"  method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Class</label>
                                    <input type="radio" id="a"  name="class">A
                                    <input type="radio" id="b" name="class">B
                                    <input type="radio" id="C"  name="class">C


                                </div>

                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" class="form-control pass-input" name="categoryname ">


                                </div>

                                <div class="form-group">
                                    <label>Category Code</label>
                                    <input type="text" class="form-control pass-input" name="categorycode">


                                </div>
                                <div class="text-center"> 

                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                                </div>
                             
                            </div>
                        </div>
                    </form>
                </div>

                <div id="Paris" class="tabcontent">
                    <h3>Add New Specification</h3>
                    <form action="{{ url('/specificationstore') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" class="form-control pass-input" name="category">


                                </div>

                                <div class="form-group">
                                    <label>Specification Code</label>
                                    <input type="text" class="form-control pass-input" name="specificationcode">


                                </div>

                                <div class="form-group">
                                    <label>Specfication</label>
                                    <input type="text" class="form-control pass-input" name="specification">


                                </div>

                                <div class="form-group">
                                    <label>Uom</label>
                                    <select name="uom">
                                        <option value="kg">Kg</option>
                                        <option value="nos">NOS</option>
                                        <option value="ltrs">Ltrs</option>
                                        <option value="mtrs">Mtrs</option>
                                        <option value="roll">Roll</option>
                                        <option value="pkt">PKT</option>
                                        <option value="coils">COILS</option>
                                    </select>

                                </div>
                                <div class="foem-group">
                                    <label>Decription</label>
                                    <input type="text" name="decription" class="form-control pass-input">
                                </div>
                                <div class="foem-group">
                                    <label>Make</label>
                                    <input type="text" name="make" class="form-control pass-input">
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
@push('scripts')
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
@endpush