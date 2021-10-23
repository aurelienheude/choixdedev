<?php 
    session_start();
    
    include "config.php";

    
    if(!empty($_POST["envoi"]))
    {
        if(!empty($_POST["email"]))
        {
            if(!empty($_POST["mot_de_passe"]))
            {
                $email = $_POST['email'];
                $mot_de_passe = $_POST['mot_de_passe'];

                $req = $sql->prepare("SELECT * FROM espace_membre WHERE email = ? AND mot_de_passe = ? ");
                $req->execute(array($email, $mot_de_passe));
                $userexist = $req->rowCount();

                if($userexist == 1)
                {
                    $userinfo = $req->fetch();
                    $_SESSION["id"] = $userinfo["id"];
                    $_SESSION["email"] = $userinfo["email"];

                    header("Location: app/dashboard.php");
                }else{
                    header("Location: index.php");
                }
            }else{
                header("Location: index.php");
            }
        }else{
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }

?>