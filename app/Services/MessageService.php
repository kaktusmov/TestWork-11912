<?php

namespace App\Services;

use App\Repositories\MessageRepository;

class MessageService
{
    protected $repo;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->repo = $messageRepository;
    }

    public function create($data)
    {
        return $this->repo->create($data);
    }
}