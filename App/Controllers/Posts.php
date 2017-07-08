<?php

namespace App\Controllers;


class Posts extends \Core\Controller
{
    public function indexAction()
    {
        echo 'Hello from index Posts';
        echo '<p>Query parameters: <pre>' .
            htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
        var_dump($_GET);
    }

    public function addNewAction()
    {
        echo 'Hello from addNew Posts';
    }

    public function editAction()
    {
        echo 'Hello from edit Posts';
        echo '<p>Route parameters: <pre>' .
            htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}