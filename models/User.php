<?php
/**
 * Created by PhpStorm.
 * User: quocviet
 * Date: 4/22/18
 * Time: 11:09 PM
 */
class User {
  protected $email;
  protected $password;
  protected $username;
  protected $phone;
  protected $address;

    /**
     * User constructor.
     * @param $email
     * @param $password
     * @param $phone
     * @param $address
     */
    public function __construct($email, $username, $password, $phone, $address)
    {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->phone = $phone;
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }




}
?>
