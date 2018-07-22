	<div class="conteudo">
	<div class="base-geral">
	<h1 class="titulo"><span>Produtos</span></h1>
		<div class="base-home">
			
			<div class="base-lista">
				<form action="" method="">
					<div class="formback">
						<div class="caixa01">
							<a href="<?php echo base_url() ?>produto/novo" class="btn">Adicionar novo produto</a>
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
						<th width="34%" align="center">Produto</th>
						<th width="15%" align="center">Estoque</th>
						<th width="15%" align="center">Preço</th>
						<th width="3%" align="center">Ativo</th>
						<th width="20%" align="center">Ação</th>
					  </tr>
				  </thead>				
				  <tbody>
					  <?php foreach ($lista as $produto ) { ?>						  
					  <tr>
						<td align="left"><?php echo $produto->id_produto ?></td>
						<td align="left"><?php echo $produto->produto ?></td>
						<td align="center"><?php echo $produto->estoque_atual ?></td>
						<td align="center"><?php echo $produto->preco ?></td>
						<td align="center"><?php echo $produto->ativo_produto ?></td>
						<td align="center"><a href="<?php echo base_url("produto/editar/{$produto->id_produto}")?>" class="btn alterar">ALTERAR</a>
											<a href="<?php echo base_url("produto/excluir/{$produto->id_produto}")?>" onclick="return confirmar_exclusao('<?php $produto->produto ?>')"  class="btn excluir">excluir</a></td>
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
<script src="<?php echo base_url() ?>assets/js/js_produto.js" type="text/javascript">
	
</script>

