<?php include('header.php'); ?>
<?php include('nav.php'); ?>

<div class="content">
    <form action="quiz.php" method="post">
        <div class="quizContainer">
            <img class="quizImg" src="assets/q1.jpg" alt="">

            <label>1. Was für eine Obstsorte ist auf dem Bild zu sehen?</label> <br> <br>

            <div class="row">
                <label class=quizLable for="qi1">Die Kapstachelbeere</label>
                <input class="quizRadio" type="radio" id="qi1" name="q1" value="1" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi2">Die Stachelbeere</label>
                <input class="quizRadio" type="radio" id="qi2" name="q1" value="2" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi3">Die Preiselbeere</label>
                <input class="quizRadio" type="radio" id="qi3" name="q1" value="3" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi4">Die Moosbeere</label>
                <input class="quizRadio" type="radio" id="qi4" name="q1" value="4" required>
            </div>

        </div>


        <div class="quizContainer">
            <label>2. Weißt du, welche Frucht NICHT zu den Beeren gehört?</label> <br> <br>

            <div class="row">
                <label class=quizLable for="qi5">Die Johannisbeere</label>
                <input class="quizRadio" type="radio" id="qi5" name="q2" value="5" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi6">Die Erdbeere</label>
                <input class="quizRadio" type="radio" id="qi6" name="q2" value="6" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi7">Die Banane</label>
                <input class="quizRadio" type="radio" id="qi7" name="q2" value="7" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi8">Die Kiwi</label>
                <input class="quizRadio" type="radio" id="qi8" name="q2" value="8" required>
            </div>
        </div>


        <div class="quizContainer">
            <img class="quizImg" src="assets/q3.jpg" alt="">
            <label>3. Wie viele registrierte Apfelsorten gibt es?</label> <br> <br>

            <div class="row">
                <label class=quizLable for="qi9">Es gibt 215 Apfelsorten.</label>
                <input class="quizRadio" type="radio" id="qi9" name="q3" value="9" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi10">Es gibt 550 Apfelsorten.</label>
                <input class="quizRadio" type="radio" id="qi10" name="q3" value="10" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi11">Es gibt 2400 Apfelsorten.</label>
                <input class="quizRadio" type="radio" id="qi11" name="q3" value="11" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi12">Es gibt 7500 Apfelsorten.</label>
                <input class="quizRadio" type="radio" id="qi12" name="q3" value="12" required>
            </div>
        </div>


        <div class="quizContainer">
            <img class="quizImg" src="assets/q4.jpg" alt="">
            <label>4. Die Avocado besitzt verschiedene Übernamen. Welcher gehört NICHT dazu?</label> <br> <br>

            <div class="row">
                <label class=quizLable for="qi13">Alligatorbirne</label>
                <input class="quizRadio" type="radio" id="qi13" name="q4" value="13" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi14">Butterfrucht</label>
                <input class="quizRadio" type="radio" id="qi14" name="q4" value="14" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi15">Guacafrucht</label>
                <input class="quizRadio" type="radio" id="qi15" name="q4" value="15" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi16">Avocadobirne</label>
                <input class="quizRadio" type="radio" id="qi16" name="q4" value="16" required>
            </div>
        </div>


        <div class="quizContainer">
            <label>5. Welche dieser Sorten ist kein Kernobst?</label> <br> <br>

            <div class="row">
                <label class=quizLable for="qi17">Äpfel</label>
                <input class="quizRadio" type="radio" id="qi17" name="q5" value="17" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi18">Birnen</label>
                <input class="quizRadio" type="radio" id="qi18" name="q5" value="18" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi19">Kirschen</label>
                <input class="quizRadio" type="radio" id="qi19" name="q5" value="19" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi20">Quitten</label>
                <input class="quizRadio" type="radio" id="qi20" name="q5" value="20" required>
            </div>
        </div>


        <div class="quizContainer">
            <img class="quizImg" src="assets/q6.jpg" alt="">
            <label>6. Die Gurke gehört botanisch eigentlich zum Obst. Mit welcher Frucht ist sie verwandt?</label> <br> <br>

            <div class="row">
                <label class=quizLable for="qi21">Mit der Melone.</label>
                <input class="quizRadio" type="radio" id="qi21" name="q6" value="21" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi22">Mit der Kiwi.</label>
                <input class="quizRadio" type="radio" id="qi22" name="q6" value="22" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi23">Mit der Mango</label>
                <input class="quizRadio" type="radio" id="qi23" name="q6" value="23" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi24">Mit der Traube.</label>
                <input class="quizRadio" type="radio" id="qi24" name="q6" value="24" required>
            </div>
        </div>

        <div class="quizContainer">
            <img class="quizImg" src="assets/q7.jpg" alt="">
            <label>7. Grapefruits sind kalorienarm. Weißt du, aus wie viel Prozent Wasser sie bestehen?</label> <br> <br>

            <div class="row">
                <label class=quizLable for="qi25">Aus 52 Prozent.</label>
                <input class="quizRadio" type="radio" id="qi25" name="q7" value="25" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi26">Aus 64 Prozent.</label>
                <input class="quizRadio" type="radio" id="qi26" name="q7" value="26" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi27">Aus 78 Prozent.</label>
                <input class="quizRadio" type="radio" id="qi27" name="q7" value="27" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi28">Aus 91 Prozent.</label>
                <input class="quizRadio" type="radio" id="qi28" name="q7" value="28" required>
            </div>
        </div>


        <div class="quizContainer">
            <img class="quizImg" src="assets/q8.jpg" alt="">
            <label>8. Wo wächst eine Ananas?</label> <br> <br>

            <div class="row">
                <label class=quizLable for="qi29">Auf einer Palme.</label>
                <input class="quizRadio" type="radio" id="qi29" name="q8" value="29" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi30">Auf einem Blütenstamm.</label>
                <input class="quizRadio" type="radio" id="qi30" name="q8" value="30" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi31">Unter der Erde.</label>
                <input class="quizRadio" type="radio" id="qi31" name="q8" value="31" required>
            </div>

            <div class="row">
                <label class="quizLable" for="qi32">Am Zweig eines Busches.</label>
                <input class="quizRadio" type="radio" id="qi32" name="q8" value="32" required>
            </div>
        </div>

        <br>
        <button style="width: 600px; font-size: 30px" type="submit">Fertig</button>
    </form>
</div>

<?php
if (! empty($_POST['q1'])){
    $q1=$_POST['q1'];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $q4=$_POST['q4'];
    $q5=$_POST['q5'];
    $q6=$_POST['q6'];
    $q7=$_POST['q7'];
    $q8=$_POST['q8'];
    $erg=0;

    if($q1==1)$erg++;

    if($q2==2)$erg++;

    if($q3==4)$erg++;

    if($q4==3)$erg++;
    
    if($q5==4)$erg++;
    
    if($q6==1)$erg++;
    
    if($q7==4)$erg++;

    if($q8==2)$erg++;
   
    echo '<script> alert("Du hast ' .$erg.' von 8 Fragen richtig beantwortet "); </script>';
}

?>

<?php include('footer.php'); ?>