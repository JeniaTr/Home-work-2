<?php

namespace Vendor\Teacher;

abstract class AbstrWriteFile
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
