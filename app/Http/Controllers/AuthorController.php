<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;

class AuthorController extends Controller
{
    public function __invoke(StoreAuthorRequest $request): RedirectResponse
    {
        $attributes = $request->validated();

        Author::create($attributes);

		return redirect(route('dashboard'))->with('success', "Author created successfully!");
    }
}
