        <button class="w3-button slide-btn w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button slide-btn w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>

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

                            <input type="hidden" name="id" value="<?= $id ?>">

                            <div class="fields">

                              <div class="field half">
                                  <label for="name">Nom <span class="text-danger">*</span></label>
                                  <input type="text" name="nom"  class="Input"  required/>
                              </div>
                              <div class="field half">
                                    <label for="email">Adresse Email <span class="text-danger">*</span></label>
                                    <input type="email" name="client_mail"  required/>
                                </div>
                                <div class="field half">
                                    <label for="Telephone">Telephone <span class="text-danger">*</span></label>
                                    <input type="tel" name="tel"  required/>
                                </div>
                              <div class="field half">
                                  <label for="ville">Ville <span class="text-danger">*</span></label>
                                  <input type="text" name="ville" class="Input" required />
                              </div>
                              <div class="field half">
                                  <label for="RS">Raison sociale</label>
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

<!-- <a href="https://www.flaticon.com/free-icons/back" title="back icons">Back icons created by Smartline - Flaticon</a> -->

<script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
        }       
     </script>

    <script src="assets/js/app.js"></script>
</body>
</html>