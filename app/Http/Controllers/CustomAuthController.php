<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Session;
use Hash;

class CustomAuthController extends Controller
{
  public function home()
  {
    return view('homepage');
  }

  public function login(Request $request, User $users)
  {
    $request->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    if ( ! Auth::attempt($credentials))
   {
       return redirect('/home')->with('message', 'Login details are not valid!');
   }

   if (Auth::User()->status == 1)
   {
       return Redirect('admin');
   }

      return Redirect('dashboard');

  }

  public function signup()
  {
    return view('registration');
  }

  public function signupsave(Request $request)
  {
      $request->validate([
          'name' => 'required',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6',
      ]);

      $data = $request->all();
      $check = $this->create($data)->with('Have Signed-in');

      return redirect('dashboard');
  }

  public function create(array $data)
  {
    return User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password'])
    ]);
  }

  public function dashboard()
  {
      if(Auth::check()){
        return view('dashboard');
      }
      return redirect('/home');
  }

  public function sign0ut()
  {
    Session::flush();
    Auth::logout();

    return redirect('/home');
  }

  public function admin()
  {
    if(Auth::check()){
      return view('admin');
    }
    return redirect('/home');
  }


  // ----USER MANAGEMENT CRUD-----\\

  public function index()
  {
      return view('admin');
  }

  public function getUsers(User $users){
    $users = User::all();

    return view('show')->with('users', $users);
  }

  public function addSave(Request $request)
  {
      $request->validate([
          'name' => 'required',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6',
      ]);

      $data = $request->all();
      $check = $this->create($data)->with('User Added!');

      return redirect('admin');
  }

  public function destroy($id)
  {
    $user = User::where('id', $id)->firstorfail()->delete();

        return redirect()->back()->with('user', 'User Record deleted successfully.');
  }

  public function update(Request $request, $id)
  {
    $user = User::find($id);
    $input = $request->all();
    $user->fill($input)->save();

    return redirect()->back()->with('message', 'User Updated!');
  }

  public function roleIndex()
  {
    return view('role');
  }

  public function getRole(User $users){
    $users = User::all();

    return view('roles')->with('users', $users);
  }

  public function editRole(Request $request, $id)
  {
    $validate = $request->validate([
      'status' => ['required', 'integer']
    ]);
    User::find($id)->update([
      'status' => $request->status,
    ]);

    return redirect()->back()->with('message', 'Role Updated!');
  }

}
