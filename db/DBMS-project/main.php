<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<link rel="stylesheet" href="design.css">
<html>
    <head>
        <title>Home | Database Management System Project(Group 5)</title>
            
    </head>

    <body>
        <header>
            <div>
        <a href="http://www.cdsga-system.com/website/site/main.php" target="_blank" class="brand"><img src="images/cdsga_logo2.png"  style="width:80px;height:70px;" alt="" ></a>
            </div>
            <h1 style="color:white"><font face = "Old English Text MT">Colegio De San Gabriel Arcangel</font></h1>
            
            <div class="menu">
            
                <button><a href="Students.html">Students</a></button>
                <button><a href="Teachers.html">Teachers</a></button>
                <button><a href="Staff.html">Staffs</a></button>
                <button><a href="logout.php">Logout<a></button>
            </div>
        </header>
        <section class="section-main">
        </section>
        <div class="footer">
            <p align="center">@2022 - Database Management System Project (Group 5)</p>
        </div>
        
        </script>
        
    </body>
</html>
<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>
