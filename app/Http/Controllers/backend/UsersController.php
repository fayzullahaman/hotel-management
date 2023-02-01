<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "Hello";
        $users = User::get();
        return view('backend.pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "hello world";
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,pdf,jpg,gif,svg|max:2048',
            'email' => 'required',
            'password' => 'required|string|min:4',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        if ($request->image) {
            $imageName = time() . '.' .                     $request->image->extension();
            $request->image->move(public_path('user_image'), $imageName);
            $user->image = $imageName;
        } else {
            $user->image = '';
        }
        // $product->product_image = $imageName;
        $user->save();
        // echo "Success";
        return redirect('admin/user')->with("msg", "User Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.pages.users', compact(product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user->delete();
        // echo "Success";
        return redirect('admin/user')->with("msg", "User Deltele");
    }
}
