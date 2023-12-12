<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <title>Library Management System</title>
  </head>

  <body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Online Library</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>
    <div id="alertuser"></div>

    <div class="container my-3">
      <h1>Welcome to My Library</h1>
      <hr />
      <form id="mylibraryform">
        <div class="form-group">
          <label for="exampleInputEmail1">User Name</label>
          <input
            type="text"
            class="form-control"
            id="User-Name"
            aria-describedby="emailHelp"
          />
          <small id="emailHelp" class="form-text text-muted"
            >We'll never share your user name with anyone else.</small
          >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Book Name</label>
          <input type="text" class="form-control" id="Book-Name" />
        </div>
        <div class="form-group">
          <label for="bookType">Book Type</label>
          <div class="check-boxes my-3 mx-5">
            <div class="form-check p-2">
              <input
                class="form-check-input"
                type="radio"
                name="check-box"
                id="Fiction"
                value="Fiction"
              />
              <label class="form-check-label" for="Fiction"> Fiction </label>
            </div>
            <div class="form-check p-2">
              <input
                class="form-check-input"
                type="radio"
                name="check-box"
                id="Programing"
                value="Programing"
              />
              <label class="form-check-label" for="Programing">
                Programing
              </label>
            </div>
            <div class="form-check p-2">
              <input
                class="form-check-input"
                type="radio"
                name="check-box"
                id="Cooking"
                value="Cooking"
              />
              <label class="form-check-label" for="Cooking"> Cooking </label>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-outline-dark">Add Book</button>
      </form>
    
  </body>
</html>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "briandb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_POST){
$to=$_POST["to"];
$from=$_POST["from"];
$deparure=$_POST["deparure"];
$return=$_POST["return"];

$sql = "INSERT INTO `airlines` (`to`,`from`,`deparure`,`return`)
VALUES ('$to','$from','$deparure','$return')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
