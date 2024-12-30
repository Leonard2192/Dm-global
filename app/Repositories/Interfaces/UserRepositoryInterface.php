<?php

namespace App\Repositories\Interfaces;

/**
 * Interfaces UserServiceInterface
 * @package App\Services\Interfaces
 */
interface UserRepositoryInterface
{
    public function getAllPaginate();
//    public function getById($id);
//    public function store($request);
//    public function update($request, $id);
    public function delete($id);
}

