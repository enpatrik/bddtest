<?php

use Exception\TransactionSaveException;

class Transaction
{
    protected $type;
    protected $value;
    protected $user;

    public function setType($type)
    {
        if (!in_array($type, array('Quantity', 'Message'))) {
            throw new \Exception\TransactionTypeException();
        }
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function save()
    {
        if (!isset($this->type) || !isset($this->value) || !isset($this->user)) {
            throw new TransactionSaveException();
        }
        return true;
    }
}
