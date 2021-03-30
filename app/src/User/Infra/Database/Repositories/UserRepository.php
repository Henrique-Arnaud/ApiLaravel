<?php 
namespace App\src\User\Infra\Database\Repositories;

use App\src\User\DTO\CreateUserDTO;
use App\src\User\DTO\UpdateUserDTO;
use App\src\User\Infra\Database\Models\User;
use App\src\User\Repositories\IUserRepository;

class UserRepository implements IUserRepository{
    
    public function create(CreateUserDTO $createUserDTO)
    {
        $user = new User();

        $user->name = $createUserDTO->name;
        $user->document = $createUserDTO->document;
        
        $user->save();
        return $user;
    }
    
    public function find(string $id)
    {
        $user = User::Find($id);
        return $user;
    }

    public function delete(string $id)
    {
        $user = User::Find($id)->delete();
    }

    public function update(UpdateUserDTO $updateUserDTO, string $id)
    {
        $user = User::Find($id);

        $user->name = $updateUserDTO->name;
        $user->document = $updateUserDTO->document;

        $user->save();
        return $user;
    }
}