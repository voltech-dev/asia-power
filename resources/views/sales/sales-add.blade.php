@extends('layouts.main')

@section('content')

<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Orders</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{url('/sales-add')}}">Orders</a></li>
                <!--<li class="breadcrumb-item active">Add Sale Order</li>-->
            </ul>
        </div>

    </div>
</div>
<!-- /Page Header -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <!--<h4 class="card-title">Add Orders</h4>-->
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
                <form action="{{ url('/userstore') }}" method="POST">
                    @csrf
                    <div class="py-3 text-lg leading-7 font-semibold"><a href="#"
                            class="underline text-gray-900 dark:text-white"><u>Front-End Sales Details</u></a></div>
                    <div class="row">
                        <label for="sales_person" class="col-sm-2 col-form-label">Sales Person</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="sales_person" id="sales_person" class="form-control form-control-sm">
                                </select>
                            </div>
                        </div>
                        <label for="order_type" class="col-sm-2 col-form-label">Order Type</label>
                        <div class="col-md-4">
                            <div class="form-group">

                                <select name="order_type" id="order_type" class="form-control form-control-sm">

                                    <option value="" selected disabled>Select Order Type</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Service">Service</option>
                                    <option value="Internal">Internal</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label for="division" class="col-sm-2 col-form-label">Division</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="division" id="division" class="form-control form-control-sm">
                                    <option value="" selected disabled> Select Division</option>
                                    <option value="Asia Power"> Asia Power</option>

                                </select>
                            </div>


                        </div>
                        <label for="order_date" class="col-sm-2 col-form-label">Order Date</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="order_date" id="order_date"
                                    class="form-control form-control-sm datetimepicker" value="">
                            </div>
                        </div>
                    </div>
                    <div class="py-3 text-lg leading-7 font-semibold"><a href="#"
                            class="underline text-gray-900 dark:text-white"><u>Order Details</u></a></div>
                    <div class="row">
                        <label for="customer" class="col-sm-2 col-form-label">Customer</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="customer" id="customer" class="form-control form-control-sm">
                                    <option value="" disabled selected>Select....</option>
                                </select>
                            </div>
                        </div>
                        <label for="end_user" class="col-sm-2 col-form-label">End User</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="end_user" id="end_user" class="form-control form-control-sm"
                                    value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="customer_cat" class="col-sm-2 col-form-label">Customer Category</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="customer_cat" id="customer_cat" class="form-control form-control-sm">
                                    <option value="" disabled selected>Select....</option>
                                </select>
                            </div>
                        </div>
                        <label for="project_name" class="col-sm-2 col-form-label">Project Name</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="project_name" id="project_name"
                                    class="form-control form-control-sm" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="project_site" class="col-sm-2 col-form-label">Project Site</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="project_site" id="project_site"
                                    class="form-control form-control-sm" value="">
                            </div>
                        </div>
                        <label for="customer_po" class="col-sm-2 col-form-label">Customer PO NO</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="customer_po" id="customer_po"
                                    class="form-control form-control-sm" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="po_date" class="col-sm-2 col-form-label">Po Date</label>
                        <div class="col-md-4">
                            <div class="form-group">

                                <input type="text" name="po_date" id="po_date"
                                    class="form-control form-control-sm datetimepicker" value="">
                            </div>
                        </div>
                    </div>
                    <div class="py-3 text-lg leading-7 font-semibold"><a href="#"
                            class="underline text-gray-900 dark:text-white"><u>Terms & Conditions</u></a></div>
                    <div class="row">
                        <label for="EMD" class="col-sm-2 col-form-label">EMD</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <textarea name="EMD" id="EMD" class="form-control form-control-sm" value=""> </textarea>
                            </div>
                        </div>
                        <label for="SD" class="col-sm-2 col-form-label">SD</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <textarea name="SD" id="SD" class="form-control form-control-sm" value=""> </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="payment_terms" class="col-sm-2 col-form-label">Payment Terms</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <textarea name="payment_terms" id="payment_terms" class="form-control form-control-sm"
                                    value=""> </textarea>
                            </div>
                        </div>
                        <label for="payment_mode" class="col-sm-2 col-form-label">Payment Mode</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="payment_mode" id="payment_mode" class="form-control form-control-sm">
                                    <option value="" selected disabled>Select....</option>
                                    <option value="DD">DD</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="Elec-Transfer">Elec-Transfer</option>
                                    <option value="LC">LC</option>
                                    <option value="COT(cash on Time)">COT(cash on Time)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="delivery_terms" class="col-sm-2 col-form-label">Delivery Terms</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="delivery_terms" id="delivery_terms" class="form-control form-control-sm">
                                    <option value="" disabled selected>Select....</option>
                                    <option value="EXW">EXW</option>
                                    <option value="FCA">FCA</option>
                                    <option value="FAS">FAS</option>
                                    <option value="FOB">FOB</option>
                                    <option value="CFR">CFR</option>
                                    <option value="CIF">CIF</option>
                                    <option value="CPT">CPT</option>
                                    <option value="CIP">CIP</option>
                                    <option value="DAF">DAF</option>
                                    <option value="DES">DES</option>
                                    <option value="DEQ">DEQ</option>
                                    <option value="DDU">DDU</option>
                                    <option value="DDP">DDP</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <label for="location" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="location" id="location" class="form-control form-control-sm"
                                    value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="other_terms" class="col-sm-2 col-form-label">Other Terms</label>
                        <div class="col-md-10">
                            <div class="form-group">
                                <textarea name="other_terms" id="other_terms" class="form-control form-control-sm"
                                    value=""> </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label for="delivery_period" class="col-sm-2 col-form-label">Delivery Period</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="delivery_period" id="delivery_period"
                                    class="form-control form-control-sm" value="">
                            </div>
                        </div>
                        <label for="liquidate_damage" class="col-sm-2 col-form-label">Liquidate Damage</label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="liquidate_damage" id="liquidate_damage"
                                    class="form-control form-control-sm">
                                    <option value="" selected disabled>Select....</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="ld_terms" class="col-sm-2 col-form-label">LD Terms</label>
                        <div class="col-md-10">
                            <div class="form-group">
                                <textarea name="ld_terms" id="ld_terms" class="form-control form-control-sm"
                                    value=""> </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="warranty" class="col-sm-2 col-form-label">Warranty /Guarantee</label>
                        <div class="col-md-10">
                            <div class="form-group">
                                <textarea name="warranty" id="warranty" class="form-control form-control-sm"
                                    value=""> </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="statutory" class="col-sm-2 col-form-label">Statutory</label>
                        <div class="col-md-10">
                            <div class="form-group">
                                <textarea name="statutory" id="statutory" class="form-control form-control-sm" value=""> </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="spl_instruction" class="col-sm-2 col-form-label">Special Instruction</label>
                        <div class="col-md-10">
                            <div class="form-group">
                                <textarea name="spl_instruction" id="spl_instruction" class="form-control form-control-sm"
                                    value=""> </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="remarks" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-md-10">
                            <div class="form-group">
                                <textarea name="remarks" id="remarks" class="form-control form-control-sm" value=""> </textarea>
                            </div>
                        </div>
                    </div>
                    <div id="sale-tax" style="">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <label>GST for </label>&nbsp;&nbsp;
                                <label>
                                    <input type="radio" name="tax" id="tax" value="intra"> Intra GST (SGST + CGST)
                                    <input type="radio" name="tax" id="tax" value="integrated"> Integrated GST (IGST)
                                    <!-- <input type="radio" name="tax" id="tax" value="territory"> Union Territory GST(UTGST)-->
                                    <input type="radio" name="tax" id="tax" value="no"> No GST
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="temptable">
                        </div>
                    </div>
                    </br>
                    </br>
                    <div class="row">
                        <div class=" col-sm-1"></div>
                        <div class=" col-sm-2" align="left"><button type="button" name="add" id="add"
                                style="display:none" class="btn btn-info btn-xs btn1">Add Item</button>
                            <button type="button" name="add1" id="add1" class="btn btn-info btn-xs btn1"
                                style="display:none">Add Item</button>
                        </div>
                        <div class=" col-sm-2" align="left"><button type="button" name="cons_item" id="cons_item"
                                style="display:none" class="btn btn-info btn-xs btn1">Consolidate Items</button></div>
                        <div class=" col-sm-1"></div>
                        <div class=" col-sm-2" align="left"><button type="button" name="submit_order" id="submit_order"
                                style="display:none" class="btn btn-success btn-xs btn1">Submit order</button></div>
                    </div>
                </form>
                <div id="bottom_panel" style="">
                    <!--style="display:none"-->
                    <div class="panel-body panelcontent" style="padding-top:2px">
                        <form name="salesorder_form1" id="salesorder_form1" method="POST">

                            <label class='redboldbottom' style="color: red;">
                                <?php
                     if (!empty($errmsg)) {
                        echo $errmsg;
                     }
                     ?>
                            </label>
                            <div class="row">

                                <label for="remarks" class="col-sm-2 col-form-label">Order SI : <span
                                        id="or_no"></span></label>
                            </div>
                            </br>
                            <div class="row">

                                <label for="hsn" class="col-sm-2 col-form-label">HSN/SAC Code</label>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="hsn" id="hsn" class="form-control">
                                            <option>Select....</option>


                                        </select>

                                    </div>


                                </div>
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-md-5">
                                    <div class="form-group">

                                        <textarea name="description" id="description" class="form-control"
                                            value=""> </textarea>

                                    </div>


                                </div>

                            </div>

                            <div class="row">
                                <label for="uom" class="col-sm-1 col-form-label">UOM</label>
                                <div class="col-md-2">
                                    <div class="form-group">

                                        <select name="uom" id="uom" class="form-control">
                                            <option>Nos</option>
                                            <option>Kg</option>
                                            <option>Mtrs</option>
                                            <option>Ltrs</option>
                                        </select>
                                    </div>
                                </div>

                                <label for="uom" class="col-sm-1 col-form-label">Qty</label>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <input type="text" name="qty" id="qty" class="form-control" value="">
                                    </div>
                                </div>

                                <label for="uom" class="col-sm-2 col-form-label">Unit Price</label>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="unit_price" name="qty" id="unit_price" class="form-control"
                                            value="">
                                    </div>
                                </div>
                                <label for="amt" class="col-sm-1 col-form-label">Amt</label>
                                <div class="col-md-2">
                                    <div class="form-group">

                                        <input type="text" name="amount" id="amount" class="form-control" value="">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <label for="tcs" class="col-sm-1 col-form-label">TCS%</label>
                                <div class="col-md-2">
                                    <div class="form-group">

                                        <input type="tcs" name="tcs" id="tcs" class="form-control" value="">
                                    </div>
                                </div>

                                <label for="estimated_rmc" class="col-sm-2 col-form-label">Estimated RMC</label>
                                <div class="col-md-2">
                                    <div class="form-group">

                                        <input type="text" name="estimated_rmc" id="estimated_rmc" class="form-control"
                                            value="">
                                    </div>
                                </div>

                                <label for="dwg_app_date" class="col-sm-2 col-form-label">Dwg App Date</label>
                                <div class="col-md-2">
                                    <div class="form-group">

                                        <input type="text" name="dwg_app_date" id="dwg_app_date" class="form-control"
                                            value="">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <label for="tcs" class="col-sm-1 col-form-label">Insp Date</label>
                                <div class="col-md-2">
                                    <div class="form-group">

                                        <input type="text" name="tcs" id="tcs" class="form-control" value="">
                                    </div>
                                </div>

                                <label for="estimated_rmc" class="col-sm-2 col-form-label">Estimated RMC</label>
                                <div class="col-md-2">
                                    <div class="form-group">

                                        <input type="text" name="estimated_rmc" id="estimated_rmc" class="form-control"
                                            value="">
                                    </div>
                                </div>

                                <label for="dwg_app_date" class="col-sm-2 col-form-label">Dwg App Date</label>
                                <div class="col-md-2">
                                    <div class="form-group">

                                        <input type="text" name="dwg_app_date" id="dwg_app_date" class="form-control"
                                            value="">
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class=" col-sm-4" align="left"><button type="button" name="additem" id="additem"
                                        class="btn   btn-success  btn-xs btn1">Item Submit</button></div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
$(function() {
    $("#add").show();
    /*$('#order_date,#po_date').datepicker({
          autoclose: true,
          zIndex: 2048,
          dateFormat: 'yy-mm-dd',
          changeMonth: true,
          changeYear: true
      });*/

});
</script>
@endpush