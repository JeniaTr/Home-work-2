<?php
/**
 * Created by PhpStorm.
 * User: jenia
 * Date: 30.10.16
 * Time: 23:44
 */

namespace Vendor\Teacher;


class InfoAboutSt extends AbstrWriteFile implements TeacherInterface
{

    public function getCurs($idSt)
    {
        #опеределить курс по
        return;
    }

    public function getGrup($idSt)
    {
        #опеределить групу по
        return;
    }

    public function getAnalisRes($idSt)
    {
        return;
    }

    /**
     * @param array $data
     */
    public function write(array $data)
    {
        $encodedData = json_encode($data);
        $this->writeToFile($encodedData);
    }
}