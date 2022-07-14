<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    /**
     * @var Post
     */
    protected $post;

    public function __construct(Post $post){
        $this->post = $post;
    }

    public function save($data){
        $this->post->title = $data['title'];
        $this->post->description = $data['description'];

        $this->post->save();

        return $this->post->refresh();

    }
}