<?php
    
    
    
class Adjustment extends Controller{

    
    
    public function index($name = ''){
        $user =  $this->model('AdjusmentModel');
        $txtPostDate = $_SERVER["HTTP_POSTDATE"];
        $txtRemarks = $_SERVER["HTTP_TXTREMARKS"];
        $txtSchoolYear = $_SERVER["HTTP_TXTSCHOOLYEAR"];
        $txtSemester = $_SERVER["HTTP_TXTSEMESTER"];
        $intMonthSem = $_SERVER["HTTP_INTMONTHSEM"];
        
        $this->view($name, $user->Adjusment($txtPostDate, $txtRemarks, $txtSchoolYear,$txtSemester, $intMonthSem ));
    }
    
	


}

