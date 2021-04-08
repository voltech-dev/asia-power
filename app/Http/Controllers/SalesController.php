<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class SalesController extends Controller
{
    

    public function salesadd()
    {
        return view('sales.sales-add');
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
   
}
