<?php 
    if (isset($_GET['send'])) {
        $send = 'ok';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QAF SHOP EVENT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/img/logo-top.png" alt="">
        </div>
    </header>

    <div class="espace"></div>

    <main>
        <div class="side">
            <div class="popup btn-form">

                <button id="open">
                    <img src="assets/img/form.png" alt="">
                    Formulaire
                </button>
                
                <div class="modal-container" id="modal_container">
                    <div class="modal">

                        <i  id="close" class="fa-solid fa-xmark">X</i>
                        <!--formulaire -->
                        <div class="modal-inner">

                            <div class="img-form">
                                <img src="assets/img/form-img.png" alt="">
                            </div>

                            <div class="formulaire">
                                
                                <!-- formulaire -->
                                <form method="post" action="receiver.php" >
                                    <div class="alert alert-danger d-none"></div>

                                    <input type="hidden" name="id" value="0">

                                    <div class="fields">
                                        <div class="field half">
                                            <label for="name">Nom <span class="text-danger">*</span></label>
                                            <input type="text" name="nom"  class="Input"  required/>
                                        </div>
                                        <div class="field half">
                                            <label for="email">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="client_mail" required/>
                                        </div>
                                        <div class="field half">
                                            <label for="Telephone">Telephone <span class="text-danger">*</span></label>
                                            <input type="tel" name="tel" required/>
                                        </div>
                                        <div class="field half">
                                            <label for="ville">Ville <span class="text-danger">*</span></label>
                                            <input type="text" name="ville" class="Input" required />
                                        </div>
                                        <div class="field half">
                                            <label for="RS">Raison sociale </label>
                                            <input type="text" name="raison_sociale"  />
                                        </div>
                                        <div class="field half">
                                            <label for="MD">Moyen de découverte <span class="text-danger">*</span></label>
                                            <input type="text" name="MD"  />
                                        </div>
                                        <div class="field half">
                                            <label for="NC">Nom du Commercial <span class="text-danger">*</span></label>
                                            <input type="text" name="NC"  />
                                        </div>
                                        <div class="field half">
                                            <label for="interet">Interêt <span class="text-danger">*</span></label>
                                            <input type="text" name="interet"  />
                                        </div>
                                    
                                    </div>
                                    <button type="submit" name="submit">Recevoir notre catalogue</button>
                                </form>
                                
                            </div>

                        </div>
                    </div>
                </div> 

            </div>
        </div>

        </div>

        <nav>
            <!-- <div class="nav-banner">
                <a href="#" id="video">
                    <div class="miniature">
                        <img src="assets/img/play-button.png" alt="">
                    </div>
                </a>
            </div> -->
            <ul>
                <li>
                    <p>Qaf-shop.ma</p>
                    <a href="https://qaf-shop.ma/fr/" target="_blank">
                        <img src="assets/img/bean2.png" alt="site web qaf">
                    </a>
                </li>
                <li>
                    <p>Equipements</p>
                    <a href="catalogue.php?id=1">
                        <img src="assets/img/bean2.png" alt="site web qaf">
                    </a>
                </li>
                <li>
                    <p>Consommables</p>
                    <a href="catalogue.php?id=2">
                        <img src="assets/img/bean2.png" alt="site web qaf">
                    </a>
                </li>
                <li id="nav-nouveaute">
                    <p>Nouveautés</p>
                    <a href="catalogue.php?id=3">
                        <img src="assets/img/bean2.png" alt="site web qaf">
                    </a>
                </li>
            </ul>
        </nav>
    </main>

    <div class="espace"></div>

    <footer>
        <div class="banner">
            <a href="menu.html"><img src="assets/img/2.png" alt=""></a>
            <a href="#" id="video"><img src="assets/img/3.png" alt=""></a>
        </div>
    </footer>
        
    <div id="window">

        <span class="video-close">
            <p>X</p>
        </span>

        <video controls autoplay loop>

            <source src="assets/video/Qaf-pub.mp4"
                    type="video/mp4">

        Votre Navigateur ne peut pas lire la vidéo
        </video>

    </div>

    <?php if (isset($send)) { ?>
        <div class="mail-modal">
            <div class="modal">
                <i  id="close_mail" class="fa-solid fa-xmark">X</i>
                <div class="mail-modal-inner">
                    <h2>Le formulaire a bien été envoyé</h2>
                    <p>Merci de vérifier votre boite mail ou votre "dossier spam" pour recevoir notre catalogue</p>
                </div> 
            </div>
        </div>
    <?php } ?>

    <script src="assets/js/video.js"></script>
</body>
</html>
