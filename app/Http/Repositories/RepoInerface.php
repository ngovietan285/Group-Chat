<?php


namespace App\Http\Repositories;


interface RepoInerface
{
    public function getAll();
    public function store($obj);
    public function findById($id);
    public function update($obj);
    public function delete($obj);

}
