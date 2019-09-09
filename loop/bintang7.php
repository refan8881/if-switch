<!DOCTYPE html>
<html>
<head>
    
    <title>Bintang</title>
    
    <form action="" method="GET" name="input">
    <pre>
    <h2>masukan jumlah bintang :</h2><input type="number" name="bintang">

    <input type="submit" name="input" value="submit"><br>
    <input type="reset" name="input" value="reset"><br></pre>
    </form>
</head>
<body>
    
</body>
</html>
<?php

if (isset($_GET['input'])) {
    $bintang = $_GET['bintang'];
    echo "<h1>Bintang</h1>";
    
    for ($a=0; $a <= $bintang ; $a++) { 
        for ($b=1; $b <= $bintang-$i; $b++) { 
            echo "&nbsp;&nbsp";
            
        }
        for ($i=1; $i <= $a; $i++) {
                 
                echo "*&nbsp;&nbsp";
            }
            echo "<br/>";
            
            
        
    }
    echo "<hr>";
    echo "<h1>Bintang Terbalik</h1>";
    for ($a=$bintang; $a >= 0 ; $a--) { 
        for ($b=$bintang; $b >= $a; $b--) { 
            echo "&nbsp;&nbsp";
            
        }
        for ($i=2; $i <= $a; $i++) {
                 
                echo "*&nbsp;&nbsp";
            }
            echo "<br/>";
        }
        echo "<hr>";
        echo "<h1>Bintang Belah Ketupat</h1>";
        for ($a=0; $a <= $bintang ; $a++) { 
        for ($b=1; $b <= $bintang-$i; $b++) { 
            echo "&nbsp;&nbsp";
            
        }
        for ($i=1; $i <= $a; $i++) {
                 
                echo "*&nbsp;&nbsp";
            }
            echo "<br/>";
            
            
        
    }
    
    for ($a=$bintang; $a >= 0 ; $a--) { 
        for ($b=$bintang; $b >= $a; $b--) { 
            echo "&nbsp;&nbsp";
            
        }
        for ($i=2; $i <= $a; $i++) {
                 
                echo "*&nbsp;&nbsp";
            }
            echo "<br/>";
        }
        echo "<hr>";
        echo "<h1>Bintang</h1>";
         for ($i=0; $i < $bintang ; $i++) { 
        echo "* ";
    }
    
    
    echo "<br>";
    echo "total bintang = " . $bintang. "<br>";
   
}
?>