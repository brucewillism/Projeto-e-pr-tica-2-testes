<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$title = "INFOPOSTO";
$cakeDescription = "INFOPOSTO";
?>
<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Core JavaScript Files -->
  <?= $this->Html->script("jquery/jquery-3.2.1.min.js") ?> 
  <?= $this->Html->script('jquery/jquery.easing.min.js') ?>
  <?= $this->Html->script('jquery/jquery.scrollTo.js') ?>
  <?= $this->Html->script('jquery/jquery.appear.js') ?>
  <?= $this->Html->script('jquery/jquery.cubeportfolio.min.js') ?>
  <?= $this->Html->script('bootstrap.min.js') ?>
  <?= $this->Html->script('wow.min.js') ?>
  <?= $this->Html->script('wow.min.js') ?>
  <?= $this->Html->script('stellar.js') ?>
  <?= $this->Html->script('owl.carousel.min.js') ?>
  <?= $this->Html->script('nivo-lightbox.min.js') ?>
  <?= $this->Html->script('custom.js') ?>

  <!-- css -->
  <?= $this->Html->css('bootstrap.min.css') ?>
  <?= $this->Html->css('font-awesome/css/font-awesome.min.css') ?>
  <?= $this->Html->css('plugins/cubeportfolio/css/cubeportfolio.min.css') ?>
  <?= $this->Html->css('nivo-lightbox.css') ?>
  <?= $this->Html->css('nivo-lightbox-theme/default/default.css') ?>
  <?= $this->Html->css('owl.carousel.css') ?>
  <?= $this->Html->css('owl.theme.css') ?>
  <?= $this->Html->css('animate.css') ?>
  <?= $this->Html->css('style.css') ?>

  <!-- boxed bg -->
  <?= $this->Html->css('bodybg/bg1.css') ?>
  <!-- template skin -->
<<<<<<< HEAD
  <?= $this->Html->css('color/default.css') ?>
  

  <?= $this->Html->meta('icon') ?>
  <title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
  </title>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
=======
  <link id="t-colors" href="color/default.css" rel="stylesheet">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <!-- <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>-->
   <?= $this->Html->script("jquery/jquery-3.2.1.min.js") ?> 

    <?= $this->fetch('meta') ?>
    <!--<?= $this->fetch('css') ?>-->
    <?= $this->fetch('script') ?> 
>>>>>>> 7c63f4dd7cf098651558dd375d6f0abca3b34c10
</head>
<body>

 <body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>

          <?= $this->Html->link(
              $this->Html->image('logo.jpeg',['width'=>150,'heigth'=>40]
            ), '/', array('escape' => false,'class'=>'navbar-brand')
            );
          ?>


        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/#intro">Início</a></li>
            <li><a href="/#service">Pesquisa</a></li>
            <li><a href="/#equipe">Quem somos</a></li>
            <li><a href="/#contato">Contato</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
      <?= $this->fetch('content') ?>
    </div>

    <footer>
      <section id="contato">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="wow fadeInDown" data-wow-delay="0.1s">
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <p></p>
                <center>
                  <h3 id="contato" class="h-bold text-center">Envie-nos uma mensagem!</h3>
                </center>
                <center>
                  <form  autocomplete="off">
                    <fieldset>
                      <label>Nome:</label><br><input class="cssinput" type="text"><br>
                      <label>Assunto:</label><br><input class="cssinput" type="text"><br>
                      <label>Mensagem:</label><br><textarea class="csstextarea" cols="35" rows="8"></textarea><br>
                      <input class="btn_submit" type="submit" value="Enviar">
                    </fieldset>
                  </form>
                </center>
                <br>
                <h5>Conecte-se</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

</body>
</html>
