<p>Listening for new user</p>
<script src="{{ asset('js/socket.io.js') }}"></script>
<script>
  var socket = io('http://192.168.10.10:3000');
  socket.on('connect', function(){
    console.log("socket connected");
  });
  socket.on('new-user', function(data){
      console.log(data);
  });
  socket.on('disconnect', function(){
      console.log("socket disconnected");
  });
</script>
