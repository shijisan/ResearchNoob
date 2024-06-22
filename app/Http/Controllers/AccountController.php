<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateProfileRequest; // Custom request for profile update (optional)

class AccountController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('account', compact('user')); // View for account details
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = Auth::user();
        
        $user->update($request->validated());
        return redirect()->route('account.show')->with('success', 'Profile updated successfully!');
    }
    

    // Add additional methods for account management as needed
    // (e.g., change password)
}
