        <button class="w3-button slide-btn w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button slide-btn w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>

    <div class="popup">
        <button id="open">Cliquer ici</button>

        <div class="modal-container" id="modal_container">
          
            <div class="modal">
              <i  id="close" class="fa-solid fa-xmark">X</i>
               <h1>
                 Formulaire
               </h1>
                      <!--formulaire -->
                      <div class="alert alert-danger d-none"></div>
                      <form method="post" action="#" class="m-3">
                          <div class="fields">
                              <div class="field half">
                                  <label for="name">Nom<span class="text-danger">*</span></label>
                                  <input type="text"  class="Input"  required/>
                              </div>
                              <div class="field half">
                                  <label for="Prenom">Prénom<span class="text-danger">*</span></label>
                                  <input type="text" class="Input" required />
                              </div>
                              <div class="field half">
                                  <label for="RS">Raison sociale</label>
                                  <input type="text"  />
                              </div>
                              <div class="field half">
                                  <label for="Telephone">Telephone <span class="text-danger">*</span></label>
                                  <input type="tel"  required/>
                              </div>
                              <div class="field half">
                                <label for="email">Adress Email <span class="text-danger">*</span></label>
                                <input type="email"  required/>
                            </div>
                          </div>
                      </form>
                      <button type="button" onclick=" valider()" class="btn">Recevoir notre catalogue</button>
                </div>
                  </div>
      </div>

</div>

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