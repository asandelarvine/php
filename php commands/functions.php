<form action="">
<textarea name="ta" id="" cols="30" rows="10"></textarea>
<button type="submit" name="submit">Submit</button>
</form>
<?php
if(isset($_GET["submit"])){
    $mathogothanio = $_GET["ta"];
    echo str_word_count("$mathogothanio");
}
?>



<?php
//FUNCTIONS
//string length
echo strlen("FuN");
echo "<br>";
//count word
echo str_word_count("HAROO!!");
echo "<br>"; 

//Assignment
//if a word is or not a palindrome
//reverses a string
echo strrev("madam");
echo "<br>";

//search for a text within a string
echo strpos("Hello Worlds!!!" , "Worlds");
echo "<br>";
//replace text within a string
echo str_replace("PARTY AFTER PARTY AFTER PARTY!!", "RANDO PARTY AFTER PARTY AFTER PARTY!! !!", "WE PARTY AFTER PARTY AFTER PARTY!!");
echo "<br>";

//user defined functions
$x = 50;
$pass = 90;
function passmark($x){
    if($x >= "90"){
        echo "A";
    }elseif(("90"<= $x) && ($x >= "80")){
        echo "B";
    }elseif(("80"<= $x) && ($x >= "70")){
        echo "C";
    }elseif(("70"<= $x) && ($x >= "60")){
        echo "D";
    }else{
        echo "E";
    }       
}
passmark($x);
