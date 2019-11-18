<?php


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
        // TODO: Implement get_name() method.
    }

    public function get_account_info(): PaymentProviderAccountInterface
    {
        // TODO: Implement get_account_info() method.
    }

    public function authorize(float $amount, CommandTargetInterface $CommandTarget): CommandResultInterface
    {
        // TODO: Implement authorize() method.
    }

    public function capture($authorization_code, CommandTargetInterface $CommandTarget): CommandResultInterface
    {
        // TODO: Implement capture() method.
    }

    public function charge(float $amount, CommandTargetInterface $CommandTarget): CommandResultInterface
    {
        // TODO: Implement charge() method.
    }

    public function refund(float $amount, $payment_code): CommandResultInterface
    {
        // TODO: Implement refund() method.
    }

    public function void($payment_code): CommandResultInterface
    {
        // TODO: Implement void() method.
    }
}