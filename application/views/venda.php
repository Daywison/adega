	<div class="conteudo">
	<div class="base-geral">
	<h1 class="titulo"><span>VENDAS </span></h1>
		<div class="base-home">
			<div class="base-form">
				<h2>FUNIL EM MASSA</h2>
				<div class="caixa">
					<div class="marcacao">
						<h3>SELECIONE UM CLIENTE</h3>
						<form action="">
						
						<input type="text" placeholder="Digite o nome do cliente">
						<!--aqui vai mostrar os resultados digitados no campo acima, esta class esta com display:none, então deve ser chamada pelo id no js-->
						<div id="nomedoid" class="mostratexto">
							<p>Manoel jailton</p>
							<p>Manoel jailton</p>
						</div>
						<!---->
						<div class="detalhe-cliente">
							<p><b>Código:</b> 4</p>
							<p><b>Nome:</b> Manoel Jailton Nascimento</p>
							<p><b>Endereço:</b> Rua 49, 30</p>
							<p><b>Cidade:</b> São luís</p>
							<p><b>Bairro:</b> 1212</p>
							<p><b>Email:</b> mjailton@gmail.com</p>
						</div>
						</form>
					</div>
				</div>
			<div class="caixa">				
					<div class="marcacao">
						<h3>Dados da venda</h3>
						<span>Cliente</span>
						<input type="text" placeholder="Digite o nome do cliente">
					
						<div class="separa">
						<span>Código</span>
							<input type="text" placeholder="Digite o código">
						</div>
						<div class="separa">
						<span>Hora</span>
							<input type="text" placeholder="Digite a hora">
						</div>
						
						<div class="separa">
						<span>Total</span>
							<input type="text" placeholder="Digite a data">
						</div>
						<div class="separa">
						<span>Data</span>
							<input type="text" placeholder="Digite o nome do cliente">
						</div>
						
						<input type="submit" class="btn" value="Iniciar venda">
					</div>
				</div>
				
				<div class="caixa">
					<div class="marcacao">
							<h3>Itens da venda</h3>
							<div class="coluna1">
								<input type="text" value="" name="" placeholder="Código">
							</div>
							<div class="coluna2">
								<input type="text" value="" name="" placeholder="Produto">
							</div>
							<div class="coluna3">
								<input type="text" value="" name="" placeholder="Qtde">
							</div>
							<div class="coluna3">
								<input type="submit" class="btn" value="Salvar" name="">
							</div>
							
					<div class="base-lista">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <thead>
							  <tr>
								<th width="2%" align="left">Id</th>
								<th width="14%" align="center">Data</th>
								<th width="48%" align="left">Produto</th>
								<th width="16%" align="center">Quantidade</th>
								<th width="20%" align="center">Excluir</th>
							  </tr>
						  </thead>
						  <tbody>
							  <tr>
								<td align="left">1</td>
								<td align="center">29/09/2016</td>
								<td align="left">Nome do produto aqui</td>
								<td align="center">1</td>
								<td align="center"><a href="" class="btn excluir">excluir</a></td>
							  </tr>
							  	  
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
