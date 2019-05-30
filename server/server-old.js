/*
Node.js Server example
Runnig on port 1771
*/
'use strict'

var net=require('net');
var http=require('http');
var url=require('url');

var listener=net.createServer((c)=>{
    c.on('data',(data)=>{
        console.log(data.toString());
        c.end();
    });
    c.on('end',()=>{

    });
    c.on('err',(err)=>{
        throw err;
    });
}).listen(1771, ()=>{
    console.log('Server is running on port 1771.');
});