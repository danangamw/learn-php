<?php

declare(strict_types=1);

namespace App;

use DateTime as DT;

// new \DateTime();
new DT();

class Account
{
    public SocialMedia $socialMedia;
    public static int $count = 0;

    public function __construct(
        public string $name,
        public float $balance
    ) {
        $this->socialMedia = new SocialMedia();

        self::$count++;
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;

        return $this;
    }
}
