<?php
class VipUser extends User
{
    function __construct(string $userName, string $password, string $email, string $vipCode)
    {
        parent::__construct($userName, $password, $email);
        $this->vipCode = $vipCode;
    }
}
