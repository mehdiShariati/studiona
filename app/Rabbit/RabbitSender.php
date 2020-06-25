<?php


namespace App\Rabbit;


use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitSender
{
    private $connection;
    private $channel;


    public function __construct()
    {
        $this->connection = new AMQPStreamConnection(
            'localhost',
            5672,
            'guest',
            'guest'
        );
        $this->channel = $this->connection->channel();

        $this->channel->queue_declare('fetch_comments', false, true, false, false);
    }

    public function send($data)
    {
        $msg = new AMQPMessage(
            $data,
            array('delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT)
        );

        $this->channel->basic_publish($msg, '', 'fetch_comments');



        $this->channel->close();
        $this->connection->close();
    }

}
