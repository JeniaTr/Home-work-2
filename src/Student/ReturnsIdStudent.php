<?php
/**
 * Created by PhpStorm.
 * User: jenia
 * Date: 30.10.16
 * Time: 23:47.
 */

namespace vendor\Student;

class ReturnsIdStudent implements StudentInterface
{
    private $fio;

    public function __construct($fio)
    {
        $this->fio = $fio;
    }

    public function getIdSt()
    {
        //Get id by FIO
        return;
    }
}
