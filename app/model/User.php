<?php

namespace app\model;


use Nette\Database\IRow;
use Nette\Object;

class User extends Object
{
    private static $GENDER_MALE = "M";
    private static $GENDER_FeMALE = "F";

    /**
     * @var $id integer
     */
    private $id;
    /**
     * @var $username string
     */
    private $username;
    /**
     * @var $email string
     */
    private $email;
    /**
     * @var $gender string
     */
    private $gender;

    /**
     * User constructor.
     */
    public function __construct()
    {
    }

    public static function fromRow(IRow $row)
    {
        $user = new self();
        $user->id = $row->id;
        $user->username = $row->username;
        $user->email = $row->email;
        $user->gender = $row->gender;
        return $user;
    }

}
