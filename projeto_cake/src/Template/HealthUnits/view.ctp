<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnit $healthUnit
 */
?>
<?= $this->Html->css('localizacao_unidade.css') ?>
<?= $this->fetch('css') ?>

<div class="healthUnits view large-12 medium-8 columns content">
    <h3><?= h($healthUnit->name) ?></h3>
    <table>
    
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <th scope="row"><?= __('CEP') ?></th>
            <th scope="row"><?= __('Endereço Completo') ?></th>
        </tr>
       
        <tr>
            <td><?= h($healthUnit->telephone) ?></td>
            <td><?= h($healthUnit->CEP) ?></td>
            <td><?= h($healthUnit->complete_address) ?></td>
        </tr>
    </table>
    <br>
    <div class="related">
        <?php if (!empty($healthUnit->specialties)): ?>
            <h4><?= __('Especialidades') ?></h4>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Nome') ?></th>
                </tr>
                <?php foreach ($healthUnit->specialties as $specialties): ?>
                    <tr>
                        <td><?= h($specialties->name) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
        <div class="container mapa">
            <h4>Localização</h4>
            <div id="map"></div>
        </div>
    </div>


</div>


<script type="text/javascript">
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

         var customLabel = {
                label: '/img/Hospital.png'
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
<?= 
$this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyAVZRzZzK-9O1rJqZs8lsenYQep7nc2LtQ&callback=myMap')
// $this->Html->script("https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyAVZRzZzK-9O1rJqZs8lsenYQep7nc2LtQ&center=-33.9,151.14999999999998&zoom=12&format=png&maptype=roadmap&style=element:geometry%7Ccolor:0xf5f5f5&style=element:labels.icon%7Cvisibility:off&style=element:labels.text.fill%7Ccolor:0x616161&style=element:labels.text.stroke%7Ccolor:0xf5f5f5&style=feature:administrative.land_parcel%7Celement:labels.text.fill%7Ccolor:0xbdbdbd&style=feature:poi%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:poi%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:poi.park%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:poi.park%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:road%7Celement:geometry%7Ccolor:0xffffff&style=feature:road.arterial%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:road.highway%7Celement:geometry%7Ccolor:0xdadada&style=feature:road.highway%7Celement:labels.text.fill%7Ccolor:0x616161&style=feature:road.local%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:transit.line%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:transit.station%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:water%7Celement:geometry%7Ccolor:0xc9c9c9&style=feature:water%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&size=480x360 ");



?>





 