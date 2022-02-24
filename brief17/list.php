<?php
include("EnTete.php");
?>

<div class="container">
        <h1>List des employés</h1>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Date Naissance</th>
                                        <th>Departement</th>
                                        <th>Salaire</th>
                                        <th>Fonction</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("connect.php");
                                    $sql = "Select  * from employee";
                                    $result = mysqli_query($con,$sql);
                                    if($result){
                                        while($emp = mysqli_fetch_assoc($result)){

                                            echo'<tr>
                                                <td>'.$emp['matricule'].'</td>
                                                <td>'.$emp['nom'].'</td>
                                                <td>'.$emp['prenom'].'</td>
                                                <td>'.$emp['dateNaiss'].'</td>
                                                <td>'.$emp['departement'].'</td>
                                                <td>'.$emp['salaire'].'</td>
                                                <td>'.$emp['fonction'].'</td>
                                                <td></td>
                                                <td>
                                                <a href="modifier.php?id='.$emp['matricule'].'" class="btn btn-warning ">modifier</a>
                                                <a href="supprimer.php?id='.$emp['matricule'].'" onclick="return confirm(`Etes vous sur de vouloir....?`);" class="btn btn-warning "  >Supprimer</a>
                                            </td>
                                            </tr>  ';                                        
                                        }
                                        
                                    }
                                    ?>
                                </tbody>
                        </table>
                    </div>
                        
                        </div>
                        
                </div>
            </div>


    </div>
</div>