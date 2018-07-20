<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnit $healthUnit
 */
?>

<?= $this->Html->css('localizacao_unidade.css') ?>
<?= $this->fetch('css') ?>

<br><br><br>


<div class="container">
    <div class="col-md-8  offset-md-2">

      <div class="container-fluid">

        <form action="../../#service" method="GET">
          <div class="input-group mb-3">

            <?php if (isset($_GET['search'])): ?>
              <input type="text" class="form-control input-lg" name="search"  value="<?php echo $_GET['search'];?>" placeholder="Procure Por Postos, Municipios, Especialidade" border="1px solid black" title="Pesquise sua de unidade de saúde, Você pode pesquisar por endereço,cep, lugar ou nome da unidade, entre outras formas">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" title="Pesquisar">Pesquisar</button>

                <?php else: ?>
                  <input  class="form-control" name="search" type="text" placeholder="Procure Por Postos, Municipios, Especialidade" title="Pesquise sua de unidade de saúde, Você pode pesquisar por endereço,cep, lugar ou nome da unidade, entre outras formas">
                  <button class="btn btn-outline-secondary" type="submit">Pesquisar</i></button>

                <?php endif ?>


              </div>
            </form>
          </div>
        </div>
        <br><br>
        <center>
          <h3><?= h($healthUnit->name) ?></h3>
        </center>
        <br><br>
        <div class="row">
          <div class="col-sm-6">
        <div class="card-group">
          <div class="card">
            <div class="card-body">
             <center>
              <h4 class="font">
                Informações da Unidade
              </h4>
            </center>
            <b>Telefone</b>
            <p><?= h($healthUnit->telephone) ?></p>

            <b>CEP</b>
            <p><?= h($healthUnit->CEP) ?></p>

            <b>Endereço Completo</b>
            <p><?= h($healthUnit->complete_address) ?></p>

            <b>Horário de Atendimento</b>
            <p><?= h($healthUnit->business_hours)?></p>
            <button class="btn btn-primary" type="button" onclick="DisplayMapa(this)">
              Mostrar Mapa
            </button>
            <b>
            <i>
            <?= $this->Html->link(__('Sugerir Edição'), ['action' => 'edit', $healthUnit->id, 'class'=>'btn btn-primary ']) ?>
            </i>
            </b>

          </div>
          </div>
          </div>
        </div>
          <div class="card" style="margin-left: 1.6%" >
            <div class="card-body">
             <center>
              <h4 class="font">
                Especialidades
              </h4>
            </center>
            <?php if (!empty($healthUnit->specialties)): ?>
              <?php foreach ($healthUnit->specialties as $specialties): ?>
                <p style="font-size: 1.4em"><?= h($specialties->name) ?></p><br>
              <?php endforeach; ?>
              <?php else: ?>
               <p></p>
               <div class="alert alert-info">
                 <b>Informação não encontrada</b>
               </div>
             <?php endif; ?>
            <b>
            <i>
            <?= $this->Html->link(__('Sugerir Edição'), ['action' => 'edit', $healthUnit->id, 'class'=>'btn btn-primary ']) ?>
            </i>
            </b>           
            </div>
         </div>
       </div>
     </div>


   </div>
   <br><br>
   <div class="container mapa">
    <h4>Localização</h4>
    <div id="map"></div>
  </div>

  <div class="container comentarios">
    <center><h4>Comentários</h4></center>
    <div class="container listaComentarios col-md-8  offset-md-2">
      <?php if(json_encode($comments) != "[]"): ?>
        <?php foreach ($comments as $key => $comentario): ?>
          <div id="div-comment-3" class="comment-body container-fluid">
            <div class="row comment-author vcard">
              <?= $this->Html->image("author_comments.png") ?>
              <b><?= ucfirst($comentario->author) ?></b>
              <span class="says">disse:</span>
            </div>

            <p class="comment-content">
              <?= ucfirst($comentario->content) ?>
            </p>

            <div class="row comment-meta commentmetadata">
              <p class="p-comment-data"><?= $comentario->data ?></p>
            </div>
          </div>
        <?php endforeach ?>
        <?php else: ?>
          <div class="alert alert-info" role="alert">
            Nenhum comentário encontrado
          </div>
        <?php endif ?>
      </div>
    </div>

    <div class="wow fadeInDown col-md-offset-3 col-md-4  offset-md-2" data-wow-delay="0.1s" style="margin-left: 30em;">
        <p></p>
        <br><br><br>
        <b>Avalie:</b>
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa fa-star-o"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa fa-star-o"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa fa-star-o"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa fa-star-o"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa fa-star-o"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				<input type="submit" class="btn btn-primary pa" value="Enviar">
				
			</div>
		</form>
		<br><br>
        <div style="border-radius: 10px!important;background: #ecf0f1;padding: 20px 30px;text-align: center;margin-bottom: 20px;margin-left: 5em; width: 50em;">
          <h3 id="contato" class="h-bold text-center">Deixe seu comentário!</h3>
          <?= $this->Form->create($comment,[ 'url'  =>  [ 'controller'=>'comments',"action"=>"add" ]]) ?>
          <fieldset>
            <?= $this->Form->control('author',["label"=>"Seu nome","class"=>"inpt form-control"]); ?>

            <label for="Digite um comentário sobre as informações dessa página">Mensagem</label>
            <?= $this->Form->textarea('content',["class"=>"inpt form-control"]); ?>

            <?= $this->Form->control(
              'health_unit_id',['type'=>"hidden","default"=>$healthUnit->id]);?>
              <br>
              <center>
              <?= $this->Form->button(__('Enviar'),["class"=>"btn btn-primary pa"])?>
              <?= $this->Form->end() ?>
            </center>
            </fieldset>
          </form>
      </div>
    </div>
