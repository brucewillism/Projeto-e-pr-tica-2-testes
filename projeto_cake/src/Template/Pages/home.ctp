<br><br><br><br>
<br><br><br><br>
     
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

        <form action="#service" method="GET">
          <div class="input-group mb-3">

            <?php if (isset($_GET['search'])): ?>
              <input type="text" class="form-control input-lg" name="search"  value="<?php echo $_GET['search'];?>" placeholder="Procure Por Postos, Municipios, Especialidade" border="1px solid black" title="Pesquise sua de unidade de saúde, Você pode pesquisar por endereço,cep, lugar ou nome da unidade, entre outras formas">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" title="Pesquisar">Pesquisar</button>

              <?php else: ?>
                <input  class="form-control" name="search" type="text" placeholder="Procure Por Postos, Municipios, Especialidade" title="Pesquise sua de unidade de saúde, Você pode pesquisar por endereço,cep, lugar ou nome da unidade, entre outras formas">
                <button class="btn btn-outline-secondary" style="background-color: #6c757d;" type="submit">Pesquisar</i></button>

              <?php endif ?>


            </div>
          </form>
        </div>
      </div>


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
</div>
</section>


