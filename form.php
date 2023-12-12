<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario Miri</title>
</head>
<body>
    <center>
        <div class="title">
        <h1>Formulario de Miri</h1><br/>
        </div>

    <div class="main">
        <h3>Suerte mi Amor Hermoso, Tu puedes ♥</h3>
    <form action="form.php" method="post">
        <label for="q1">¿En que año nacio Taylor Swift?</label><br>
        <input type="radio" name="r1" value="1989">1989
        <input type="radio" name="r1" value="1984">1984 <br>
        <input type="radio" name="r1" value="1988">1988
        <input type="radio" name="r1" value="1987">1987

        <br><br><label for="q2">¿Cuál es el album con mas ventas de Taylor?</label><br>
        <input type="radio" name="r2" value="Taylor´s Version">Taylor´s Version
        <input type="radio" name="r2" value="Speak Now">Speak Now <br>
        <input type="radio" name="r2" value="Midnights">Midnights
        <input type="radio" name="r2" value="Lover">Lover

        <br><br><label for="q2">¿Cuál es la cancion mas escuchada de Taylor?</label><br>
        <input type="radio" name="r3" value="Look What You Made me do">Look What You Made me do
        <input type="radio" name="r3" value="Is it Over Now?">Is it Over Now? <br>
        <input type="radio" name="r3" value="Anti-Hero">Anti-Hero
        <input type="radio" name="r3" value="Cruel Summer">Cruel Summer

        <br><br><label for="q2">¿A que edad escribio su primera cacion Taylor?</label><br>
        <input type="radio" name="r4" value="18">18
        <input type="radio" name="r4" value="16">16<br>
        <input type="radio" name="r4" value="15">14
        <input type="radio" name="r4" value="17">17

        <br><br><label for="q2">¿Cuál fue el Primer Album Re Grabado de Taylor?</label><br>
        <input type="radio" name="r5" value="Fearless">Fearless
        <input type="radio" name="r5" value="Red">Red<br>
        <input type="radio" name="r5" value="Reputation">Reputation
        <input type="radio" name="r5" value="Speak Now">Speak Now

        <br><br><label for="q2">¿Cuál fue la Primera Cancion que escribio Taylor?</label><br>
        <input type="radio" name="r6" value="A place in this word">A place in this word
        <input type="radio" name="r6" value="Our Song">Our Song<br>
        <input type="radio" name="r6" value="Lucky You">Lucky You
        <input type="radio" name="r6" value="Bad">Bad

        <br><br><label for="q2">¿Cuántos años tiene Taylor?</label><br>
        <input type="radio" name="r7" value="36">36
        <input type="radio" name="r7" value="33">33<br>
        <input type="radio" name="r7" value="31">31
        <input type="radio" name="r7" value="30">30

        <br><br><label for="q2">¿Cómo se llaman los 3 Gatos de Taylor?</label><br>
        <input type="radio" name="r8" value="Olivia Chuck Lucy">Olivia Chuck Lucy
        <input type="radio" name="r8" value="Olivia Federic Bella">Olivia Federic Bella<br>
        <input type="radio" name="r8" value="Chris Sofia Samantha">Chris Sofia Samantha
        <input type="radio" name="r8" value="Olivia Meredith Benjamin">Olivia Meredith Benjamin

        <br><br><label for="q2">¿Cuál es el No.Fav de Taylor?</label><br>
        <input type="radio" name="r9" value="13">13
        <input type="radio" name="r9" value="15">15<br>
        <input type="radio" name="r9" value="20">20
        <input type="radio" name="r9" value="10">10

        <br><br><label for="q2">¿Qué Significa el "TV" en las canciones de Taylor?</label><br>
        <input type="text" name="r10">

        <br><br><input type="submit" name="submit" value="Checar Respuestas"> <input type="reset" value="Restablecer"><br>
        <?php
            $r="1989";
            $r2="Midnights";
            $r3="Cruel Summer";
            $r4="16";
            $r5="Fearless";
            $r6="Lucky You";
            $r7="33";
            $r8="Olivia Meredith Benjamin";
            $r9="13";
            $r10="Taylors Version";
            $ru="";
            $c=0;

            if(isset($_POST['submit'])){
            $ru=$_POST['r1'];
            if($r == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r2'];
            if($r2 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r3'];
            if($r3 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r4'];
            if($r4 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r5'];
            if($r5 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r6'];
            if($r6 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r7'];
            if($r7 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r8'];
            if($r8 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r9'];
            if($r9 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r10'];
            if($r10 == $ru){
                $c=$c+1;
            }
            echo "<br>Aciertos: ".$c." de 10<br><br>";

            if($c<5){
                echo "No has superado el test pero Aun así se que eres su fan #1 Teamo♥";
            }else if($c>5 and $c<9){
                echo "Estas en un buen camino, pero aún puedes mejorar";
            }else if($c>8 and $c<=10){
                echo "¡Felicidades! Has superado el test con excelencia ♥ Te amooooo Sabía que eras su fan #1";
            }
            }
        ?>
    </form>
    </div>
    </center>
</body>
</html>