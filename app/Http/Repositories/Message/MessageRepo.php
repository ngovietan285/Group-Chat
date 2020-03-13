<?php


namespace App\Http\Repositories\Message;


use App\Message;

class MessageRepo implements MessageRepoInterface
{
    private $message;
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function getAll()
    {
        return $this->message->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }
}
