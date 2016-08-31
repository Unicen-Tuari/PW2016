{include file="header.tpl" active="materias"}

	<div class="container">


	<h1>Presentismo <small>{$materia["nombre"]}</small></h1>
	<hr>
	<form class="form-horizontal" method="post" action="index.php?action=carga_asistencias">
		<input value="{$materia["id"]}" name="materia" style="display:none" />
		<div class="form-group">
	    <label for="inputDate" class="col-sm-2 control-label">Fecha</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputDate" name="inputDate" placeholder="aaaa/mm/dd">
	    </div>
	  </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Asistencias</label>
			{foreach from=$alumnos item=alumno}
				<div class="col-sm-offset-2 col-sm-12 checkbox">
				  <label>
				    <input name="alumno-{$alumno["id"]}" type="checkbox" value="">
				    {$alumno["nombre"]}
				  </label>
				</div>
			{/foreach}
		</div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Enviar</button>
	    </div>
	  </div>
	</form>

{include file="footer.tpl"}