</div>
    <script type="text/javascript">
      function DisplayMapa($this) {
        divMapa = $(".mapa")
        display = divMapa.css("display");
        divMapa.css("display",(display == "none")?
          ($this.textContent = "Ocultar Mapa","block"):
          ($this.textContent = "Mostrar Mapa","none")
          )
      }


      function myMap() {
        var pos = {
          lat: <?= $healthUnit->latitude ?>,
          lng: <?= $healthUnit->longitude ?>
        };
        var myCenter = pos;
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
          center: myCenter, zoom: 16,
          styles:
          [
          {
            "elementType": "geometry",
            "stylers": [
            {
              "color": "#f5f5f5"
            }
            ]
          },
          {
            "elementType": "labels.icon",
            "stylers": [
            {
              "visibility": "off"
            }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
            {
              "color": "#616161"
            }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
            {
              "color": "#f5f5f5"
            }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
            {
              "color": "#bdbdbd"
            }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
            {
              "color": "#eeeeee"
            }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
            {
              "color": "#757575"
            }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
            {
              "color": "#e5e5e5"
            }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
            {
              "color": "#9e9e9e"
            }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
            {
              "color": "#ffffff"
            }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [
            {
              "color": "#757575"
            }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
            {
              "color": "#dadada"
            }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [
            {
              "color": "#616161"
            }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
            {
              "color": "#9e9e9e"
            }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
            {
              "color": "#e5e5e5"
            }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
            {
              "color": "#eeeeee"
            }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
            {
              "color": "#c9c9c9"
            }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
            {
              "color": "#9e9e9e"
            }
            ]
          }
          ]
        };
        var img = $('<?= $this->Html->image("Hospital.png") ?>')
        var customLabel = {
          label: img.attr('src')
        };

        var icon = customLabel || {};

        var map = new google.maps.Map(mapCanvas, mapOptions);

        var marker = new google.maps.Marker({
          position: pos,
          icon: icon.label,
          map: map
        });

      }
    </script>
  </div>

  <?=
  $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyAVZRzZzK-9O1rJqZs8lsenYQep7nc2LtQ&callback=myMap')
// $this->Html->script("https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyAVZRzZzK-9O1rJqZs8lsenYQep7nc2LtQ&center=-33.9,151.14999999999998&zoom=12&format=png&maptype=roadmap&style=element:geometry%7Ccolor:0xf5f5f5&style=element:labels.icon%7Cvisibility:off&style=element:labels.text.fill%7Ccolor:0x616161&style=element:labels.text.stroke%7Ccolor:0xf5f5f5&style=feature:administrative.land_parcel%7Celement:labels.text.fill%7Ccolor:0xbdbdbd&style=feature:poi%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:poi%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:poi.park%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:poi.park%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:road%7Celement:geometry%7Ccolor:0xffffff&style=feature:road.arterial%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:road.highway%7Celement:geometry%7Ccolor:0xdadada&style=feature:road.highway%7Celement:labels.text.fill%7Ccolor:0x616161&style=feature:road.local%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:transit.line%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:transit.station%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:water%7Celement:geometry%7Ccolor:0xc9c9c9&style=feature:water%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&size=480x360 ");
  ?>
