<?php 
$cs = Yii::app ()->getClientScript ();
$cs->registerCssFile ( Yii::app ()->request->baseUrl . "/css/concursos.css" );
?>
<div class="container concursos">
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
