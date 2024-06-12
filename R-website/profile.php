<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>my profile</title>
	<link rel="icon" type="image/x-icon" href="assets/img/rahul.jpg">
	<link rel="stylesheet" href="assets/css/styles.css">
<style>
body{
	/*background: whitesmoke;*/
}
.jung-container{
  max-width: 1060px;
  width: calc(100% - 2rem);
  margin-left: var(--mb-2);
  margin-right: var(--mb-2);
}
.head-background{
	background-image: url(assets/img/rahul.jpg);
	background-size: cover;
	/*background-position: top right;*/
	margin: auto;
	width: 80%;
	height: 40rem;
	position: relative;
}
.name-text{
	position: absolute;
	top: 7rem;
	left: 4rem;
	font-size: 3rem;
	color: #393939;
}
.name-text h1{
	line-height: 3rem;

}
.name-text p{
	font-size: 2rem;
	/*color: deeppink;*/
	opacity: 50%;
}
.name-text .p{
	
	font-size: 1rem;
	line-height: 2rem;
	margin-left: 5px;
	color: deeppink;
	opacity: 50%;
}
.tab-to-gallory{
	position: absolute;
	width: 30%;
	bottom: 10px;
	background:	rgba(112, 112, 122, 0.7);
	left: 42%;
	padding: 1.5%;
	/*cursor: pointer;*/
	border-radius: 7px;
	/*opacity: 50%;*/
}
.tab-to-gallory img{
	vertical-align: bottom;
	opacity: 60%;
}
.about-me{
	width: 66rem;
	height:	40rem;
	/* box-shadow: 1px 2px 40px 0px lightgray; */
	margin: auto;
	margin-top: 2.5rem;
	background: linear-gradient(to top,#b1b493,white);
}
.intro{
	display: block;
	text-align: center;
	margin-top: 2.5rem;
	font-size: 2.2rem;
}
.intro p,.about-me div:nth-child(2) p{
	font-size: 1rem;
	opacity: 50%;
	letter-spacing: 3px;
}
.about-me div:nth-child(1){
	background-image: url(assets/img/rahul.jpg);
	background-repeat: no-repeat;
	background-position: center;
	width: 40%;
	height: 100%;
	display: inline-block;
}
.about-me div:nth-child(2){
	background: linear-gradient(to top,#b1b493,white);
	width: 59%;
	height: 100%;
	display: inline-block;
	padding: 4rem 6rem 4rem 3.5rem;
	vertical-align: top;
}
.about-me div:nth-child(2) span{
	font-size: 2rem;
}
.about-me div:nth-child(2) span:nth-child(4){
	display: inline-block;
	font-size: 1rem;
	margin-top: 1.5rem;
	opacity: 70%;
}
.list-1{
	display: inline-block;
	/*color: black;*/
	font-weight: bold;
	/*opacity: 70%;*/
	margin-right: 3rem;
}
.list-2{
	display: inline-block;
	opacity: 60%;
}
.list-1 li,.list-2 li{
	margin-top: .6rem;
}
.diss{
	margin-top: 2rem;
}
.diss span{
	display: inline-block;
	margin-right: 2rem;
	font-size: 6rem;
	border-left: solid 3px;
	padding-left: 1rem;
}
.diss span img{
	vertical-align: middle;
}
.diss span p{
	display: inline-block;
	font-size: 1.5rem;
	font-weight: bolder;
	vertical-align: middle;
}
/*//card_section*/
/* .bd-grid{
  display: grid;
  gap: 1.5rem;
} */
.card-section{
	margin: auto;
	height: 85vh;
	width: 80%;
	margin-top: 2.3rem;
	/*display: flex;*/
}
.pack{
	width: 100%;
	height: 50%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	flex-flow: wrap;
	/* column-count: 4; */
	/* columns: 2; */
	padding-top: 3rem;

}
.card-section .card{
	width: 23%;
	height: auto;
	background: #ffffff;
	/*background: linear-gradient(to top,lightgrey,white);*/
	padding: 3.5rem 1em 3rem 1rem;
	border-radius: 10px;
	box-shadow: 3px 2px 30px 0px lightgray;
	position: relative;
	margin-top: 3rem;
	/* overflow-x: hidden; */
}
.card-section .card h2{ 
	font-size: 1.2rem;
	font-weight: 500;
	/* overflow-y: hidden; */
}
.card p{
	display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
	opacity: 60%;
}
.card-icon{
	display: inline-block;
	height: 5rem;
	width: 5rem;
	background: #b1b493;
	border-radius: 50%;
	display: flex;
	justify-content: center;
	align-items: center;
	position: absolute;
	top: -2.3rem;
}
.card-icon img{
	opacity: 60%;
}
.card:hover .card-icon{
	/*left: 4rem;*/
	background: #fff;
	transition-duration: 1s;
	transform: translate(50px, -5%);
} 
.card:hover{
	background: #b1b493;
	color: white;
	transition-duration: 1s;
}
.mar{
	height: 1px;
}
@media screen and (max-width: 500px){
html{
	font-size: 50%;
}
.head-background{
	height: 40rem;
	width: 100%;
	margin: 0px;
	margin: auto;
}
.tab-to-gallory{
	width: 50%;
	font-size: 1.5rem;
	left: 25%;
}
.tab-to-gallory img{
	vertical-align: middle;
}
.about-me{
	height: 100vh;
	width: 100%;
	margin: auto;
}
.about-me div:nth-child(1){
	display: block;
	height: 49%;
	width: 100%;
	margin: auto;
}
.about-me div:nth-child(2){
	display: block;
	height: 49%;
	width: 100%;
	/* text-align: center; */
	font-size: 1.8rem;
	margin: 0;
}
.card-section .pack{
	flex-flow: column;
	height: auto;
	margin-bottom: 12rem;
}
.card-section .card{
	width: 70%;
	height: 15vh;
	margin-top: 6rem;
	margin: auto;
	margin-block-end: 3rem;
	font-size: 1.5rem;
}
.card h2{
	font-size: 1.8rem;
	font-weight: 900 !important;
}
.mar{
	height: 60vh;
}
}
@media screen and (max-width: 900px){
.pack{
	height: auto;
	margin-block-end: 2rem;
	flex-flow: wrap;
	column-count: 2;
}
.card{
	width: 40%;
}
}

</style>
</head>
<body> 
<?php
	include("head.php")
?>
<br><br><br><br>
<section class="head-background jung-container junnu">
	<div class="name-text">
		<p class="p">Hello i am Rahul manjhi</p>
	<h1>
		Rahul Manjhi 
	</h1>
	<p>Sk creator studio</p>
	</div>
	<form action="photos.php">
             <button class="tab-to-gallory" type="submit" > 
             	<img src="assets/img/touch.svg" alt="">
				Tap hear to see rahul gallery !
             </button>
    </form>
</section>
	<span class="intro junnu">
		<p>My Intro</p>
		About Me
	</span>
<section class="about-me jung-container junnu">
	<div ></div>
	<div>
		<p>My Intro</p>
		<span>About Me</span>
		<br>
		<span>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			tempor incididunt ut labore et. 
		</span>
		<br><br>
		<ul class="list-1">
			<li>Name:</li>
			<li>Date of Birth:</li>
			<li>Address:</li>
			<li>Pin Code:</li>
			<li>Email:</li>
			<li>Phone:</li>
		</ul>

		<ul class="list-2">
			<li>Rahul Manjhi</li>
			<li>23/08/2002</li>
			<li>Amlai, Shahdol (M.P.)</li>
			<li>484117</li>
			<li>Rahulmanjhi593@gmail.com</li>
			<li>6265637673</li>
		</ul>

		<section class="diss">
			<span class="span">
				<img src="assets/img/music.svg">
				<p>music</p>
			</span>
			<span>
				<img src="assets/img/code.svg">
				<p>code</p>
			</span>
			<span>
				<img src="assets/img/sports.svg">
				<p>sports</p>
			</span>
		</section>
	</div>
</section>
<span class="intro junnu">
		<p>I AM GRAT AT</p>
		We do awesome development
	</span>

<section class="card-section jung-container">
	<div class="pack ">
		<div class="card junnu">
			<span class="card-icon">
				<img src="assets/img/web.svg" width="35">
			</span>
			<h2>Web Design</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
		</div>
		<div class="card junnu">
			<span class="card-icon">
				<img src="assets/img/app.svg" width="35">
			</span>
			<h2>Web Application</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
		</div>
		<div class="card junnu">
			<span class="card-icon">
				<img src="assets/img/deve.svg" width="35">
			</span>
			<h2>Web Development</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
		</div>
		<div class="card junnu">
			<span class="card-icon">
				<img src="assets/img/banar.svg" width="35">
			</span>
			<h2>Banner Design</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
		</div>

	
		<div class="card junnu">
			<span class="card-icon">
				<img src="assets/img/brand.svg" width="35">
			</span>
			<h2>Branding</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
		</div>
		<div class="card junnu">
			<span class="card-icon">
				<img src="assets/img/icon.svg" width="35">
			</span>
			<h2>Icon Design</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
		</div>
		<div class="card junnu">
			<span class="card-icon">
				<img src="assets/img/gif.svg" width="35">
			</span>
			<h2>Graphic Design</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
		</div>
		<div class="card junnu">
			<span class="card-icon">
				<img src="assets/img/search.svg" width="35">
			</span>
			<h2>SEO</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
		</div>
	</div>
</section>

<div class="mar">.</div>

<?php	
	include("footer.php");
?>
<!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
</body>
</html>
