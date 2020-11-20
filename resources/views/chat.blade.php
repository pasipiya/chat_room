<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
<meta name="csrf_token" content="{{csrf_token()}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<style>
    .list-group{
        overflow-y: scroll;
        height: 200px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            <div class="col-md-6 offset-md-3">
                <li class="list-group-item active">Chat Room</li>
                <ul class="list-group" v-chat-scroll>         
                <message 
                v-for="value in chat.message" 
                :key=value.index 
                color="primary"
               
                >
                @{{value}}</message>  
                </ul>
                <input type="text" class="form-control" placeholder="Type your message" v-model='message' @keyup.enter ='send'>
            </div>
        </div>
    </div>

 
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>