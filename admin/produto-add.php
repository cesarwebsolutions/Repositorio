<?php 
//Incluir CONEXÃO COM BANCO DE DADOS
include_once '../config/database.php';
// INCLUIR TOPO
include './_header.php';

if(isset($_POST['nome'])):
	//CAMPOS DO FORMULÁRIO
	$nome 			= $_POST['nome'];
	$descricao 		= $_POST['descricao'];
	$preco	 		= $_POST['preco'];
	$ativo	 		= $_POST['ativo'];

	$imagem 		= $_FILES['imagem'];

	//TRATAMENTO PARA UPLOAD E SALVAMENTO DA IMAGEM
	$info 			= new SplFileInfo($imagem['name']);
	$img_extension	= $info->getExtension();
	$img_name		= $nome.'_'.date('YmdHis').'.'.$img_extension;

	$upload_dir 	= BASE_PATH.DS.'img'.DS.'produto'.DS;
	$upload_file 	= $upload_dir.$img_name;

	if(move_uploaded_file($imagem['tmp_name'], $upload_file)):
		$query = 'INSERT INTO produtos 
		(nome, descricao, preco, imagem, ativo, criado, modificado)
		VALUES
			(
				"'.$nome.'",
				"'.$descricao.'",
				'.$preco.',
				"'.$img_name.'",
				'.$ativo.',
				NOW(),
				NOW()
			)';

			if ($conn->query($query) === TRUE) {
				header('location: ./produtos.php?cad=sucess');
			} else{
				//echo mysqli_error($conn);

				//APAGAR IMAGEM SALVA EM CASO DE FALHA
				unlink($upload_file);
				header('location: ./produtos.php?cad=error');

			}
		else:
			echo "Falha no upload da imagem...";



			

	endif;

endif;

// ENCERRAR A CONEXÃO COM BANCO DE DADOS
$conn->close();

?>

<hr>
<div class="container">
	<br>
	<h2>Cadastrar Produto</h2>
	<hr>
	<div class="row">

		<form class="col-12" method="post" action="produto-add.php" enctype="multipart/form-data">
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
						<label for="name">Nome</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" id="nome" name="nome">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
						<label for="name">Descrição</label>
					</div>
					<div class="col-md-6">
						<textarea class="form-control" id="descricao" name="descricao"></textarea>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
						<label for="preco">Preço</label>
					</div>
					<div class="col-md-2">
						<input type="number" class="form-control" id="preco" name="preco">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
						<label for="imagem">Imagem</label>
					</div>
					<div class="col-md-6">
						<input type="file" class="form-control" id="imagem" name="imagem">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
						<label for="ativo">Status</label>
					</div>
					<div class="col-md-2">
						<select  class="form-control" id="ativo" name="ativo">
							<option value="1">Ativo</option>
							<option value="0">Inativo</option>
						</select>
					</div>
				</div>
			</div>
			<hr>

			<div class="w100 text-center">

			




			<button type="submit" class="btn btn-primary">Salvar</button>	


		</div>




	</form>







</div>



<br>
<br>
</div>
<?php include './_footer.php'; ?>

