<!DOCTYPE html>
<html lang="en" >
<head>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'>
  <link rel="stylesheet" href="CSS/sidebar.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-pyramid'></i>
      <span class="logo_name">Blood Bank</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashbord.php">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Previous Donation</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <li>
        <a href="appointment.php">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Book Appointment</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li> 
      <!-- <li>
        <div class="icon-link">
          <a href="prevdonation.php">
            <i class='bx bx-collection'></i>
            <span class="link_name">Previous Donation</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
      </li> -->
      <li>
        <div class="icon-link">
          <a href="#">
            <i class='bx bx-plug'></i>
            <span class="link_name">Setting</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Setting</a></li>
          <li><a href="Profile.php">Account </a></li>
        </ul>
      </li>
      <?php
        error_reporting(0);
        session_start();
        $name=$_SESSION['name'];
        // $name='Jane Smith';
      ?>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="http://placebeard.it/250/250" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name"> <?php echo $name; ?> </div>
            <!-- <div class="job"><?php //echo $post; ?></div>   -->
          </div>
          <a href="logout.php"><i class='bx bx-log-out'></i></a>
        </div>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
    </div>