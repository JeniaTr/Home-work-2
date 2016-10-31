<?php

namespace Vendor\Teacher;

interface TeacherInterface
{
    public function getCurs($idSt);

    public function getGrup($idSt);

    public function getAnalisRes($idSt);

    public function write(array $data);
}
