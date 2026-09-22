<?php

class ContactInfo1
{
    public $phone = "";
    public $email = "";

    public function email_is_valid()
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function phone_is_valid()
    {
        return preg_match('/^[0-9]{10}$/', $this->phone) === 1;
    }
}
