<?php

namespace App\src\User\Infra\Http\Controllers;

use App\Http\Controllers\Controller;
use App\src\User\DTO\CreateUserDTO;
use App\src\User\DTO\UpdateUserDTO;
use App\src\User\Infra\Database\Repositories\UserRepository;
use App\src\User\Services\CreateUserServices;
use App\src\User\Services\DeleteUserServices;
use App\src\User\Services\GetUserByIdService;
use App\src\User\Services\UpdateUserServices;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function createUser(Request $request)
    {
        try {

            $userRepository = new UserRepository();

            $createUserService = new CreateUserServices($userRepository);

            $createUserDto = new CreateUserDTO($request->name, $request->document);

            $user = $createUserService->execute($createUserDto);

            return response()->json($user);

        } catch (Exception $e) {
            return response()->json([
                "error"=>$e->getMessage()
            ], 400);
        }
    }

    public function getUserById(string $id){
        try{
            $userRepository = new UserRepository();
            $getUserByIdService = new GetUserByIdService($userRepository);
            
            $user = $getUserByIdService->execute(
                $id
            );

            return response()->json($user);
        }
        catch(Exception $e){
            return response()->json([
                "error"=>$e->getMessage()
            ], 400);
        }
    }

    public function deleteUser(string $id){
        try{
            $userRepository = new UserRepository();
            $deleteUserService = new DeleteUserServices($userRepository);

            $deleteUserService->execute(
                $id
            );

            return response()->json([], 204);
        }
        catch(Exception $e){
            return response()->json([
                "error"=>$e->getMessage()
            ], 400);
        }
    }

    public function updateUser(Request $request, string $id){
        try{
        $userRepository = new UserRepository();

        $updateUserServices = new UpdateUserServices($userRepository);

        $updateUserDTO = new UpdateUserDTO($request->name, $request->document);

        $user = $updateUserServices->execute($updateUserDTO, $id);

        return response()->json($user);
        }
        catch(Exception $e){
            return response()->json([
                "error" => $e->getMessage()
            ], 400);
        }
    }
}
