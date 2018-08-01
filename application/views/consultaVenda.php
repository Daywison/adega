	<div class="conteudo">
	<div class="base-geral">
	<h1 class="titulo"><span>Movimentacao</span></h1>
		<div class="base-home">
			<div class="base-form">
					<div class="marcacao">
							<h3>Selecione a data</h3>
							<div class="coluna4">
								<input type="date" value="" name="">
							</div>
							<div class="coluna4">
								<input type="date" value="" name="">
							</div>							
							<div class="coluna3">
								<input type="submit" class="btn" value="Pesquisar" name="">
							</div>
					</div>
			</div>
			
			<div class="base-lista">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <thead>
					  <tr>
						<th width="2%" align="left">Id</th>
						<th width="34%" align="center">Data</th>
						<th width="23%" align="center">TOTAL</th>
						<th width="21%" align="center">TOTAL</th>
					  </tr>
				  </thead>
				  <tbody>
						<?php 
							foreach ($lista as $linha) { ?>
							<tr>
									<td align="left"><?php echo $linha->id_venda ?></td>
									<td align="center"><?php echo $linha->data_venda ?></td>
									<td align="center">TOTAL</td>
									<td align="center">TOTAL</td>						
							</tr>					 
						<?php } ?>
				  </tbody>
				</table>
			</div>
			<div class="base-pag">
				<p>Mostrando de 1 até 10 de 26 registros</p>
				<ul class="paginacao">
					<li><a href="" class="anterior">Anterior</a></li>
					<li><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">[...]</a></li>
					<li><a href="" class="proximo">Próximo</a></li>
				</ul>
		</div>
		</div>
	</div>
</div>

