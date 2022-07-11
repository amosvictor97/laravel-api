<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\PostRepository;

class PostService
{
    /**
     * @var PostRepository
     */
    protected $postRepository;

    public function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;
    }

    public function savePostData($data){
        return $this->postRepository->save($data);
    }
}