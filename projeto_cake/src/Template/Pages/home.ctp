<div class="row justify-content-center">
  <div class="align-self-center mr-3 ">
    <!--             <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
    -->
    <center>
      <img src="img/logo.png"  alt="Generic placeholder image" class="mx-auto d-block" style="width:65%">
    </center>
    <!--             </div>
    -->
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-8  offset-md-2">

      <div class="container-fluid">

        <form action="#service"  id="s" method="GET">
          <div class="input-group mb-3">

            <?php if (isset($_GET['search'])): ?>
             <div class="tooltip">
              <input type="text"  class="form-control input-lg" name="search"  value="<?php echo $_GET['search'];?>" placeholder="Buscar Unidades Básicas de Saúde de Igarassu" border="1px solid black" title="Pesquise sua de unidade de saúde, Você pode pesquisar por endereço,cep, lugar ou nome da unidade, entre outras formas">
              	<span class="tooltiptext">Pesquise por Postos, Especialidades, CEP, Horário ...</span>
             </div>
                <button class="btn btn-outline-secondary" style="background-color: #6c757d;" type="submit" title="Pesquisar">Pesquisar</button>
              </div>

            <?php else: ?>
            <div class="tooltip">
              <input  class="form-control"  name="search" type="text" placeholder="Buscar Unidades Básicas de Saúde de Igarassu">
              <span class="tooltiptext">Pesquise por Postos, Especialidades, CEP, Horário ...</span>
            </div>
              <button class="btn btn-outline-secondary"  style="background-color: #6c757d;" type="submit">Pesquisar</button>

            <?php endif ?>
          </div>
        </form>
      </div>


    <!--  erro na função sizeof trocando pro array, (sizeof ($unidades))   -->
<div class="jumbotron">
  <?php if (isset($palavra)): ?>
      <?php if (sizeof($unidades) > 0): ?>
        <?php foreach ($unidades as $unidade): ?>
            <br>
            <u>
            <b>
              <?= $this->Html->link($unidade["name"],
              ["controller"=>"HealthUnits","action"=>"view",$unidade["id"] ]) ?>
            </b>
            </u>
            <br>
        <?php endforeach ?>
      <?php else: ?>
        <div class="alert alert-info" role="alert">
          Nenhuma unidade encontrada pela busca
        </div>
      <?php endif ?>
  <?php endif ?>      
</div>
</div>
</div>
</div>      
