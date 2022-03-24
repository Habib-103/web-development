<?php

$db = mysqli_connect("localhost", "root", "", "afg_rest") or die(mysqli_error($db));

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $db->query("DELETE FROM users WHERE U_ID = $id");
    echo
        "<script>
        alert('deleted!');
        window.location.href='admin.php';
        </script>";
}  
?>