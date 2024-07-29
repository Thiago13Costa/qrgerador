<?php
class dados{
    function index(){
        $saida = array("titulo"=>"Dados Cadastrado:");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $saida["primeironome"] = $this->test_input($_POST["firstname"]);
            $saida["sobrenome"] = $this->test_input($_POST["lastname"]);
            $saida["email"] = $this->test_input($_POST["email"]);
            $saida["celular"] = $this->test_input($_POST["number"]);
            $saida["genero"] = $this->test_input($_POST["gender"]);
        }
        ?>
        <!DOCTYPE HTML>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="./css/home.css">
                <base href="http://192.168.19.19/formulario/">
                <title>Formulário de Cadastro</title>
            </head>
            <body>
            </body>
                <div class="container">
                    <div class="form-image" style="width:100%;display: flex;">
                        <div style="width: 50%;">
                    <?php foreach ($saida as $key => $value) {
                       echo "<div class='lista' id='".$key."'>".$saida[$key]."</div>";
                    }?>
                        </div>
                    </div>
                </div>
            <?php
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
?>