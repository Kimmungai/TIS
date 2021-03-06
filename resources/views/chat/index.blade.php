<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css" />
    <title>Chatroom</title>
  </head>
  <body>
    <div id="app">
      <h1>Chatroom<span class="badge pull-right">@{{ usersInRoom.length }}</span></h1>
      <chat-message></chat-message>
      <chat-log :messages="messages"></chat-log>
      <chat-composer v-on:messagesent="addMessage"></chat-composer>
    </div>
    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
