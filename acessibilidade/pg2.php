<?php include_once('header.php')?>
<br>
<center>
<h3>Policlínica São Lucas</h3>
<div class="card a" style=" float:left; margin-left: 4em;margin-top: 2em;">
  <div class="card-header" style="background-color:#c8e1ff;">
   <h5> Informações</h5>
  </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p>
  </ul>
</div>
<div class="card a" style="float:right;margin-left: 30em; margin-top: -15em; margin-right: 4em;">
  <div class="card-header" style="background-color:#c8e1ff;"><h5>
    Especialidades </h5>
  </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p>
  </ul>
</div>
<div style="width:50em;height:15em;border-color: grey; border-radius:1em;background-color: white; margin-top: 20em;">
	<h4>Comentários</h4>
OBS: Mapa é opcional terá um botão no card se desejar vizualizar.
</div>
<br>
<center>
<div style="background-color: #c8e1ff; width: 50em; border-radius: 1em">
<fieldset> <legend><h4>Deixe seu Comentário!</h4></legend>
  <h5>Avalie:</h5>
      <form method="POST" action="" enctype="multipart/form-data">
      <div class="estrelas">
        <input type="radio" id="vazio" name="estrela" value="" checked>
        
        <label for="estrela_um"><i class="fa fa-star"></label></i>
        <input type="radio" id="estrela_um" name="estrela" value="1"></i>
    
        <label for="estrela_dois"><i class="fa fa-star"></i></label>
        <input type="radio" id="estrela_dois" name="estrela" value="2">
        
        <label for="estrela_tres"><i class="fa fa-star"></i></label>
        <input type="radio" id="estrela_tres" name="estrela" value="3">
        
        <label for="estrela_quatro"><i class="fa fa-star"></i></label>
        <input type="radio" id="estrela_quatro" name="estrela" value="4">
        
        <label for="estrela_cinco"><i class="fa fa-star"></i></label>
        <input type="radio" id="estrela_cinco" name="estrela" value="5">
        <input type="submit" class="oi cc" style="border-style: none; color:white;background-color: #17a2b8!important;" value="Enviar">
      </div>
    </form>
    <br>
  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;<label for="Insira seu nome">
Nome:
<input id="autor" name="autor" style="width: 25em;"></label></fieldset>
<label for="Insira seu comentário">
Mensagem:
<textarea id="mensagem" type="text-area" style="width: 25em" name="mensagem"></textarea></label><br>
<button  class="oi cc" type="submit" style="border-style: none; color:white;background-color: #17a2b8!important;">Enviar</button></fieldset>
</center>
<br>
<?php include_once('footer.php')?>
