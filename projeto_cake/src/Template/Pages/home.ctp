<section id="intro" class="intro">
  <div class="intro-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
            <center>
              <h1 class="h-ultra">INFOSUS</h1>
            </center>  
          </div>
          <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
            <h4 class="h-light">Nossa missão é facilitar o acesso à informações de serviços oferecidos nos postos se saúde da cidade de Igarassu. Vantagens:</h4>
          </div> 
          <div class="well well-trans">
            <div class="wow fadeInRight" data-wow-delay="0.1s">

              <ul class="lead-list">
                <li>
                  <span class="fa fa-check fa-2x icon-success"></span> 
                  <span class="list">
                    <strong>Centralização de informações</strong><br/>
                  </span>
                </li>
                <li>
                  <span class="fa fa-check fa-2x icon-success"></span> 
                  <span class="list">
                    <strong>Simplicidade</strong><br />
                  </span>
                </li>
                <li>
                  <span class="fa fa-check fa-2x icon-success"></span>
                   <span class="list">
                    <strong>Usabilidade</strong><br/>
                  </span>
                </li>
              </ul>
            </div>
          </div> 
          <center>
            <h3>Confira!</h3>
            <a href="#service" class="btn-circle js-scroll-trigger" tabindex="-1">
              <i class="fa fa-angle-double-down animated" tabindex="-1"></i>
            </a>
          </center>
        </div>
      </div>
    </div>
  </div> 
</section>


 <!--  <section id="service" class="home-section paddingtop-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center">
        </section> -->

        <section id="service" class="home-section paddingtop-80">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <center>
                  <h3 class="h-bold row">Pesquise o que você procura (Serviços,Unidades,...)</h3>
                </center>
                <div class="container-fluid">

                <div class="row">
                  <form class="form-inline" action="#service" method="GET">
                    <div class="col-md-8 col-md-offset-1">
                    <?php if (isset($_GET['search'])): ?>
                      <input class="cssinputo" name="search" type="text" value="<?php echo $_GET['search'];?>" placeholder="Unidade de Saúde">
                    <?php else: ?>
                      <input class="cssinputo" name="search" type="text" placeholder="Unidade de Saúde">
                    <?php endif ?>
                  
                    </div>
                    <div class="col-md-3 botoes-pesquisa">
                        <button class="ola" type="submit"><i class="fa fa-search fa-2x"></i></button>
                        <?= 
                          $this->Html->link(
                          $this->Form->button("Limpar Pesquisa",["class"=>"o","tabindex"=>-1]),
                          "/#service",
                          ['escape' => false]
                          )
                      ?>
                    </div>
                </form>
                </div>
              </div>
              <br>

          <!--  erro na função sizeof trocando pro array, (sizeof ($unidades))   -->
              <div class="jumbotron resultado">
                <?php if (array($unidades) > 0): ?>
                 <?php foreach ($unidades as $unidade): ?>
                  <li id="list">
                   <?= $this->Html->link($unidade['name'],
                   ["controller"=>"HealthUnits","action"=>"view",$unidade['id']]) ?>
                 </li>
               <?php endforeach ?>

               <?php else: ?>
                <div class="alert alert-info" role="alert">
                   Nenhuma unidade encontrada pela busca
                 </div>
               <?php endif ?>
             </div>
           </div>
         </div>
       </div>
     </section>
   </section>


   <section id="equipe" class="home-section bg-gray paddingbot-60">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Equipe</h2>
            </div>
          </div>
          <div class="divider-short"></div>
          <!-- <img src="../css/img/team/2.jpg"> -->
          <!-- <?= $this->Html->image('team/2.jpg') ?> -->
          <center>
            <p> Bruce Willis &nbsp;&nbsp;&nbsp; Jullyana Maria &nbsp;&nbsp;&nbsp; Milena Lins &nbsp;&nbsp;&nbsp; Thiago Vinicius &nbsp;&nbsp;&nbsp; Wandeson José </p>

          </center>
        </div>
      </div>
    </div>

  </section>



</section>



</div>
