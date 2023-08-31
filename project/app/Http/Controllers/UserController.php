<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //


public function store(request $request){
    $validatedData = $request->validate([
        'name' => 'required|max:20',
        'email' => 'required|email',
        'password' => 'required|min:7',
        'age' => 'required|numeric|min:12|max:100',
    ]);
    $image = $request->file('img')->getClientOriginalName();
    $path = $request->file('img')->storeAs('imgs' , $image , 'mo7s');


    DB::table('users')->insert([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => $request['password'],
        'age' => $request['age'],
        'img' => $path,
    ]);

    return view('login');

}


public function login(request $request){
    $user = DB::table('users')->where('email' , $request['email'])->first();

    if($user && $user->password == $request['password']){
        session()->put('user_id' , $user->id);
        return redirect()->Route('userHome');
    }
    else{
        $admin = DB::table('admins')->where('email' , $request['email'])->first();
        if($admin && $admin->password == $request['password']){
            session()->put('admin_id' , $admin->admin_id);
            return redirect()->Route('adminHome');
        }
        else return redirect()->back()->with('error', 'Invalid email or password.');
    }
}


public function show(){
    $products = DB::table('products')->select('product_id' , 'product_name' , 'author' , 'release_date' , 'img' , 'price')->get();
    return view('userHome' , compact('products'));
}

public function buy($id){
    $user_id = session('user_id');
    DB::table('sales')->insert([
        'product_id' => $id,
        'user_id' => $user_id,
    ]);
    return redirect()->route('userHome');
}


public function logOut(){
    session()->flush();
    return view('login');
}


public function profile(){
    $user = DB::table('users')->where('id' , session('user_id'))->first();
    return view('userProfile' , compact('user'));
}


public function admin(){
    $products = DB::table('products')->select('product_id' , 'product_name' , 'author' , 'release_date' , 'img' , 'price')->get();
    return view('adminHome' , compact('products'));
}



public function delete($id){
    $deleted = DB::table('products')->where('product_id' , $id)->delete();
    return redirect()->route('adminHome');
}

public function addPage(){
    return view('addProduct');
}


public function addProduct(request $request){
    $validatedData = $request->validate([
        'name' => 'required|max:20',
        'author' => 'required|max:20',
        'category_id' => 'required|numeric|min:1|max:3',
        'release_date' => 'required|date|before:yesterday',
        'price' => 'required|numeric|min:1|max:1000',
    ]);
    $image = $request->file('img')->getClientOriginalName();
    $path = $request->file('img')->storeAs('imgs' , $image , 'mo7s');

    DB::table('products')->insert([
        'product_name' => $request['name'],
        'author' => $request['author'],
        'category_id' => $request['category_id'],
        'release_date' => $request['release_date'],
        'img' => $path,
        'price' => $request['price'],
    ]);
    return redirect()->route('adminHome');
}

}
