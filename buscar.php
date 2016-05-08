<?php
	$titulo = 'Busca por interesse/destino';
	require_once ('header.php');
	
	require_once ('nav.php');

?>

	<main>
	
		<form>
		<fieldset>
			<legend>Busca</legend>
			
			<p>
				<label>Selecione país e cidade:
					<select name="pais" size="10">
						<option value="null"></option>
						<option>ESTADOS UNIDOS</option>
							<option>|-- Lawrenceville</option>
							<option>|-- Los Angeles</option>
							<option>|-- Lubbock</option>
							<option>|-- Madison</option>
							<option>|-- Malibu</option>
							<option>|-- Melbourne</option>
							<option>|-- Miami</option>
							<option>|-- Milwaukee</option>
							<option>|-- Myrtle Beach</option>
							<option>|-- Nashville</option>
							<option>|-- New Haven</option>
							<option>|-- New Rochelle</option>
							<option>|-- New York</option>
							<option>|-- Oklahoma City</option>
							<option>|-- Orlando</option>
							<option>|-- Philadelphia</option>
							<option>|-- Pittsburgh</option>
							<option>|-- Portland</option>
							<option>|-- Richmond</option>
							<option>|-- Ruston</option>
							<option>|-- San Antonio</option>
							<option>|-- San Diego</option>
							<option>|-- Santa Barbara</option>
							<option>|-- Santa Monica</option>
							<option>|-- São Francisco</option>
							<option>|-- Seattle</option>
							<option>|-- St. Louis</option>
							<option>|-- St. Paul</option>
							<option>|-- St. Petersburg</option>
							<option>|-- Tacoma</option>
							<option>|-- Tampa</option>
							<option>|-- Teaneck</option>
							<option>|-- Thousand Oaks</option>
							<option>|-- Washington, D.C</option>
							<option>|-- Whittier</option>
						<option>ESPANHA</option>
							<option>|-- Alicante</option>
							<option>|-- Barcelona</option>
							<option>|-- Granada</option>
							<option>|-- Madrid</option>
							<option>|-- Málaga</option>
							<option>|-- Marbella</option>
							<option>|-- Salamanca</option>
							<option>|-- Sevilha</option>
							<option>|-- Tenerife</option>
							<option>|-- Valência</option>
						<option>FRANÇA</option>
							<option>|-- Biarritz</option>
							<option>|-- Bordeaux</option>
							<option>|-- Nice</option>
							<option>|-- Paris</option>
						<option>ALEMANHA</option>
							<option>|-- Berlim</option>
							<option>|-- Frankfurt</option>
							<option>|-- Hamburgo</option>
							<option>|-- Munique</option>
						<option>CHINA</option>
							<option>|-- Pequim</option>
						<option>ITALIA</option>
							<option>|-- Florença</option>
							<option>|-- Milão</option>
							<option>|-- Roma</option>
					</select>
				</label>
			</p>
			
			<p>
				<label>Faixa de preço:
					<input list="precos" name="precos" size="30">
					<datalist id="precos">
						<option value="">
						<option value="até R$ 5.000,00">
						<option value="entre R$ 5.000,00 e R$ 10.0000,00">
						<option value="acima R$ 10.000,00">
					</datalist>
				</label>
			</p>
			
			<p>
				<label>Interesse:
					<input type="text" name="interesse">
				</label>
			
			</p>
			
			
		</fieldset>
		<input type="submit" name="submit" value="Buscar">
		</form>
	
	
	</main>


<?php 
	require_once 'footer.php';
?>