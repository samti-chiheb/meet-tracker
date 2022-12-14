<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- boxicon cdn link -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <!-- styles css -->
  <link rel="stylesheet" href="../public/styles/navbar.css">
  <link rel="stylesheet" href="../public/styles/table.css">
  <script src="../public/scripts/navbar.js" defer></script>
</head>
<body>
  <div class="side-navbar">
    <div class="logo-container">
      <div class="logo">
        <i class="bx bxl-medium-square"></i>
        <div class="logo-name">MeetTrack</div>
      </div>
      <i class="bx bx-menu navbar-btn" id="navbar_btn"></i>
    </div>
    <ul class="nav-list">
      <li class="nav-item search-bar">
        <i class="uil uil-search"></i>
        <input class="text-field" type="text" placeholder="Search...">
        <span class="tooltip">Search</span>
      </li>
      <li class="nav-item">
        <a href="http://www.google.com">
          <i class="uil uil-estate"></i>
          <span class="link-text">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
      <li class="nav-item">
        <a href="#">
          <i class="uil uil-chart"></i>
          <span class="link-text">Dashboard</span>
        </a>
        <span class="tooltip">Dashborad</span>
      </li>
      <li class="nav-item">
        <a href="#">
          <i class="uil uil-notes"></i>
          <span class="link-text">Notes</span>
        </a>
        <span class="tooltip">Notes</span>
      </li>
      <li class="nav-item">
        <a href="#">
          <i class="uil uil-notebooks"></i>
          <span class="link-text">Appointments</span>
        </a>
        <span class="tooltip">Appointments</span>
      </li>
      <li class="nav-item">
        <a href="#">
          <i class="uil uil-calender"></i>
          <span class="link-text">Calender</span>
        </a>
        <span class="tooltip">Calender</span>
      </li>
      <li class="nav-item">
        <a href="#">
          <i class="uil uil-comment-info-alt"></i>
          <span class="link-text">Information</span>
        </a>
        <span class="tooltip">Information</span>
      </li>
      <li class="nav-item">
        <a href="#">
          <i class="uil uil-signout"></i>
          <span class="link-text">Sign out</span>
        </a>
        <span class="tooltip">Sign out</span>
      </li>
    </ul>
    <div class="profile-container">
      <div class="profile">
        <div class="profile-details">
          <img src="../public/img/avatar.webp" alt="">
          <div class="profile-info">
            <div class="profile-name">SAMTI Chiheb</div>
            <div class="profile-job">Kotline Developer</div>
          </div>
        </div>
        <i class="uil uil-signout logout" id="log_out"></i>
      </div>
    </div>
  </div>
  <div class="home-container">
    <h1>Meet Track</h1>
    <hr>

    <?php include_once "table.php" ?>
  </div>
</body>
</html>