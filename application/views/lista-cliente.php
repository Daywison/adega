	<div class="conteudo">
	<div class="base-geral">
	<h1 class="titulo"><span>cliente</span></h1>
		<div class="base-home">
			
			<div class="base-lista">
				<form action="" method="">
					<div class="formback">
						<div class="caixa01">
							<a href="<?php echo base_url() ?>cliente/novo" class="btn">Adicionar novo cliente</a>
						</div>
						<div class="caixa02">
							
							<input type="text" name="" placeholder="Pesquisar">
							<input type="submit" value="ir" class="btn">
						</div>
						
						
					</div>
				</form>
			</div>
			
			<div class="base-lista">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <thead>
					  <tr>
						<th width="2%" align="left">Id</th>
						<th width="34%" align="center">Cliente</th>
						<th width="23%" align="center">Email</th>
						<th width="21%" align="center">fone</th>
						<th width="20%" align="center">Ação</th>
					  </tr>
				  </thead>
				  <tbody>	
				  <?php foreach ($lista as $cliente ) { ?>				  
					  <tr>
						<td align="left"><?php echo $cliente->id_cliente ?></td>
						<td align="left"><?php echo $cliente->cliente ?></td>
						<td align="center"><?php echo $cliente->email ?></td>
						<td align="center"><?php echo $cliente->celular ?></td>
						<td align="center"><a href="<?php echo base_url("cliente/editar/{$cliente->id_cliente}")?>" class="btn alterar">ALTERAR</a>
											<a href="<?php echo base_url("cliente/excluir/{$cliente->id_cliente}")?>" onclick="return confirmar_exclusao('<?php $cliente->cliente ?>')"  class="btn excluir">excluir</a></td>
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
<script src="<?php echo base_url() ?>assets/js/js_cliente.js" type="text/javascript">
	
</script>
