<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookRequest;
use App\Services\BookService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller{
    public function create(CreateBookRequest $request)
    {
        $bookService = new BookService();

        return $bookService->createBook($request->all(), Auth::id());
    }
    public function list()
    {
        $bookService = new BookService();

        return $bookService->listBooks();
    }
    public function listBook($id)
    {
        $bookService = new BookService();

        return $bookService->listBookById($id);
    }
    public function update(Request $request, $id)
    {
        $bookService = new BookService();

        return $bookService->updateBook($request->all(), $id);
    }
    public function remove($id)
    {
        $bookService = new BookService();

        return $bookService->removeBook($id);
    }
}
