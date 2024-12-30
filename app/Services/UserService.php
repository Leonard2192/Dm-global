<?php

namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use App\Services\Interfaces\UserServiceInterface;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    protected $userRepository;
    public function __construct(UserRepository$userRepository){
        $this->userRepository = $userRepository;
    }

    public function paginate(){
        $users = $this->userRepository->getAllPaginate();
        return $users;
    }

    public function createUser(array $data)
    {

    }

    public function updateUser($id, array $data)
    {

    }

    public function deleteUser($id)
    {
        return $this->userRepository->delete($id) ? 'Delete successfully!' : 'Delete failed. Please try it later!';
    }
}
