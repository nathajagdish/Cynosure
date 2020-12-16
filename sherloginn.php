<?php
    session_start();
    include('connect.php');  
if(isset($_REQUEST['submit'])){
    $uname=$_REQUEST['email'];
    $password=$_REQUEST['Password'];
    $select=$_REQUEST['Recive_City'];
    
        global $conn;
        $sql=mysqli_query($conn,"select*from signup where email='$uname' and Password='$password' and Recive_City='$select'");
        $row = mysqli_fetch_array($sql);
        if($row['email']==$uname && $row['Password']==$password && $row['Recive_City']=='Kabul'){

            $_SESSION['email']=$uname;
            $_SESSION['Recive_City']=$select;
            
            header('location:homepage.php');
    }
    elseif($row['email']==$uname && $row['Password']==$password && $row['Recive_City']==$select && $row['Recive_City']!='Kabul')
    {
        $_SESSION['Recive_City']=$select;
        $_SESSION['email']=$uname;
        header('location:Branch/Mazar.php');	
    }
    /*elseif($row['email']==$uname && $row['Password']==$password && $row['type']=='USA')
    {
        $select=$_SESSION['type'];
        //$_SESSION['uname']=$uname;
    header('location:homepage.php');	
    }
    elseif($row['email']==$uname && $row['Password']==$password && $row['type']=='Herat')
    {
        $select=$_SESSION['type'];
        //$_SESSION['uname']=$uname;
    header('location:homepage.php');	
    }
    elseif($row['email']==$uname && $row['Password']==$password && $row['type']=='Iran')
    {
        $select=$_SESSION['type'];
        //$_SESSION['uname']=$uname;
    header('location:homepage.php');	
    }

    else
    {
        $message =  "<h1> You are Not.$select.</h1>";
    } */  
    }


?>
    
    
    <!doctype html>
    <html>
        <head>
        <meta charset="utf-8">
        <title>Smart Finance System</title> 
        <link rel="stylesheet"  href="LoginMMU.css">
        </head>
        <body style="background-image:url('HOME.jpg');">    
            <div class="LoginBox">
            <h1 class="text-center">Smart Finance System </h1>
            <div class="imgcontainer">
                <img src="logofsf.png" alt="Avatar" class="avatar">

                
                    <form  method="POST" class="inputBox">
                    <input type="text" name="email" placeholder="Enter Your Email">
                    
                    <input type="password" name="Password" placeholder="Enter Password">
                    </div> 
    
                    <select name="Recive_City" style="width:100%; border: 1px solid #ccc" id="test" onchange= showdiv(this) >
                    <option value="-1">Select Your Type</option>
                            <option value="Kabul" >Manager</option>
                            <option value="Mazar_e_Sharif" >Mazar-e-Sharif</option>
                            <option value="Herat" >Herat</option>
                            <option value="Iran" >Iran</option>
                            <option value="USA" >USA</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   
                
                    <input type="submit"  name="submit" value="Login">
                
            </form>
           
        </body>
    </html>
