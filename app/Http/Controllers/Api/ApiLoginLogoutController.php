<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\User\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiLoginLogoutController extends Controller
{
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = [
            'email' => $email,
            'password' => $password
        ];
        if (Auth::attempt($data)) {
            $this->userService->updateStatus(Auth::user());
            return response()->json(Auth::user());
        }

    }

    public function logout($id){
        $user = $this->userService->findById($id);
        $this->userService->updateStatus($user);
        return response()->json($user);
    }
}
