<?php
declare(strict_types=1);

namespace Azonmedia\Payments\EpayBg;

use Azonmedia\Payments\Interfaces\CommandResultInterface;

class Commandresult implements CommandResultInterface
{

    public function get_command(): string
    {
        // TODO: Implement get_command() method.
    }

    public function get_exit_code()
    {
        // TODO: Implement get_exit_code() method.
    }

    public function get_exit_message(): string
    {
        // TODO: Implement get_exit_message() method.
    }

    public function is_successful(): bool
    {
        // TODO: Implement is_successful() method.
    }

    /**
     * Returns additional codes - for exmaple in Authorization it returns authorization id
     * @return mixed
     */
    public function get_additional_code()
    {
        // TODO: Implement get_additional_code() method.
    }
}