<?php
date_default_timezone_set('America/Sao_Paulo');
?>

<html>
<head>
<meta charset="utf-8">
<title>Controle de estoque - Adega</title>
<link href="<?php echo base_url() ?>assets/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/estilo.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	<div class="base-topo">
		<div class="conteudo">	
			<a href="<?php echo base_url()?>" class="logo"><img src="<?php echo base_url() ?>assets/imagens/logo.png" title="logomarca"></a>		
	
		<div class="base-menu-topo">
		
			<div  class="menu">
				<ul>
					<li><a href="<?php echo base_url()?>"><i class="icone icone01"></i>home</a></li>
					
					<li><a href=""><i class="icone icone02"></i>Cadastros</a>
						<ul>
							<li><a href="<?php echo base_url()?>cliente">cliente</a></li>
							<li><a href="<?php echo base_url()?>produto">produto</a>								
							</li>
							<li><a href="">Fornecedor</a></li>
						</ul>
					</li>
					
					<li class="n-arow"><a href=""><i class="icone icone03"></i>estoque</a>
						<ul>
							<li><a href="<?php echo base_url()?>entrada">Entrada de produtos</a></li>
							<li><a href="<?php echo base_url()?>saida">Saída de produtos</a></li>
							<li><a href="<?php echo base_url()?>movimentacao">movimentação em geral</a></li>
							
						</ul>
					</li>
					<li class="n-arow"><a href="<?php echo base_url()?>venda"><i class="icone icone04"></i>vendas</a></li>
					<li class="n-arow"><a href=""><i class="icone icone03"></i>Consultas</a>
						<ul>
							<li><a href="<?php echo base_url()?>consulta/entrada">Entradas</a></li>
							<li><a href="<?php echo base_url()?>consulta/saida">Saídas</a></li>
							<li><a href="<?php echo base_url()?>consulta/movimentacao">movimentações</a></li>
							<li><a href="<?php echo base_url()?>consulta/venda">vendas</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url()?>logoff"><i class="icone icone05"></i>sair</a></li>
					
				</ul>	
		
		</div>
	</div>
</div>
</div>

<?php  $this->load->view($nome_view);	?>
<script> var base_url = '<?php echo base_url() ?>';</script>
<script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>	
</body>
</html>
