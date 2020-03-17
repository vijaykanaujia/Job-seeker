<?php
namespace App\Classes;
use App\Core\Config;
use App\Core\Session;
use App\Core\Database;
class User
{
    private $_db,
            $_data,
            $_sessionName,
            $_isLoggedIn = false;

    public function __construct($user = null)
    {
        $this->_db = Database::getInstance();

        $this->_sessionName = Config::get('session.session_name');

        if ($user)
        {
            if (Session::exists($this->_sessionName))
            {
                $user = Session::get($this->_sessionName);

                if ($this->find($user))
                {
                    $this->_isLoggedIn = true;
                }
            }

        }
        else
        {
            $this->find($user);
        }
    }

    public function update($fields = array(), $id = null)
    {
        if (!$id && $this->isLoggedIn())
        {
            $id = $this->data()->id;
        }

        if (!$this->_db->update('users', $id, $fields))
        {
            throw new Exception('Unable to update the user.');
        }
    }

    public function create($fields = array())
    {
        if (!$this->_db->insert('users', $fields))
        {
            throw new Exception("Unable to create the user.");
        }
    }

    public function find($user = null)
    {
        if ($user)
        {
            $field  = (is_numeric($user)) ? 'id' : 'email';

            $data = $this->_db->get('users', array($field, '=', $user));

            if ($data->count())
            {
                $this->_data = $data->first();
                return true;
            }
        }
    }

    public function login($username = null, $password = null)
    {
        if (! $username && ! $password && $this->exists())
        {
            Session::put($this->_sessionName, $this->data()->id);
        }
        else
        {
            $user = $this->find($username);

            if ($user)
            {
                if ($this->data()->password == $password)
                {
                    Session::put($this->_sessionName, $this->data()->id);
                    return true;
                }
            }
        }

        return false;
    }

    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }

    public function logout()
    {
        Session::delete($this->_sessionName);
    }

    public function data()
    {
        return $this->_data;
    }

    public function isLoggedIn()
    {
        return $this->_isLoggedIn;
    }

    public function deleteMe()
    {
        if ($this->isLoggedIn())
        {
            $id = $this->data()->id;
        }

        if (!$this->_db->delete('users', array('id', '=', $id)))
        {
            throw new Exception('Unable to update the user.');
        }
    }
}
