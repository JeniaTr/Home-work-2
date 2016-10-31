<?php
/**
 * Created by PhpStorm.
 * User: jenia
 * Date: 31.10.16
 * Time: 2:20
 */

namespace Vendor\Teacher;


class AbstrWriteFile
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    protected function writeToFile($data)
    {
        file_put_contents($this->fileName, $data);
    }
}