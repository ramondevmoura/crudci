<?php 
defined('BASEPATH') or exit('Ação não permitida');

function response(int $statusCode,array $dados): string
{
    http_response_code($statusCode);
    header('Content-Type: application/json; charset=utf-8');
    return json_encode($dados); 
}

