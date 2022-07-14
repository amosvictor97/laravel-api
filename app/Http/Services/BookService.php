<?php

namespace App\Http\Services;

use App\Http\Repositories\BookRepository;

class BookService
{
    /**
     * @var BookRepository
     */
    protected $bookRepository;

    public function __construct(BookRepository $bookRepository){
        $this->bookRepository = $bookRepository;
    }

    public function save($data){
        return $this->bookRepository->save($data);
    }
}