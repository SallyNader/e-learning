<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
{
    $this->middleware('auth');
} 
    public function index()
    {
       

$users=User::all();
if(Auth::user()->flag == 'admin')

       return view('control.users.users',compact('users'));
       else
    return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
      $user=User::find($id);


if(Auth::user()->flag == 'admin')

    return view('control.users.edituser',compact('user'));
else
    return redirect("/");
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
        

$this->validate($request,[


'name'=>'required',
'email'=>'required|email',




    ]);


        $name=$request->get('name');
        $email=$request->get('email');
        $accepted=$request->get('accepted');

        $user=User::find($id);

        $user->name=$name;
        $user->email=$email;
        $user->accepted=$accepted;
        $user->save();


        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $user=User::find($id);
        $user->delete();

    return redirect()->back();
    }
}
