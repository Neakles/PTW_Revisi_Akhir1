<!DOCTYPE html>
<html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$this->load->view('welcome_message');
	}
}
?>

<head>
    <title>Selamat Datang</title>
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
				include "application/models/home.php";
            break;
            case 'artikel':
                include "application/models/artikel.php";
            break;
            case 'contact':
                include "application/models/contact.php";
            break;
            default:
                echo "<center><h3>Maaf halaman tidak ditemukan!!</h3></center>";
        }
    }else{
        include "application/models/home.php";
    }
    ?>

    </div>
</div>
</body>
</html>