<?php
require "IUser.php";

class User implements IUser
{
    public function getName():string
    {
        return "My name is PHP Class";
    }
}