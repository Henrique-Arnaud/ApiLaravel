<?php
namespace App\src\User\Repositories\Fakes;

use App\src\User\DTO\CreateUserDTO;
use App\src\User\DTO\UpdateUserDTO;
use App\src\User\Repositories\IUserRepository;

class FakeUserRepository implements IUserRepository{
    public function create(CreateUserDTO $createUserDTO)
    {
        
    }
    public function find(string $id)
    {
        
    }
    public function delete(string $id)
    {
        
    }
    public function update(UpdateUserDTO $updateUserDTO, string $id)
    {
        
    }
}