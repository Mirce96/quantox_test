<?php

namespace App;

class User
{
    private $_name;
    private $_surname;
    private $_email;
    private $_pass;

    /**
     * @param string $name
     * @param string $surname
     * @param string $email
     * @param string $pass
     */
    public function __construct($email, $pass, $name = null, $surname = null)
    {
        $this->_name = $name;
        $this->_surname = $surname;
        $this->_email = $email;
        $this->_pass = $pass;
    }

    /**
     * Function creates new user by inserting an record with values passed
     * as parameters for instantiation of an object
     *
     * @return array
     */
    public function registerUser()
    {
        $connection = new Connection();

        $name = $connection->cleanValue($this->_name);
        $surname = $connection->cleanValue($this->_surname);
        $email = $connection->cleanValue($this->_email);
        $password = $this->_pass;

        $newUserQuery = "INSERT INTO users (name, surname, email, password)
                         VALUES ('$name', '$surname', '$email', '$password')";

        $res = $connection->executeQuery($newUserQuery);

        $connection->closeConnection();

        return $res;
    }

    /**
     * Function queries database and returns result set if found
     *
     * @param string $email
     * @param string $pass
     *
     * @return array()
     */
    public function checkUser($email, $pass)
    {
        $connection = new Connection();

        $emailAddress = $email;
        $password = $pass;

        $checkUserQuery = "SELECT email, password
                            FROM users
                            WHERE email = '$emailAddress'
                            AND password = '$password'";

        $res = $connection->executeQuery($checkUserQuery);

        $connection->closeConnection();

        return $res;
    }
}
