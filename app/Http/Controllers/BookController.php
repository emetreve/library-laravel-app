<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    public function destroy(Book $book): RedirectResponse
	{
        $book->authors()->detach();
		$book->delete();

		return back()->with('success', "Movie deleted successfully!");
	}

    public function create(): View
	{
		return view('admin.book.create', [
			'authors'=> Author::all(),
		]);
	}

    public function store(StoreBookRequest $request): RedirectResponse
	{
		$attributes = $request->validated();

        $book = Book::create($attributes);

        $authors = $request->input('authors');

		$book->authors()->sync($authors);

		return redirect(route('dashboard'))->with('success', "Book created successfully!");
	}
}
