<?php

namespace App\Events\Backend\Cart;

use Illuminate\Queue\SerializesModels;

/**
 * Class CartUpdated.
 */
class CartUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $cart;

    /**
     * @param $cart
     */
    public function __construct($cart)
    {
        $this->cart = $cart;
    }
}
