@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div id="app">
                {{csrf_field()}}
                <h1>Chatroom</h1>
                <chat-log :messages="messages"></chat-log>
                <chat-composer v-on:messagesent="addMessage"></chat-composer>

            </div>
        </div>
    </div>
</div>
@endsection
