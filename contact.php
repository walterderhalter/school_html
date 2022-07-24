<?php include('header.php'); ?>
<?php include('nav.php'); ?>

<div  class="content">
<form action="contact.php" method="post">

  <div class="elem-group">
    <label for="name">Name</label>

    <input type="text" id="name" name="name" placeholder="Vorname Nachname" pattern=[A-Z\sa-z]{3,20} required>
  </div>

  <div class="elem-group">
    <label for="email">E-Mail Adresse</label>
    
    <input type="email" id="email" name="email" placeholder="john.doe@email.com" required>
  </div>

  <div class="elem-group">
    <label for="department-selection">Frage zum Thema</label>
    <select id="department-selection" name="thema" required>
        <option value="allgemein">Allgemein</option>
        <option value="fruchte">Früchte</option>
        <option value="technisch">Technisch</option>
    </select>
  </div>

  <div class="elem-group">
    <label for="title">Überschrift/Titel</label>

    <input type="text" id="title" name="email_title" required placeholder="Frage zum Thema...">
  </div>

  <div class="elem-group">
    <label for="message">Ihre Nachricht</label>

    <textarea id="message" name="visitor_message" placeholder="Erläutern Sie ihr  Anliegen." required></textarea>
  </div>

  <button type="submit">Nachricht senden</button>
</form>


<?php 

if (! empty($_POST['name'])){
    $name=$_POST['name'];
    echo $name;
}


?>

</div>






<?php include('footer.php'); ?>