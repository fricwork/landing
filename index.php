<?php require('app.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRICWORK - Leader du microservices en afrique</title>
    <link rel="shortcut icon" href="assets/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="navbar">
            <a href="index.html"><img src="assets/logo.svg" alt="logo fricwork"></a>
            <ul>
                <li><a href="#comment-ça-marche">Comment ça marche ?</a></li>
                <li><a href="#devenir-vendeur">Dévenir vendeur</a></li>
                <li><a href="#liste-attente">Liste d'attente</a></li>
            </ul>
            <button class="btn"><a href="#liste-attente">S'abonner</a></button>
        </div>
    </section>

    <section>
        <div class="hero">

            <div class="txt">
                <p>Découvre le nouveau site qui te fait <span>Gagner de l'argent</span> et trouve plus facilement un <span>professionel</span> pour tout tes projets, Bienvenue sur <span>FRICWORK</span></p>
                <button class="btn"><a href="#devenir-vendeur">Découvrir</a></button>
            </div>

            <div class="img">
                <img src="" alt="">
            </div>
        </div>
    </section>

    <section id="comment-ça-marche">
        <div class="how-use">
            <div>
                <p class="title">Lorem ipsum</p>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur consectetur reprehe nderit vel sed suscipit. Eius, hic voluptatum. Alias, rerum optio!</p>
            </div>
            <div>
                <p class="title">Lorem ipsum</p>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur consectetur reprehenderit vel sed suscipit. Eius, hic voluptatum. Alias, rerum optio!</p>
            </div>
            <div>
                <p class="title">Lorem ipsum</p>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur consectetur reprehenderit vel sed suscipit. Eius, hic voluptatum. Alias, rerum optio!</p>
            </div>
        </div>
    </section>

    <section id="devenir-vendeur">
        <div class="container">
            
            <div class="seller">
                <div class="text">
                    <p>Devient vendeur chez <span>FRICWORK</span> est la meilleurs solution pour vendre ses services en ligne</p>
                    <button class="btn"><a href="#liste-attente">S'abonner</a></button>
                </div>
                <img src="" alt="">
             </div>
     
             <div class="table">
                 <div>
                     <i></i>
                     <p class="title">Rapide</p>
                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, iusto.</p>
                 </div>
                 <div>
                     <i></i>
                     <p class="title">Simple</p>
                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, iusto.</p>
                 </div>
                 <div>
                     <i></i>
                     <p class="title">Sécuriser</p>
                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, iusto.</p>
                 </div>
                 <div>
                     <i></i>
                     <p class="title">Mobile Money</p>
                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, iusto.</p>
                 </div>
                 <div>
                     <i></i>
                     <p class="title">Messagerie</p>
                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, iusto.</p>
                 </div>
             </div>

        </div>
    </section>

    <section id="liste-attente">
        <div class="register">
            <h1>Soit a l'affût</h1>
            <form method="POST">
                <input type="text" name="name" placeholder="Nom et prénom">
                <input type="email" name="email" placeholder="Adresse Email">
                <div>
                    <input type="checkbox" id="check" name="check">
                    <label for="check">J'accepte de récevoir des mails de fricwork concernant nos services et informations</label>
                </div>
                <button type="submit" name="validate">Je m'abonne</button>
                <?php
                    if(isset($errorMsg)) {
                        echo '<p>'.$errorMsg.'</p>' ;
                    } else if (isset($successMsg)) {
                        echo '<p>'.$successMsg.'</p>';
                    }
                ?>
            </form>
        </div>
    </section>


    <script src="main.js"></script>
</body>
</html>