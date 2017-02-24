<?php 
$cs = Yii::app ()->getClientScript ();
$cs->registerCssFile ( Yii::app ()->request->baseUrl . "/css/concursos.css" );
?>
<div class="container concursos">

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Concursos abiertos</a></li>
  <li><a data-toggle="tab" href="#menu1">Concursos inscrito</a></li>
  <li><a data-toggle="tab" href="#menu2">Próximos concursos</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
   	<div class="row">
	<?php 
	
foreach($concursosDisponibles as $concurso){
?>
	<div class="col-md-4">
		<div class="panel" style="background-image:url(<?=Yii::app()->request->baseUrl?>/images/<?=$concurso->txt_token?>/<?=$concurso->txt_ico_url?>)">
			<div class="panel-body">
				<h2><?=$concurso->txt_name?></h2>
				
				<div class="form-group text-center">
					<a href="<?=Yii::app()->request->baseUrl?>/usrUsuarios/concurso?idToken=<?=$concurso->txt_token?>" class="btn btn-primary">Entrar</a>
				</div>
			</div> 
		</div>
	</div>
	<?php }?>	
	</div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <div class="row">
	<?php 
	//$fechaActual = Utils::getFechaActual();
foreach($concursosUsuario as $concursoUsuario){
?>
	<div class="col-md-4">
		<div class="panel" style="background-image:url(<?=Yii::app()->request->baseUrl?>/images/<?=$concursoUsuario->txt_token?>/<?=$concursoUsuario->txt_ico_url?>)">
			<div class="panel-body">
				<h2><?=$concursoUsuario->txt_name?></h2>
				
				<div class="form-group text-center">
					<?php //if($concursoUsuario->fch_fin_inscripcion > $fechaActual){
					if($concursoUsuario->id_status == 2){
					?>
						<a href="<?=Yii::app()->request->baseUrl?>/usrUsuarios/concurso?idToken=<?=$concursoUsuario->txt_token?>" class="btn btn-primary">Entrar</a>
					<?php }else if($concursoUsuario->id_status == 3){ ?>
						<a href="<?=Yii::app()->request->baseUrl?>/usrUsuarios/concurso?idToken=<?=$concursoUsuario->txt_token?>" class="btn btn-primary">Entrar</a>
					<?php }else if($concursoUsuario->id_status >= 4){ ?>
						<a href="<?=Yii::app()->request->baseUrl?>/usrUsuarios/calificaciones" class="btn btn-primary">Entrar</a>
					<?php }?>
				</div>
			</div> 
		</div>
	</div>
	<?php }?>	
	</div>
    
    
  </div>
  <div id="menu2" class="tab-pane fade">
   <div class="row">
	<?php 
foreach($concursosProximos as $concursoProximo){
?>
	<div class="col-md-4">
		<div class="panel" style="background-image:url(<?=Yii::app()->request->baseUrl?>/images/<?=$concursoProximo->txt_token?>/<?=$concursoProximo->txt_ico_url?>)">
			<div class="panel-body">
				<h2><?=$concursoProximo->txt_name?></h2>
				
				<div class="form-group text-center">
					<!-- <a href="<?=Yii::app()->request->baseUrl?>/usrUsuarios/concurso?idToken=<?=$concursoProximo->txt_token?>" class="btn btn-primary">Entrar</a> -->
				</div>
			</div> 
		</div>
	</div>
	<?php }?>	
	</div>
   
  </div>
</div>
</div>
