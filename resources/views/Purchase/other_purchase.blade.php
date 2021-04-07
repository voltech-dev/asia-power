@extends('layouts.main')

@section('content')
<?php
$other_purchase=DB::table('purchase')
->get();
?>

<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">User</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{url('/other_purchase')}}">Purchase</a></li>
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
                <form action="{{ url('/purchasestore') }}" method="POST">
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
                                                    <th><b>Division</b></th>
                                                    <th><b>Invoice No</b></th>
                                                    <th><b>Type</b></th>
                                                    <th><b>Supplier</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($other_purchase as $purchase)
                                                <tr>
                                                    <td>{{$purchase->id}}</td>
                                                    <td>{{$purchase->invoice_date}}</td>
                                                    <td>{{$purchase->division}}</td>
                                                    <td>{{$purchase->invoice_number}}</td>
                                                    <td>{{$purchase->invoice_type}}</td>
                                                    <td>{{$purchase->supplier}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-2"><label><b>Division</b></label></div>
                        <div class="col-md-5"><input type="text" class="form-control" id="division" name="division">
                        </div>
                        <div class="col-md-2"><label><b>Invoice Date</b></label></div>
                        <div class="col-md-3"><input type="text" class="form-control datetimepicker" id="invoice_date"
                                name="invoice_date"></div>

                    </div><br>
                    <div class="row">

                        <div class="col-md-2"><label><b>Invoice Type</b></label></div>
                        <div class="col-md-5"> <input type="text" class="form-control" name="invoice_type"
                                id="invoice_type">
                        </div>
                        <div class="col-md-2"><label><b>Invoice Number</b></label></div>
                        <div class="col-md-3"><input type="text" class="form-control datetimepicker" id="invoice_number"
                                name="invoice_number"></div>

                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-md-2"><label><b>Supplier</b></label></div>
                        <div class="col-md-5"> <input type="text" class="form-control" id="supplier" name="supplier">
                        </div>
                        <div class="col-md-2"><label><b>Supplier Contact no.</b></label></div>
                        <div class="col-md-3"> <input type="text" class="form-control" id="supplier_contact_no"
                                name="supplier_contact_no"></div>

                    </div><br>
                    <div class="row">

                        <div class="col-md-2"><label><b>Supplier Contact Person</b></label></div>
                        <div class="col-md-5"> <input type="text" class="form-control" name="sup_contact_person"
                                id="sup_contact_person">
                        </div>
                        <div class="col-md-2"><label><b>GST No</b></label></div>
                        <div class="col-md-3"> <input type="text" class="form-control" name="gst_no" id="gst_no"></div>
                    </div>
                    <div class="row">

                        <div class="col-md-2"><label><b>CIN No</b></label></div>
                        <div class="col-md-5"> <input type="text" class="form-control" name="cin_no" id="cin_no">
                        </div>
                        
                    </div><br>
                    <div class="row">
                        <div class="col-md-2"><b>Supplier Email</b></div>
                        <div class="col-md-7"><input type="text" class="form-control" name="supplier_email"
                                id="supplier_email"></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Material Details</h4>
                        </div>
                        <div class="col-md-3">
                            <label for="chkYes">
                                <input type="radio" id="intragst" name="gst" value="intragst" />
                                <b>Intra GST (SGST + CGST)</b>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <input type="radio" id="integrated_gst" name="gst" value="integratedgst">
                            <label for="integrated_gst"><b>Integrated GST (IGST)</b>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" id="nogst" name="gst" value="nogst">
                            <label for="nogst"><b>No GST</b>
                        </div>
                        <div class="col-md-1">
                            <h4>No:</h4>
                        </div>
                    </div>
                    <div class="des" id="des1">
                        <div class="row">
                            <div class="col-md-1">
                                <input type="checkbox" id="description" name="description" value="description">
                                <label for="description">
                            </div>
                            <div class="col-md-11">
                                <label><b>Description</label></b>
                                <textarea name="desc" class="inputclass" rows="2" cols="100"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <label><b>Qty</label></b>
                                <input type="text" class="form-control" id="qty" name="qty">
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="col-md-2">
                                <label><b>UOM</label></b>
                                <input type="text" class="form-control" id="uom" name="uom">
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="col-md-2">
                                <label><b>Rate</b></label>
                                <input type="text" class="form-control" id="rate" name="rate">
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="col-md-2">
                                <label><b>Amount</b></label>
                                <input type="text" class="form-control" id="amount" name="amount">
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class="row" id="intra">
                        <div class="col-md-1"></div>
                        <div class="col-md-1"><b>SGST</b></div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="sgst" name="sgst">
                        </div>
                        <div class="col-md-1">%</div>
                        <div class="col-md-1"><b>CGST</b></div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="cgst" name="cgst">
                        </div>
                        <div class="col-md-1">%</div>

                    </div>
                    <div class="row" id="integrated">
                        <div class="col-md-1"></div>
                        <div class="col-md-1"><b>IGST</b></div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="igst" name="Igst">
                        </div>
                        <div class="col-md-1">%</div>
                    </div>

                    <div class="text-right mt-4" id='table'>

                        <table style="width:100%">
                            <tr>
                                <td id='sgp'><b>SGST-</b></td>
                                <td>:</td>
                                <td id='sg'></td>
                            </tr>
                            <tr>
                                <td id='cgp'><b>CGST-</b></td>
                                <td>:</td>
                                <td id='cg'></td>
                            </tr>
                            <tr>
                                <td><b>Total Amount</b></td>
                                <td>:</td>
                                <td id='total'></td>
                            </tr>
                        </table>
                    </div>
                    <div class="text-right mt-4" id='table1'>

                        <table style="width:100%">
                            <tr>
                                <td id='igp'><b>IGST-</b></td>
                                <td>:</td>
                                <td id='ig'></td>
                            </tr>
                            <tr>
                                <td><b>Total Amount</b></td>
                                <td>:</td>
                                <td id='total_amount'></td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    <div class="text-center mt-6">
                        <input type="submit" value="Submit" id="submit" style="background-color:blue; color:white">
                    </div>
                    <div class="text-right mt-6">
                        <input type="button" value="Consolidate" id="consolidate"
                            style="background-color:blue; color:white">
                    </div>

                    <input type='button' id='but_add' value='Add Material'>


                    @push('scripts')
                    <script>
                    // $(function() {
                    $("#but_add").on('click', function() {
                        var newel = $('.des:last').clone();
                        $('.des:last').after(
                            '<div class="con"><div class="row"><div class="col-md-1"><input type="checkbox" id="description" name="description"value="description"><label for="description"></div><div class="col-md-2"><b>Description</b></div><div class="col-md-9 text-right mt-6"><input type="button" value="Delete" class="delete" id="delete"></div></div><div class="row"><div class="col-md-1"></div><div class="col-md-11"><textarea name="desc" class="inputclass" rows="4" cols="100"></textarea></div></div><div class="row"><div class="col-md-1"></div><div class="col-md-2"><label><b>Qty</b></label><input type="text" class="form-control" id="qty" name="qty"></div>&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-md-2"><label><b>UOM</b></label><input type="text" class="form-control" id="uom" name="uom"></div>&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-md-2"><label><b>Rate</b></label><input type="text" class="form-control" id="rate" name="rate"></div>&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-md-2"><label><b>Amount</b></label><input type="text" class="form-control" id="amount" name="amount"></div></div></div>'
                            );
                    });
                    // })
                    // $('#description').hide();
                    $('#intra').hide();
                    $('#integrated').hide();
                    $('#consolidate').hide();
                    $('#table').hide();
                    $('#table1').hide();
                    $('#submit').hide();
                    $('#intragst').click(function() {
                        $('#intra').show();
                        $('#integrated').hide();
                        $('#consolidate').show();
                    });
                    $('#integrated_gst').click(function() {
                        $('#integrated').show();
                        $('#intra').hide();
                        $('#consolidate').show();
                        $('#table').hide();
                    });
                    $('#nogst').click(function() {
                        $('#intra').hide();
                        $('#integrated').hide();

                    });
                    $('#consolidate').click(function() {
                        $('#consolidate').hide();
                        if ($('#intragst').is(':checked')) {
                            $('#table').show();
                        }
                        if ($('#integrated_gst').is(':checked')) {
                            $('#table').hide();
                            $('#table1').show();
                        }
                        var sgst = parseFloat($('#sgst').val())
                        var cgst = parseFloat($('#cgst').val())
                        var igst = parseFloat($('#igst').val())
                        var amount = $('#amount').val();
                        var total_sgt = parseFloat(((sgst / 100) * amount));
                        var total_cgt = parseFloat(((cgst / 100) * amount));
                        var total_igt = parseFloat(((igst / 100) * amount));
                        var total_amount = parseFloat(total_sgt + total_cgt);
                        var total_amount1 = parseFloat(total_igt);
                        $('#sgp').append(sgst + '%');
                        $('#cgp').append(cgst + '%');
                        $('#sg').append(total_sgt);
                        $('#cg').append(total_cgt);
                        if (!isNaN(igst)) {
                            $('#igp').append(igst + '%');
                        }
                        $('#ig').append(total_igt);
                        $('#total').append(total_amount);
                        $('#total_amount').append(total_amount1);
                        $('#submit').show();
                    });
                    $('#qty,#rate').keyup(function() {
                        var qty = parseInt($('#qty').val());
                        var rate = parseInt($('#rate').val());
                        $('#amount').val(qty * rate);
                    });
                    $(document).on('click', '.delete', function() {
                        console.log("hi");
                        $(this).closest('.con').closest('.con').remove();
                        // $(this).parent().parent().remove();
                    });
                    </script>
                    @endpush
                    @endsection