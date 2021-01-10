<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="/biblio_groupe11_etape4/style/style.css">
	<meta charset="utf-8">
	<link rel="icon" href="/biblio_groupe11_etape3/image/logo.png">
	<title>Manga References</title>
</head>
<body>
    
    <?php 
    $link = mysqli_connect("localhost", "root", "", "bibliotheque");
    
    if (!link) {
        echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
        echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
        echo "Erreur de débogage : " . mysqli_connect_errno() . PHP_EOL;
        exit;
    }
	<header>
		<h1 class="margin"><a href="/biblio_groupe11_etape4/index.php"><img src="/biblio_groupe11_etape3/image/logo.png" height="120" width="120" alt="Logo du site">Manga References</a></h1>
		<div class="option">
			<a href="/biblio_groupe11_etape4/contact.php">Contact</a>
		</div>
		</header>