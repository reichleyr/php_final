<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cool Pet Photos</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Cool Pet Photos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="photos.php">Pics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload2.php">Upload</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Manage</a>
          </li>


        </ul>
      </div>
    </nav>
    <div class="container-fluid">

<div class="row d-flex justify-content-center">


    <div class="intro col-12 text-center justify-content-center">
      <h1>Show off your cool pet photos</h1>
    </div>
    </div>
    <table>
    <?php
        $query = "SELECT * FROM pets;";
      $result = mysqli_query($link, $query);
      echo "<tr>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Address</th>
               <th>State</th>
             </tr>";
      while ($row = mysqli_fetch_assoc($result))
      {
        echo"<tr>";
          echo "<td>" . $row['firstName'] 	. "</td>";
          echo "<td>" . $row['lastName'] 	    . "</td>";
          echo "<td>" . $row['petname'] . "</td>";
          echo "<td>" . $row['photoname']         . "</td>";
        echo"</tr>";
      }
    ?>






    </div>
    <div class="row d-flex justify-content-center">


    <footer class="col-12 text-left">
      <h3>Contact us at the following</h3>
      <ul>
        <li>Email: fake@pets.com</li>
        <li>Phone: 123-456-7890</li>
        <li>Address: 123 Fake Street</li>
        <li>Hours: 1am-3pm</li>
      </ul>
    </footer>
    </div>
      </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
