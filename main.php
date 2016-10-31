<?php
require_once __DIR__ . '/vendor/autoload.php';

$student = new \Vendor\Student\ReturnsIdStudent('Петро Іванович Шматько');
$school = new \Vendor\Teacher\School($student);

$school->createInfoAnalysis(new \Vendor\Teacher\InfoAboutSt(__DIR__ . '/Info.json'));

$school->createInfoAnalysis(new \Vendor\Teacher\InfoAboutStComposition(__DIR__));

/**
 * Created by PhpStorm.
 * User: jenia
 * Date: 28.10.16
 * Time: 15:24
 */