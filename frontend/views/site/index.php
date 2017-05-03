<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php /*
  <div class="row">
  <div class="col-md-6">
  <section class="slide-wrapper">

  <div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  <div class="item item1 active">
  <div class="fill" style=" background-color:#48c3af;">
  <div class="inner-content">
  <div class="carousel-img">
  <img src="http://vocefalandoingles.com/wp-content/uploads/2016/09/sofa.png" alt="sofa" class="img img-responsive" />
  </div>
  <div class="carousel-desc">

  <h2>Modern Designer Sofa</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

  </div>
  </div>
  </div>
  </div>
  <div class="item item2">
  <div class="fill" style="background-color:#b33f4a;">
  <div class="inner-content">
  <div class="carousel-img">
  <img src="http://cdn.homedit.com/wp-content/uploads/2011/08/137CLUB2ST.png" alt="white-sofa" class="img img-responsive" />
  </div>
  <div class="carousel-desc">

  <h2>Vintage Style Sofa</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

  </div>
  </div>
  </div>
  </div>
  <div class="item item3">
  <div class="fill" style="background-color:#7fc2f4;">
  <div class="inner-content">
  <div class="col-md-6">

  <div class="carousel-img">
  <img src="http://vocefalandoingles.com/wp-content/uploads/2016/09/sofa.png" alt="sofa" class="img img-responsive" />
  </div>
  </div>

  <div class="col-md-6 text-left">
  <div class="carousel-desc">

  <h2>Stylish Sofa</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

  </div>
  </div>
  </div>
  </div>
  </div>

  </div>
  </div>

  </div>

  </section>
  </div>
 */ ?>

<div class="row">
    <h2 class="center"> WELCOME TO CHEMOLINGOT HIGH SCHOOL.</h2>


    <!-- about us slider -->
    <div id="about-slider" style="border: 1px solid black; border-radius: 10px;" class="col-md-offset-1 col-md-9">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/slider_one.jpg" class="img-responsive" alt="">

                </div>
                <div class="item">
                    <img src="images/slider_one.jpg" class="img-responsive" alt="">
                </div>
                <div class="item">
                    <img src="images/slider_one.jpg" class="img-responsive" alt="">
                </div>
            </div>

            <a class="left carousel-control xs" href="#carousel-slider" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>

            <a class=" right carousel-control xs"href="#carousel-slider" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div> <!--/#carousel-slider-->
    </div><!--/#about-slider-->
    <div class="col-md-2">
    </div>
</div>
<div class="row">
    <br>


    <h2 class="center">Who we are.</h2>
    <p>
        Given the expertise and experience that your company has, I wish to ask for the opportunity to pursue my career through the unique opportunity in PWC. I believe the company’s motivated environment would provide me with an invaluable experience and that my passion and skills would make me a valuable asset to your company. I am ready, willing and confident to work and extra mile and portray excellence to my best.
        <a class="btn btn-default" href="<?php echo Yii::$app->urlManager->createUrl(['/site/about']); ?>">Read More &raquo;</a></p>

    <div class="horizdot"><br></div>

    <h2 class="center"> Our Mission</h2>

    Given the expertise and experience that your company has, I wish to ask for the opportunity to pursue my career through the unique opportunity in PWC. I believe the company’s motivated environment would provide me with an invaluable experience and that my passion and skills would make me a valuable asset to your company. I am ready, willing and confident to work and extra mile and portray excellence to my best.
    <br>
    <div class="horizdot"><br></div>
    <h2 class="center">Vision</h2>
    <p>
        Given the expertise and experience that your company has, I wish to ask for the opportunity to pursue my career through the unique opportunity in PWC. I believe the company’s motivated environment would provide me with an invaluable experience and that my passion and skills would make me a valuable asset to your company. I am ready, willing and confident to work and extra mile and portray excellence to my best.
    </p>
    <div class="horizdot"><br></div>

</div>

<br>


