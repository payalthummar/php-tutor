<?php
    
    // $conn = @mysqli_connect("localhost","root","","sft_tutorial") or die("Connetion not established");
    $conn = @mysqli_connect("localhost","root","") or die("Connetion not established");
    if($conn){
        mysqli_select_db($conn,"sft_tutorial") or die("Database not found");
    }
if(isset($_POST['submit'])){
    //print_r($_POST);
    //die;
    if($_POST['submit']=='Update'){
        //print_r($_POST);
        $hobby = isset($_POST["Hobby"])?implode(",",$_POST["Hobby"]):"";
        $sql = "UPDATE sft_user SET Name='".$_POST["Name"]."', Contact_No='".$_POST["Contact_No"]."', Email_Id='".$_POST["Email_Id"]."', Gender='".$_POST["Gender"]."',Address='".$_POST["Address"]."', hobby='".$hobby."', Password='".$_POST["Password"]."' WHERE Id='".$_POST['Id']."'";
        $result = mysqli_query($conn,$sql) or die("Update query problem");
        if($result){
            echo "Record updated successfully";
        }
    }
    else {
        $hobby = isset($_POST["Hobby"])?implode(",",$_POST["Hobby"]):"";
        $sql = "INSERT INTO sft_user(Name, Contact_No, Email_Id, Gender,Address, hobby, Password) 
                VALUES ('".$_POST["Name"]."','".$_POST["Contact_No"]."','".$_POST["Email_Id"]."','".$_POST["Gender"]."','".$_POST["Address"]."', '".$hobby."','".$_POST["Password"]."')";
        $result = mysqli_query($conn,$sql) or die("Insert query problem");
        if($result){
            echo "Record inserted successfully";
        }
    }
}

if(isset($_GET['editId'])){
    $Id = $_GET['editId'];
    $selQuery = "SELECT * FROM sft_user WHERE Id='".$Id."'";
    $response = mysqli_query($conn,$selQuery) or die("Error: Select Query problem");
    $Erow = mysqli_fetch_object($response);
    $eHobby = !empty($Erow->Hobby)?explode(",",$Erow->Hobby):array();
    //print_r($Erow);
}
?>
 



<body>
 
    
    <div class= "container">
        <form method="post" action="database.php">

           <div class="row">
               <div class="col-25">
                <label for="uname">Name</label>
               </div>
               <div class="col-75">
                <input type="text" value="<?php echo isset($Erow)?$Erow->Name:""; ?>" id="uname" name="Name" placeholder="Enter name here">
               </div>
           </div>

           <div class="row">
            <div class="col-25">
                <label for="phone">Contact Number</label>
            </div>
            <div class="col-75">
                <input type="tel"  value="<?php echo isset($Erow)?$Erow->Contact_No:""; ?>" name="Contact_No" id="phone">
            </div>
             </div>

             <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="email"  value="<?php echo isset($Erow)?$Erow->Email_Id:""; ?>" name="Email_Id" id="email">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
                <label for="gender">Gender</label>
            </div>
            <div class="col-75">
                <input type="radio" id="male" name="Gender" value="male" <?php echo isset($Erow)?($Erow->Gender=='male'?"checked":""):""; ?>>
                <label for="male">Male</label>
                <input type="radio" id="female" name="Gender" value="female" <?php echo isset($Erow)?($Erow->Gender=='female'?"checked":""):""; ?>>
                <label for="female">Female</label>
                <input type="radio" id="other" name="Gender" value="other" <?php echo isset($Erow)?($Erow->Gender=='other'?"checked":""):""; ?>>
                <label for="other">Other</label>
            </div>
        </div>
          
        <div class="row">
            <div class="col-25">
                <label for="address">Address</label>
            </div>
            <div class="col-75">
                <textarea name="Address" id="address" cols="30" rows="10"><?php echo isset($Erow)?$Erow->Address:""; ?></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="hobby">Hobby</label>
            </div>
            <div class="col-75">
                <input type="checkbox" id="cricket" name="Hobby[]" value="cricket" <?php echo isset($eHobby)?(in_array('cricket',$eHobby)?"checked":""):""; ?>>
                <label for="cricket">Cricket</label>
                <input type="checkbox" id="travelling" name="Hobby[]" value="travelling" <?php echo isset($eHobby)?(in_array('travelling',$eHobby)?"checked":""):""; ?>>
                <label for="travelling">Travelling</label>
                <input type="checkbox" id="yoga" name="Hobby[]" value="yoga" <?php echo isset($eHobby)?(in_array('yoga',$eHobby)?"checked":""):""; ?>>
                <label for="yoga">Yoga</label>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="password">Password</label>
            </div>
            <div class="col-75">
                <input type="password"  value="<?php echo isset($Erow)?$Erow->Password:""; ?>" id="password" name="Password" placeholder="Enter password" required>
            </div>
        </div>
       
        <div class="row">
            <input type="hidden"  value="<?php echo isset($Erow)?$Erow->Id:""; ?>" name="Id" />
            <input type="submit" name="submit" value="<?php echo isset($Erow)?"Update":"Submit"; ?>">
        </div>

        <a href="select.php"> Go to Select query </a>
        </form>
    </div>
</body>

<style>
        *{
            box-sizing: border-box;
            
        }
        .container{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            
        }

        textarea, input[type=text],input[type=email],input[type=date],input[type=password],input[type=tel]{
            width: 50%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        input[type=submit]{
            background-color: rgb(95, 97, 96);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 20px;
        }
        input[type=submit]:hover{
            background-color: rgb(48, 49, 47);
        }
        .col-25{
            float: left;
            width: 25%;
            margin-top: 6px;
        }
        .col-75{
            float: left;
            width: 75%;
            margin-top: 6px;
        }
       
    </style>