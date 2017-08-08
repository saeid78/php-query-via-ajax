<?php



/**

 * @brief script d'accès à une BD en utilisant Ajax

 * @author Saeid

 * @date Mars 2017 

 */



$dbhote = "localhost";

$dbutilisateur = "root";

$dbpasse = "root";

$dbnom = "test";



    $connexion = new  PDO('mysql:host=' . $dbhote . ';dbname=' . $dbnom, $dbutilisateur, $dbpasse);





 if($_GET["action"] == "click") {

     

// Récupérer les données de la Query String

    

    $country = $_GET['country'];

    $city = $_GET['city'];

    $manufacturer = $_GET['manufacturer'];

    $cpu = $_GET['cpu'];

    $ram = $_GET['ram'];

    $hdd_capacity = $_GET['hdd_capacity'];

    $storage_type = $_GET['storage_type'];

    $raid = $_GET['raid'];

    $bandwidth = $_GET['bandwidth'];

    $network_speed = $_GET['network_speed'];

    

    

    // construire la requête

    

    

    if($_GET['city'] == 'All') {

           

        $query = "SELECT * FROM servers WHERE  country = '$country' AND manufacturer = '$manufacturer'";

        }else 

        {

        $query = "SELECT * FROM servers  WHERE country = '$country' AND city = '$city' AND manufacturer = '$manufacturer'";

        }

  

  

    // Exécuter la requête



    $req_prepare=$connexion->prepare($query);

    $req_prepare->execute();

    $result = $req_prepare->fetchAll(PDO::FETCH_ASSOC);

    

    $contenu = '';

    $contenu .= '

       <table class="table table-bordered">

        <tr>

         <th width="26,66%">Country</th>

         <th width="26,66%">City</th>

         <th width="26,66%">Manufacturer</th>

         <th width="26,66%">Cpu</th>

         <th width="26,66%">Ram</th>

         <th width="26,66%">Hdd capacity</th>

         <th width="26,66%">Storage type</th>

         <th width="26,66%">Raid</th>

         <th width="10%">bandwidth</th>

         <th width="10%">Network speed</th>

        </tr>

    ';

    if($req_prepare->rowCount() > 0)

    {

        foreach($result as $row)

        {

            $contenu .= '

            <tr>

            <td style="background:whitesmoke">'.$row["country"].'</td>

            <td style="background:whitesmoke"">'.$row["city"].'</td>

            <td style="background:whitesmoke"" >'.$row["manufacturer"].'</td>';
            
            //verifier le cpu
            
            if (strcmp ($cpu , '.$row["cpu"].' == 0)){

                $contenu .= '

                <td style="background:yellow !important;">'.$row["cpu"].'</td>

                ';

            }else

           {
               $contenu .= '

                <td style="background:green !important;">'.$row["cpu"].'</td>

                ';

            }
            
        //verifier le ram     
            
            if ($ram == $row["ram"]){

                 $contenu .= '

                <td style="background:yellow !important;">'.$row["ram"].'</td>

                ';

            }else

            if ($ram > $row["ram"]){



                 $contenu .= '

                <td style="background:red !important;">'.$row["ram"].'</td>

                ';

            }else

            if ($ram < $row["ram"]){



                 $contenu .= '

                <td style="background:green !important;">'.$row["ram"].'</td>

                ';

            }
               //verifier le hdd_capacity     
             if ($hdd_capacity == '.$row["hdd_capacity"].'){

                 $contenu .= '
               <td style="background:yellow !important;">'.$row["hdd_capacity"].'</td>
                ';

            }else

           if ($hdd_capacity > '.$row["hdd_capacity"].'){

                 $contenu .= '
                <td style="background:green !important;">'.$row["hdd_capacity"].'</td>

                ';

            }else
               if ($hdd_capacity < '.$row["hdd_capacity"].')
            {
                 $contenu .= '

                <td style="background:red !important;">'.$row["hdd_capacity"].'</td>

                ';

            }
            
            //verifier le storage_type

            if ($storage_type == '.$row["storage_type"].'){

                 $contenu .= '

                <td style="background:yellow !important;">'.$row["storage_type"].'</td>

                ';
            }else

            if ($storage_type == 'SDD'){
                 $contenu .= '

                <td style="background:green !important; !important">'.$row["storage_type"].'</td>

                ';

            }else
                
            if ($storage_type == 'HDD'){
                $contenu .= '

               <td style="background:red !important;">'.$row["storage_type"].'</td>

                ';

            }

                  
            //verifier le raid
                  
            if ($raid == '.$row["raid"].'){

                 $contenu .= '

            <td style="background:yellow !important;">'.$row["raid"].'</td>

                ';

            }else

            if ($raid == 'HW'){

                 $contenu .= '

                <td style="background:green !important;">'.$row["raid"].'</td>

                ';

            }else

            {
                 $contenu .= '

                <td style="background:red !important;">'.$row["raid"].'</td>

                ';

            }
            
              
          //veirier le bandwidth
             if ($bandwidth == '.$row["bandwidth"].'){

                 $contenu .= '

            <td style="background:yellow !important;">'.$row["bandwidth"].'</td>

                ';

            }else

            {

                 $contenu .= '

                <td style="background:green !important;">'.$row["bandwidth"].'</td>

                ';

            }

         
            //verifier le network_speed
            
             if ($network_speed == '.$row["network_speed"].'){

                 $contenu .= '

            <td style="background:yellow !important;">'.$row["network_speed"].'</td>

                ';

            }else

            if ($network_speed > '100'){

                 $contenu .= '

                <td style="background:green !important;">'.$row["network_speed"].'</td>

                ';

            }else
                if ($network_speed < '100')
            {
                 $contenu .= '

                <td style="background:red !important;">'.$row["network_speed"].'</td>

                ';

            }';
           

            </tr>

            ';

       }
        

    }

    else

    {

    $contenu .= '

     <tr>

     <td align="center">Données non trouvées</td>

     </tr>

   ';

   }

    $contenu .= '</table>';

     

     

    echo $contenu;

    

    

}



// Ajouter a la BD



//Ce code va créer un nouveau Record

 /*if(_GET["action"] == "Create") {

     

  $req_prepare=$connexion->prepare("

   INSERT INTO servers (country, city, manufacturer,cpu, ram, hdd_capacity, storage_type, raid, bandwidth, network_speed) 

                 VALUES (:country, :city, :manufacturer, :cpu, :ram, :hdd_capacity, :storage_type, :raid, :bandwidth, :network_speed)

  ");

  

  $result = $req_prepare->execute(

   array(

    ':country' => $_GET["country"],

    ':city' => $_GET["city"],

    ':manufacturer' => $_GET["manufacturer"],

    ':cpu' => $_GET["cpu"],

    ':ram' => $_GET["ram"],

    ':hdd_capacity' => $_GET["hdd_capacity"],

    ':storage_type' => $_GET["storage_type"],

    ':raid' => $_GET["raid"],

    ':bandwidth' => $_GET["bandwidth"],

    ':network_speed' => $_GET["network_speed"]

   )

  );

  if(!empty($result))

  {

   echo 'Le seveur a ete ajoute a la BD';

  }

 }

*/  

?>