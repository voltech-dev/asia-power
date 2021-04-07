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

                        <div class="wrapper text-center">
                            <input type="button" id="add" value="Add">
                        </div>
                        <hr>


                        <div id="purchase_form">
                            <div class="row">
                                <div class="col-md-12" style="text-align:center">
                                    <b><u>Supplier Details</u></b>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-3">
                                    <label for="supplier"><b>Supplier</b></label>
                                </div>
                                <div class="col-md-4">
                                    <select name="supplier" id="supplier" class="form-control" style="width:170px">
                                        <option selected>Supplier</option>
                                        @foreach ($supplier as $key)
                                        <option value="{{ $key->suppliername }}">{{$key->suppliername}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <p></p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="supplier"><b>Supplier Contact Person</b></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="sup_contact" name="sup_contact"
                                        value="">
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <label for="supplier"><b>Supplier Contact No</b></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="sup_contact_no" name="sup_contact_no">
                                </div>

                            </div><br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="cin"><b>CIN No.</b></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="cin_no" name="cin_no">
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <label for="supplier"><b>GST No</b></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="gst_no" name="gst_no">
                                </div>

                            </div><br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="supplier"><b>Supplier Email</b></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="supplier_email" name="supplier_email">
                                </div>
                            </div><hr>


                            <div class="row">
                                <div class="col-md-3">
                                    <label for="cin"><b>PO No.</b></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="po_no" name="po_no">
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <label for="supplier"><b>PO Date</b></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control datetimepicker" id="po_date" name="po_date">
                                </div>

                            </div><br>
                            <div class="row">
                                <div class="col-md-3"><b>Contact Person</b></div>
                                <div class="col-md-4"><input type="text" class="form-control" id="contact_person"
                                        name="contact_person"></div>
                                <div class="col-md-2">
                                    <label for="supplier"><b>Contact Mobile1</b></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="contact_mobile1" name="contact_mobile1">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="cin"><b>Contact Email1</b></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="contact_email1" name="contact_email1">
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <label for="supplier"><b>Contact Mobile2</b></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="contact_mobile2" name="contact_mobile2">
                                </div>



                            </div><br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="cin"><b>Contact Email2</b></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="contact_email2" name="contact_email2">
                                </div>
                                <div class="col-md-1"></div>


                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3"><b>Order Ref</b></div>
                                <div class="col-md-7"><input type="text" class="form-control" id="order_ref"
                                        name="order_ref">
                                </div>
                            </div>
                            <!-- <h5>Material Details</h5> -->
                            <!-- <div id="table" style>
                                    <table id="material" border="1px" class="small">
                                        <tbody>
                                            <tr>
                                                <th><label>S.No</label></th>
                                                <th>
                                                    <center>Item Description</center>
                                                </th>
                                                <th>Qty</th>
                                                <th>UOM</th>
                                                <th>Rate</th>
                                                <th>Discount(%)</th>
                                                <th>Amount(Rs)</th>
                                            </tr>
                                            <tr class="small1">
                                                <td><input type="text" name="sno" style="width:40px" id="sno"></td>
                                                <td><input type="text" name="item" style="width:400px" id="item"></td>
                                                <td><input type="text" name="qty" style="width:50px" id="qty"></td>
                                                <td><input type="text" name="uom" style="width:80px" id="uom"></td>
                                                <td><input type="text" name="rate" style="width:120px" id="rate"></td>
                                                <td><input type="text" name="discount" style="width:120px"
                                                        id="discount">
                                                </td>
                                                <td><input type="text" name="amount" style="width:120px" id="amount">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div> -->
                            <!-- <input type='button' id='add_des' value='Add Description'><br><br> -->
                            <h5>Terms & Conditions</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <label><b>Price Condition</b></label>
                                </div>
                                <div class="col-md-6">
                                    <textarea name="price_condition" class="inputclass" rows="2" cols="70"
                                        id="price_condition"></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <label><b>Payment Terms</b></label>
                                </div>
                                <div class="col-md-6">

                                    <textarea name="payment_terms" class="inputclass" rows="2" cols="70"
                                        id="payment_terms"></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <label><b>Despatch Mode</b></label>
                                </div>
                                <div class="col-md-6">

                                    <textarea name="despatch_mode" class="inputclass" rows="1" cols="70"
                                        id="despatch_mode"></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <label><b>Delivery Schedule</b></label>
                                </div>
                                <div class="col-md-6">

                                    <textarea name="delivery_schedule" class="inputclass" rows="1" cols="70"
                                        id="delivery_schedule"></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-3">
                                    <label><b>Packing & Forwarding & Fright Charges</b></label>
                                </div>
                                <div class="col-md-6">
                                    <textarea name="packing" class="inputclass" rows="2" cols="70"
                                        id="packing"></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-3">
                                    <label><b>Important Condition</b></label>
                                </div>
                                <div class="col-md-6">
                                    <textarea name="important_condition" class="inputclass" rows="2" cols="70"
                                        id="important_condition"></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <label><b>GST</b></label>
                                </div>
                                <div class="col-md-6">

                                    <textarea name="gst" class="inputclass" rows="2" cols="70" id="gst"></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <label><b>L.D Clause</b></label>
                                </div>
                                <div class="col-md-6">
                                    <textarea name="ld_clause" class="inputclass" rows="2" cols="70"
                                        id="ld_clause"></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <label><b>Inspection Clause</b></label>
                                </div>
                                <div class="col-md-6">

                                    <textarea name="inspection_clause" class="inputclass" rows="2" cols="70"
                                        id="inspection_clause"></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <label><b>Test Certificate</b></label>
                                </div>
                                <div class="col-md-6">

                                    <textarea name="test_certificate" class="inputclass" rows="2" cols="70"
                                        id="test_certificate"></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="con">
                                <div class="row" id="new">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-2">
                                        <label><b>Other Conditions</b></label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea name="other_conditions" class="inputclass" rows="2" cols="70"
                                            id="other_conditions"></textarea>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                            <div></div>

                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-6">
                                    <input type='button' id='add_condition' value='Add Condition'><br><br>

                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-3">
                                    <label><b>Dispatch Instruction logistic department</b></label>
                                </div>
                                <div class="col-md-6">
                                    <textarea name="dispatch" class="inputclass" rows="2" cols="70"
                                        id="dispatch"></textarea>

                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-3">
                                    <label><b>Delivery / Invoice Address</b></label>
                                </div>
                                <div class="col-md-6">
                                    <textarea name="delivery" class="inputclass" rows="2" cols="70"
                                        id="delivery"></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <b>Note:</b><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="note" class="inputclass" rows="2" cols="133"
                                        id="note"></textarea><br>
                                    <input type='submit' id='submit' value='Submit'
                                        style="background-color:green; color:white"><br><br>
                                </div>
                            </div>
                    </form>
                </div>
            </div>

        </div>
        @push('scripts')
        <script>
        $(document).ready(function() {
            $('#purchase_form').hide();
        })
        $(document).ready(function() {
            $("#add").click(function() {
                $('#add').hide();
                $("#purchase_form").show();
            });
        });
        $("#add_des").on('click', function() {
            var newel = $('.small1:last').clone();
            $('.small1:last').after(
                '<tr class="newrow"><td><input type="text" name="sno1" style="width:40px" id="sno1"></td><td><input type="text" name="item" style="width:400px" id="item1"></td><td><input type="text" name="qty" style="width:50px" data-id="qty1" id="qty1"></td><td><input type="text" name="uom" style="width:80px" id="uom1"></td><td><input type="text" name="rate" style="width:120px" data-id="rate1" id="rate1"></td><td><input type="text" name="discount" style="width:120px" id="discount1"></td><td><input type="text" name="amount" style="width:120px" class="amount1"id="amount1"></td><td><input type="button" value="Delete" class="delete" id="delete"></td></tr>'

            )
        });
        $("#add_condition").on('click', function() {
            var newel = $('.con:last').clone();
            $('.con:last').after(
                '<div class="con"><div class="row"><div class="col-md-3"></div><div class="col-md-2"> </div><div class="col-md-6"><textarea name="other_conditions" class="inputclass" rows="2" cols="70"id="other_conditions"></textarea></div><div class="col-md-1"><input type="button" value="Delete" class="delete"  id="delete1"></div></div></div>'
            );
        });
        $('#qty,#rate').keyup(function() {
            var qty = parseInt($('#qty').val());
            var rate = parseInt($('#rate').val());
            $('#amount').val(qty * rate);
        });


        $("#material").on('click', '.delete', function() {
            // $(this).closest('tr').remove();
            $(this).parent().parent().remove();
        });
        $('#supplier').change(function(event) {
            var supname = $('#supplier').val();
            // alert(supname);
            $.ajax({
                type: "GET",
                url: "{{url('/supplierid')}}",
                data: {
                    name: supname
                },
                dataType: 'json',
                success: function(data) {
                    $('#sup_contact').val(data.supcontact);
                    $('#cin_no').val(data.cinno);
                    $('#supplier_email').val(data.supemail);
                    $('#gst_no').val(data.gstno);
                    $('#sup_contact_no').val(data.supcontactno);
                    // $('#address').val(data.supaddress);
                    $('p').append(data.supaddress);

                },
            });
        });

        $(document).on('click', '.delete', function() {
            $(this).parent().parent().remove();
        });

        $(document).on('keyup', '.newrow', function() {
            var row = $(this).closest('tr');
            var qty = row.find('[data-id="qty1"]');
            var id = $(this).attr('data-id');
            console.log(id);

        });
        // var modal = document.getElementById("purchase_form");

        // // Get the button that opens the modal
        // var btn = document.getElementById("add");

        // // Get the <span> element that closes the modal
        // var span = document.getElementsByClassName("close")[0];

        // // When the user clicks on the button, open the modal
        // btn.onclick = function() {
        //     modal.style.display = "block";
        // }

        // // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        //     modal.style.display = "none";
        // }

        // // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     }
        // }
        </script>
        @endpush
        @endsection