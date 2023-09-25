<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;


class AuthController extends Controller
{
    public function signup(SignupUserRequest $request): RedirectResponse
	{
		$credentials = $request->validated();
		$credentials['password'] = bcrypt($credentials['password']);

		User::create($credentials);

        return redirect()->route('login.index')->with('success', 'You have successfully signed up. Please log in.');
	}
}
