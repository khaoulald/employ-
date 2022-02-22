<?php



$db= new mysqli("localhost", 'root', '',"gestion personne");
 
        if(isset($_POST["submit"])){
            if(!empty($_POST["matricule"])&& !empty($_POST["nom"])&& !empty($_POST["prenom"])&& !empty($_POST["date"])&&!empty($_POST["departement"])&& !empty($_POST["salaire"]&&!empty($_POST["fonction"])&& !empty($_POST["photo"]))){
                $matricule = $_POST["matricule"];
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $datedenaissance = $_POST["date"];
                $departement = $_POST["departement"];
                $salaire = $_POST["salaire"];
                $fonction = $_POST["fonction"];
                $photo = $_POST["photo"];
                $sql = "INSERT INTO employé VALUES ('$matricule','$nom','$prenom','$datedenaissance','$departement','$salaire','$fonction','$photo')";

                $insert = mysqli_query($db,$sql);
                if($insert){
                    echo"inserted";
                }
                else{
                    echo "not inserted";
                }
            }
        }



?>