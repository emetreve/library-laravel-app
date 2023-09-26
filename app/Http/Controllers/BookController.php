<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    public function destroy(Book $book): RedirectResponse
	{
        $book->authors()->detach();
		$book->delete();

		return back()->with('success', "Movie deleted successfully!");
	}
}
