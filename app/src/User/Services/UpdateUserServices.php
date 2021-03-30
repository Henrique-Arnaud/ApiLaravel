<?php 
namespace App\src\User\Services;

use App\src\User\DTO\UpdateUserDTO;
use App\src\User\Repositories\IUserRepository;

class UpdateUserServices{

    private IUserRepository $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(UpdateUserDTO $updateUserDTO, string $id){
        $user = $this->userRepository->find($id)->_update($updateUserDTO);
    }

}