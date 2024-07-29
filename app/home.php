<?php
class home{
    function index(){
        ?>
        <!DOCTYPE HTML>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="./css/home.css">
                <link rel="icon" href="./img/clipboard-minus-fill.svg">
                <base href="http://192.168.19.19/qrgerador/">
                <title>Gerador QR</title>
            </head>
            <body>
                <div class="container">
                    <p>Escreva o Texto ou URL</p>
                    <input type="text" placeholder="Texto ou URL" id="qrText">
                    <div id="imgBox">
                        <img src="" id="qrImg">
                    </div>
                    <button onclick="gerarQR()">Gerar QR Code</button>
                    
                </div>
                <script src="./js/script.js"></script>
            </body>
     
        <?php
    }
}
?>