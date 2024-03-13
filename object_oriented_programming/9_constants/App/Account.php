<?php

declare(strict_types=1);

namespace App;

use DateTime as DT;

// new \DateTime();
new DT();

class Account
{
    public const INTEREST_RATE = 2;

    public SocialMedia $socialMedia;

    public function __construct(
        public string $name,
        public float $balance
    ) {
        $this->socialMedia = new SocialMedia();
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;

        return $this;
    }
}
