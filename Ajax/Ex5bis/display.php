    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
    </tr>

    <?php
    include 'connect.php';
    if ($db) {
        $query = "SELECT * FROM clients";
        $prep = $db->prepare($query);
        $result = $prep->execute();
        if ($result) {
            $resultat = $prep->fetchAll(PDO::FETCH_ASSOC);
            $output = "";
            foreach($resultat as $row){
                $output .= "<tr>";
                $output .= "<td class='nomClient'>".$row['nom']."</td>";
                $output .= "<td class='prenomClient'>".$row['prenom']."</td>";
                $output .= "<td class='mailClient'>".$row['email']."</td>";
                $output .= "<td><button type='button' class='update' value='".$row['id']."'><i class='fa-solid fa-pen'></i></button></td>";
                $output .= "<td><button type='button' class='delete' value='".$row['id']."'><i class='fa-solid fa-trash-can'></i></button></td>";
                $output .= "</tr>";
            }
            echo $output;
        } else {
            echo "Erreur de connexion à la base de données";
        }
    }
    ?>
