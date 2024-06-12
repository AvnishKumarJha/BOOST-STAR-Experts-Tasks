<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>head</title>
</head>
<body>
	 <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <form action="index.php">
                                <button style="padding: 0px; margin: 0px; background: transparent; color: gray; font-size: 1.2rem;" type="submit" > Sk creator studio</button>
                            </form>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>
                        <li class="nav__item"><div onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="log-in">Login</div></li>
                        <li class="nav__item">
                            <form action="profile.php">
                                <button style="padding: 0px; margin: 0px; background: transparent; color: gray; font-size: 1.2rem;" type="submit" > profile</button>
                            </form>
                        </li>
                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

</body>
</html>