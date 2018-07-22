<?php 
$txt_id_produto = isset($produto->id_produto) ? $produto->id_produto : "";
$txt_produto = isset($produto->produto) ? $produto->produto : "";
$txt_estoque_inicial = isset($produto->estoque_inicial) ? $produto->estoque_inicial : "";
$txt_estoque_minimo = isset($produto->estoque_minimo) ? $produto->estoque_minimo : "";
$txt_estoque_atual = isset($produto->estoque_atual) ?$produto->estoque_atual : "";
$txt_preco = isset($produto->preco) ? $produto->preco : "";
$txt_ativo_produto = isset($produto->ativo_produto) ? $produto->ativo_produto : "";
?>


	<div class="conteudo">
	<div class="base-geral">
	<h1 class="titulo"><span>Cadastro de produto </span></h1>
		<div class="base-home">
			<div class="base-form">
				<h2>preencha os campos do cadastro abaixo</h2>
				<form action="<?php echo base_url("produto/salvar") ?>" name="" method="POST">
				<div class="caixa100">
					<div class="marcacao">						
						<div class="separa">
							<span>Produto</span>						
							<input type="text" value="<?php echo $txt_produto ?>" name="txt_produto" placeholder="Digite o nome do produto">
						</div>
						<div class="separa">	
							<span>Estoque Inicial</span>						
							<input type="text"  name="txt_estoque_inicial" value="<?php echo $txt_estoque_inicial ?>" placeholder="Digite a quantidade do estoque inicial">
						</div>
						<div class="separa">
							<span>Estoque Minímo</span>						
							<input type="text" name="txt_estoque_minimo" value="<?php echo $txt_estoque_minimo ?>" placeholder="Digite a quantidade do estoque minímo">
						</div>
						<div class="separa">
							<span>Estoque Atual</span>						
							<input type="text" name="txt_estoque_atual" readonly="true" value="<?php echo $txt_estoque_atual ?>" >
						</div>
						<div class="separa">
							<span>Preço</span>						
							<input type="text" name="txt_preco"  value="<?php echo $txt_preco ?>" placeholder="Digite o preço">						
						</div>		
						<div class="separa">	
							<span>Ativo</span>		
							<input type="text" name="txt_ativo_produto"  value="<?php echo $txt_ativo_produto ?>">						
						</div>
					</div>					
				<input type="hidden" name="id_produto" value="<?php echo $txt_id_produto ?>">
				<div class="basse-botoes">									
						<button class="btn cancelar">cancelar</button>
						<button class="btn finalizar">Concluir cadastro</button>
					</div>
			</div>
			</form>
		</div>
		</div>
	</div>
</div>
