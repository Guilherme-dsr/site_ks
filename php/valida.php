<?php
    session_start(); 
           
    include_once("conexao.php");    
    
if((isset($_POST['username'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['username']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
            
        $result_usuario = "SELECT * FROM cliente WHERE username = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        
        if(isset($resultado)){

            $_SESSION['nome'] = $_POST['username'];

            header("Location: ../home.php");
        }
        elseif((isset($_POST['username'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['username']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
            
        
        $result_usuario = "SELECT * FROM adm WHERE username = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        
        if(isset($resultado)){
            $_SESSION['nome'] = $_POST['username'];
            // $_SESSION['usuarioId'] = $resultado['id'];
            // $_SESSION['usuarioNome'] = $resultado['nome'];
            // $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            // $_SESSION['usuarioEmail'] = $resultado['email'];

            header("Location: ../pags/admin.php");
        }

        elseif((isset($_POST['username'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['username']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
            
        
        $result_usuario = "SELECT * FROM prog WHERE username = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        
        if(isset($resultado)){
            $_SESSION['nome'] = $_POST['username'];
             header("Location: ../pags/prog.php");

        }
    
        else{       

            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: ../pags/login.php");

            }
        }
    }
}

else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: ../pags/login.php");
    }

?>