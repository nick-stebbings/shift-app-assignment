<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function fetch(Request $request)
    {
        dd('Unimplemented');
    }

    public function upsert(Request $request, $id)
    {
        User::where('id',$id)->update(['email' => $request->email,
        'password' => Hash::make($request->password)]);
        return redirect('/')->with('msg', 'Success! Account linked to your record'); 
    }

    public function update(Request $request)
    {
        $profile = [ 'id' => $request->user()->id, 'name' => Auth::user()->name, 'email' => Auth::user()->email];
        return view('profile.update', compact('profile'));
    }

    
    public static function assignEmployee($user_id, $dob, $employee_id)
    {
        $found = Employee::all()
        ->where('dob', '=', $dob)
        ->where('employee_identifier', '=',$employee_id);

        if($found->count() !== 1) {

            return redirect()->back()->with('msg', 'Error');  
        } else {
            $emp_id = $found->values()->toArray()[0]['id'];
            User::where('id',$user_id)->update(['employee_id'=>$emp_id]);
            return redirect()->back()->with('msg', 'Success! Account linked to your record');   
        }
    }
}
