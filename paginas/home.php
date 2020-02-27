<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Home | Avril Lavigne</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
		<link rel="icon" href="../imagens/icon.png" type="image/x-icon" />
		<link rel="shortcut icon" href="../imagens/icon.png" type="image/x-icon" />
		<?php
			require_once "../php/session.php";
			sessionstart('username', 'password');
		?>
	</head>
	<body>
		<header>
			<h1><a href="home.php">Avril Lavigne</a></h1>
			<nav id="menu">
				<ul>
					<li><a class="active" href="home.php">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="music.html">Music</a></li>
					<li><a href="photos.html">Photos</a></li>
					<li><a href="videos.html">Videos</a></li>
					<li><a href="https://www.avrillavignestore.com" target="_blank">Store</a></li>
				</ul>
			</nav>
		</header>
		<img id="fundo1" src="../imagens/background/background2.png" />
		<img id="fundo2" src="../imagens/background/background3.jpg" />
		<img id="fundo3" src="../imagens/background/background4.jpg" />
		<section id="pri">
			<div>
				<h2><a href="https://avrillavigne.lnk.to/HeadAboveWaterAlbum" target="_blank">Out now!</a></h2>
				<center><a href="music6.html" target="_blank"><img src="../imagens/others/haw-cover.jpg" /></a></center>
			</div>
			<div>
				<h2><a href="about2.html" target="_blank">Abbey Dawn</a></h2>
				<center><a href="https://abbeydawn.fanfire.com/cgi-bin/WebObjects/Store.woa/wa/artist?sourceCode=ABDWEBWWUSD&artistName=Abbey+Dawn" target="_blank"><img class="dif" src="../imagens/others/ad.png" /></a>
				<h3>New Abbey Dawn merchandise now available. <a href="https://abbeydawn.fanfire.com/cgi-bin/WebObjects/Store.woa/wa/artist?sourceCode=ABDWEBWWUSD&artistName=Abbey+Dawn" target="_blank">Shop now!</a></h3></center>
			</div>
			<div>
				<h2><a href="videos.html" target="_blank">Latest video</a></h2>
				<center><a href="https://www.youtube.com/watch?v=wC022MwPHKI" target="_blank"><img src="../imagens/others/dumb.jpg" /></a></center>
			</div>
			<div style="border-right: none;">
				<h2><a href="about4.html" target="_blank">News</a></h2>
				<center><a href="https://www.youtube.com/watch?v=AVbcMxeCwro" target="_blank"><img class="dif" src="../imagens/others/olympics.png" /></a>
				<h3>Special Olympics World Games Abu Dhabi 2019 Anthem. <a href="https://www.youtube.com/watch?v=AVbcMxeCwr" target="_blank">Watch now!</a></h3></center>
			</div>
		</section>
		<section id="seg">
			<h1>Social Medias</h1>
			<div>
				<a href="https://www.youtube.com/avrillavigne" target="_blank"><img src="../imagens/social/youtube.png" />
				<p>Youtube</p></a>
			</div>
			<div>
				<a href="https://www.instagram.com/avrillavigne/" target="_blank"><img src="../imagens/social/instagram.png" />
				<p>Instagram</p></a>
			</div>
			<div>
				<a href="https://www.facebook.com/avrillavigne/" target="_blank"><img src="../imagens/social/facebook.png" />
				<p>Facebook</p></a>
			</div>
			<div>
				<a href="https://twitter.com/AVRILLAVIGNE" target="_blank"><img src="../imagens/social/twitter.png" />
				<p>Twitter</p></a>
			</div>
		</section>
		<section id="ter">
			<h1>Store - <a href="https://www.avrillavignestore.com" target="_blank">See more!</a></h1>
			<img src="../imagens/others/store.png" /><br/>
		</section>
		<section id="qua">
			<div style="border-right: 1px ridge #011C40;">
				<h2><a href="videos.html">See all videos</a></h2>
				<center>
					<iframe width="auto" height="200px" src="https://www.youtube.com/embed/wC022MwPHKI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<iframe width="auto" height="200px" src="https://www.youtube.com/embed/g5wseA6HoNs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<iframe width="auto" height="200px" src="https://www.youtube.com/embed/EKF6ghfcQic" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<iframe width="auto" height="200px" src="https://www.youtube.com/embed/bSwZx7A6u-o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</center>
				
			</div>
			<div>
				<h2><a href="photos.html">See all photos</a></h2>
				<center>
					<iframe width="auto" height="400px" src="https://www.instagram.com/p/BxQiD-1nSZA/embed/" frameborder="0"></iframe>
					<iframe width="auto" height="400px" src="https://www.instagram.com/p/Bw-PRg5n7Ax/embed/" frameborder="0"></iframe>
				</center>
				<br/>
			</div>
		</section>
		<div id="faixa"></div>
		<footer id="rodape">
			<div>
				<table>
					<tr id="principais">
						<th><a class="active" href="home.php">Home</a></th>
						<th><a href="about.html">About</a></th>
						<th><a href="music.html">Music</a></th>
						<th><a href="photos.html">Photos</a></th>
						<th><a href="videos.html">Videos</a></th>
						<th><a href="store.html">Store</a></th>
					</tr>
					<tr>
						<td></td>
						<td><a href="about1.html">Career</a></td>
						<td><a href="music1.html">Let Go</a></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="about2.html">Abbey Dawn</a></td>
						<td><a href="music2.html">Under My Skin</a></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="about3.html">The Avril Lavigne Foundation</a></td>
						<td><a href="music3.html">The Best Damn Thing</a></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="about4.html">News</a></td>
						<td><a href="music4.html">Goodbye Lullaby</a></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><a href="music5.html">Avril Lavigne</a></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><a href="music6.html">Head Above Water</a></td>
					</tr>
				</table>
			</div>
		</footer>
	</body>
</html>