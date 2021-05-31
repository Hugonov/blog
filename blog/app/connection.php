<?php

function getConnection(): PDO
{
    return new PDO(
        'mysql:host=home.3wa.io:3307;dbname=live-46_alex_hug;charset=UTF8', 
        'xxxxxx', 
        'xxxxxx', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
}
