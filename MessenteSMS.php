<?php

namespace netpro9\messent;

/**
 * This is just an example.
 */
class MessenteSMS extends Component
{
    /**
    * @var string $username TurboSMS account username.
    */
    public $API_username;
    /**
    * @var string $username TurboSMS account password.
    */
    public $API_password;
    public $API_dlr_url;
    /**
    * @var string $alphaName The name of the sender.
    */
    public $API_account;
    public $API_url;
    public $API_backup;
    
    public $version = '0.1.7';
    private $use_backup_route = false;
    private $secure = false;
    
    public function run()
    {
        return "Hello!";
    }
}
