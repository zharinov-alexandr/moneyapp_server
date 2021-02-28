<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController
{
    /**
     * @Route("/accounts")
     */
    public function getAll()
    {
        $all = 'all';

        return new Response($all);
    }
}
