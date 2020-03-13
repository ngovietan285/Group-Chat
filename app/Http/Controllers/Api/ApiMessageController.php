<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Http\Services\Message\MessageServiecInterface;
use Illuminate\Http\Request;

class ApiMessageController extends Controller
{
    //

    private $messageService;

    public function __construct(MessageServiecInterface $messageService)
    {
        $this->messageService = $messageService;
    }

    public function index()
    {
        try{
            $messages = $this->messageService->getAll();
            $data = ['status'=>'success',
                'data'=>$messages];
            return response()->json($data, 200);
        } catch (\Exception $exception){
            $data = ['status'=>'errors',
                'message'=>$exception];
            return response()->json($data, 500);
        }
    }

    public function store(MessageRequest $request)
    {
        try{
            $mess = $this->messageService->store($request);
            $data = ['status'=>'success',
                'data'=>$mess];
            return response()->json($data, 200);
        } catch (\Exception $exception){
            $data = ['status'=>'errors',
                'message'=>$exception];
            return response()->json($data, 500);
        }
    }
}
