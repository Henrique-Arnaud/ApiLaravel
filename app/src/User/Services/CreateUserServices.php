<?php 
namespace App\src\User\Services;

use App\src\User\DTO\CreateUserDTO;
use App\src\User\Repositories\IUserRepository;

class CreateUserServices{

    private IUserRepository $userRepository;

    public function __construct(
        IUserRepository $userRepository
        )
        {
        $this->userRepository = $userRepository;
    }
    
    public function execute(CreateUserDTO $createUserDTO){
        $user = $this->userRepository->create($createUserDTO);

        return $user;
    }

}