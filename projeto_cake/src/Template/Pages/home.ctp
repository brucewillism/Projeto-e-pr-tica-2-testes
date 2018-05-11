<section id="intro" class="intro">
  <div class="intro-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
            <center>
              <h1 class="h-ultra">INFOPOSTO</h1>
            </center>  
          </div>
          <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
            <h4 class="h-light">Nossa missão é facilitar o acesso a informações de serviços oferecidos nos postos se saúde da cidade de Igarassu. Vantagens:</h4>
          </div>
          <div class="well well-trans">
            <div class="wow fadeInRight" data-wow-delay="0.1s">

              <ul class="lead-list">
                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Centralização de informações</strong><br /></span></li>
                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Usabilidade</strong><br /></span></li>
                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>XXX</strong><br /></span></li>
              </ul>
            </div>
          </div>
          <center>
            <h3>Confira!</h3>
            <a href="#service"c lass="btn btn-circle js-scroll-trigger">
              <i  class="fa fa-angle-double-down animated"></i>
            </a>
            </center>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section id="service" class="home-section paddingtop-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center">
    </section>
 
    <section id="service" class="home-section paddingtop-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center">
          <center>
            <h2 class="h-bold">Pesquise o que você procura (Serviços,Unidades,Município...)</h2>
          </center>
          <div class="container-fluid">
           
           <form class="form-inline" action="#service" method="GET">
            <input class="cssinputo" name="search" type="text" placeholder="Unidade de saude">
            <button class="sucs" type="submit"><i class="fa fa-search fa-2x"></i></button>
            <button>
            <?= $this->Html->link(__('Limpar pesquisa'),'/#service') ?>
            </button>
          </form>

        </div>
        <div class="jumbotron resultado">
         <?php foreach ($unidades as $unidade): ?>
          <li id="list">
           <?= $this->Html->link($unidade['name'],
           ["controller"=>"HealthUnits","action"=>"view",$unidade->id]) ?>
         </li>
       <?php endforeach ?>
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
        <img src="../css/img/team/2.jpg">
        <img src="">
        <img src="">
        <center>
        <p> Bruce Willis &nbsp;&nbsp;&nbsp; Jullyana Maria &nbsp;&nbsp;&nbsp; Maurício Lee &nbsp;&nbsp;&nbsp; Milena Lins &nbsp;&nbsp;&nbsp; Wanderson josé </p>
        <hr>
        </center>
      </div>
    </div>
  </div>
   
</section>



    </section>
   
	
	
</div>
