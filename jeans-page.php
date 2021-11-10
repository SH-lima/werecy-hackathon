<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" media="all" href="styles/base.css" type="text/css" />
        <link rel="stylesheet" href="styles/jeans-page.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<title>WeRECY - Transformation Jeans</title>
    </head>
    <?php include("header.php"); ?>
    <body>
        <main>
            <section class="jeansPage__sectionTilte bleuBackground">
                <div class="jeansPage__sectionTitleBloc mainStyle center_horizontale tel_center center_mobile">
                    <!-- <div class="jeansPage__title"></div> -->
                        <h1>On transforme nos collectes à<span class="pink"> une matière première “secondaire” </span>, Mais comment ?</h1>
                    
                    <!-- <div class="jeansPage__img center_horizontale"></div>   -->
                        <img src="./img/textile.png" alt="jeans">
                    
                    
                </div>
            </section>
            <section>
                <div class="jeansPage__sectionContent1">
                    <div class="jeansPage__transformationContent mainStyle center_horizontale tel_center center_mobile">
                        <img class='imgJean' src="./img/isolant.jpeg" alt="panneaux isolants">
                        <h2>Transformer <span class="yellow">nos jeans</span > en <span class="pink">panneaux isolants</span> acoustiques</h2>
                        <h2>En collectant <span class="pink">1k tonnes de jeans,</span > on fabrique  <span class="yellow">2.5k m3 </span>de rouleaux et briques isolantes biosourcées</h2>
                        <img class='imgJean'  src="./img/jeans.jpg" alt="jeans">                        
                    </div>
                </div>
            </section>
            <section>
                <div class="jeansPage__sectionContent2 bleuBackground">
                    <ul class="jeansPage__transformationContent mainStyle center_horizontale ">  
                        <li class="center">
                            <img class="icon" src="./img/decrease.png"/>
                            <p><span class="pink">Réduction consommation</span> de fibres vierges, d’energie et d’eau</p>
                        </li>
                        <li class="center">
                            <img class="icon" src="img/sante.png">
                            <p>Isolants naturels <span class="pink">bénéfique pour la santé</span></p>
                        </li>
                        <li class="center">
                            <img class="icon" src="./img/recycle.png">
                            <p><span class="pink">Recyclable</span> après la déconstruction du bâtiment. Aucune perte dans son cycle de v</p>
                        </li>
                        <li class="center">
                            <img class="icon" src="./img/decrease.png">
                            <p><span class="pink">Diminue la pollution </span>des sols suite enfouissement</p>
                        </li>
                        
                        <li class="center">
                            <img class="icon" src="./img/decrease.png">
                            <p><span class="pink">Diminue les émissions C02 :</span> enfouissement et l'incinération</p>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </body>
    <?php include("footer.php"); ?>
</html>