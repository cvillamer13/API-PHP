<?php

class Home extends Controller{
    protected $collectionModel;
    public function __construct(){
        $this->collectionModel =  $this->model('getCollectionsModel');
//         $this->AdjustmentModel =  $this->model('AdjusmentModel');
//         $this->RecievableModel =  $this->model('getCollectionsModel');
    }
    
    
    public function index($folder = '', $name = ''){
       $user =  $this->model('getCollectionsModel');
//        $this->view('home/index', ['name' => $user->name]);
//         echo "<pre>";
//         print_r($_SERVER);
        $txtPostDate = $_SERVER["HTTP_POSTDATE"];
        $txtRemarks = $_SERVER["HTTP_TXTREMARKS"];
        $txtSchoolYear = $_SERVER["HTTP_TXTSCHOOLYEAR"];
        $txtSemester = $_SERVER["HTTP_TXTSEMESTER"];
        $intMonthSem = $_SERVER["HTTP_INTMONTHSEM"];
        
        $this->view($folder,$name, $user->getCollection($txtPostDate, $txtRemarks, $txtSchoolYear,$txtSemester, $intMonthSem ));
    }
    
}
