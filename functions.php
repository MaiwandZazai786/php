<?php
function activeClass(string $path)
{
    echo parse_url($_SERVER['REQUEST_URI'])['path'] === $path ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white';
}


function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}
