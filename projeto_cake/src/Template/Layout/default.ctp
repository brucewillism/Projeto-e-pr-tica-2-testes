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

$title = "INFOSUS";
$cakeDescription = "INFOSUS";
$loguser = $this->request->getSession()->read("Auth.User");
?>
<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Core JavaScript Files -->
  <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') ?> 
  <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js') ?>
  <?= $this->Html->script('jquery/jquery.easing.min.js') ?>
  <?= $this->Html->script('jquery/jquery.scrollTo.js') ?>
  <?= $this->Html->script('jquery/jquery.appear.js') ?>
  <?= $this->Html->script('jquery/jquery.cubeportfolio.min.js') ?>
  <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js') ?>
  <?= $this->Html->script('wow.min.js') ?>
  <?= $this->Html->script('stellar.js') ?>
  <?= $this->Html->script('owl.carousel.min.js') ?>
  <?= $this->Html->script('nivo-lightbox.min.js') ?>
  <?= $this->Html->script('custom.js') ?>
  <?= $this->Html->css('tables.css') ?>


  <!-- css -->
  <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css')?>
  <?= $this->Html->css('font-awesome/css/font-awesome.min.css') ?>
  <?= $this->Html->css('plugins/cubeportfolio/css/cubeportfolio.min.css') ?>
  <?= $this->Html->css('nivo-lightbox.css') ?>
  <?= $this->Html->css('nivo-lightbox-theme/default/default.css') ?>
  <?= $this->Html->css('owl.carousel.css') ?>
  <?= $this->Html->css('owl.theme.css') ?>
  <?= $this->Html->css('animate.css') ?>
  <?= $this->Html->css('style.css') ?>
  <?= $this->Html->css('style2.css') ?>
  <?= $this->Html->css('comentarios.css') ?>

  <!-- boxed bg -->
  <?= $this->Html->css('bodybg/bg1.css') ?>
  <!-- template skin -->
  <?= $this->Html->css('color/default.css') ?>
  

  <?= $this->Html->meta('icon') ?>
  <title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
  </title>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>

<body id="page-top" data-spy="scroll">

    <div style="background-color: turquoise; color: turquoise;">
      ahasa
    </div>

    <nav class="navbar navbar-expand-md bg-light navbar-dark sticky-top">

          <?= $this->Html->link(
            $this->Html->image('logo.png',["class"=>"logo"]
          ), '/', array('escape' => false,'class'=>'navbar-brand')
          );
          ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="background-color: lightgray;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link"><?= $this->Html->link("Início","/#intro") ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><?= $this->Html->link("Pesquisa ","/#service") ?></a>
            </li>

            <li class="nav-item">
              <a class="nav-link"><?= $this->Html->Link("Quem somos ","/#equipe") ?></a>
            </li>

            <li class="nav-item">
              <a class="nav-link"></a><?= $this->Html->link("Ajuda ","/#")?></a>
            </li>

            <?php if ($loguser): ?>
              <li class="nav-item"><?= $this->Html->Link('Bem vindo '.explode(" ",$loguser['name'])[0],['controller'=>'users','action'=>'view',$loguser["id"]]) ?> </li>
              <li class="nav-item"><?= $this->Html->link('Sair',['controller' => 'Users', 'action' => 'logout']) ?></li>
            <?php endif ?>
          </ul>
        </div>
      </nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
      <?= $this->fetch('content') ?>
    </div>
    <br><br>
    <footer style="box-shadow:black">
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
                <!--<p></p>
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
                </center>-->
               
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
      </section>
    </footer>
  </body>
</html>
