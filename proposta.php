<?php
$titulo = 'Envio de proposta de intercâmbio';
require_once ('header.php');

require_once ('nav.php');

?>
<main>

	<p>Envio de proposta para programa de intercâmbio</p>
	
	<form method="POST"
		action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<fieldset>
			<legend>Dados do Curso</legend>
	
			<p>
				<label>Nome da escola/Agente:<input type="text" name="escolaagente"></label>
			</p>
	
			<p>
				<label>País: <input type="text" name="pais"></label>
			</p>
	
			<p>
				<label>Cidade: <input type="text" name="cidadeescola"></label>
			</p>
	
			<p>
				<label>Tipo de curso <input type="text" name="tipocuros"></label>
			</p>
	
			<p>
				<label>Data de Inicio: <input type="date" name="datainicio"></label>
			</p>
	
			<p>
				<label>Data de Termino: <input type="date" name="datatermino"></label>
			</p>
	
			<p>
				<label>Duração: <input type="text" name="duracao"></label>
			</p>
	
			<p>
				<label>Material didático: <input type="radio" name="materialdidatico"
					value="incluso"> <span>Incluso</span> <input type="radio"
					name="materialdidatico" value="naoincluso"> <span>Não Incluso</span>
				</label>
			</p>
	
		</fieldset>
	
		<input type="submit" name="enviar" value="Enviar">
	
	</form>

</main>
<?php
require_once 'footer.php';
?>