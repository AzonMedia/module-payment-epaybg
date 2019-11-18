<?php
declare(strict_types=1);

namespace Azonmedia\Payments\EpayBg;

use Azonmedia\Payments\Interfaces\PaymentProviderAccountInterface;

class Account implements PaymentProviderAccountInterface
{

    /**
     * May returrn get_id() if there is no name
     * @return mixed
     */
    public function get_name()
    {
        // TODO: Implement get_name() method.
    }

    public function get_id()
    {
        // TODO: Implement get_id() method.
    }
}