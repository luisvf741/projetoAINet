<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use App\Http\Requests\UpdateUserRequest;
use App\Departamento;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function listUsers()
    {
    	$users = User::all();
    	return view('partials.listUsers', compact('users'));
    }
	
    public function profile(User $user)
    {
    	return view('partials.profile', compact('user'));
    }

	public function edit(User $user)
    {
        $departmentsName = DB::table('departments')->pluck('name');   
        return view('partials.edit_user', compact('user','departmentsName'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
    	if (!empty($request['password'])) {
    		$user->fill($request->all());
    		$user->password = Hash::make($request->password);

    	}else{
    		$user->fill($request->except('password'));
    	}
        $user->save();
        return redirect()->route('profile',$user)->with('success', 'Profile updated successfully!');

    }

    public function getDepartmentName(User $user)
    {
        $departmentName = DB::table('departments')
                                ->where('id',$user->department_id)->pluck('name');
        return $departmentName;
    }

    public static function getDepartmentsName()
    {
        $departmentsName = DB::table('departments')->pluck('name');
        return $departmentsName;
    }
}
