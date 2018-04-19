


<!doctype html>
<html>
     <head>
          <meta charset="UTF-8" />
     </head>
     <body>

<form class="form-horizontal" role="form" method="POST" action="">

 <div class="form-group">
    <label for="inputimie" class="col-sm-2 control-label">Imię</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="imie" placeholder="Podaj imię" required>
    </div>

    <div class="form-group">
    <label for="inputnazwisko" class="col-sm-2 control-label">Nazwisko</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nazwisko" placeholder="Podaj nazwisko" required>
    </div>

  <div class="form-group">
    <label for="inputemail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" placeholder="Podaj adres email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputNIP" class="col-sm-2 control-label">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nip" placeholder="numerNIP">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" value="Submit" class="btn btn-default">Wyślij</button>
      
    </div>
  </div>
</form>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
    $to = "seti38@gmail.com"; 
    $from = $_POST['email']; 
    $first_name = $_POST['imie'];
    $last_name = $_POST['nazwisko'];
    $nip = $_POST['nip'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";

    

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$headers);
    mail($from,$subject2,$headers2); 
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    
    }
?>