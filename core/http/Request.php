<?php

namespace Core\Http;

class Request
{

    public function __construct()
    {
        
    }

    public function all(): array
    {
        return [];
    }

    public function input(string $name): mixed
    {
        if(array_key_exists($name, $_REQUEST)) {
           return $_REQUEST['name'];
        }
        return null;
    }

    public function files(): array
    {
        var_dump($_FILES);
        return [];
    }

    public function validate(array $rules): void
    {
        
    }
}
