<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo ' Ini controller Coba method index';
    }

    public function about()
    {
        echo "Hello nama saya $this->nama.";
    }

    //--------------------------------------------------------------------

}
