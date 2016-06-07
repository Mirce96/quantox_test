<?php

namespace App;

class Connection
{
    private $_connection;

    public function __construct()
    {
        $this->_connection = new \mysqli('localhost', 'quantox', 'test', 'quantox-test');

        if($this->_connection->connect_errno > 0){
            echo 'Connection error: ' . $this->_connection->connect_error;
        }
    }

    /**
     * Function executes passed query
     *
     * @param string $query
     * @return array()
     */
    public function executeQuery($query)
    {
        if($this->_connection->errno === 0) {
            return $this->_connection->query($query);
        } else {
            echo 'Query execution error: ' . $this->_connection->error;
        }
    }

    /**
     * Function cleanses passed parameter to increase application security
     *
     * @param string $value
     *
     * @return string
     */
    public function cleanValue($value)
    {
        return $this->_connection->real_escape_string($value);
    }

    /**
     * Function closes open connection
     *
     * @return bool
     */
    public function closeConnection()
    {
        return $this->_connection->close();
    }
}
