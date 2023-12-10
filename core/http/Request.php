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

    public function input($name): array
    {
        return [];
    }

    public function files(): array
    {
        return [];
    }

    public function validate(): array
    {
        return [];
    }
}
