<?php

class Account
{
    public function __construct(
        public string $newName,
        public float $newBalance
    ) {
    }
}
