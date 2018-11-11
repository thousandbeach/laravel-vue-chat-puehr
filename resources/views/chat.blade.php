<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
            <div class="col-md-8 offset-md-2">
                <p class="list-group-item active">チャットルーム</p>
                <ul class="list-group" v-chat-scroll>
                    <my-message v-for="value, index in chat.message" :key=value.index :color=chat.color[index]
                                :user =chat.user[index]>@{{
                        value
                        }}</my-message>
                </ul>
                <input type="text" class="form-control" placeholder="メッセージを書こう..." v-model="message" @keyup.enter="send">
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>