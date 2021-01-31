<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Requests\MessageRequest;
use App\Services\MessageService;

class MessageController extends Controller
{
    private $service;

    public function __construct(MessageService $messagesService)
    {
        $this->service = $messagesService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('message.index',[
            'messages' => $this->service->getAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth()->check())
            return redirect('/login');
        return view('message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $request MessageRequest
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
        $this->service->create($request->validated());
        return response()->redirectTo('/messages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view('message.show', ['message'=>$message]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return view('message.edit', ['message'=>$message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(MessageRequest $request, Message $message)
    {
        $message->fill($request->validated())->save();
        return redirect('/messages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect('/messages');
    }
}
