<?php 
$txt_id_cliente = isset($cliente->id_cliente) ? $cliente->id_cliente : "";
$txt_cliente = isset($cliente->cliente) ? $cliente->cliente : "";
$txt_bairro = isset($cliente->bairro) ? $cliente->bairro : "";
$txt_cidade = isset($cliente->cidade) ? $cliente->cidade : "";
$txt_endereco = isset($cliente->endereco) ?$cliente->endereco : "";
$txt_cep = isset($cliente->cep) ? $cliente->cep : "";
$txt_uf = isset($cliente->uf) ? $cliente->uf : "";
$txt_email = isset($cliente->email) ? $cliente->email : "";
$txt_celular = isset($cliente->celular) ? $cliente->celular : "";

?>


	<div class="conteudo">
	<div class="base-geral">
	<h1 class="titulo"><span>Cadastro de cliente </span></h1>
		<div class="base-home">
			<div class="base-form">
				<h2>preencha os campos do cadastro abaixo</h2>
				<form action="<?php echo base_url("cliente/salvar") ?>" name="" method="POST">
				<div class="caixa100">
					<div class="marcacao">
						<h3>Dados pessoais</h3>
						<div class="separa">
							<span>Nome</span>						
							<input type="text" value="<?php echo $txt_cliente ?>" name="txt_cliente" placeholder="Digite o nome do cliente">
						</div>
						<div class="separa">	
							<span>Bairro</span>						
							<input type="text"  name="txt_bairro" value="<?php echo $txt_bairro ?>" placeholder="Digite o bairro">
						</div>
						<div class="separa">
							<span>cidade</span>						
							<input type="text" name="txt_cidade" value="<?php echo $txt_cidade ?>" placeholder="Digite a cidade">
						</div>
						<div class="separa">
							<span>endereço</span>						
							<input type="text" name="txt_endereco" value="<?php echo $txt_endereco ?>"  placeholder="Digite o endereço">
						</div>
						<div class="separa">
							<span>CEP</span>						
							<input type="text" name="txt_cep"  value="<?php echo $txt_cep ?>" placeholder="Digite seu cep">						
						</div>		
						<div class="separa">	
							<span>UF</span>		
							<input type="text" name="txt_uf"  value="<?php echo $txt_uf ?>" placeholder="Digite seu estado">						
						</div>
					</div>				
					<div class="marcacao">
						<h3>Dados complementares</h3>
						<span>Email</span>
						<input type="email" name="txt_email" value="<?php echo $txt_email ?>"  placeholder="Digite o email">						
						<div class="separa">	
						<span>Celular</span>		
						<input type="text" name="txt_celular" value="<?php echo $txt_celular ?>"  placeholder="Digite o celular">						
						</div>
												
					</div>
				<input type="hidden" name="id_cliente" value="<?php echo $txt_id_cliente ?>">
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
