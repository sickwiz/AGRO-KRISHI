<?php
if(empty($_SESSION))
{
    session_start();
    if(!isset($_SESSION['admin_name']))
    header("location:index.php");
}
else
{
    if(!isset($_SESSION['admin_name']))
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Management</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script>
    function slot()
    {
        // alert("hello");
        var s=document.getElementById('addSlot');
        s.innerHTML="<form action='enter_slot.php' method='POST'><label><p>NUMBER OF SLOTS</p></label><input style='color:black'; name='slot' type='number'/><br><label><p>DATE</p></label><input style='color:black'; name='dat' type='date'/><br><input style='color:black'; type='submit' name='submit' value='add'/></form>";
    }
    </script>
</head>
<body>
<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
               <a class="navbar-brand" >
                   <img id=logo src="img/agroLogo.png" height="100" width="100" />
                </a>

            </div>

        </div>
    </div>
        <section class="menu-section">
        <div class="container">
            <div class="row ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                            <li><a href="logout.php"><b>LOGOUT</b></a></li>
                            <!--<li id='wel'><b>WELCOME <?php echo $_SESSION['name'] ?></b></li>-->
                           </ul>
                           <div id='wel'>WELCOME <?php echo $_SESSION['admin_name'] ?></div>
                           </div>
                           
        </div>
    </section>
    <h3><label> <p>ADD SLOT </p> </label> <input style='color:black' type='button' value='ADD SLOT' onclick='slot()'/> <br>
    <label><p>VIEW BOOKINGS </p> </label> <a href='view_booking.php'><input type='button' value='VIEW'></a> <br>
    <div id='addSlot'></div>
</body>
</html>