<?php

class SummReceivable extends Controller{

    
    public function index( $name = ''){
       $user =  $this->model('getSummaryRecievableModel');
       
        $txtPostDate = $_SERVER["HTTP_POSTDATE"];
        $txtRemarks = $_SERVER["HTTP_TXTREMARKS"];
        $txtSchoolYear = $_SERVER["HTTP_TXTSCHOOLYEAR"];
        $txtSemester = $_SERVER["HTTP_TXTSEMESTER"];
        $intMonthSem = $_SERVER["HTTP_INTMONTHSEM"];
        
        $this->view($name, $user->getSummaryRecievable($txtPostDate, $txtRemarks, $txtSchoolYear,$txtSemester, $intMonthSem ));
    }
    
}
