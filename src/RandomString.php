<?php

namespace Randomstring\RandomStringGenerator;

class RandomString
{
    /**
     * Generate a random string.
     *
     * @param int $length Length of the string to generate.
     * @return string
     */
    public static function generate($length = 16)
    {
        if (!is_int($length) || $length <= 0) {
            throw new \InvalidArgumentException('Length must be a positive integer.');
        }

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
