<?php
    include 'connect.php';
    $id = $_POST['id'];
    $pangan = $_POST['pangalan'];
    $add = $_POST['taga_asa'];
    $habal = $_POST['eyot'];
    $suwatan = $_POST['suwatanan'];


    

    // var_dump($id);
    // var_dump($pangan);
    // var_dump($add);
    // var_dump($habal);
    // var_dump($suwatan);

    $instruction_sa_pag_update = "UPDATE crudoperation set id='$id', Name='$pangan', Address='$add', Gender='$habal', Email='$suwatan' WHERE id = '$id'";
    $eupdate_ang_db_now_na = mysqli_query($con,$instruction_sa_pag_update);
    // var_dump($eupdate_ang_db_now_na);

    
    if($eupdate_ang_db_now_na){
       header("location:index.php?show_alert=update-successful");
    }else{
        echo '<div style="background-color: red; color: white; padding: 5px;">'. mysqli_error($con) . '</div>';
    }


?>