<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BUY CROPS</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                           <div id='wel'>WELCOME <?php echo $_SESSION['name'] ?></div>
                           </div>
        </div>
    </section>
    <form action='buy_crop_back.php' method='POST'>
    <label><p>ENTER TOKEN NO</p></label> <input type='text' name='token'/><br>
    <input type='submit' value='buy' name='submit'/>
    </form>
</body>
</html>