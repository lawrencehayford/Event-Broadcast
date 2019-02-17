var app = require("express")();
var http = require("http").Server(app);
var io = require("socket.io")(http);
var Redis = require("ioredis");
var redis = new Redis();

//subscribe to messages on channel in laravel app
redis.subscribe("new-user", function(err, count) {
    console.log(count, " subcribed to this channel");
});

redis.on("message", function(channel, message) {
    console.log("Message Recieved: " + message);
    //parse data and emit on channel 'new-user'
    message = JSON.parse(message);
    io.emit("new-user", message);
});

//listen to node app on server 3000
http.listen(3000, function() {
    console.log("Listening on Port 3000");
});
