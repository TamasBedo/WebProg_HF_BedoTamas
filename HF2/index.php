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
        // 1
        $t = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');

        foreach ($t as $tipus) {
            if (is_numeric($tipus)) {
                echo $tipus . " tipusa: " . gettype($tipus) . " numerikus-e: " . "Igen" . "<br>";
            } 
            else {
                echo $tipus . " tipusa: " . gettype($tipus) . " numerikus-e: " . "Nem" . "<br>";
            }
        }
        echo "<br>";
        //2
        $orszagok = array("Magyarország " => "Budapest", "Románia" => "Bukarest","Belgium" => "Brussels", "Austria" => "Vienna", "Poland" => "Warsaw");

        foreach ($orszagok as $orszag => $fovaros) {
            echo $orszag . "  es fovarosa: " . $fovaros . "<br>";
        } 
        echo "<br>";
        //3
        $napok = array(
    	"HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    	"EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    	"DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
        );
        foreach ($napok as $nap =>$hetkoznapok){
            echo $nap.": ";
            foreach($hetkoznapok as $hetkoznap){
                echo $hetkoznap.", ";
            }
            echo"<br>";
        }
        echo"<br>";
        //4
        $autok = array('A'=>'Mercedes', 'B'=>'Pagani', 'C'=>'Lotus');
        echo "Eredeti tomb: ";
        foreach ($autok as $auto) {
            echo $auto, " ";
        }
        
        function konvertalasnagybeture(array $tomb, string $betutipus): array{
            switch ($betutipus){
                case "kicsi":
                    foreach ($tomb as $value) {
                        $value = strtolower($value);
                    }
                    break;
                case "nagy":
                    foreach ($tomb as $value) {
                        $value = strtoupper($value);
                    }
                    break;
                default:
                    echo "Nem jo";
            }
            return $tomb;
        }
       
        

        ?>
    </body>
</html>
