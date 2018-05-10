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
              </center>
            </div>
          </div>
        </div>
      </div>
    </section>
  <hr>
    <section id="service" class="home-section paddingtop-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center">
          <center>
                <h4 class="h-bold">Insira abaixo: Serviços que você procura/Município/Rua/CEP de um posto de saúde, para que possamos lhe ajudar.</h4>
          </center>
<div class="container-fluid">
	<form class="form-inline" action="#" method="GET">
    	 <input class="form-control rounded" name="search" type="text" placeholder="Unidade de saude">
    	<button class="rounded" type="submit"><i class="fas fa-search"></i></button>
  	</form>
</div>
<div class="jumbotron">

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
      </div>
    </section>

    <hr>
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
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div id="grid-container" class="cbp-l-grid-team">
              <ul>
                  <a href class="cbp-singlePage cbp-l-grid-team-name">Bruce Wilis</a>
                  <div class="cbp-l-grid-team-position"></div>
                </li>
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/2.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">Infraestrutura</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href class="cbp-singlePage cbp-l-grid-team-name">Julyana Maria</a>
                  <div class="cbp-l-grid-team-position"></div>
                </li>
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/2.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">Front-end</div>
                        </div>
                      </div>
                    </div>
                  </a>
                    <a href class="cbp-singlePage cbp-l-grid-team-name">Maurício Lee</a>
                  <div class="cbp-l-grid-team-position"></div>
                </li>
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/2.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">Comunicação</div>
                        </div>
                      </div>
                    </div>
                  </a>
                    <a href class="cbp-singlePage cbp-l-grid-team-name">Milena Lins</a>
                  <div class="cbp-l-grid-team-position"></div>
                </li>
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/2.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">Front-end/Back-end</div>
                        </div>
                      </div>
                    </div>
                  </a>
                    <a href class="cbp-singlePage cbp-l-grid-team-name">Thiago Vinícius</a>
                  <div class="cbp-l-grid-team-position"></div>
                </li>
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/2.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">Back-end</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href class="cbp-singlePage cbp-l-grid-team-name">Wandeson José</a>
                  <div class="cbp-l-grid-team-position"></div>
                </li>
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/2.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">Infraestrutura/Front-end</div>
                        </div>
                      </div>
                    </div>
                  </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
	
	
</div>
