<?php
    
    include("phpmailer/class.phpmailer.php");

    $nome       =   $_POST['nome'       ];
    $email      =   $_POST['email'      ];
    $telefone   =   $_POST['telefone'   ];
    $cidade     =   $_POST['cidade'     ];
    $estado     =   $_POST['estado'     ];


    // $unidade_email = 'expansao2@jumpercursos.com.br';
    $unidade_email = 'info@jumpercursos.com.br';
    $nome_email = 'Rogério';
   
    $mail = new PHPMailer();
    $mail->IsSMTP(); // envia por SMTP 
    $mail->CharSet = 'utf-8';
    $mail->True;
    $mail->Host = "smtp-cluster.idc2.mandic.com.br"; // Servidor SMTP
    $mail->Port = 587; 
    $mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
    $mail->Username = "site@jumpercursos.com.br"; // SMTP username
    $mail->Password = "j1j2j3j1j2j3"; // SMTP password
    $mail->From = "site@jumpercursos.com.br"; // From
    $mail->FromName = 'Site JUMPER! Franquias' ; // Nome de quem envia o email
    $mail->AddAddress($unidade_email, $nome_email); // Email e nome de quem receberá //Responder
    $mail->WordWrap = 50; // Definir quebra de linha
    $mail->IsHTML = true ; // Enviar como HTML
    $mail->Subject = "JUMPER! Franquias"; // Assunto
    $mail->Body = "Foi preenchido o formulário de interesse no HotSite da Franqueadora: \n Nome - ".$nome ."\nEstado/Cidade - ".$estado ."/".$cidade ."\nTelefone - ".$telefone ."\nEmail - ". $email;//Corpo da mensagem caso seja HTML

    $mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML
    $mail->SMTPDebug  = 2; 
    if(!$mail->Send()) // Envia o email
    { 
        echo "Erro no envio da mensagem";
    }

    $url = "http://" . $_SERVER['HTTP_HOST'] . "?email=true";

    header('Location: ' . $url);
?>