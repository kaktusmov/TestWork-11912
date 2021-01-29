<?php

namespace App\Repositories;

use App\Models\Message;

class MessageRepository {

    protected $model;

    public function __construct(Message $message)
    {
        $this->model = $message;
    }

    public function create($data)
    {
        return $this->model->fill($data)->save();
    }
}