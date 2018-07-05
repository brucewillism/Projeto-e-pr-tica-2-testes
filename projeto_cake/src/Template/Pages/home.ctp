<section id="intro" class="intro">
  <div class="intro-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <center>
                  <img src="img/logo.png" style="width: 35em; height: 15em;">
                </center>  
            </div>
                <div class="row">
                      <form class="form-inline" action="#service" method="GET">
                        <div class="col-md-8 col-md-offset-1">

                          <?php if (isset($_GET['search'])): ?>
                            <input class="cssinputo" name="search" type="text" value="<?php echo $_GET['search'];?>" placeholder="Unidade de Saúde">
                          <?php else: ?>
                            <input class="cssinputo" name="search" type="text" placeholder="Clique aqui para buscar informações">
                          <?php endif ?>
                      
                          </div>
                            <div class="col-md-3 botoes-pesquisa">
                                <button class="o" type="submit"><i class="fa fa-search fa-2x"></i></button>
                            </div>
                        </form>
                  </div>
          </div>
              <br>

          <!--  erro na função sizeof trocando pro array, (sizeof ($unidades))   -->
               <div class="jumbotron resultado">
                <?php if (sizeof($unidades) > 0): ?>
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

<section id="sobre" class="home-section bg-gray paddingbot-60">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Sobre</h2>
            </div>
          </div>
         <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
            <h4 class="h-light">O INFOSUS tem como missão disponibilizar informações sobre as Unidades Básicas de Saúde da cidade de Igarassu. Vantagens:</h4>
          </div> 
          <div class="well well-trans">
            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <ul class="lead-list">
                <li>
                  <span class="fa fa-check fa-2x icon-success"></span> 
                  <span class="list">
                    <strong>Informações Confiáveis</strong><br/>
                  </span>
                </li>
                <li>
                  <span class="fa fa-check fa-2x icon-success"></span> 
                  <span class="list">
                    <strong>Fácil Acesso</strong><br />
                  </span>
                </li>
                <li>
                  <span class="fa fa-check fa-2x icon-success"></span>
                   <span class="list">
                    <strong>Centralização de Informações</strong><br/>
                  </span>
                </li>
              </ul>
            </div>
          </div> 
        </div>
      </div>
    </div>
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
         <br><br>
         <center>
            <p> Bruce Willis &nbsp;&nbsp;&nbsp; Jullyana Maria &nbsp;&nbsp;&nbsp; Milena Lins &nbsp;&nbsp;&nbsp; Thiago Vinicius &nbsp;&nbsp;&nbsp; Wandeson José </p><hr>
          </center>
        </div>
      </div>
    </div>
</section>

