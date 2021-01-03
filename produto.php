<?php 
//Incluir CONEXÃO COM BANCO DE DADOS
include_once './config/database.php';
// INCLUIR TOPO
include './_header.php';
// ESCREVER A QUERY A SER EXECUTADA
$query = 'SELECT * FROM produtos';

//EXECUTAR A QUERY E TRAZER OS RESULTADOS
$result = $conn->query($query);

// ENCERRAR A CONEXÃO COM BANCO DE DADOS
$conn->close();

?>

<section id="servico">
	<!-- CONTAINER = Largura Restrita (magro) -->
	<div class="container">

		<h4 class="text-center text-uppercase">Produtos</h4>
		<hr>

		<!-- texto 1 -->
		<div class="row">

			<?php foreach($result as $r): ?>




			<div class="col-md-6">
				<div class="row">
					<div class="col-md-4">
						<img class="img-fluid" src="./img/imagem1.jpg">
					</div>	



					<div class="col-md-8">
						<h4 class="text-uppercase">
							<?php echo $r['nome']; ?>
						</h4>
						<h6>
							<?php echo $r['descricao']; ?>
						</h6>
						<h6><a href="">Ver produto na Loja</a></h6>
					</div>
					<div class="col-12">
						<small><?php echo $r['descricao']; ?></small>
					</div>


				</div>	
			</div>

				<?php endforeach; ?>







		</div>
	</div>
	<hr>



</section>















<?php include './_footer.php'; ?>