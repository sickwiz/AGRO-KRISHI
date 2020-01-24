<?php
if(empty($_SESSION))
{
    session_start();
    if(!isset($_SESSION['name']))
    header("location:index.php");
}
else
{
    if(!isset($_SESSION['name']))
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SESSION['name'] ?></title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
#logo
{
    border-radius:50px;
}
</style>
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
                       
                        <li><a href="add_equipment.php"><b>ADD EQUIPMENT</b></a></li>
                            <li><a href="rent_list.php"><b>SEE RENTED</b></a></li>
                            <li><a href="rent_equip.php"><b>RENT EQIPMENTS</b></a></li>
                           </ul>
                           <div id='wel'>WELCOME <?php echo $_SESSION['name'] ?></div>
                           </div>
        </div>
    </section>

     <div class="form-area1"> 
             <div class="row">
    <div class="col-md-9 col-md-offset-1">
        <h3 align="center">EQUIPMENT SELECTION</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="rent_dispequip.php">
<div class="form-group">
    <br/>
    <br/>
    <div class="form-group">
    <label><p> SELECT YOUR DESIRED EQUIPMENT</p> </label>
    <br>
    <select name='equip' class="form-control">
  <option default>SELECT EQUIPMENT TO SEE LIST AND RENT</option>
  <option value="CULTIVATOR">CULTIVATOR</option>
  <option value="HARVESTER">HARVESTER</option>
  <option value="SPRAYER">SPRAYER</option>
  <option value="TRACTOR">TRACTOR</option>
  <option value="SEED DRILL">SEED DRILL</option>
</select> 
<input  type="submit" name="submit" value="SUBMIT" class="btn btn-danger"/>
</form>
</div>
</body>
</html>