<?php require "header.php"; ?>

	<main class="grille">
		<article> 
			<div class="img">
				<a href="redirection/9782811607494.php"><img src="image/Tome_1_SNK.jpg" height="193" width="132" alt="Tome_1_SNK">
				</a>	
			</div>
			<ul>
				<?php $req = "SELECT Genre.libelle, Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Editeur ON Livre.editeur.id WHERE Livre.titre = 'L'attaque des titans' AND Auteur.idPersonne = 1"
    $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> ISBN : " . $row["isbn"] ."</li>";
                        echo "<li> Genre : " . $row["libelle"] ."</li>";
                        echo "<li> Année : " . $row["anneee"] ."</li>";
                        echo "<li> Auteur : " . $row["nom"] ." " . $row["prenom] ." </li>; 
                    }
                    mysqli_free_result($result);
                } ?> 
                <?php $req = "SELECT * FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur = Editeur.id WHERE Livre.titre = 'L'attaque des titan' AND Auteur.idPersonne = 1; ";
     $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> Editeur : " . $row["libelle"] ."</li>";               
                                                                        
			</ul>  
		</article>
		<article>
			<div class="img">
				<a href="redirection/9782871294146.php"><img src="image/Tome_1_Naruto.jpg" height="193" width="132" alt="Tome_1_Naruto"></a>
			</div>
			<ul>
				<?php $req = "SELECT Genre.libelle, Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Editeur ON Livre.editeur.id WHERE Livre.titre = 'Naruto' AND Auteur.idPersonne = 2"
    $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> ISBN : " . $row["isbn"] ."</li>";
                        echo "<li> Genre : " . $row["libelle"] ."</li>";
                        echo "<li> Année : " . $row["anneee"] ."</li>";
                        echo "<li> Auteur : " . $row["nom"] ." " . $row["prenom] ." </li>; 
                    }
                    mysqli_free_result($result);
                } ?> 
                <?php $req = "SELECT * FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur = Editeur.id WHERE Livre.titre = 'Naruto' AND Auteur.idPersonne = 2; ";
     $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> Editeur : " . $row["libelle"] ."</li>";               
                                                                        
			</ul>
		</article>
		<article>
			<div class="img">
				<a href="redirection/9783551745811.php"><img src="image/Tome_1_OP.jpg" height="193" width="132" alt="Tome_1_OP"></a>
			</div>
			<ul>
				<?php $req = "SELECT Genre.libelle, Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Editeur ON Livre.editeur.id WHERE Livre.titre = 'One Piece' AND Auteur.idPersonne = 3"
    $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> ISBN : " . $row["isbn"] ."</li>";
                        echo "<li> Genre : " . $row["libelle"] ."</li>";
                        echo "<li> Année : " . $row["anneee"] ."</li>";
                        echo "<li> Auteur : " . $row["nom"] ." " . $row["prenom] ." </li>; 
                    }
                    mysqli_free_result($result);
                } ?> 
                <?php $req = "SELECT * FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur = Editeur.id WHERE Livre.titre = 'One Piece' AND Auteur.idPersonne = 3; ";
     $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> Editeur : " . $row["libelle"] ."</li>"; 
			</ul>
		</article>
		<article>
			<div class="img">
				<a href="redirection/9781421582986.php"><img src="image/Tome_1_Tokyo_Ghoul.jpg" height="193" width="132" alt="Tome_1_Tokyo_Ghoul"></a>
			</div>
			<ul>
				<?php $req = "SELECT Genre.libelle, Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Editeur ON Livre.editeur.id WHERE Livre.titre = 'Tokyo Ghoul' AND Auteur.idPersonne = 4"
    $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> ISBN : " . $row["isbn"] ."</li>";
                        echo "<li> Genre : " . $row["libelle"] ."</li>";
                        echo "<li> Année : " . $row["anneee"] ."</li>";
                        echo "<li> Auteur : " . $row["nom"] ." " . $row["prenom] ." </li>; 
                    }
                    mysqli_free_result($result);
                } ?> 
                <?php $req = "SELECT * FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur = Editeur.id WHERE Livre.titre = 'Tokyo Ghoul' AND Auteur.idPersonne = 4; ";
     $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> Editeur : " . $row["libelle"] ."</li>"; 
			</ul>
		</article>
		<article>
			<div class="img">
				<a href="redirection/9781421582696.php"><img src="image/Tome_1_MHA.jpg" height="193" width="132" alt="Tome_1_MHA"></a>
			</div>
			<ul>
				<?php $req = "SELECT Genre.libelle, Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Editeur ON Livre.editeur.id WHERE Livre.titre = 'My Hero Academia' AND Auteur.idPersonne = 5"
    $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> ISBN : " . $row["isbn"] ."</li>";
                        echo "<li> Genre : " . $row["libelle"] ."</li>";
                        echo "<li> Année : " . $row["anneee"] ."</li>";
                        echo "<li> Auteur : " . $row["nom"] ." " . $row["prenom] ." </li>; 
                    }
                    mysqli_free_result($result);
                } ?> 
                <?php $req = "SELECT * FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur = Editeur.id WHERE Livre.titre = 'My Hero Academia' AND Auteur.idPersonne = 5; ";
     $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> Editeur : " . $row["libelle"] ."</li>"; 
			</ul>
		</article>
		<article>
			<div class="img">
				<a href="redirection/9782871292661.php"><img src="image/Tome_1_HxH.jpg" height="193" width="132" alt="Tome_1_HxH"></a>
			</div>
			<ul>
				<?php $req = "SELECT Genre.libelle, Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Editeur ON Livre.editeur.id WHERE Livre.titre = 'Hunter X Hunter' AND Auteur.idPersonne = 6"
    $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> ISBN : " . $row["isbn"] ."</li>";
                        echo "<li> Genre : " . $row["libelle"] ."</li>";
                        echo "<li> Année : " . $row["anneee"] ."</li>";
                        echo "<li> Auteur : " . $row["nom"] ." " . $row["prenom] ." </li>; 
                    }
                    mysqli_free_result($result);
                } ?> 
                <?php $req = "SELECT * FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur = Editeur.id WHERE Livre.titre = 'Hunter X Hunter' AND Auteur.idPersonne = 6; ";
     $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> Editeur : " . $row["libelle"] ."</li>"; 
			</ul>
		</article>
		<article>
			<div class="img">
				<a href="redirection/9781421587189.php"><img src="image/Tome_1_Black_Clover.jpg" height="193" width="132" alt="Tome_1_Black_Clover"></a>
			</div>
			<ul>
				<?php $req = "SELECT Genre.libelle, Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Editeur ON Livre.editeur.id WHERE Livre.titre = 'Black Clover' AND Auteur.idPersonne = 7"
    $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> ISBN : " . $row["isbn"] ."</li>";
                        echo "<li> Genre : " . $row["libelle"] ."</li>";
                        echo "<li> Année : " . $row["anneee"] ."</li>";
                        echo "<li> Auteur : " . $row["nom"] ." " . $row["prenom] ." </li>; 
                    }
                    mysqli_free_result($result);
                } ?> 
                <?php $req = "SELECT * FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur = Editeur.id WHERE Livre.titre = 'Black Clover' AND Auteur.idPersonne = 7; ";
     $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> Editeur : " . $row["libelle"] ."</li>"; 
			</ul>
		</article>
		<article>
			<div class="img">
				<a href="redirection/9782809469295.php"><img src="image/Tome_1_Demon_Slayer.jpg" height="193" width="132" alt="Tome_1_Demon_Slayer"></a>
			</div>
			<ul>
				<?php $req = "SELECT Genre.libelle, Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Editeur ON Livre.editeur.id WHERE Livre.titre = 'Demon Slayer' AND Auteur.idPersonne = 8"
    $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> ISBN : " . $row["isbn"] ."</li>";
                        echo "<li> Genre : " . $row["libelle"] ."</li>";
                        echo "<li> Année : " . $row["anneee"] ."</li>";
                        echo "<li> Auteur : " . $row["nom"] ." " . $row["prenom] ." </li>; 
                    }
                    mysqli_free_result($result);
                } ?> 
                <?php $req = "SELECT * FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur = Editeur.id WHERE Livre.titre = 'Demon Slayer' AND Auteur.idPersonne = 8; ";
     $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> Editeur : " . $row["libelle"] ."</li>"; 
			</ul>
		</article>
		<article>
			<div class="img">
				<a href="redirection/9782811613563.php"><img src="image/Tome_1_SDS.jpg" height="193" width="132" alt="Tome_1_SDS"></a>
			</div>
			<ul>
				<?php $req = "SELECT Genre.libelle, Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Editeur ON Livre.editeur.id WHERE Livre.titre = 'Seven Deadly Sins' AND Auteur.idPersonne = 9"
    $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> ISBN : " . $row["isbn"] ."</li>";
                        echo "<li> Genre : " . $row["libelle"] ."</li>";
                        echo "<li> Année : " . $row["anneee"] ."</li>";
                        echo "<li> Auteur : " . $row["nom"] ." " . $row["prenom] ." </li>; 
                    }
                    mysqli_free_result($result);
                } ?> 
                <?php $req = "SELECT * FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur = Editeur.id WHERE Livre.titre = 'Seven Deadly Sins' AND Auteur.idPersonne = 9; ";
     $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> Editeur : " . $row["libelle"] ."</li>"; 
			</ul>
		</article>
		<article>
			<div class="img">
				<a href="redirection/9782847897371.php"><img src="image/Tome_1_Baki.jpg" height="193" width="132" alt="Tome_1_Baki"></a>
			</div>
			<ul>
				<?php $req = "SELECT Genre.libelle, Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Editeur ON Livre.editeur.id WHERE Livre.titre = 'Baki' AND Auteur.idPersonne = 10"
    $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> ISBN : " . $row["isbn"] ."</li>";
                        echo "<li> Genre : " . $row["libelle"] ."</li>";
                        echo "<li> Année : " . $row["anneee"] ."</li>";
                        echo "<li> Auteur : " . $row["nom"] ." " . $row["prenom] ." </li>; 
                    }
                    mysqli_free_result($result);
                } ?> 
                <?php $req = "SELECT * FROM Auteur JOIN Personne On Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole = Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur = Editeur.id WHERE Livre.titre = 'Baki' AND Auteur.idPersonne = 10; ";
     $result = mysqli_query($link, $req);
                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<li> Editeur : " . $row["libelle"] ."</li>"; 
			</ul>
		</article>
		
	</main>
</body>	
</html>