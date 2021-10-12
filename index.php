<?php
/* 
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
*/

include __DIR__ . '../assets/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	<title>PHP Ajax Dischi</title>
</head>

<body>
	<main>
		<ul class="albums">
			<?php
			foreach ($db as $key => $album) {
				echo "<li class='album'>";
				foreach ($album as $key => $details) {
					if ($key == "title") {
						echo ' <div class="title">';
						echo $details;
						echo '</div>';
					} else if ($key != 'poster') {
						echo ' <div class="detail">';
						echo $details;
						echo '</div>';
					} else {
						echo ' <img src="' . $details . '"/>';
					}
				}
				echo "</li>";
			}
			?>
		</ul>
	</main>
</body>

</html>
