<?php


namespace App\Http\Services\Message;


use App\Http\Repositories\Message\MessageRepoInterface;
use App\Message;

class MessageService implements MessageServiecInterface
{

    private $messageRepo;

    public function __construct(MessageRepoInterface $messageRepo)
    {
        $this->messageRepo = $messageRepo;
    }

    public function getAll()
    {
        return $this->messageRepo->getAll();
    }

    public function store($request)
    {
        $message = new Message();
        $message->message = $request->message;
        $message->user_id = $request->user_id;
        $this->messageRepo->store($message);
        return $message;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
