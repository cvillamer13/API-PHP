<?php

   
    
    class getSummaryRecievableModel{
        
        function getSummaryRecievable($txtPostDate, $txtRemarks, $txtSchoolYear,$txtSemester, $intMonthSem){
            $intHandle = myOpenDB(0);
            
           
            $strQ = " SELECT VoucherDetl.AcctNo AS glaccount, VoucherDetl.AcctngUnit AS profitcenter, SUM(VoucherDetl.Amount) as Amount, VoucherDetl.DBCRFlag, PaymentMain.fnexported  FROM PaymentMain ";
            $strQ .= " INNER JOIN PaymentDetl ON PaymentMain.Autokey = PaymentDetl.Paymentkey ";
            $strQ .= " INNER JOIN VoucherMain ON PaymentMain.VoucherKey = VoucherMain.Autokey ";
            $strQ .= " INNER JOIN VoucherDetl ON VoucherDetl.Voucherkey = VoucherMain.Autokey ";
            
            $strQ .= " WHERE ORDate = '$txtPostDate' AND  PaymentMain.fnexported <> '0'";
            $strQ .= " GROUP BY AcctngUnit, AcctNo, DBCRFlag ";
            $rsResult =mySelectDB($strQ, $intHandle);
            
            $arrData= array();
            $arrData["method_name"] = "SummaryReceivable";
            $arrData["postingdate"] = $txtPostDate;
            $arrData["remarks"] = $txtRemarks;
            $arrData["schoolyear"] = $txtSchoolYear;
            $arrData["semester"] = $txtSemester;
            $arrData["monthspersem"] = $intMonthSem;
            $x=1;
           
            while($objRow = $rsResult->fetch(PDO::FETCH_OBJ)){
            
                if($objRow->DBCRFlag == "D"){ 
                    $txtAmount = "-".$objRow->Amount ;
                }else{
                    $txtAmount = $objRow->Amount ;
                }
               $arrData["detail"][] = array(
                "glaccount" => $objRow->glaccount,
                "profitcenter" => $objRow->profitcenter,
                "amount" => $txtAmount,
                "linedesc" => $txtRemarks
               );
               
               $arrData["fnexported"] = $objRow->fnexported;
                $x++;
            
            }
//             return $strQ;
            return json_encode($arrData);
        }
    
    }

