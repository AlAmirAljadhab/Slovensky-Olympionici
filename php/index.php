<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" type="text/css" href="../css/cards.css">
    <title>DSO</title>
</head>
  <body>
    <?php include "header.php"?>
    <section class="home">
        <div class="content">
            <div class="textbox">
                <h3>Databáza</h3>
                <h2>Slovenských<br></h2>
                <h1>Olympionikov</h1>
                <p>
                    Slovensko sa zúčastňuje olympijských hier už od roku 1994, 
                    kedy sa prvýkrát predstavilo na Zimných olympijských hrách 1994 v Lillehammeri, 
                    na Letných olympijských hrách štartovalo prvý raz v Atlante 1996.
                </p>
                <a href="Reprezentanti.php">Všetci Olympionici</a>
            </div>
        </div>
    </section>
    <section class="image-cards">
            <!--image card layout start-->
            <div class="container">
              <!--image row start-->
              <div class="row">
                <!--image card start-->
                <div class="image">
                  <img src="..//img/petrravhova.jpg" alt="">
                  <div class="details">
                    <h2>Petra <span>Vlhová</span></h2>
                    <p>Petra Vlhová vyhráva zlato na Olympiáde v Pekingu 2022 v slalome na lyžiach.</p>
                    <div class="more">
                      <a href="./petravlhova.php" class="read-more">Zisti <span>Viac</span></a>
                      <div class="icon-links">
                        <a href="#"><i class="fas fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-paperclip"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <!--image card end-->
                <!--image card start-->
                <div class="image">
                  <img src="..//img/rychlychodec.jpg" alt="">
                  <div class="details">
                    <h2>Matej <span>Tóth</span></h2>
                    <p>Matej Tóth vyhral zlato na Olympiáde v Riu 2016 v chôdzi na 50km.</p>
                    <div class="more">
                      <a href="./matejtoth.php" class="read-more">Zisti <span>Viac</span></a>
                      <div class="icon-links">
                        <a href="#"><i class="fas fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-paperclip"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <!--image card end-->
                <!--image card start-->
                <div class="image">
                  <img src="..//img/potapaci.jpg" alt="">
                  <div class="details">
                    <h2>Peter <span>Hochschrorner</span></h2>
                    <p>Bratia Hochschrornerovci vyhrávaju zlato na Olympiáde v Pekingu 2008 v slalome na Kanoe.</p>
                    <div class="more">
                      <a href="./bratia.php" class="read-more">Zisti <span>Viac</span></a>
                      <div class="icon-links">
                        <a href="#"><i class="fas fa-heart"></i></a>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-paperclip"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <!--image card end-->
              </div>
            </div>
    </section>
<footer>
  <p class="cpyright">Copyright &copy; DSO</p>
  <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
