<?php
$conn = @mysqli_connect("localhost","root","") or die("Connetion not established");
if($conn){
    mysqli_select_db($conn,"sft_tutorial") or die("Database not found");
}

if(isset($_GET['delId'])){
    $Id = $_GET['delId'];
    $query = "DELETE FROM sft_user WHERE Id='".$Id."'";
    $result = mysqli_query($conn,$query) or die("Insert query problem");
    if($result){
        header("location:select.php?msg=Record deleted successfully");
    }
}

if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

$selQuery = "SELECT * FROM sft_user";
$response = mysqli_query($conn,$selQuery) or die("Error: Select Query problem");
$num = mysqli_num_rows($response);

if($num > 0){ ?>
<table cellpadding="10" border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email Id</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Hobby</th>
        <th>Register Date</th>
        <th>Status</th>
        <th>DELETE</th>
        <th>EDIT</th>
    </tr>
<?php
    while($data = mysqli_fetch_object($response))
    {
        ?>
        <tr>
            <td><?php echo $data->Id; ?></td>
            <td><?php echo $data->Name; ?></td>
            <td><?php echo $data->Contact_No; ?></td>
            <td><?php echo $data->Email_Id; ?></td>
            <td><?php echo $data->Gender; ?></td>
            <td><?php echo $data->Address; ?></td>
            <td><?php echo $data->Hobby; ?></td>
            <td><?php echo $data->Register_Date; ?></td>
            <td><?php echo $data->isActive==1?"Active":"Deactive"; ?></td>
            <td>
                <a href="?delId=<?php echo $data->Id; ?>">DELETE</a>
            </td>
            <td>
                <a href="database.php?editId=<?php echo $data->Id; ?>">EDIT</a>
            </td>
        </tr>
        <?php
    }
?>
</table>
<?php
} 
else {
    echo "There are no records";
}
?>