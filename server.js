/*const PHPServer = require('php-server-manager')
const express = require('express')

const app = express()
const PORT = process.env.PORT || 5000
const HOST = process.env.HOST || 'localhost' //'127.0.0.1'

const server = new PHPServer({
    port: PORT,
    host: HOST,
    directory: 'src/htdocs',
    directives: {
        display_errors: 1,
        expose_php: 0
    },
    config: 'php/php.ini',
    //php: 'php/php'
})

server.run()

app.get('/', function(req, res){
    res.send('Hi!')
})

app.listen(PORT, function(){
    console.log('Servidor web escuchando en el puerto ' + PORT)
})*/

const phpServer = require('node-php-server');
const express = require('express')

const app = express()
const PORT = process.env.PORT || 5000
const HOST = process.env.HOST || 'localhost' //'127.0.0.1'

// Create a PHP Server
phpServer.createServer({
    port: PORT,
    hostname: HOST,
    base: '.',
    keepalive: false,
    open: false,
    bin: 'php',
    router: __dirname + '/htdocs/index.php'
});

app.listen(PORT, function(){
    console.log('Servidor web escuchando en el puerto ' + PORT)
})