<?php 

//incluir biblioteca de funções
include_once './config/functions.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './plugin/phpmailer/src/Exception.php';
require './plugin/phpmailer/src/PHPMailer.php';
require './plugin/phpmailer/src/SMTP.php';

if(isset($_POST['name']) && !empty($_POST['name'])):
	$name 		= trim($_POST['name']);
$email 		= trim($_POST['email']);
$phone 		= trim($_POST['phone']);
$message 	= trim($_POST['message']);

// criar instancia
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                     // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.schentl.com.br';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'teste@schentl.com.br';                     // SMTP username
    $mail->Password   = 'teste@2020';                               // SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipientes
    $mail->setFrom('teste@schentl.com.br', 'Meu Site'); // remetente
    $mail->addAddress('cesar_henriquee@hotmail.com', 'Site');     // destinatario
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information'); // seleceionar outro email para responder
    //$mail->addCC('cc@example.com'); // email com copia
    //$mail->addBCC('bcc@example.com'); // email com copia oculta

    // Anexos
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contato do Site - '.$name;
    $body = '';
    $body .= '<h5>Contato do Site</h5>';
    $body .= '<br>';
    $body .= '<strong>Name:</strong>'.$name.'<br>';
    $body .= '<strong>E-mail</strong>'.$email. '<br>';
    $body .= '<strong>Telefone</strong>'.$phone. '<br>';
    $body .= '<strong>Mensagem</strong>'.$message. '<br>';
    $body .= '<br>';
    $body .= '<strong>IP:</strong> '.getUserIP().'<br>';

    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Mensagem enviado com Sucesso';
    header('Location: contato.php?s=sucesso');
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	header('location: contato.php?s=falha');
}
endif;
include './_header.php'; 

?>




<div class="container">

	<section id="local">

		<h1 class="text-center">Fale Conosco</h1>
		<h6>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.


		</h6>
		<hr>

		<div class="row">
			<div class="col-md-4">
				<h5><i class="fa fa-whatsapp"> </i>(17) 99999-9999</h5>
				<h5><i class="fa fa-phone-square"> </i>(17) 4004-4004</h5>
				<hr>
				<h6><i class="fa fa-map-marker"> </i>Rua Antonio de Godoy, 9000</h6>
				<h6>São José do Rio Preto/SP</h6>
				<h6>CEP: 15.000-000</h6>
			</div>

			<div class="col-md-8">
				<iframe 
				id="mapa" 
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29833.468107604735!2d-49.39683398229334!3d-20.82429474016886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf104fcd082ba42b0!2sMicrolins+Rio+Preto!5e0!3m2!1spt-BR!2sbr!4v1565653379609!5m2!1spt-BR!2sbr"
				frameborder="0"  
				allowfullscreen>

			</iframe>

		</div>
	</div>

</section>

<hr>

<section>
	<h6 class="text-center">Se preferir preencha o formulário e entraremos em contato o mais rapido possivel ;)</h6>
	<hr>
	<form method="post" action="contato.php">

		<div class="form-group row">
			<label for="name" 
			class="col-sm-2 col-form-label">Nome:</label>
			<div class="col-sm-10">
				<input
				type="text" 
				class="form-control" 
				id="name" 
				name="name"
				placeholder="Informe seu Nome">
			</div>

		</div>
		<form>

			<div class="form-group row">
				<label for="email" 
				class="col-sm-2 col-form-label">E-mail:</label>
				<div class="col-sm-10">
					<input
					type="text" 
					class="form-control" 
					id="email" 
					name="email"
					placeholder="Informe seu E-mail">
				</div>
			</div>


			<div class="form-group row">
				<label for="phone" 
				class="col-sm-2 col-form-label">Telefone:</label>
				<div class="col-sm-10">
					<input
					type="tel" 
					class="form-control" 
					id="phone" 
					name="phone"
					placeholder="Informe seu Telefone">
				</div>
			</div>

			<div class="form-group row">
				<label for="phone" 
				class="col-sm-2 col-form-label">Mensagem:</label>
				<div class="col-sm-10">
					<textarea 
					class="form-control" 
					id="message" 
					name="message"
					placeholder="Informe sua mensagem"></textarea>
				</div>
			</div>

			<div class="row">
				<div class="col-12 text-center">
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-send"></i>	Enviar
					</button>
				</div>
			</div>

		</form>
	</form>
</section>
</div>





<?php 
	//SETAR MODAL OCULTO
$modal = false;

	// SE ESTIVER SETADO $_GET['s']
	// PARÂMETRO NA URL "contato.php?s=blablabla"
if(isset($_GET['s']) ):

			// se o valor de parametro url GET "s" =  sucesso
	if($_GET['s'] == 'sucesso'):
		$mdoal 			= true;
		$modal_title 	= 'Contato Enviado';
		$modal_body		= ' Sua solicitação foi enviada com sucesso!
		<br>
		Em breve entraremos em contato...';

		//Se o valor de parâmetro url get "s" = "falha"
	elseif($_GET['s'] == 'falha'):
		$modal 			= true;
		$modal_title	= 'Falha ao servidor contato';
		$modal_body		='Ocorreu uma falha ao processar sua solicitação /: 
		<br>
		Tente novamente mais tarde...';
	endif;
endif;

// se $modal == true
// exibir modal
if($modal):
	?>

	<script type="text/javascript">
		$(window).on('load', function(){
			$('#message-modal').modal('show');
		});
	</script>


	<div class="modal" tabindex="-1" role="dialog" id="message-modal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><?php echo $modal_title ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p><?php echo $modal_title ?></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

				</div>
			</div>
		</div>
	</div>

<?php endif; ?>

<?php include './_footer.php'; ?>