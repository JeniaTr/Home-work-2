<?php
/**
 * Created by PhpStorm.
 * User: jenia
 * Date: 31.10.16
 * Time: 2:01
 */

namespace Vendor\Teacher;

class InfoAboutStComposition implements TeacherInterface
{
    private $compWriter;

    public function __construct($dest)
    {
        $fileName = $dest . '/WriteCopositionMetod.json';
        $this->compWriter = new InfoAboutSt($fileName);
    }

    public function getCurs($idSt)
    {
        $this->getCurs($idSt);
    }

    public function getGrup($idSt)
    {
        $this->getGrup($idSt);
    }

    public function getAnalisRes($idSt)
    {
        $this->compWriter->getAnalisRes($idSt);
    }

    public function write(array $data)
    {
        $this->compWriter->write($data);
    }
}