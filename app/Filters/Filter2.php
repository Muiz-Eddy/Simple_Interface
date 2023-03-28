<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Filter2 implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(session() -> get('LoggedIn')){
        return redirect()-> to('/chat');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}