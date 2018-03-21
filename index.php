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
        <hr>
        <form action="side2.php" method="post">
            <table>
                <thead>
                    <th>
                        Skriv inn dine opplysninger og se om du oppfyller kravene til politiskolen.
                    </th>
                </thead>
                
                <tr>
                    <td>
                        Skriv inn ditt fulle navn:
                    </td>                    
                </tr>    
                    <td>
                        <input type="text" name="navn"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Skriv inn hvor mange meter du kan dykke:
                    </td>
                </tr>
                    
                <tr>
                    <td>
                        <input type="number" name="dykk"/>
                    </td>
                </tr>   
                <tr>
                    <td>
                        Skriv inn hvor mange meter du kan svømme:
                    </td>
                <tr/>
                <tr>
                    <td>
                        <input type="number" name="svomming"/>
                    </td>
                </tr>                  
                <tr>
                    <td>
                        Skriv inn hvor mange meter du kan svømme under vann:
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="number" name="undervann"/>
                    </td>
                </tr>   
                <tr>
                    <td>
                        Kryss av om du har førerkort eller ikke:
                    </td>
                </tr>
                <tr>
                    <td>
                        Jeg har ikke førerkort.
                    </td>
                    <td>
                        <input type = "radio" name="forerkort" value="IKKE OK"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Jeg har førerkort.
                    </td>
                    <td>
                        <input type="radio" name="forerkort" value="OK"/>
                    </td>
                <tr>
                </tr>    
                    <td>
                        <input type="submit" name="button" value="Sjekk"/>
                    </td>
                </tr>
                
            </table>    
        </form>
        
        <?php
        echo "<h4>Oppgave 1:</h4>";
        echo "<h4>a) Løkke for å summere alle tallene i arrayet og skrive ut resultatet</h4>";
        
        $liste = array(0,4,4,2,3,7,4);
        /*for($i=0; $i<count($liste); $i++){
            
        }*/
        $sum=0;
        foreach($liste as $verdi){
            $sum += $verdi;
        }
        echo $sum;
       
        
        
        echo "<h4>b) Løkke for å finne ut om arrayet inneholder tallet 4. Skriv ut resultatet</h4>";
        $fire = 0;
        for($i = 0; $i<count($liste); $i++){
            if($liste[$i] == 4){
                $fire = true;
            }
        }
        if ($fire){
            echo "Arrayet inneholder tallet 4";
        }
        
        
        echo "<h4>c) Løkke for å finne ut hvor mange ganger tallet 4 forekommer i arrayet. Skriv ut resultatet</h4>";
        $antall = 0;
        for($i=0; $i<count($liste); $i ++){
            if($liste[$i]==4){
                $antall ++;
            }
        }
        echo "Tallet fire forekommer $antall antall ganger i arrayet.";
        
        
        
        echo "<h4>Oppgave 2:</h4>";
        echo "<h4>a) Lag en funksjon som finner ut om opptakskravene er oppfylt</h4>";
      
        function politiOpptak($forerkort, $dykk, $svomming, $undervann){
            if($forerkort=="OK" && $dykk>=2.5 && $svomming>=100 && $undervann>=12){
                return true;
            }
        }
        if(isset($_POST["button"])){
        
        
        if(politiOpptak($_POST["forerkort"], $_POST["dykk"], $_POST["svomming"], $_POST["undervann"]))
        {
            echo $_POST["navn"]." har oppfylt våre opptakskrav!</i>";
        }
        else{
            echo $_POST["navn"]." har ikke bestått opptakskravene!</i>";
        }
        }
        
        echo "<h4>Oppgave 3:</h4>";
        echo "<h4>Overfør data fra oppgave 2 til en ny php-fil, og lagre de i en tekst fil.</h4>";
        //øverst i html, og i side2.php
        
        
        echo "<h4>Oppgave 4:</h4>";
        echo "<h4>Lag en klasse med de samme variablene som i oppg2. Lag en metode uten innparameter</h4>";
        
        Class opptak{
            public $navn;
            public $forerkort;
            public $dykk;
            public $svomming;
            public $undervann;
         
            function __construct($navn, $forerkort, $dykk, $svomming, $undervann){//instansiere
                
                $this->navn = $navn;
                $this->forerkort = $forerkort;
                $this->dykk = $dykk;
                $this->svomming = $svomming;
                $this->undervann = $undervann;
                
            }
        }
        
        $per = new opptak("Per", "OK", 3, 200, 14);
        if($per->forerkort=="OK" && $per->dykk>=2.5 && $per->svomming>=100 && $per->undervann>=12){
            echo "Han har bestått opptaket<br/>";
            //return true;
        }
        else{
            echo "Han har ikke bestått opptaket<br/>";
            //return false;
        }
        
        
        //legge inn tallene 1-30 i ett array og skrive det ut
        $liste = array();
        for($i=1; $i<=30; $i++){
            $liste[] = $i;
            
        }
        //skriver ut arrayet vi nettopp la inn elementer i
        for($i=0; $i <count($liste); $i++){
            echo $liste[$i];
        }
        echo "<br/>";
        
        //test
        //finne summen av arrayet
        $test = array(5, -10, 7, 2, 1, -3, 5);
        $summen=0;
        foreach ($test as $verdi){
            $summen += $verdi;
        }
        echo $summen;
        echo "<br/>";
        
        //skrive ut annenhvert element i arrayet
        echo "<h4>Skriv ut annenhvert element i arrayet</h4>";
        $tabell = array("Melk", 21.50, "Ost", 15.50, "Brød", 12.40);
        for($i =0; $i<count($tabell);$i+=2){
            echo $tabell[$i]." koster ".$tabell[$i+1]." kroner<br/>";
        }
        
        //se om ett tall finnes i arrayet
        echo "<h4>Finnes tallet 5 i arrayet</h4>";
        $fem = 0;
        for($i = 0; $i<count($test);$i++){
            if($fem[$i] == 5){
                return true;
            }
        }
        if($fem = true){
            echo "Tallet 5 finnes i arrayet <br/>";
        }
        
        //finne ut hvor mange ganger tallet 5 forekommer
        echo "<h4>Hvor mange ganger tallet 5 forekommer i arrayet</h4>";
        $ganger = 0;
        for($i = 0; $i<count($test);$i++){
            if($test[$i] == 5){
                $ganger ++;
            }
        }
        echo $ganger;
        $snitt = $summen/$ganger;
        echo "<br/>";
        echo "Gjennomsnittet av ".$summen." og ".$ganger." er ".number_format($snitt, 2);
        echo "<br/>";
        
        
        //tall som er større enn 2
        echo "<h4>Hvilke tall er større enn 2 i arrayet</h4>";
        //$tall = 0;
        foreach($test as $value){
            if($value>2){
              // $tall++; 
                echo $value." ";
            }
        }
        //echo $tall." tall er større enn 2 i arrayet.";
        echo "<h4>Hvor mange tall er større enn 2 i arrayet</h4>";
        $tall = 0;
        foreach($test as $value){
            if($value>2){
              $tall++; 
            }
        }
        echo $tall." tall er større enn 2 i arrayet.<br/>";
        
        //finne det største tallet i arrayet
        $biggest  = 0;
        foreach($test as $stor){
            
        }
        
        ?>
        
    </body>
</html>
