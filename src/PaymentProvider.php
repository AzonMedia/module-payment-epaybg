<?php
declare(strict_types=1);

namespace Azonmedia\Payments\EpayBg;

use Azonmedia\Payments\Interfaces\CommandResultInterface;
use Azonmedia\Payments\Interfaces\CommandTargetInterface;
use Azonmedia\Payments\Interfaces\PaymentProviderAccountInterface;
use Azonmedia\Payments\Interfaces\PaymentProviderInterface;

class PaymentProvider implements PaymentProviderInterface
{

    protected PaymentProviderAccountInterface $PaymentProviderAccount;

    public const PAYMENT_PROVIDER_NAME = 'Epay.bg';

    public function __construct(PaymentProviderAccountInterface $PaymentProviderAccount)
    {
        $this->PaymentProviderAccount = $PaymentProviderAccount;
    }

    /**
     * Returns the name of this payment provider
     * @return string
     */
    public static function get_name(): string
    {
        return self::PAYMENT_PROVIDER_NAME;
    }

    public function get_account_info(): PaymentProviderAccountInterface
    {
        return $this->PaymentProviderAccount;
    }

    public function authorize(float $amount, CommandTargetInterface $CommandTarget): CommandResultInterface
    {
        if ($amount <= 0) {
            throw new \InvalidArgumentException(sprintf('The provided amount must be a positive number.'));
        }

        // TODO: Implement authorize() method.
    }

    public function capture(/* scalar */ $authorization_code, CommandTargetInterface $CommandTarget): CommandResultInterface
    {
        // TODO: Implement capture() method.
    }

    public function charge(float $amount, CommandTargetInterface $CommandTarget): CommandResultInterface
    {
        if ($amount <= 0) {
            throw new \InvalidArgumentException(sprintf('The provided amount must be a positive number.'));
        }
        // TODO: Implement charge() method.
    }

    public function refund(float $amount, /* scalar */ $payment_code): CommandResultInterface
    {
        if ($amount <= 0) {
            throw new \InvalidArgumentException(sprintf('The provided amount must be a positive number.'));
        }
        // TODO: Implement refund() method.
    }

    public function void(/* scalar */ $payment_code): CommandResultInterface
    {
        // TODO: Implement void() method.
    }
}