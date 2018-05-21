<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class DashboardController extends Controller
{

  public function __construct()
  {
    return $this->middleware('auth');
  }
    public function index()
    {
      $users      = count(User::all());
      $admins     = count(User::where('role',1)->get());
      $employees  = count(User::where('role',2)->get());
      $customers  = count(User::where('role',3)->get());
      return view('dashboard.index')
        ->withUsers($users)
        ->withAdmins($admins)
        ->withEmployees($employees)
        ->withCustomers($customers);
    }

    public function users()
    {
      $users  = User::paginate(10);
      return view('dashboard.users')
        ->withUsers($users);
    }

    public function userShow($user)
    {
      $user   =   User::find($user);
      return view('dashboard.userShow')
        ->withUser($user);
    }

    public function userUpdate(Request $request, $user)
    {
      $user = User::find($user);
      $user->role = $request->role;
      $user->save();
      Session::flash('success','User role updated successfully!');
      return redirect()->route('users.show',$user);
    }
}
