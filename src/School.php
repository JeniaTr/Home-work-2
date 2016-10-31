<?php

namespace Vendor\School;

namespace Vendor\Teacher;

use Vendor\Student\StudentInterface;

//use Vendor\Teacher\TeacherInterface;
class School
{
    private $student;

    /**
     * School constructor.
     *
     * @param StudentInterface $student
     */
    public function __construct(StudentInterface $student)
    {
        $this->student = $student;
    }

    public function createInfoAnalysis(TeacherInterface $teacher)
    {
        $idst = $this->student->getIdSt();
        $curs = $teacher->getCurs($idst);
        $grup = $teacher->getGrup($idst);
        $analisRes = $teacher->getAnalisRes($idst);
        $compounDate = $this->compounDate($curs, $grup, $analisRes);
        $teacher->write($compounDate);
    }

    /**
     * @param $curs
     * @param $grup
     * @param $analisRes
     *
     * @return array
     */
    private function compounDate($curs, $grup, $analisRes)
    {
        return [
            $date[1] = $curs,
            $date[2] = $grup,
            $date[3] = $analisRes,
        ];
    }
}
