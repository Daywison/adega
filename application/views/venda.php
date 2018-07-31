	<div class="conteudo">
	<div class="base-geral">
	<h1 class="titulo"><span>VENDAS </span></h1>
		<div class="base-home">
			<div class="base-form">
				<h2>VENDAS</h2>
				<div class="caixa">
					
				</div>
			<div class="caixa">				
					<div class="marcacao">					
						<div class="separa">
						<span>Código da Venda</span>
							<input type="text" id="id_venda" placeholder="Digite o código">
						</div>
						<div class="separa">
						<span>Hora</span>
							<input type="text" id="hora_venda" value="<?php echo date("H:i:m")  ?>" placeholder="Digite a hora">
						</div>
						
						<div class="separa">
						<span>Total</span>
							<input type="text">
						</div>
						<div class="separa">
						<span>Data</span>
							<input type="date" id="data_venda" value="<?php echo date("Y-m-d")  ?>">
						</div>
						
						<input type="button" class="btn" id="btnIniciarVenda" onclick="novaVenda()" value="Iniciar venda">
					</div>
				</div>
				
				<div class="caixa">
					<div class="marcacao">
							<h3>Itens da venda</h3>
							<div class="coluna1">
								<input type="text" value="" id="id_produto" name="" placeholder="Código">
							</div>
							<div class="coluna2">
								<input type="text" value="" name="" id="produto" placeholder="Produto">
							</div>
							<div class="coluna3">
								<input type="text" value="" id="qtde" name="" placeholder="Quantidade">
							</div>
							<div class="coluna3">
								<input type="text" value="" id="estoque" readonly="true" name="" placeholder="Estoque">
							</div>
							<div class="coluna3">
								<input type="text" value="" id="preco" readonly="true" name="" placeholder="Preço">
							</div>
							<div class="coluna3">
								<input type="button" class="btn" value="Salvar" onclick="inserirItens()" name="">
							</div>
							
					<div class="base-lista">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <thead>
							  <tr>
								<th width="2%" align="left">Item</th>															
								<th width="48%" align="left">Produto</th>
								<th width="20%" align="left">Preço</th>
								<th width="16%" align="center">Quantidade</th>
								<th width="20%" align="center">Excluir</th>
							  </tr>
						  </thead>
						  <tbody id="listaProduto">
							 
						  </tbody>
						</table>
					</div>
					<div class="basse-botoes">
						<button class="btn limpar">limpar itens</button>
						<button class="btn finalizar">finalizar venda</button>
						<button class="btn cancelar">cancelar venda</button>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<script> var base_url = '<?php echo base_url() ?>';</script>
<script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/js_venda.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/js_itens.js" type="text/javascript"></script>