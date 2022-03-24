<?php
session_start();

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["Add_To_Cart"])){
        if(isset($_SESSION['card'])){
            
            $myfoods = array_column($_SESSION['card'], 'food_name');
            
            
            if(in_array($_POST['food_name'], $myfoods)){
                echo"<script>
                alert('Your Food Is Already Added To Orders!');
                window.location.href='fooods.php';</script>";  
            }
            
            else{
                $count = count($_SESSION['card']);
                $_SESSION['card'][$count]= array('food_name' =>$_POST['food_name'],'food_detail' =>$_POST['food_detail'], 'food_price' =>$_POST['food_price'], 'Quantity' =>1);
                echo"<script>
                    alert('Your Food Added Successfully!');
                    window.location.href='fooods.php';</script>";
            }
        }
    
        else{
            $_SESSION['card'][0] = array('food_name' =>$_POST['food_name'],'food_detail' =>$_POST['food_detail'], 'food_price' =>$_POST['food_price'], 'Quantity' =>1);
            echo"<script>
                alert('Your Food Added Successfully!');
                window.location.href='fooods.php';</script>";

        }
        }
    
    if(isset($_POST["food_remove"])){
        foreach($_SESSION['card'] as $key =>$value){
            if($value['food_name']==$_POST["food_name"]){
                unset($_SESSION['card'][$key]);
                $_SESSION['card'] = array_values($_SESSION['card']);
                echo"<script>
                alert('Your Food Removed!');
                window.location.href='mycart.php';
                </script>";  
            }
            
        }   
    }
}
?>