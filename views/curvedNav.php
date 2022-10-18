<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meet track</title>
  <link rel="stylesheet" href="../public/styles/curvedNav.css">
  <link rel="stylesheet" href="../public/styles/table.css">
  <!-- icon -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="../public/scripts/curvedNav.js" defer></script>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="nav-item active-nav">
        <b></b>
        <b></b>
        <a href=<?= URL?> class="nav-link">
          <span class="icon">
            <i class="uil uil-estate"></i>
          </span> 
          <span class="link-text">Home</span>
        </a>
      </li>
      <li class="nav-item">
        <b></b>
        <b></b>
        <a href=<?= URL."/recruiters"?> class="nav-link">
          <span class="icon">
            <i class="uil uil-chart"></i>
          </span> 
          <span class="link-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <b></b>
        <b></b>
        <a href="#" class="nav-link">
          <span class="icon">
            <i class="uil uil-notes"></i>
          </span> 
          <span class="link-text">Notes</span>
        </a>
      </li>
      <li class="nav-item">
        <b></b>
        <b></b>
        <a href="#" class="nav-link">
          <span class="icon">
            <i class="uil uil-notebooks"></i>
          </span> 
          <span class="link-text">Appointments</span>
        </a>
      </li>
      <li class="nav-item">
        <b></b>
        <b></b>
        <a href="#" class="nav-link">
          <span class="icon">
            <i class="uil uil-calender"></i>
          </span> 
          <span class="link-text">Calender</span>
        </a>
      </li>
      <li class="nav-item">
        <b></b>
        <b></b>
        <a href="#" class="nav-link">
          <span class="icon">
            <i class="uil uil-comment-info-alt"></i>
          </span> 
          <span class="link-text">Information</span>
        </a>
      </li>
      <li class="nav-item">
        <b></b>
        <b></b>
        <a href="#" class="nav-link">
          <span class="icon">
            <i class="uil uil-signout"></i>
          </span> 
          <span class="link-text">sign out</span>
        </a>
      </li>
    </ul>
  </nav>
  <div class="toggle">
    <i class="uil uil-bars open"></i>
    <i class="uil uil-times close"></i>
  </div>
  <main class="main-container">
    <h1> Meet Track </h1>
    <hr>
    <?= $content ?>
  </main>
</body>
</html>