<?php 
namespace App\src\User\DTO;

class CreateUserDTO{

    public string $name;
    public string $document;

    public function __construct(string $name, string $document)
    {
        $this->name = $name;
        $this->document = $document;
    }
}