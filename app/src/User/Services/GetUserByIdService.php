<?php
namespace App\src\User\Services;

use App\src\User\Repositories\IUserRepository;

class GetUserByIdService{
    private IUserRepository $userRepository;

    public function __construct(IUserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    
    public function execute(string $id){
        $user = $this->userRepository->find($id);
        return $user;
    } 
    
}