<!doctype html>
<html lang="en" id="home">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Portfolio</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <!-- dalam button ada data target yang harus sama dengan id menu pada navbarnya -->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#home" class="navbar-brand page-scroll">Sistem Informasi Akademik</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#home">Registrasi</a></li>
                    <!-- <class="page-scroll"> -->
                    <!-- <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Login
                        <span class="caret"></span>
                    </button> -->
                    <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenu1"> -->
                    <!-- <li><select name=login><a href="#login" class="page-scroll">Login</a>
                        <option><a href="#">Login</a></option>
                        <option><a href="#">Admin</a></option>
                        <option><a href="#">Dosen</a></option>
                        <option><a href="#">Mahasiswa</a></option>
                        </select>
                    </li> -->
                        <!-- <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li> -->
                    <!-- </ul> -->
                    
                    <!-- <li><a href="#login" class="page-scroll">Login</a></li> -->

                    <li><a href="#login">Login</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <div class="jumbotron text-center">
        <!-- <img src="img/wpp.jpg" class="img-square"> -->
        <h1>SELAMAT DATANG, GOOD PERSON</h1>
    </br>
    </br>
        <p>Dashboard | KRS | KHS</P>
    </div>
    <!-- akhir jumbotron -->

    <!-- Login -->
    <section class="login" id="login">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Login</h2>
                    <hr>
                </div>
            </div>
            
            <div id="form">
                <form method="post" action="login.php" class="form-horizontal">
	                <label class="username">Username</label><br>
	                <input class="input" type="text" name="username" placeholder="Masukkan Username"><br>
	                <label class="password">Password</label><br>    	
	                <input class="input" type="password" name="pass" placeholder="Masukkan Password"><br>
	                <button type="submit" name="submit" class="btn">Login</button>
                </form>
            </div>
