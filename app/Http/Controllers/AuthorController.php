<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;

class AuthorController extends Controller
{
    public function index () {
        return view('admin.author.index', [
			'authors'  => Author::latest()->get(),
		]);
    }

    public function store (StoreAuthorRequest $request): RedirectResponse
    {
        $attributes = $request->validated();

        Author::create($attributes);

		return redirect(route('authors.index'))->with('success', "Author created successfully!");
    }
}
