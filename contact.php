<?php include('header.php'); ?>
<?php include('nav.php'); ?>

<div  class="content">
<form action="contact.php" method="post">

  <div class="elem-group">
    <label class="labelStyle" for="name">Name</label>

    <input type="text" id="name" name="name" placeholder="Vorname Nachname" pattern=[A-Z\sa-z]{3,20} required>
  </div>

  <div class="elem-group">
    <label class="labelStyle" for="email">E-Mail Adresse</label>
    
    <input type="email" id="email" name="email" placeholder="john.doe@email.com" required>
  </div>

  <div class="elem-group">
    <label class="labelStyle" for="selection">Frage zum Thema</label>
    <select id="selection" name="thema" required>
        <option value="allgemein">Allgemein</option>
        <option value="fruchte">Früchte</option>
        <option value="technisch">Technisch</option>
    </select>
  </div>

  <div class="elem-group">
    <label class="labelStyle" for="title">Überschrift/Titel</label>

    <input type="text" id="title" name="title" required placeholder="Frage zum Thema...">
  </div>

  <div class="elem-group">
    <label class="labelStyle" for="message">Ihre Nachricht</label>

    <textarea id="message" name="message" placeholder="Erläutern Sie ihr Anliegen." required></textarea>
  </div>

  <button type="submit">Nachricht senden</button>
</form>


<?php 

if (! empty($_POST['name'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $thema=$_POST['thema'];
    $title=$_POST['title'];
    $message=$_POST['message'];

    echo '<script> alert("Anfrage wurde erfolgreich gesendet"); </script>';
}


?>

</div>






<?php include('footer.php'); ?>