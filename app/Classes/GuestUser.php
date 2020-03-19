<?php
namespace App\Classes;
use App\Core\Database;
use App\Classes\User;

class GuestUser{
	private $_db,
			$_user,
			$_data;

	public function __construct($ip = null){
		$this->_db = Database::getInstance();
		$this->_user = new User;

		$ip = $ip ? $ip : $_SERVER['REMOTE_ADDR'];

		if(!$this->find($ip))
				$this->create($ip);
	}

	public function find($ip = null)
    {
        if ($ip)
        {
            $data = $this->_db->get('visitors', ['ip','=',$ip]);

            if ($data->count())
            {
                $this->_data = $data->first();
                return true;
            }
        }

    }

    public function create($ip)
    {
    	$fields = [];
    	$fields['ip'] = $ip;
    	$fields['created_at'] = date("Y-m-d H:i:s");

        if (!$this->_db->insert('visitors', $fields))
        {
            throw new Exception("Unable to create the Guest User.");
        }else{
        	$this->find($ip);
        }
    }

    public function data()
    {
        return $this->_data;
    }

    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }
}