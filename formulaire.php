

 <!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="utf-8" />
   <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//formulaire_icon.png">
   <link rel="icon" type="image/png" href="./assets/img//formulaire_icon.png">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title>
     Formulaire
   </title>
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <!--     Fonts and icons     -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- CSS Files -->
   <link href="./assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
   <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="./assets/demo/demo.css" rel="stylesheet" />
 </head>
 
 <body class="index-page sidebar-collapse">
   
     <div class="section section-signup page-header" style="background-image: url('./assets/img/medicine1.jpeg');">
       <div class="container">
         <div class="row">
           <div class="col-lg-4 col-md-6 ml-auto mr-auto">
             <div class="card card-login">
               <form class="form" method="" action="">
                 <div class="card-header card-header-primary text-center">
                   <h4 class="card-title">FAMANDRIANA</h4>
                 </div>
                 <p class="description text-center">Ity famandriana ity dia tsy maintsy fenoina tsara.</p>
                 <div class="card-body">
                   <div class="input-group">
                     <div class="input-group-prepend">
                       <span class="input-group-text">
                         <i class="material-icons">account_box</i>
                       </span>
                     </div>
                     <input type="text" class="form-control" placeholder="Anarana">
                   </div>
                   
                   <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">account_box</i>
                          </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Fanampinanarana">
                    </div>

                    <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">room</i>
                              </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Adiresy">
                    </div>

                    <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">call</i>
                              </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Finday">
                          </div>

                          <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="material-icons">add_circle</i>
                                  </span>
                                </div>
                                <textarea type="text" class="form-control" placeholder="Ny zavatra ho fandrianao"></textarea>
                              </div>
                        
                 </div>
                 <div class="footer text-center">
                        <button class="btn btn-primary btn-round">
                                <i class="material-icons">send</i> Alefaso
                        </button>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
     
   <footer class="footer" data-background-color="black">
     <div class="container">
      
       <div class="copyright float-right">
         &copy;
         <script>
           document.write(new Date().getFullYear())
        </script>, edited by Aina Juno.
       </div>
     </div>
   </footer>
   <!--   Core JS Files   -->
   <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
   <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
   <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
   <script src="./assets/js/plugins/moment.min.js"></script>
   <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
   <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
   <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
   <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
   <!--  Google Maps Plugin    -->
   <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
   <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
   <script src="./assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
   <script>
     $(document).ready(function() {
       //init DateTimePickers
       materialKit.initFormExtendedDatetimepickers();
 
       // Sliders Init
       materialKit.initSliders();
     });
 
 
     function scrollToDownload() {
       if ($('.section-download').length != 0) {
         $("html, body").animate({
           scrollTop: $('.section-download').offset().top
         }, 1000);
       }
     }
 
   </script>
 </body>
 
 </html>
 