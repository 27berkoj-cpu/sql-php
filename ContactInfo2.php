<?php

class ContactInfo2
{
    public static function email_is_valid($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function phone_is_valid($phone)
    {
        return preg_match('/^[0-9]{10}$/', $phone) === 1;
    }
}
