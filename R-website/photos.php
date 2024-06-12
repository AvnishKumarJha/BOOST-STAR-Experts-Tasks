<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gallery </title>
	<link rel="icon" type="image/x-icon" href="assets/img/rahul.jpg">
	<link rel="stylesheet" href="assets/css/styles.css">
<style>
*{
	box-sizing: border-box;
}
.jung-container{
  max-width: 1160px;
  width: calc(100% - 2rem);
  margin-left: var(--mb-2);
  margin-right: var(--mb-2);
}
.mainsection{
	width: 100%;
	height: auto;
	padding: 2rem -5rem;
	display: flex;
	justify-content: space-between;
	flex-flow: wrap;
	/* background: red; */
	margin: auto;
	/*border: solid 1px;*/
}
.mainsection div{
	width: 32.5%;
	height: 20rem;
	overflow: hidden;
	margin-top: 1rem;
	position: relative;
	border-radius: 10px;
	cursor:url(assets/img/deve.svg);
}
.mainsection div:hover{
	padding: 2%;
	/*background: #b1b493;*/
	box-shadow: 1px 2px 40px 0px lightgray;
}
.mainsection div:hover::before{
	content: " Rahul Manjhi";
	position: absolute;
	top: 80%;
	left: 0;
	height: 20%;
	width: 100%;
	/* background:	rgba(255, 255, 255, 0.9); */
	background:	rgba(0, 0, 0, 0.5);
	font-size: 2rem;
	/*color: #fffcc0;*/
	display: flex;
	justify-content: center;
	align-items: center;
	color: #fff;
	/* border: solid 1px; */
} 
.mainsection div::after{
	content: "RL";
	position: absolute;
	top: 65%;
	left: 40%;
	height: 20%;
	width: 17%;
	/* background:	#f2f2f2; */
	background:	rgba(0, 0, 0, 0.5);
	font-size: 2rem;
	border-radius: 50%;
	color: #fff;
	display: none;
}
.mainsection div:hover::after{
	/*content: "";*/
	position: absolute;
	display: block;
	border: solid 3px; 
	display: flex;
	justify-content: center;
	align-items: center;
}

.lood-more{
	display: inline-block;
	margin: auto;
	margin-top: 2rem;
	width: 10%;
	height: 5vh;
	background: lightgreen;
	/* background:	rgba(0, 0, 0, 0.5); */
	text-align: center;
	padding: .6% 0px;
	font-weight: 900;
	color: white;
	border-radius: 10px;
	box-shadow: -1px 1px 5px 0 inset green;
	cursor: pointer;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 500px){
.mainsection{
	width: 100%;
	display: flex;
	justify-content: space-between;
	 flex-flow: column;
	margin: auto;
}
.mainsection div{
	margin: auto;
	width: 80%;
	height: 20rem;
	font-size: 1.5rem;
	margin-top: 2rem;
}

.lood-more{
	width: 30%;
	padding-top: .4rem;
}
}

@media screen and (min-width: 768px){
.mainsection{
	width: 100%;
	display: flex;
	justify-content: space-between;
	 /* flex-flow: row; */
	margin: auto;
}
}
</style>
</head>
<body>
<?php
	include("head.php")
?>
<br><br><br>
<h1>
	<center>
		Google photos
	</center>
</h1>

<div class="mainsection jung-container">
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>

	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
	<div class="junnu">
		<a href="http://localhost/rahul/website/photos.php?">
			<img src="assets/img/rahul.jpg">
		</a>
	</div>
		
		<a class="lood-more">lode more</a>
	
</div>
<?php
	include("footer.php")
?>
<!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
</body>
</html>
