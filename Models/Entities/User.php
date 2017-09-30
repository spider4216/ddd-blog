<?php
namespace Models\Entities;

use Models\ValueObjects\Profile;

class User
{
    /**
     * @author farZa
     * @var string
     */
    private $username;
    
    /**
     * @author farZa
     * @var string
     */
    private $password;
    
    /**
     * @author farZa
     * @var Profile
     */
    private $profile;
}

