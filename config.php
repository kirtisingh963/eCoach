<?php
$conn  = new mysqli("localhost", "root", "", "ecoach");

session_start();

if($conn->connect_error){
    echo "Fail";
}

function redirect($page){
    echo "<script>window.open('$page', '_self')</script>";
}

function alert($msg){
    echo "<script>alert('$msg')</script>";
}

function insertData($table, $data){
    global $conn;

    $cols = implode(",", array_keys($data));
    $values = implode("','", $data);

    $query = $conn->query("INSERT INTO $table ($cols) values ('$values')");

    return $query;
}

function callingData($table, $cond=NULL){
    global $conn;

    if($cond == NULL){
        $query = "SELECT * FROM $table";
    }
    else{
        $query = "SELECT * FROM $table WHERE $cond";
    }

    $query = $conn->query($query);
    $data = $query->fetch_all(MYSQLI_ASSOC);

    return $query;
}

// delete function
function deleteRecord($table, $cond){
    global $conn;
    $query = $conn->query("DELETE FROM $table WHERE $cond");

    return $query;
}

function countRecords($table, $cond = NULL){
    global $conn;

    if ($cond == NULL){
        $query = "select * from $table";
    }
    else{
        $query = "select * from $table WHERE $cond";
    }

    $result = $conn->query ($query);
    $count = $result->num_rows;

    return $count;
}

// students approve
function approveStudents($roll){
    global $conn;
    $query = $conn->query("UPDATE students SET status='1' WHERE roll='$roll' AND status='0'");

    return $query;
}

// for disabled students
function disabledStudents($roll){
    global $conn;
    $query = $conn->query("UPDATE students SET status='2' WHERE roll='$roll' AND status='1'");

    return $query;
}

//  check if admin logged in or not
function checkAdmin(){
    if(!isset($_SESSION['admin'])){
        redirect('login.php');
    }
}