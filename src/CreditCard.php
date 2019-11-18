<?php


namespace Azonmedia\Payments\EpayBg;


use Azonmedia\Payments\Interfaces\CommandResultInterface;
use Azonmedia\Payments\Interfaces\CreditCardInterface;
use Azonmedia\Payments\Interfaces\scalar;

class CreditCard implements CreditCardInterface
{

    /**
     * This can be an account number or CC name (see CreditCardInterface that extends this one)
     * It may return INT from get_id() if there is no name.
     * @return scalar
     */
    public function get_name()
    {
        // TODO: Implement get_name() method.
    }

    public function get_id()
    {
        // TODO: Implement get_id() method.
    }

    public function validate(): CommandResultInterface
    {
        // TODO: Implement validate() method.
    }
}