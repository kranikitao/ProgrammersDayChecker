<?php

class ProgrammersDayChecker
{
    public function check( )
    {
        $currentDay = new \DateTime('today');
        $interval = new DateInterval('P255D');
        
        return $currentDay->sub($interval)->format('dm') === '0101';
    }
}

$programmersDayChecker = new ProgrammersDayChecker();

if ($programmersDayChecker->check()) {
    echo 'This is programmer\'s Day';
}
