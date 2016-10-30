<?php

namespace Vendor\School;
namespace Vendor\Teacher;

use Vendor\Student\StudentInterface;

class School
{
    private $student;

    /**
     * School constructor.
     * @param StudentInterface $student
     */
    public function __construct(StudentInterface $student)
    {
        $this->student=$student;
    }

    /**
     * @param \Vendor\Teacher\TeacherInterface $writer
     */
    public function createInfoAnalysis (TeacherInterface $writer)
    {
        $idst= $this->student->getIdSt();
        $curs=$writer->getCurs($idst);
        $grup=$writer->getGrup($idst);
        $analisRes=$writer->getAnalisRes($idst);
        $compounDate = $this->compounDate($curs, $grup, $analisRes);
        $writer->write($compounDate);
    }

    /**
     * @param $curs
     * @param $grup
     * @param $analisRes
     * @return array
     */
    private function compounDate($curs, $grup, $analisRes)
    {
        return [
            $date[1]=$curs,
            $date[2]=$grup,
            $date[3]=$analisRes
        ];
    }
}