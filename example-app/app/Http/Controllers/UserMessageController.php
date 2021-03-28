<?php

namespace App\Http\Controllers;

use App\Models\UserMessage;
use App\Models\User;
use Illuminate\Http\Request;

class UserMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $user_id = auth()->id();
        $messages = User::find($user_id)->messages;

        // foreach ($messages as $message) {
        //     echo $message;
        // }
        // die();
        return view('user_messages/index', ['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserMessage  $userMessage
     * @return \Illuminate\Http\Response
     */
    public function show(UserMessage $userMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserMessage  $userMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(UserMessage $userMessage, $id)
    {
        //

        $message = UserMessage::find($id);
        return view('user_messages/edit',  ['message' => $message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserMessage  $userMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserMessage $userMessage)
    {
        //

        $request->validate([
            'message' => 'required'
        ]);
        $flight = $userMessage->find($request->id);
        $flight->message = $request->message;
        $flight->save();

        return redirect()->route('messages.index')
            ->with('success', 'Message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserMessage  $userMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserMessage $userMessage,$id)
    {
    
        $flight = $userMessage->find($id);
        $flight->delete();
        return redirect()->route('messages.index')->with('success', 'Message deleted successfully');
    }
}
