<?php 


//VARIAVEIS PUXADAS DO FORMULARIO HTML
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$numero = addslashes($_POST['numero']);
$msg = addslashes($_POST['msg']);

//CRIAR VARIAVEIS DE DESTINO E ASSUNTO DDO EMAIL
$destino = "ro6244543@gmail.com";
$assunto ="Contato - formulário site";

//CRIAR UMA VARIAVE E COLOCAR OS DADOS RECEBIDOS DO FORMULARIO HTML
$dados = "Nome :".$nome. "\n"."Emai :".$email."\n"."Numero :".$numero."\n"."Mensagem :".$msg."\n";

//CRIAR UMA VARIAVEL COM O CABEÇAHO DO EMAIL COM UM EMAIL DE REMETENTE E REENVIO
$header = "From: ro6244543@gmail.com"."\r\n".
"Reply-To:".$email."\r\n".
"X=Mailer:PHP/".phpversion();//USAR A VERSAO DO PHP


//USAR A FUNÇÃO MAIL(), COLOCANDO OS DADOS: DESTINO,ASSUNTO,DADOS,CABEÇALHO 
  if (mail($destino,$assunto,$dados,$header) ){

    echo("Email enviado com ssucesso");//TRUE: IMPRIMIR MENSAGEM ENVIO COMPLETO

  }else{

    echo("Email não enviado");//ELSE: IMPRIMIR MENSAGEM EENVIO NEGADO
    
  }






?>