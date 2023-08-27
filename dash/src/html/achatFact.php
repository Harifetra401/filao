<?php 
require('headerNav.php');
?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-5">
                  <div class="card">
                    <div class="card mb-0">
                      <div class="card-body">
                        <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                          <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                        </a>
                        <p class="text-center"></p>
                        <form>
                          <div class="mb-3">
                            <label for="" class="form-label">Selection Poisson</label>
                            <div class="mb-3 d-flex">
                              <select id="" class="form-select">
                                <option>Maloky </option>
                                <option>TILAPIA </option>
                                <option>GGG select</option>
                                <option class="btn btn-primary"></option>
                              </select>
                              <button class="btn btn-primary mr-20 mb-12  w-25" type="submit" >+</button>
                            </div>
                            
                           
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Qantité (kilograme)</label>
                            <input type="number" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Prix Unitaire (Ariary)</label>
                            <input type="number" class="form-control" id="exampleInputPassword1">
                          </div>
                         
                          <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Ajouter</a>
                          <div class="d-flex align-items-center justify-content-center">
                           
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="col-md-7" id="FactImprim">
                  <div class="card">
                    <div class="card-body">
                     <div class="row">
                      <div class="col-md-6">
                        <h5 class="card-title fw-semibold mb-4"></h5>
                       
                        
                      </div>
                      <div class="col-md-6">
                        <h5 class="card-title fw-semibold mb-4">Nom :</h5>
                        <h5 class="card-title fw-semibold mb-4">Adresse :</h5>
                        <h5 class="card-title fw-semibold mb-4">Contact :</h5>
                       
                     </div>
                     <center>
                      <h5 class="card-title fw-semibold mb-4">Facture Numero :</h5>
                     </center>
                     <table style="width:100%">
                      <tr>
                        <th>    </th>
                        <th>Qtt (Kg)</th>
                        <th>Nom Poisson</th> 
                        <th>Prix Unitaire (Ar)</th>
                        <th>Prix Total(Ar)</th>

                      </tr>
                      <tr>
                        <td>  </td>
                        <td>50</td>
                        <td>Makoba</td>
                        <td>6000</td>
                        <td>300000</td>
                      </tr>
                      <tr>
                        <td>  </td>
                        <td>50</td>
                        <td>Makoba</td>
                        <td>6000</td>
                        <td>300000</td>
                      </tr>
                      <tr>
                        <td>  </td>
                        <td>50</td>
                        <td>Makoba</td>
                        <td>6000</td>
                        <td>300000</td>
                      </tr>
                      <tr>
                        <td>  </td>
                        <td>50</td>
                        <td>Makoba</td>
                        <td>6000</td>
                        <td>300000</td>
                      </tr>
                      <tr>
                        <td>  </td>
                        <td>50</td>
                        <td>Makoba</td>
                        <td>6000</td>
                        <td>300000</td>
                      </tr>
                      <tr>
                        <td>  </td>
                        <td>50</td>
                        <td>Makoba</td>
                        <td>6000</td>
                        <td>300000</td>
                      </tr>
                      <tr>
                        <td>  </td>
                        <td>50</td>
                        <td>Makoba</td>
                        <td>6000</td>
                        <td>300000</td>
                      </tr>
                      <td>  </td>
                      <tr>
                        <td>  </td>
                        <td>50</td>
                        <td>Makoba</td>
                        <td>6000</td>
                        <td>300000</td>
                      </tr>
                      <tr>
                        <td>  </td>
                        <td>50</td>
                        <td>Makoba</td>
                        <td>6000</td>
                        <td>300000</td>
                      </tr>
                      <tr>
                        <td>  </td>
                        <td>50</td>
                        <td>Makoba</td>
                        <td>6000</td>
                        <td>300000</td>
                      </tr>
                      <tr>
                        <td>  </td>
                        <td>50</td>
                        <td>Makoba</td>
                        <td>6000</td>
                        <td>300000</td>
                      </tr>
                      <tr>
                        <td>  </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </table>
                    <br><br>
                    <h5 class="card-title fw-semibold mb-4"></h5>
                    <div class="row">
                      <div class="col-md-6">
                        <h5 class="card-title fw-semibold mb-3">Somme à Payé :</h5>
                       
                        
                      </div>
                      <div class="col-md-6">
                        <h5 class="card-title fw-semibold mb-3">Signature</h5>
                        <br><br><br><br><br>
                     </div>
                    
                    </div>
                  </div>
                </div>
                
              <!-- <h5 class="card-title fw-semibold mb-4">Buttons</h5>
              <div class="card">
                <div class="card-body p-4">
                  <button type="button" class="btn btn-primary m-1">Primary</button>
                  <button type="button" class="btn btn-secondary m-1">Secondary</button>
                  <button type="button" class="btn btn-success m-1">Success</button>
                  <button type="button" class="btn btn-danger m-1">Danger</button>
                  <button type="button" class="btn btn-warning m-1">Warning</button>
                  <button type="button" class="btn btn-info m-1">Info</button>
                  <button type="button" class="btn btn-light m-1">Light</button>
                  <button type="button" class="btn btn-dark m-1">Dark</button>
                  <button type="button" class="btn btn-link m-1">Link</button>
                </div>
              </div>
              <h5 class="card-title fw-semibold mb-4">Outline buttons</h5>
              <div class="card mb-0">
                <div class="card-body p-4">
                  <button type="button" class="btn btn-outline-primary m-1">Primary</button>
                  <button type="button" class="btn btn-outline-secondary m-1">Secondary</button>
                  <button type="button" class="btn btn-outline-success m-1">Success</button>
                  <button type="button" class="btn btn-outline-danger m-1">Danger</button>
                  <button type="button" class="btn btn-outline-warning m-1">Warning</button>
                  <button type="button" class="btn btn-outline-info m-1">Info</button>
                  <button type="button" class="btn btn-outline-light m-1">Light</button>
                  <button type="button" class="btn btn-outline-dark m-1">Dark</button>
                  <button type="button" class="btn btn-outline-link m-1">Link</button>
                </div>
              </div> -->
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary" onclick="imprimerContenu()">Imprimer</button>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script>
        function imprimerContenu() {
            var contenuDiv = document.getElementById('FactImprim');
            var contenuAImprimer = contenuDiv.innerHTML;

            var fenetreImpression = window.open('', '_blank');
            fenetreImpression.document.write('<html><head><title>Impression</title></head><body>');
            fenetreImpression.document.write(contenuAImprimer);
            fenetreImpression.document.write('</body></html>');
            fenetreImpression.document.close();

            fenetreImpression.print();
        }
    </script>
</body>

</html>