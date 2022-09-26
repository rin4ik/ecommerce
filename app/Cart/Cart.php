<?php

namespace App\Cart;

use App\Cart\Contracts\CartInterface;
use App\Models\Variation;
use Illuminate\Session\SessionManager;

class Cart implements CartInterface
{
    protected $session;
    public function __construct(SessionManager $session)
    {
        $this->session = $session;
        # code...
    }
    // public function add(Variation $variation)
    // {

    // }

    public function create()
    {
        dd($this->session);
    }

}