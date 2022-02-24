<?php
include("connect.php");
    if(isset($_POST['submit'])){
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $departement = $_POST['departement'];
        $date = $_POST['date'];
        $salaire = $_POST['salaire'];
        $fonction = $_POST['fonction'];
        $photo=$_POST['photo'];
        

        

        $query="INSERT INTO employee VALUES ('$matricule','$nom','$prenom','$date','$departement','$salaire','$fonction','$photo')";
        $test  = mysqli_query($con,$query);
       
        header("location:list.php");

   
    
    }

include("EnTete.php");
?>



    <div class="container">
        <h1>Ajout d'un employé</h1>
        <form action="" method="POST">
                <div class="form-group">
                <label for="matricule">Matricule</label>
                 <input type="text" class="form-control" name="matricule"> 
                  </div>    
                                                
                     <div class="form-group">
                          <label for="nom">Nom</label>
                          <input type="text" name="nom" class="form-control">  
                  </div>
                                                
                               <div class="form-group">
                                   <label for="prenom">Prénom</label>
                                  <input type="text" name="prenom" class="form-control">
                           </div>
                                                   
                               <div class="form-group">
                                   <label for="date">Date de Naissance</label>
                                                        <input type="date" name="date" class="form-control">
                          </div>
                         <div class="form-group">
                                <label for="departement">Département</label>
                                 <input type="text" name="departement" class="form-control">
                         </div>
                            
                        <div class="form-group">
                                                                        <label for="salaire">Salaire</label>
                                                     <input type="text" name="salaire" class="form-control">
                        </div>
                                                    
                                       <div class="form-group">
                                   <label for="fonction">Fonction</label>
                                  <input type="text" name="fonction" class="form-control">
                                                </div>
                             
                     <div class="form-group">
                      <label for="photo">Photo</label>
                     <input type="file" name="photo" class="form-control">
                                 </div>      

                     <div class="form-group">
                         <button class="btn btn-success" type="submit" name="submit">Valider</button>
                    </div>                           



        </form>

    </div>
</body>
</html>