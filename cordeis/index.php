<?php
include('conexao.php')
if (isset($_post ['email']) || isset ($_post['senha']))

  if(stelen($_post['email']) ==0)seu {
    
    echo"preencha email";
  }else if (sterler($_post["senha"
  ])
  ==0){
    echo "preencha sua senha ";
  }else{
    $email =$mysqli ->real_escape_string($_post ['email']);
    $senha=$mysqli ->real_escape_string($_post ['senha']);

    $sql_code ="select *From  usuarios where email = '$email'  AND senha ='$senha' ";
    $sql_query =$mysqli->query($sql_code)or die ("falha na execuçao do codigo SQL:" .$mysqli ->error);
    $quantidade = $sql_query->num_rows;

    if($quantidade ==1){
        $usuario = $sql_query ->fetch_assoc();

        if(!isset($_SESSION)){
            session_start();
        }
      $_SESSION['id']=$usuario['id'];
      $_SESSION['nome'] =$usuario['nome']

    }else{
        echo "falha ao logar email ou senha incorretas"
    }
  }
  

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de login</title>
</head>
<body>
    <h1>acesse  sua conta</h1>
     <form action="" method="post"></form>
     <p>
        <label for="e-mail"></label>
        <input type="text" name="email" id="">
     </p>
     <P>
     <label for="senha"></label>
        <input type="password" name="senha"> 
     </P>
     <p>
        <button type="submit">entrar</button>
     </p>
</body>
</html>