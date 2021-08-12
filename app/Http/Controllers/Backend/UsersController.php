<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(3);
        return view('backend.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->validate([
           'name'=>'required',
           'email' => 'unique:users',
            'password' => 'required',
       ]);

        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/images/user/',$document_name);
        $user = User::create([
            'name' => $request->name,
            'image'=>$document_name,
            'address'=>$request->address,
            'email'=>$request->email,
            'password' => bcrypt($request->password)
        ]);

//

        Session::flash('success','User Created Successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('backend.users.edit',compact('users'));
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

        $request->validate([
            'email' => 'unique:users,email,'.$id,
            'password' => 'required'
        ]);
        $update = User::find($id);
        $d = User::find($id);
        if(!empty($request->file('image'))) {
            if (!empty($d->image)) {
                unlink('assets/images/user/' . $d->image);
            }
            $document = $request->file('image');
            $document_name = rand() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path() . '/assets/images/user/', $document_name);
            $update = User::update([
                'name' => $request->name,
                'image' => $document_name,
                'address' => $request->address,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

        }
        else{
            $update->update([
                'name' => $request->name,
                'address'=>$request->address,
                'email'=>$request->email,
            ]);
        }
        if(!empty($request->password)){
            $update->update([
                'password' => bcrypt($request->password),
            ]);
        }


//        $update->save();

        Session::flash('success','User Created Successfully');

        return redirect()->route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id);
        if(!empty($delete->image)){
            unlink('assets/images/user/'.$delete->image);
        }
        $delete->delete();
        Session::flash('success','The user Deleted Successfully');
        return redirect()->route('user.index');

    }
}
