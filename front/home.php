<div class="slick mb-4">
  <div class="banner">
    <img src="img/newIn.jpg">
    <div class="article">NEW IN</div>
    <a href="<?= $NewIn->getMainUrl() ?>">
      <div class="button d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="video">
    <video autoplay loop muted src="video/collection.mp4"></video>
    <div class="article">COLLECTION</div>
    <a href="<?= $Collection->getMainUrl() ?>">
      <div class="button d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="banner">
    <img src="img/shoes.jpg">
    <div class="article">SHOES</div>
    <a href="<?= $Shoes->getMainUrl() ?>">
      <div class="button d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="video">
    <video autoplay loop muted src="video/specialPrices.mp4"></video>
    <a href="<?= $SpecialPrices->getMainUrl() ?>">
      <div class="button2 d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="video">
    <video autoplay loop muted src="video/joinLife.mp4"></video>
    <div class="article">JOIN LIFE</div>
    <a href="<?= $JoinLife->getMainUrl() ?>">
      <div class="button d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
</div>

<div class="arrow1">
  <i class="prev fas fa-chevron-left h2 text-white m-0"></i>
</div>

<div class="arrow2">
  <i class="next fas fa-chevron-right h2 text-white m-0"></i>
</div>

<div class="title container-fluid text-center h2 mb-4">New In</div>

<div class="newInShowCon p-3 mb-4">
  <div class="newInShow container d-flex flex-wrap justify-content-center align-items-center wow animate__animated animate__slideInUp">
    <div class="new-card col-5 d-flex flex-wrap justify-content-center align-items-center me-5">
      <a href="">
        <div class="uk-inline-clip uk-transition-toggle rounded" tabindex="0">
            <img src="img/newInShow/1.jpg">
            <img src="img/newInShow/4.jpg" class="uk-transition-scale-up uk-position-cover">
        </div>
      </a>
      <div class="new-card-content h3 text-white">
        <div class="new-card-title h1 text-white">Men's Life Style</div>
        <div class="h4 text-white">shop now</div>
        <i class="newcard-arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </div>

    <div class="new-card col-5 d-flex flex-wrap justify-content-center align-items-center">
      <a href=""><img src="img/newInShow/2.jpg" class="rounded"></a>
      <div class="new-card-content h3 text-white">
        <div class="new-card-title h1 text-white">New Arrivals For Spring</div>
        <div class="h4 text-white">shop now</div>
        <i class="newcard-arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </div>
  </div>
</div>

<div class="title container-fluid text-center h2 mb-4">For Inspiration</div>

<div class="forInspirationCon">
  <i class="prev2 fas fa-arrow-left rounded h2 m-0"></i>
  <div class="forInspiration container-fluid d-flex flex-wrap justify-content-center align-items-center">
    <?php include "api/forInspiration.php" ?>
  </div>
  <i class="next2 fas fa-arrow-right rounded h2 m-0"></i>
</div>