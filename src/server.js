const PHPServer = require('php-server-manager')
//const express = require('express')
//const app = express()
 
const server = new PHPServer({
    //port: 8000,
    //host: 'localhost',
    directory: 'src/public-page',
    //script: 'src/public-page/index.php',
    directives: {
        display_errors: 1,
        expose_php: 0
    }
})

server.run()

/*app.get('/', function(req, res){
    res.send('Hi!')
})

app.listen('5000', function() {
    console.log('Servidor web escuchando en el puerto 5000')
})*/