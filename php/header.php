<header>
    <style>
        *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
element {
  padding-left: 0px;
}
li, a, button{
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: #edf0f1;
    text-decoration: none;
}
#sorting{
    color: #24252A;
}
header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 10%;
    padding-bottom: 14px;
    margin-top: -10px;
    margin-bottom: -10px;
    background-color: #24252A;
}
.logo{
    cursor: pointer;
    width: 120px;
    height: 50px;
}

.navlinks{
    list-style: none;
    margin-bottom: 0px;
}
.navlinks li {
    display: inline-block;
    padding: 0px 20px;
    text-decoration: none;
    color: #fff;
    font-size: 26px;
}
.navlinks li a{
    transition: all 0.3s ease 0s;

}
.navlinks li a:hover{
    color: #0088a9;
    text-decoration: none;
}
button{
    padding: 9px 25px;
    background-color: rgba(0,136,169,1);
    border: none;
    border-radius:  50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}
button:hover{
    background-color: rgba(0,136,169,0.8);
    text-decoration: none;
}
    </style>
        <div class="logo-container">
            <a href ="index.php">
            <img src="../img/Untitled-4.png" href="index.php" class="logo">
            </a>
        </div>
        <nav>
            <ul class="navlinks">
                <li><a href="index.php">Domov</a></li>
                <li><a href="Olympionici.php">Olympionici</a></li>
                <li><a href="tabulka.php">Tabulka</a></li>
                <li><a href="login.php">Prihlásenie</a></li>
            </ul>
        </nav>
        <a class="cta" href="Kontakt.php"><button class="kontakt">Kontakt</button></a>
</header>