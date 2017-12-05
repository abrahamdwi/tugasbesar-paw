<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>as User</title>
</head>
<body>

    <div class="fixed-header">
        <div class="container">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="#">BE COLLECTORS</a>
            </div>
            <nav class="main-menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#">upload</a></li>
                    <li><a href="#l">My chart</a></li>
                    <li><a href="index.php">logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <section class="col-md-12 content" id="home">
            <div class="col-lg-12 col-md-12 content-item content-item-1 background">
                <h1 style="text-align: center"> HALLO <?php echo $_SESSION['nama'] ?></h1>
                
                <h1 style="text-align: center">SELAMAT DATANG DI BE COLLECTOR </h1>
                 <div class="col-md-12" style="border: solid black; height: 250px; font-size: 12px ; margin-top:20px">
                     
                 </div> 
                 <div class="col-md-12" style="border: solid black; height: 250px; font-size: 12px ; margin-top:20px">
                     
                 </div>   
            </div>    
       </section>

    </div>
    <section></section>
    

</body>
</html>