<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //hazi1
        //1f
            $hetnapjai = array("vasarnap", "hetfo", "kedd", "szerda", "csutortok", "pentek", "szombat");
            $maiNap = $hetnapjai[date("w")];
            
            echo "Mai nap: " . "$maiNap" ;
        //2f
            $elsoSzam = $_POST['elsoSzam'];
            $masodikSzam = $_POST['masodikSzam'];
            $operator = $_POST['operator'];
            $eredmeny = '';
            if (is_numeric($elsoSzam) && is_numeric($masodikSzam)) {
                if($operator == osszead){
                  $eredmeny=$elsoSzam+$masodikSzam;
                }
                elseif ($operator == kivon){
                  $eredmeny=$elsoSzam-$masodikSzam;
                }
                elseif ($operator == szoroz){
                  $eredmeny=$elsoSzam*$masodikSzam;
                }
                elseif ($operator == oszt){
                  $eredmeny=$elsoSzam/$masodikSzam;
                }
                }
         
                
        ?>
           
        <!-- 2fhtml -->
              <form action="" method="post" >
                <p>
                    <input type="number" name="elsoSzam" id="elsoSzam" value="<?php echo $elsoSzam; ?>" /> <b>elso szam</b>
                </p>
                <p>
                    <input type="number" name="masodikSzam" id="masodikSzam" value="<?php echo $masodikSzam; ?>" /> <b>masodik szam</b>
                </p>
                <p>
                    <input readonly="readonly" name="eredmeny" value="<?php echo $eredmeny; ?>"> <b>eredmeny</b>
                </p>
                <input type="submit" name="operator" value="osszead" />
                <input type="submit" name="operator" value="kivon" />
                <input type="submit" name="operator" value="szoroz" />
                <input type="submit" name="operator" value="oszt" />
              </form>
        <?php
        //3f
         echo "<table border =\"2\" style='border-collapse: collapse'>";
                        for ($oszlop=1; $oszlop <= 10; $oszlop++) { 
                                echo "<tr> \n";
                                for ($sor=1; $sor <= 10; $sor++) { 
                                   $eredmeny = $sor/ $oszlop;
                                   echo "<td>$eredmeny</td> \n";
                                    }
                                    echo "</tr>";
                                }
                                echo "</table>";
           
        ?>

        <!-- 3fhtml -->
            <table width="450px" border="2px">
      
           <?php
           //4f
           for($sor=1;$sor<=8;$sor++) {            
               echo "<tr>";
               for($oszlop=1;$oszlop<=8;$oszlop++){               
               $eredmeny=$sor+$oszlop;
               if($eredmeny%2==0){
               echo "<td height=50px width=50px bgcolor=#FFFFFF></td>";
               }                      
               else {
               echo "<td height=50px width=50px bgcolor=#000000></td>";
               }
               }
               echo "</tr>";
         }
               ?>
    </body>
</html>
