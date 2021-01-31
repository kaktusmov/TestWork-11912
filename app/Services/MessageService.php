<?php

namespace App\Services;

use App\Repositories\MessageRepository;
use Illuminate\Support\Facades\Auth;

class MessageService
{
    protected $repo;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->repo = $messageRepository;
    }

    public function create($data)
    {
        $data['user_id'] = Auth::user()->id;
        return $this->repo->create($data);
    }

    public function getAll()
    {
        return $this->repo->all();
    }
}