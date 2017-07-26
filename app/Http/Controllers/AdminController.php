<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;
use Redirect;
use Validator;
use Illuminate\Suppot\Facades\Input;
use App\Admin;
use App\Jamaah;

class AdminController extends Controller
{

    public function index(Request $request)
    {
    	$rules = [
            'name' => 'required|string|max:191',
            'email' => 'required|string|max:191|unique:admin,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string',
        ];

        $customMessages = [
            'required' => 'Wajib diisi',
            'unique' => 'Maaf, :attribute telah digunakan',
            'min' => 'Panjang :attribute minimal :min karakter',
            'confirmed' => 'Password harus cocok',
        ];

        $this->validate($request, $rules, $customMessages);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->no_hp = $request->phone;
        $admin->save();

        return redirect('/');
    }

    public function login(Request $request)
    {
    	$email = $request->email;
    	$password = $request->password;

    	if (Auth::attempt(['email' => $email, 'password' => $password])) {
    		
    		$role = Admin::where('email', '=', $email)->pluck('role')->first();

    		session(['email'=>$email, 'role'=>$role]);

    		if ($role == 'admin') {
    			return redirect('admin/daftar-jamaah');
    		} else {
    			return redirect('/');
    		}

    	} else {
            Session::flash('message', "Invalid credentials, Please try again");
            $message = "Email/Password Salah";
            return view('admin.login', compact('message'));
        }
    }

    public function logout()
    {
    	Session::flush ();
        Auth::logout ();
        return redirect('admin/login');
    }

    public function daftarJamaah(){
    	$role = Session::get('role');
        if ($role=='admin') {
        	$jamaah = Jamaah::all();
        	$nav = 'active';
        	return view('admin.tampil-jamaah', ['jamaah' => $jamaah, 'class' => $nav]);
        } else {
        	return view('pages.form-registrasi');
        }
    }
}
