<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/3style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="sortcut icon" href="imagens/logo.jpeg" type="image/jpeg"/>
    <title>Doação</title>
   
</head>

<body >

    <div class="teo">
        <div class="main">
            <nav style="display: flex; float: center">
                <a href="#"></a>
                <ul>
                    <img src="imagens/logo.jpeg" class="logo1">
                    <header>
                        <li><a href="voluntarios.php" class="botao">Voluntários</a></li>
                        <li><a href="index.HTML" class="botao">Home</a></li>
                        <li><a href="projetos.php" class="botao">Projetos</a></li>
                        <li><a href="admin.php" class="botao">Admin</a></li>
                    </header>
                </ul>        
            </nav>
        </div>
    </div>
   
 <div>              
      <table>
            <tr>
               
               <td><h2>DOAÇÕES</h2></td> 

               <td><img  width="75" height="75" src='imagens/donation.png'/></td>
    
            </tr>
      </table>
 </div>

 <form>
    <a href="doacao-anonima.php" class="botao">  DOAÇÃO ANONIMA</a>
    <br> 
    <br>

 </form>   

        <?php
        if(isset($_SESSION['msg']))
            echo $_SESSION['msg'];
            unset($_SESSION['msg'])
        ?>

    <form method="POST" action="3processa.php">

        <fieldset>
            <p><label for="cNome">Nome: </label><input  type="text" name="tNome" id="cNome" size="50" maxlength="70" placeholder="João"/></p>

            <p><label for="cSobrenome">Sobrenome: </label><input type="text" name="tSobrenome" id="cSobrenome" size="50" maxlength="70" placeholder="Santos"/></p>

            <p><label for="cCPF">CPF: </label><input type="text" name="tcpf" id="ccpf" size="50" maxlength="70" placeholder="EX: 54362474214"/></p>

            <p><label for="cMail">Email: </label><input  type="email" name="tMail" id="cMail" size="50" maxlength="70" placeholder="Example@gmail.com"/></p>

            <p><label for="cCelular">Celular: </label><input type="text" name="tCelular" id="cCelular" size="15" maxlength="17" placeholder="+55 (12) 91234-5678"/>

            <p><label for="cNasc">Data de Nascimento: </label><input  type="text" name="tNasc" id="cNasc" size="8" maxlength="8" placeholder="23/11/1995"/></p>

            <p>R$ <input type="text" name="quantity" step="5.0" min="5.0" placeholder="insira o valor a ser doado"></p>

            <input type="submit" value="Enviar" id="tEnviar" onclick="Enviar">
        </fieldset>

        <fieldset>
            <h2>Doe e junte-se a nós!</h2>
        </fieldset>
    </form>

</body>

</html>