<?php
include "plugin.core.php";
if(isset($_GET['userid'])){

    $userid = mysqli_escape_string($dbconnect->conn,$_GET['userid']);
    $userDataCondition = [
        'where'=>[
            'distribution_id'=>$userid
        ],
        'return_type'=>'single'
    ];
    $userProfileData = $viewController->getRows($table['tbl_distribution'],$userDataCondition);
    // echo "<pre>";
    // print_r($userProfileData);
    // echo "</pre>";
}


?>