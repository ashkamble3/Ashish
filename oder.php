<?php
	define("BASEPATH", "ramyatra");
    require_once __DIR__.'/function.php';
    $proid=validate($edb, $_POST['prdId']);
    $name=validate($edb,$_POST['name']);
    $email=validate($edb,$_POST['email']);
    $quantity=validate($edb,$_POST['quantity']);
    $phone=validate($edb,$_POST['phone']);
    $Address=validate($edb,$_POST['message']);
    $date=date('d/M/Y');
    if($proid==""||$name==""||$email==""||$quantity==""||$phone==""||$Address==""){
        die("please fill the form");
    }
    else{
        if($quantity<=0)
            die("Quantity should be atleast one");
        $q = mysqli_query($edb, "select * from product where prd_spcy='$proid'");
        $rowcount=mysqli_num_rows($q);
        if($rowcount==1){
            $sql = "INSERT INTO neworder (pro_id,user_name,user_email,quantity,user_phone,user_addr,date)
            VALUES ('$proid', '$name', '$email', '$quantity', '$phone','$Address','$date')";
            if (mysqli_query($edb, $sql))
               die("done");
            else 
                die("Not able to proceed order");
        }
        else{
            die("product not found");
        }
    }
?>