<?php
    function enviarMensagem($dados) {
        // Dados do formulario
        $nome_usuario       = $dados['name'];
        $email_usuario      = $dados['email'];
        $mensagem_usuario   = $dados['message'];
        
        // Criar variaveis de envio
        $destino            = "suporte@edertolentino.com";
        $remetente          = "edertolentino@edertolentino.com";
        $assunto            = "Mensagem do site";
        
        // Montar o corpo da mensagem
        $mensagem           = "O usuario " . $nome_usuario . " enviou uma mensagem." . "</BR>";
        $mensagem           .= "email do usuario: " . $email_usuario . "</BR>";
        $mensagem           .= "mensagem:" . "</BR>";
        $mensagem           .= $mensagem_usuario;
        
        return mail($destino, $assunto, $mensagem, $remetente);
    }

?>