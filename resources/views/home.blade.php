@extends('layouts.app')

@section('content')
<div class="container">


            <div class="row justify-content-center" id="app">
                <div class="col-md-8">
                    <li class="list-group-item active">Chat Room
                    <span class="badge badge-pill badge-danger">@{{numberOfUsers}}</span>
                    </li>

                    <ul class="list-group" v-chat-scroll>
                    <div class="badge badge-pill badge-success">@{{typing}}</div>
                    <message
                    v-for="value,index in chat.message"
                    :key=value.index
                    :color = chat.color[index]
                    :user = chat.user[index]
                    :time = chat.time[index]
                    >
                    @{{value}}</message>
                    </ul>
                    <input type="text" class="form-control" placeholder="Type your message" v-model='message' @keyup.enter ='send'>
                    <br>
                    <a href=""><span class="btn btn-warning btn-sm" @click.prevent='deleteSession'>Delete Chat</span></a>
                </div>
            </div>

</div>
@endsection
