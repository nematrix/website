<?php
  if(!isset($_SESSION)){
    session_start();
  }//store data to the serve
  $man = 'sick me';
  $dbhost = '127.0.0.1';
  $username = 'webster';
  $password = 'Book#001';
  $db = 'PicSell';
  $db_Connect = mysqli_connect($dbhost, $username, $password);

  if(mysqli_connect($dbhost, $username, $password) && mysqli_select_db($db_Connect,  $db)){
      header('page=process');
  }
  else {
    die(mysqli_error());
  }

  //data process if inserted
  if(isset($_POST['submit'])){
    //inserting data
    $first_Name = $_POST['fname'];
    $last_Name = $_POST['Lname'];
    //shop  details
    $Shopname = $_POST['Shopname'];
    $Location = $_POST['Location'];
    $shop_Phone_Number = $_POST['Phonenumber'];
    $shop_Email = $_POST['Email'];
    $Shop_keys = $_POST['Shopkeys_1'];
    $shop_keys = $_POST['shopkeys'];

    if($first_Name != ''  &&  $last_Name != '' && $Shopname != '' &&  $Location != '' &&  $shop_Phone_Number != ''  &&  $shop_Email != '' &&  $shop_keys != ''){
      $header = header('Location:../Main/index.php?Results=sucessful',  true);
      //password protection
      $password_protection = md5($shop_keys);
      //sql
      //owner inserting
      $sql = "INSERT INTO Shop_owner (Owner_FirstName, Owner_LastName) VALUES ('$first_Name', '$last_Name')";
      mysqli_query($db_Connect, $sql);
      //shop inserting
      $sql1 = "INSERT INTO Shop_name (shopname, Location, Phonenumber, Email, shop_Keys) VALUES ('$Shopname', '$Location','$shop_Phone_Number', '$shop_Email', '$shop_keys')";
      mysqli_query($db_Connect, $sql1);
      // Login
      $_SESSION['Authertication'] = 1;
    }
  }
    //Login the picsell
  if(isset($_POST['Login'])){

    $Shopname = $_POST['Shopname'];
    $shop_keys  = $_POST['shop_Keys'];
    //saving data back-end
    $_SESSION['shopname'] = $_POST['Shopname'];
    $sql="SELECT * from Shop_name where shopname='".$Shopname."'AND shop_keys='".$shop_keys."' limit 1";

    $result=mysqli_query($db_Connect, $sql);

    if(mysqli_num_rows($result)==1){
        header('Location:../Main/index.php', True);
        $_SESSION['shopname'] = $_POST['Shopname'];
    }
    else{
        echo "";
    }
  }
?>
