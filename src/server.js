const PHPServer = require('php-server-manager')
const express = require('express')
const app = express()

const PORT = process.env.PORT || 5000
const HOST = process.env.HOST || 'localhost' //'127.0.0.1'

const server = new PHPServer({
    port: PORT,
    host: HOST,
    directory: 'src/public-page',
    //script: 'src/public-page/index.php',
    directives: {
        display_errors: 1,
        expose_php: 0
    },
    config: 'php'
})

server.run()

/*app.get('/', function(req, res){
    res.send('Hi!')
})*/

app.listen(PORT, function() {
    console.log('Servidor web escuchando en el puerto '+PORT)
})