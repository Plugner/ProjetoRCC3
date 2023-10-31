<!DOCTYPE html>
<html>
    <? include_once("../view/head.php"); ?>
    <head>
        
        <style>
            h2 {
                font-size: 175%;
                text-align: center;
            }

            #other-info p {
                text-align: center;
                margin: 5px;
            }
            #chat-page div {
                // Centralizar
            } 
            iframe {
                width: 75%;
                height: 75%;
            }
        </style>
    </head>
    <body>
        <? include_once("../view/header.php"); ?>
        <div id="contact-box">
            <div id="chat-page">
                <h2>Chat em tempo real</h2>
                <hr/>
                <iframe src="<?php echo $chat_page; ?>"></iframe>
            </div>
            <div id="other-info">
                <h2>Outras informações</h2>
                <hr>
                <p>Email: xxx@xxx.com</p>
                <p>Telefone: xxx@xxx.com</p>
                <p>Localização: xxx@xxx.com</p>
            </div>
        </div>
        <? include_once("../view/footer.php"); ?>
    </body>
</html>
