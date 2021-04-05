<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Customer;
use App\Models\Hsncode;
use App\Models\Supplier;
use App\Models\Category_Purchase;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{

    public function user()
    {
        return view('admin.user', [
            'users' => User::all(),
        ]);
    }

    public function usercreate()
    {
        return view('admin.usercreate');
    }


    public function userstore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:5',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with(['status' => 'User Created successfully.']);
    }

    public function useredit($id)
    {
        return view('admin.edit-user', [
            'user' => User::find($id),
        ]);
    }

    public function userupdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != '') {
            $user->forceFill([
                'password' => Hash::make($request->password),
            ]);
        }
        $user->save();
        return redirect('/user');
    }
    public function customerentry()
    {
        $admins = Customer::get();

        return view('customer.customerentry', ['admins' => $admins]);
    }

    public function searchcustomer(Request $request)
    {

        if ($request->customername != '') {

            $admins = Customer::where(['customername' => $request->customername])->get();
            return view('customer.customerentry', ['admins' => $admins]);
        }
    }
    public function customercreate()
    {
        return view('customer.customercreate');
    }
    public function customerstore(Request $request)
    {
        $customers = new Customer;
        $customers->customername = $request->customername;
        $customers->address = $request->address;
        $customers->panno = $request->panno;
        $customers->gstno = $request->gstno;
        $customers->save();
        //return view('customer.customerentry');
        return redirect('/customerentry');
    }
    public function customeredit($id)
    {
        return view('customer.customeredit', [
            'item' => Customer::find($id),
        ]);
    }
    public function customerupdate(Request $request, $id)
    {
        $items = Customer::findorfail($id);
        $items->customername = $request->customername;
        $items->address = $request->address;
        $items->panno = $request->panno;
        $items->gstno = $request->gstno;
        $items->save();
        return redirect('/customerentry');
    }
    public function destroy(Request $request, $id)
    {
        $ite = Customer::findorfail($id);
        $ite->delete();
        return redirect('/customerentry');
    }
    public function hsn()
    {

        $hsn = Hsncode::get();

        return view('hsn.hsn', ['hsn' => $hsn]);
    }

    public function searchhsn(Request $request)
    {

        if ($request->code != '') {

            $hsn = Hsncode::where(['code' => $request->code])->get();
            return view('hsn.hsn', ['hsn' => $hsn]);
        }
    }
    public function hsncreate()
    {
        return view('hsn.hsncreate');
    }

    public function hsnstore(Request $request)
    {
        $codes = new Hsncode;
        $codes->division = $request->division;
        $codes->code = $request->code;
        $codes->percentage = $request->percentage;
        $codes->save();
        //return view('customer.customerentry');
        return redirect('/hsn');
    }
    public function hsnedit($id)
    {
        $hsnsac = Hsncode::find($id);
        return view('hsn.hsnedit', ['hsnsac' => $hsnsac]);
    }
    public function hsnupdate(Request $request, $id)
    {
        //$up = new Hsncode ;
        $up = Hsncode::findorfail($id);
        $up->division = $request->division;
        $up->code = $request->code;
        $up->percentage = $request->percentage;
        $up->save();
        return redirect('/hsn');
    }
    public function delete(Request $request, $id)
    {
        $delete = Hsncode::findorfail($id);
        $delete->delete();
        return redirect('/hsn');
    }

    public function supplier()
    {

        $test = Supplier::get();

        return view('suppliermaster.supplierentry', ['test' => $test]);
    }

    public function searchsupplier(Request $request)
    {

        if ($request->suppliername != '') {

            $test = Supplier::where(['suppliername' => $request->suppliername])->get();
            return view('suppliermaster.supplierentry', ['test' => $test]);
        }
    }

    public function suppliercreate()
    {
        return view('suppliermaster.suppliercreate');
    }
    public function supplierstore(Request $request)
    {
        $sub = new Supplier;
        $sub->suppliername = $request->suppliername;
        $sub->supplieraddress = $request->supplieraddress;
        $sub->cinno = $request->cinno;
        $sub->gstno = $request->gstno;
        $sub->contactperson = $request->contactperson;
        $sub->contactno = $request->contactno;
        $sub->contactemail = $request->contactemail;
        $sub->save();

        return redirect('/supplierentry');
    }
    public function supplieredit($id)
    {
        $tests = Supplier::find($id);
        return view('suppliermaster.supplieredit', ['tests' => $tests]);
    }
    public function supplierupdate(Request $request, $id)
    {

        $ups = Supplier::findorfail($id);
        $ups->suppliername = $request->suppliername;
        $ups->supplieraddress = $request->supplieraddress;
        $ups->cinno = $request->cinno;
        $ups->gstno = $request->gstno;
        $ups->contactperson = $request->contactperson;
        $ups->contactno = $request->contactno;
        $ups->contactemail = $request->contactemail;
        $ups->save();
        return redirect('/supplierentry');
    }
    public function deletes(Request $request, $id)
    {
        $deletes = Supplier::findorfail($id);
        $deletes->delete();
        return redirect('/supplierentry');
    }
    // public function categoryentry()
    // {


    //     $code = Categoryspecific::get();

    //     return view('category.categoryentry', ['code' => $code]);
    // }
    // public function categorycreate()
    // {
    //     return view('category.categorycreate');
    // }
    // public function categorystore(Request $request)
    // {
    //     $subject = new Category;
    //     $subject->class = $request->class;
    //     $subject->categoryname = $request->categoryname;
    //     $subject->categorycode = $request->categorycode;
    //     $subject->save();

    //     return redirect('/categorycreate');
    // }

    // public function specificationstore(Request $request)
    // {
    //     $down = new Categoryspecific;
    //     $down->category = $request->category;
    //     $down->specificationcode = $request->specificationcode;
    //     $down->specification = $request->specification;
    //     $down->uom = $request->uom;
    //     $down->decription = $request->decription;
    //     $down->make = $request->make;
    //     $down->save();
    //     return redirect('/categoryentry');
    // }
    // public function categoryedit($id)
    // {
    //     $codemaster = Categoryspecific::find($id);
    //     return view('category.categoryedit', ['codemaster' => $codemaster]);
    // }

    // public function updatecs(Request $request, $id)
    // {
    //     //$up = new Hsncode ;
    //     $ups = Categoryspecific::findorfail($id);
    //     $ups->decription = $request->decription;
    //     $ups->specificationcode = $request->specificationcode;

    //     $ups->uom = $request->uom;

    //     $ups->make = $request->make;
    //     $ups->save();
    //     return redirect('/categoryentry');
    // }
    // public function deleted(Request $request, $id)
    // {
    //     $deleted = Categoryspecific::findorfail($id);
    //     $deleted->delete();
    //     return redirect('/categoryentry');
    // }
    // public function search(Request $request)
    // {

    //     if ($request->specificationcode != '') {

    //         $code = Categoryspecific::where(['specificationcode' => $request->specificationcode])->get();
    //         return view('category.categoryentry', ['code' => $code]);
    //     }
    // }
    public function category_purchase()
    {
        return view('Purchase.category');
    }
    public function category_store(Request $request){
        $category=new Category_Purchase;
        $category->category_name=$request->category_name;
        $category->class=$request->input('category_class');
        $category->save();
        return redirect('/category');

    }
    public function category_list(){
        return view('Purchase.category_list');
    }
    public function category_edit($id)
    {
        return view('Purchase.category_edit', [
            'category_purchase' => Category_Purchase::find($id),
        ]);
    }
    public function categoryupdate(Request $request, $id)
    {
        $category_purchase = Category_Purchase::findorfail($id);
        $category_purchase->category_name=$request->category_name;
        $category_purchase->class=$request->input('category_class');
        $category_purchase->save();
        // return redirect('/category');
    }
    public function category_delete(Request $request,$id){
        $category_purchase=Category_Purchase::findorfail($id);
        $category_purchase->category_name=$request->category_name;
        $category_purchase->class=$request->input('category_class');
        $category_purchase->delete();
        return redirect('/category');
    }
    
}
