<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>simple hero section</title>
  <link rel="stylesheet" href="<?=STYLES?>/home.css" />
  <script src="<?=SCRIPTS?>/home.js" defer></script>
</head>
<body>
  <!-- Navbar  -->
  <header class="row container">
    <a href="#" class="logo row">
      <h1>MeetTrack</h1>
    </a>
    <div class="toggle_menu" onclick="toggleMenu();"></div>
    <nav class="navbar row">
      <ul class="row">
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About</a></li>
        <li><a href="<?= URL."/users/login" ?>">Sign up</a></li>
      </ul>
    </nav>
  </header>
  <!-- End Navbar -->

  <!-- Hero -->
  <section class="hero row container">
    <div>
      <h1>Let me track your <span class="meetings">meetings</span></h1>
      <p>Hurry up join our community now!</p>
      <a href="<?= URL."/users/register" ?>" class="hero-btn">Join now</a>
    </div>
    <div class="row">
      <img src="https://doodleipsum.com/700/outline?i=05efb0b9619f08e9688e051706e5ea48" alt="">
    </div>
  </section>
  <!-- End Hero -->
</body>
</html>