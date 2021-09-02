<?php
$conn = @mysqli_connect("localhost","root","") or die("Connetion not established");
if($conn){
    mysqli_select_db($conn,"sft_tutorial") or die("Database not found");
}
$selQuery = "SELECT * FROM sft_user";
$response = mysqli_query($conn,$selQuery) or die("Error: Select Query problem");
$num = mysqli_num_rows($response);
if($num > 0){
    while($data = mysqli_fetch_assoc($response)){
        echo $data['Name'];
        echo "<br><br>";
        echo $data['Email_Id'];
        echo "<br><br>";
        print_r($data);
    }
    while($data = mysqli_fetch_object($response)){
        echo $data->Name;
        echo "<br><br>";
       
        print_r($data);
    }


   
}
?>