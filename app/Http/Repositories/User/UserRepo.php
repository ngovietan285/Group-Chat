<?php


namespace App\Http\Repositories\User;



use App\User;
use Illuminate\Support\Facades\DB;

class UserRepo implements UserRepoInterface
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return DB::table('users')
            ->orderBy('status', 'desc')
            ->get();
    }

    public function findById($id)
    {
        return $this->user->findOrFail($id);
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function delete($obj)
    {
        $obj->delete();
    }

    public function store($obj)
    {
        $obj->save();
    }
}
