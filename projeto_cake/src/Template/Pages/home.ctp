<section id="intro" class="intro">
  <div class="intro-content">
    <div class="container">
      <div class="container">
        <div class="col-lg-12">
          <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
            <center>
              <h1 class="h-ultra">INFOSUS</h1>
            </center>  
          </div>
        </div>
      </div>
    </div>
  </div> 
</section>
        <section id="service" class="home-section paddingtop-80">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <center>
                  <h3 class="h-bold row">Pesquise o que você procura(Unidades de Saúde,Serviços oferecidos etc)</h3>
                </center>
                <div class="container-fluid">

                <div class="form-group">
                  <form class="form-inline" action="#service" method="GET">
                    <div class="col-md-8 col-md-offset-1">

                    <?php if (isset($_GET['search'])): ?>
                      <input class="cssinputo" name="search" type="text" value="<?php echo $_GET['search'];?>" placeholder="Procure Por Postos, Municipios, Especialidade">
                    <?php else: ?>
                      <span class=""><i class="fa fa-search" aria-hidden="true"></i></span>
                      <input  class="form-control" name="search" type="text" placeholder="Procure Por Postos, Municipios, Especialidade">

                    <?php endif ?>
                  
                    </div>
                    <div class="col-md-3">
                        <button class="o" type="submit" style="border-radius: 15%;"><i class="fa fa-search fa-2x"></i></button>
                        
                          <?= $this->Html->link("Limpar ","/#service",['class'=>"o","style"=>"border-radius:9%", "tabindex"=>-1]) ?>
                    </div>
                </form>
                </div>
              </div>
              <br>

          <!--  erro na função sizeof trocando pro array, (sizeof ($unidades))   -->
              <div class="jumbotron">
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


   <!-- <section id="equipe" class="home-section bg-gray paddingbot-60">
    <div class="container marginbot-50">
      <div class="container">
        <div class="col-lg-12 col-lg-offset-2">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Equipe</h2>
            </div>
          </div>
          <div class="divider-short"></div>
           <img src="../css/img/team/2.jpg">
          <?= $this->Html->image('team/2.jpg') ?>
          <center>
            <p> Bruce Willis &nbsp;&nbsp;&nbsp; Juliana Maria &nbsp;&nbsp;&nbsp; Milena Lins &nbsp;&nbsp;&nbsp; Thiago Vinicius &nbsp;&nbsp;&nbsp; Wandeson José </p>

          </center>
        </div>
      </div>
    </div>

  </section> -->
