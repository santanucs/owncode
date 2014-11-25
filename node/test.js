var normal = require('child_process').fork('sub.js', ['normal']);
var special = require('child_process').fork('sub.js', ['special']);

// Open up the server and send sockets to child
var server = require('net').createServer();
server.on('connection', function (socket) {

  // if this is a VIP
  if (socket.remoteAddress === '192.168.1.62') {
    special.send('socket', socket);
    return;
  }
  // just the usual dudes
  normal.send('socket', socket);
});
server.listen(1337);