	<div class="conteudo">
	<div class="base-geral">
	<h1 class="titulo"><span>Entrada</span></h1>
		<div class="base-home">
			<div class="base-form">
					<div class="marcacao">
						<form id="frmPesquisa" method="POST">
							<h3>Selecione o produto</h3>
							<div class="coluna1">
								<input type="text" readonly="true" value="" name="id_produto" id="id_produto" placeholder="Código">
							</div>
							<div class="coluna2">
								<label for="pesq"></label>
								<input type="text"  id="pesq" value="" name="pesq" placeholder="Produto">
							</div>
							<div class="coluna3">
								<input type="text" value="" id="qtde" name="qtde" placeholder="Qtde">
							</div>
							<div class="coluna3">
								<input type="text" value="" id="estoque_atual"  readonly="true" name="estoque_atual" placeholder="Estoque">
							</div>
							<div class="coluna3">
								<input type="button" class="btn" value="Salvar" name="" onclick="inserir()">
							</div>
						</form>							
					</div>
			</div>
			
			<div class="base-lista">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <thead>
					  <tr>
						<th width="2%" align="left">Id</th>
						<th width="34%" align="center">Data</th>
						<th width="23%" align="center">Produto</th>
						<th width="21%" align="center">Quantidade</th>
						<th width="21%" align="center">Excluir</th>
					  </tr>
				  </thead>
				  <tbody id="listaEntrada">				 
				  	<?php foreach($lista as $entrada) { ?>
					  <tr>
						<td align="left"><?php echo $entrada->id_produto ?></td>
						<td align="center"><?php echo $entrada->data_entrada ?></td>
						<td align="center"><?php echo $entrada->produto ?></td>
						<td align="center"><?php echo $entrada->qtde_entrada ?></td>
						<td align='center'><a href="<?php echo base_url("entrada/excluir/{$entrada->id_entrada}")?>" class='btn excluir '>Excluir</a></td>						
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
<script> var base_url = '<?php echo base_url() ?>';</script>
<script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/js_entrada.js" type="text/javascript"><script>	
