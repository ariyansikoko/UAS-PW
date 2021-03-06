<?php
  session_start();
  include "koneksi.php";
  if (!isset($_SESSION['username'])) {
    header ("location:login.php");
  }
  if (isset($_SESSION["username"])) {
    $username = $_SESSION['username'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="styles.css">
  <script src="script.js" defer></script>
  <title>Virtual Piano</title>
</head>

<body>
  <nav class="navbar navbar-dark sticky-top" style="background-color: black;">
    <span class="navbar-brand mx-auto"><img src="logo.jpg" class="d-inline-block align-top">Virtual Piano</span>
    <span class="navbar-brand"><a href="aksi_logout.php">Log Out</a></span>;
  </nav>

  <div class="piano">
    <div data-note="C" class="key white"></div>
    <div data-note="C#" class="key black"></div>
    <div data-note="D" class="key white"></div>
    <div data-note="D#" class="key black"></div>
    <div data-note="E" class="key white"></div>
    <div data-note="F" class="key white"></div>
    <div data-note="F#" class="key black"></div>
    <div data-note="G" class="key white"></div>
    <div data-note="G#" class="key black"></div>
    <div data-note="A" class="key white"></div>
    <div data-note="A#" class="key black"></div>
    <div data-note="B" class="key white"></div>
  </div>

  <div class="alert alert-dark fixed-bottom" role="alert">
    Welcome to Virtual Piano! You can click the piano or type on your keyboard to play the notes.
  </div>
  
  <audio id="C" src="notes/C.mp3"></audio>
  <audio id="C#" src="notes/Db.mp3"></audio>
  <audio id="D" src="notes/D.mp3"></audio>
  <audio id="D#" src="notes/Eb.mp3"></audio>
  <audio id="E" src="notes/E.mp3"></audio>
  <audio id="F" src="notes/F.mp3"></audio>
  <audio id="F#" src="notes/Gb.mp3"></audio>
  <audio id="G" src="notes/G.mp3"></audio>
  <audio id="G#" src="notes/Ab.mp3"></audio>
  <audio id="A" src="notes/A.mp3"></audio>
  <audio id="A#" src="notes/Bb.mp3"></audio>
  <audio id="B" src="notes/B.mp3"></audio>
  
</body>
</html>