<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
         <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />

        <title>Galería</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       

        
        <div class="galeria" aling="center">
        <ul>
            <li>
                <a class="fancybox" href="Imágenes/Bigotes.jpg" data-fancybox-group="gallery" title="Bigotes">
                    <img src="Imágenes/Bigotes_tn.jpg" alt="Img-Dog">
                </a>
            </li>
            
            <li>
                <a class="fancybox" href="Imágenes/Chocolate.jpg" data-fancybox-group="gallery" title="Chocolate">
                    <img src="Imágenes/Chocolate_tn.jpg" alt="Img-Dog">
                </a>
            </li>
            <li>
                <a class="fancybox" href="Imágenes/Luna.jpg" data-fancybox-group="gallery" title="Luna">
                    <img src="Imágenes/Luna_tn.jpg" alt="Img-Dog">
                </a>
            </li>
                     

            <li>
                <a class="fancybox" href="Imágenes/Maya.jpg" data-fancybox-group="gallery" title="Maya">
                    <img src="Imágenes/Maya_tn.jpg" alt="Img-Dog">
                </a>
            </li>
            <li>
                <a class="fancybox" href="Imágenes/Oso.jpg" data-fancybox-group="gallery" title="Oso">
                    <img src="Imágenes/Oso_tn.jpg" alt="Img-Dog">
                </a>
            </li>
            <li>
                <a class="fancybox" href="Imágenes/Pexel.jpg" data-fancybox-group="gallery" title="Pexel">
                    <img src="Imágenes/Pexel_tn.jpg" alt="Img-Dog">
                </a>
            </li>
            <li>
                <a class="fancybox" href="Imágenes/Wifi.jpg" data-fancybox-group="gallery" title="Wifi">
                    <img src="Imágenes/Wifi_tn.jpg" alt="Img-Dog">
                </a>
            </li>
        </ul>        
 
        
        
        
        </div>
        
    <script>
$(document).ready(function() {
            $('.fancybox').fancybox({ keyboard : true });
 
    });
</script>
        
</html>
