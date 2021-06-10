const http = require('http');
const fs = require('fs');
var path = require('path');

const port = 3000;

const server = http.createServer(function (request, response){
    console.log('request ', request.url);

    let filePath = '.' + request.url;
    if (filePath === './') {
        filePath = './Homepage/homepage.html';
    }
    //if the URL sent is example.org, it will be interpreted as example.org/homepage.html.

    const extname = String(path.extname(filePath)).toLowerCase();

    const mimeTypes = {
        '.html': 'text/html',
        '.js': 'text/javascript',
        '.css': 'text/css',
        '.json': 'application/json',
        '.png': 'image/png',
        '.jpg': 'image/jpg',
        '.gif': 'image/gif',
        '.svg': 'image/svg+xml',
        '.wav': 'audio/wav',
        '.mp4': 'video/mp4',
        '.ttf': 'application/font-ttf',
        '.otf': 'application/font-otf',
    };

    const contentType = mimeTypes[extname] || 'application/octet-stream';

    fs.readFile(filePath, function(error, content) {
        if (error) {
            if (error.code === 'ENOENT') {
                fs.readFile('./404.html', function (error, content) {
                    response.writeHead(404, {'Content-Type': 'text/html'});
                    response.end(content, 'utf-8');
                });
            } else {
                response.writeHead(500);
                response.end('Check with the site admin for error: ' + error.code + ' ..\n');
            }
        }
        else{
            response.writeHead(200, { 'Content-Type': contentType });
            response.end(content, 'utf-8');
        }
    });
});

server.listen(port);