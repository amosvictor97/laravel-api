<?php

namespace App\Repositories;

use App\Models\Book;

class BookRepository
{
    /**
     * @var Book
    */
    protected $book;

    public function __construct(Book $book){
        $this->book = $book;
    }

    public function save($data){
        $this->book->title = $data['title'];
        $this->book->description = $data['description'];

        $this->book->save();
        return $this->book->refresh();
    }
}