<?php
/**
 * Created by PhpStorm.
 * User: jenia
 * Date: 28.10.16
 * Time: 15:56
 */

namespace Vendor\Teacher;


Interface TeacherInterface
{
    public function getCurs($idSt);

    public function getGrup($idSt);

    public function getAnalisRes($idSt);

    public function write(array $data);

}