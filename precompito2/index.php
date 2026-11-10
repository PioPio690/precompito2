<?php 
    if(isset($_GET["options"])){
        print_r($_GET[]): echo "<br />":

     foreach($_GET["options"]as $element){
            echo $element . "<br />":

    }

    if(in_array("absolute", $_GET["options"])){

    
    }

}



?>
<!DOCTYPE html>
<html>
<body>


    <h1>Calcolatrice</h1>


    <form method="get">
        a: <input type="number" name="a"><br><br>
        b: <input type="number" name="b"><br><br>


        <legend>Operazione</legend>
<fieldset>
     <div>
            <input id="som" type="checkbocx" name="options[]" value="absolute"> 
            <label for="som">somma</label>
     </div> 
     <div>
            <input id="dif" type="checkbocx" name="options[]" value="absolute"> 
            <label for="dif">differenza</label>
     </div>
     <div>
            <input id="pro" type="checkbocx" name="options[]" value="absolute"> 
            <label for="pro">prodotto</label>

     </div>
     <div>
            <input id="quo" type="checkbocx" name="options[]" value="absolute">  
            <label for="quo">quoziente</label>
     </div>
</fieldset>
<legend>Opzioni</legend>
<fieldset>
    <div>
            <input id="abs" type="checkbocx" name="options[]" value="absolute"> 
            <label for="abs">Valore assoluto</label>
     </div> 
     <div>
            <input id="square" type="checkbocx" name="options[]" value="square"> 
            <label for="square">quadrato</label>
     </div>
     <div>
            <input id="abs" type="checkbocx" name="options[]" value="absolute"> 
            <label for="abs">Arrotonda a 2 decimi</label>

     </div>
     <div>
            <input id="quo" type="checkbocx" name="options[]" value="absolute">  
            <label for="quo">quoziente</label>
     </div>
</fieldset>
        
    </form>


</body>
</html>

