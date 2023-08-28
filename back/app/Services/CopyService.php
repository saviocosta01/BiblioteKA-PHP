<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Book;
use App\Models\Copy;

class CopyService
{
    public function createCopy(array $data, $id)
    {
        $book = Book::find($id);

        if (!$book) {
            throw new AppError("Esse livro não existe", 404);
        }
        $newCopy = new Copy($data);
        $newCopy->book_id = intval($id);
        $newCopy->save();
        return $newCopy;
    }
    public function listCopies()
    {
        return Copy::all();
    }

    public function listCopyById($id)
    {
        $copy = Copy::find($id);
        return $copy;
    }
    public function updateCopy(array $data, $id)
    {
        $copy = Copy::find($id);
        if (!$copy) {
            throw new AppError("Essa cópia de livro não existe", 404);
        }
        $copy->fill($data);
        $copy->save();

        return $copy;
    }
    public function removeCopy($id)
    {
        $copy = Copy::find($id);
        if (!$copy) {
            throw new AppError("Essa cópia de livro não existe", 404);
        }
        $copy->delete();

        return response(status: 204);
    }
}
