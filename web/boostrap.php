<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    
    <style>
        .carousel
        {
            width:100%;
            max-width: 1100px;
            max-height: 600px;  
            height: 10%;
        }
        .carousel-inner > .item > img{
            width:100%;
            max-width: 1100px;
            max-height: 600px;  
            height: 10%;
        }
    </style>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <img src="Imágenes/Apolo.jpg" alt="Apolo">
          <div class="carousel-caption">
              <p>"Mi vida cambio desde que rescaté a Apolo"</p>
          </div>
               
      </div>

      <div class="item">
          <img src="Imágenes/Duque.jpg" alt="Duque">
          <div class="carousel-caption">
              <p>"Cada vez que veo a Duque agradezco </p>
              <p>a Mis Perris por haberlo rescatado"</p>
          </div>
      </div>
    
      <div class="item">
          <img src="Imágenes/Tom.jpg" alt="Tom">
          <div class="carousel-caption">
              <p>"Tom me alegra cada uno de mis días"</p>
          </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>