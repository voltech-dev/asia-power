<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Customer;
use App\Models\Hsncode;


class AdminController extends Controller
{
    
    public function user()
    {
        return view('admin.user',[
            'users'=>User::all(),
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
        return view('admin.edit-user',[
            'user'=>User::find($id),
        ]);
    }

    public function userupdate(Request $request,$id)
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
       return view('customer.customerentry');
   }
   public function customercreate()
   {
       return view('customer.customercreate');
   }
   public function customerstore(Request $request)
   {
       $customers = new Customer ;
       $customers->customername= $request->customername;
       $customers->address= $request->address;
       $customers->panno= $request->panno;
       $customers->gstno= $request->gstno;
       $customers->save();
       //return view('customer.customerentry');
       return redirect('/customerentry');
   }
   public function customeredit($id)
    {
        return view('customer.customeredit',[
            'item'=>Customer::find($id),
        ]);
    }
    public function customerupdate(Request $request,$id)
    {
    $items = Customer::findorfail($id);
    $items->customername= $request->customername;
    $items->address= $request->address;
    $items->panno= $request->panno;
    $items->gstno= $request->gstno;
    $items->save();
    return redirect('/customerentry');
    }
    public function destroy(Request $request,$id){
        $ite = Customer::findorfail($id);    
        $ite->delete();
        return redirect('/customerentry');
        
    
    }
    public function hsn()
   {
       return view('hsn.hsn');
   }
   public function hsncreate()
   {
       return view('hsn.hsncreate');
   }
   
   public function hsnstore(Request $request)
   {
       $codes = new Hsncode ;
       $codes->division= $request->division;
       $codes->code= $request->code;
       $codes->percentage= $request->percentage;
       $codes->save();
       //return view('customer.customerentry');
       return redirect('/hsn');
   }
   public function hsnedit($id)
   {
    $hsnsac = Hsncode::find($id);
       return view('hsn.hsnedit',['hsnsac'=>$hsnsac]);
   }
   public function hsnupdate(Request $request,$id)
    {
//$up = new Hsncode ;
        $up = Hsncode::findorfail($id);
        $up->division= $request->division;
        $up->code= $request->code;
        $up->percentage= $request->percentage;
        $up->save();
    return redirect('/hsn');
    }
    public function delete(Request $request,$id){
        $delete = Hsncode::findorfail($id);    
        $delete->delete();
        return redirect('/hsn');
        
    
    }
}
