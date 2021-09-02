<?php
    if(isset($_POST['submit'])){
        print_r($_POST);
        echo $_POST['firstname'];
        echo $_POST['email'];
        if(!empty($_FILES['myfile']['name'])){
            $tmpName = $_FILES['myfile']['tmp_name']; 
            $fileNewName = "documents/".time().".pdf";
            move_uploaded_file($tmpName, $fileNewName);       
        }
        // header("location:form.php"); // One page to another
    }
    // $_GET
    // $_REQUEST
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        h3{
            text-align: center;
            padding:10px;
            text-decoration: underline;
        }
        *{
            box-sizing: border-box;
            
        }
        .container{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            
        }
        label{
            padding: 12px 12px 12px 0;
            display: inline-block;
        }
        input[type=text],input[type=tel],input[type=email],input[type=date],input[type=password],input[type=file], textarea, select{
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
        col-25{
            float: left;
            width: 25%;
            margin-top: 6px;
        }
        col-75{
            float: left;
            width: 75%;
            margin-top: 6px;
        }
       
    </style>
</head>
<body>
    <h3>Contact Form</h3>

    <div class= "container">
        <form method="post" enctype="multipart/form-data" action="form.php">
           <div class="row">
               <div class="col-25">
                <label for="fname">First Name</label>
               </div>
               <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Enter name here">
               </div>
           </div>
           <div class="row">
               <div class="col-25">
                <label for="lname">Last Name</label>
               </div>
               <div class="col-75">
                <input type="text" id="lname" name="lastname">
               </div>
           </div>
           <div class="row">
               <div class="col-25">
                   <label for="birthdate">Date Of Birth</label>
               </div>
               <div class="col-75">
                   <input type="date" name="birthdate" id="birthdate">
               </div>
           </div>
           <div class="row">
            <div class="col-25">
                <label for="phone">Contact Number</label>
            </div>
            <div class="col-75">
                <input type="tel" name="phone" id="phone">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="email" name="email" id="email">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="address">Address</label>
            </div>
            <div class="col-75">
                <textarea name="address" id="address" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="gender">Gender</label>
            </div>
            <div class="col-75">
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="hobby">Hobby</label>
            </div>
            <div class="col-75">
                <input type="checkbox" id="cricket" name="hobby[]" value="cricket">
                <label for="cricket">Cricket</label>
                <input type="checkbox" id="travelling" name="hobby[]" value="travelling">
                <label for="travelling">Travelling</label>
                <input type="checkbox" id="yoga" name="hobby[]" value="yoga">
                <label for="yoga">Yoga</label>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="course">Course</label>
            </div>
            <div class="col-75">
                <select multiple name="course[]" id="course">
                    <option value="html">HTML</option>
                    <option value="css">CSS</option>
                    <option value="javascript">JavaScript</option>
                    <option value="php">PHP</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="file">Select a File:</label>
            </div>
            <div class="col-75">
                <input type="file" name="myfile" id="myfile">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="password">Password</label>
            </div>
            <div class="col-75">
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>
        </div>
       
        <div class="row">
            <input type="submit" name="submit" value="Submit">
        </div>
        </form>
    </div>
</body>
</html>