<?php
include_once 'dbConnect.php';

//clear

if(isset($_POST['clear'])){
    $sql = "TRUNCATE TABLE comment";
    if(mysqli_query($connection, $sql) == TRUE){
        echo "Table deleted";
    }else{
        echo "error";
    }
}


//Insertion

if(isset($_POST['Comment'])){
    $comm = $_POST['comment'];
    $sql = "INSERT INTO `comment`(`comment`) VALUES ('$comm')";
    if(mysqli_query($connection, $sql) == TRUE){
        echo "Inserted";
    }else{
        echo "error";
    }
}


//Select to display

$sql = "SELECT `ID`, `COMMENT` FROM `comment`";
$result = mysqli_query($connection, $sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "Comment number".$row['ID']."<br><hr>".$row['COMMENT']."<br><hr>";
    }

}else {
    echo "No comment to be shown";
}
?>
