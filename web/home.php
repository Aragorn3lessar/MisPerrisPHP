<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mis Perris</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" media="screen" href="css/hoja.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
         <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
        <script src="js/slider.js"></script>
        <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>
</head>

<body>

    
    
        <!-- HEADER -->
        
        
            <?php
             include_once './menu_home.php';
            ?>
          
        

        <!-- CENTER -->
        
        <div class="content">
        <section class="main_articles">
        <article>
        
           <div class="imgbox">
               <?php
             include_once './boostrap.php';
            ?>
           

        <!-- TEXT -->
           <table>
            <tr>
                <td class="textoGrande">
                    <div>+ 56 9 987654321</div> 
                </td> 
                <td class="textoGrande">
                        <b>Rescate y Adopción de Perros Callejeros</b>   
                </td>
            </tr>   
           

        <!-- SOCIAL -->

            <div>
             <img class='Social' src="Imágenes/mail.png" alt="Mail">
             <img class='Social' src="Imágenes/insta.png" alt="Instagram">
             <img class='Social' src="Imágenes/g.png" alt="Google Plus">
             <img class='Social' src="Imágenes/fb.png" alt="Facebook">
            </div>
          </div>
        </table>
        </div>
        </section>
        </article>
    </div>

    <!-- CONTENIDO DE ABAJO-->

    <div class="content">
        <section class="main_articles">
                <div class="content-left">

                    <h3>
                        <p>                                   
                            <font face="courier new" class="bold1">RESCATE</font>
                            <font color = "grey" face="courier new" class="greyText">ETAPA UNO</font>
                        </p>

                        <h3>_____</h3> 

                        <p>
                             Rescatamos perros en situación de peligro y/o abandono. Los rehabilitamos y los preparamos para buscarles un hogar.
                        </p>
                        
                    </h3>
                        
                         <img src="Imágenes/rescate.jpg" class="img-rescate" >
                         
                     </div>
     
                     <div class="content-right">
                        <img src="Imágenes/crowfunding.jpg" class="img-comida" alt="">
                        <h3>
                                <font face="courier new" class="bold" >CROWDFUNDING</font>
                                <font color = "grey" face="courier new" class="greyTextRight" >FINANCIAMIENTO</font>
                        </h3>

                        <h3>_____</h3>

                        <p>
                            Sigue nuestras redes sociales para informarte acerca de las diversas campañas y actividades que realizamos para obtener el financiamiento para seguir ayudando.
                        </p>

                        <h3>
                            <a class="button" href="intermedio.php">CAMPAÑAS</a>  
                        </h3>
                        


                     </div>
        </section>
        
    </div>
    &nbsp;
    <div class="content-center">
                        
        <h3>
            <p>
                <font face="courier new" class="bold1">GALERÍA</font>
                <font color = "grey" face="courier new" class="greyText">DE FOTOS</font>
            </p>
        </h3>
    </div>
    
    <div class="main_articles" align="center">
        <a data-fancybox="gallery" href="Imágenes/Bigotes.jpg"><img src="Imágenes/Bigotes_tn.jpg"</a>
        <a data-fancybox="gallery" href="Imágenes/Chocolate.jpg"><img src="Imágenes/Chocolate_tn.jpg"></a>
        <a data-fancybox="gallery" href="Imágenes/Luna.jpg"><img src="Imágenes/Luna_tn.jpg"></a>
        <a data-fancybox="gallery" href="Imágenes/Maya.jpg"><img src="Imágenes/Maya_tn.jpg"></a>
        <a data-fancybox="gallery" href="Imágenes/Oso.jpg"><img src="Imágenes/Oso_tn.jpg"></a>
        <a data-fancybox="gallery" href="Imágenes/Pexel.jpg"><img src="Imágenes/Pexel_tn.jpg"></a>
        <a data-fancybox="gallery" href="Imágenes/Wifi.jpg"><img src="Imágenes/Wifi_tn.jpg"></a>
    </div> 
</body>

</html>