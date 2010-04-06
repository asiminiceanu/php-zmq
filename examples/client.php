<?php

/*
    The client sends two messages using two different sockets
    and then exits
*/

/* Create new queue object */
$queue = new ZeroMQ(ZeroMQ::SOCKET_REQ, "MySock1");
$queue->connect("tcp://127.0.0.1:5555");

/* Assign socket 1 to the queue, send and receive */
var_dump($queue->send("hello there!")->recv());

var_dump($queue->getEndPoints());