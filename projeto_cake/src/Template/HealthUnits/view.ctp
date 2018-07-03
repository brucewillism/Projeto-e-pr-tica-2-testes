<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnit $healthUnit
 */
?>

<?= $this->Html->css('localizacao_unidade.css') ?>
<?= $this->fetch('css') ?>



<div class="healthUnits view large-12 medium-8 columns content">
  <center>
    <section id="service" class=" paddingtop-80">
      <div class="container">
        <div class="row">
          <center>
          </center>
          <div class="container-fluid">
           <div class="row">
             <form class="form-inline" action="../../#service" method="GET">
               <div class="col-md-8 col-md-offset-1"> 
                 <input class="cssinputo" name="search" type="text" placeholder="Procure Por Postos, Municipios, Especialidades">
               </div>
               <div class="col-md-3 botoes-pesquisa">
                 <button class="o" type="submit"><i class="fa fa-search fa-2x"></i></button>
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
      </div>
    </div>
  </div>
</section>

<center><h3><?= h($healthUnit->name) ?></h3>
</center>
<div class="container font">
  <div class="card-deck">
    <div class="card">
      <div class="card-body text-center">
       <center>
          <h3 class="font">
            Informações da Unidade
          </h3>
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

      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
        <center>
          <h3 class="font">
            Especialidades

          </h3>
        </center>
        <?php if (!empty($healthUnit->specialties)): ?>
        <?php foreach ($healthUnit->specialties as $specialties): ?>
          <p><?= h($specialties->name) ?></p><br>
        <?php endforeach; ?>
        <?php else: ?>
         <p></p>
         <div class="alert alert-info">
           <b>Informação não encontrada</b>
         </div>
        <?php endif; ?>
      </div>
</div>
</div>
</div>
<div class="container mapa">
  <h4>Localização</h4>
  <div id="map"></div>
</div>

<div class="container comentarios">
  <center><h4>Comentários</h4></center>
  <div class="container listaComentarios">
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
        <div class="alert alert-info">
          Nenhum comentário encontrado
        </div>
      <?php endif ?>
    </div>
  </div>

  <div class="wow fadeInDown col-md-6 col-md-offset-3" data-wow-delay="0.1s">
    <div class="widget">
      <p></p>
      <br><br><br>
      <center>
        <h3 id="contato" class="h-bold text-center">Deixe seu comentário!</h3>
      </center>
      <center>
        <?= $this->Form->create($comment,[ 'url'  =>  [ 'controller'=>'comments',"action"=>"add" ]]) ?>
        <fieldset>
          <?= $this->Form->control('author',["label"=>"Seu nome","class"=>"inpt form-control"]); ?>

          <label for="">Mensagem</label>
          <?= $this->Form->textarea('content',["class"=>"inpt form-control"]); ?>  

          <?= $this->Form->control(
            'health_unit_id',['type'=>"hidden","default"=>$healthUnit->id]);?>
            <br>
            <?= $this->Form->button(__('Enviar'),["class"=>"btn btn-primary pa"])?>
            <?= $this->Form->end() ?>
          </fieldset>
        </form>
      </center>
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
