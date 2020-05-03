<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
    <link rel="stylesheet" type="text/css" href="view/style.css">
</head>
<body>
<div class="content">
    <header>
        <h1>SELAMAT DATANG!!!</h1>
    </header>    

    <div class="menu">
        <ul>
            <li><a href="index.php?page=home">home</a></li>
            <li><a href="index.php?page=artikel">artikel</a></li>
            <li><a href="index.php?page=contact">contact</a></li>
        </ul>
    </div>

    <div class="badan">
    <?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch ($page){
            case 'home':
                include "model/home.php";
            break;
            case 'artikel':
                include "model/artikel.php";
            break;
            case 'contact':
                include "model/contact.php";
            break;
            default:
                echo "<center><h3>Maaf halaman tidak ditemukan!!</h3></center>";
        }
    }else{
        include "model/home.php";
    }
    ?>

    </div>
</div>
</body>
</html>
