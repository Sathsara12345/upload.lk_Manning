<?php
namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    // Show the registration form
    public function create()
    {
        return view('auth.register');
    }

    // Store the registered user
    public function store(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'shop_name' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'customer_id' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the user and save to the database
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->shop_name = $request->shop_name;
        $user->owner_name = $request->owner_name;
        $user->customer_id = $request->customer_id;
        $user->save();

        // Log the user in after registration
        Auth::login($user);

        // Redirect to the home page or wherever you want
        return redirect()->route('dashboard');

    }
}
