<?php

namespace App\Services;

use App\Models\Book;
use App\Models\User;

class BookService {
    public function createBook(array $data, $id){
        $newBook = new Book($data);
        $newBook->author = $id;
        $newBook->save();

        return $newBook;
    }
    public function listBooks(){
        return Book::all();
    }
    public function updateBook(array $data, $id){
        $findBook = Book::find($id);
        $findBook->fill($data);
        $findBook->save();

        return $findBook;
    }
    public function removeBook($id){
        $book = Book::find($id);
        $book->delete();

        return response(status: 204);
    }
}
