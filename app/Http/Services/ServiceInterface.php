<?php


namespace App\Http\Services;


interface ServiceInterface
{
    public function getAll();
    public function store($request);
    public function findById($id);
    public function update($request, $id);
    public function delete($id);

}
