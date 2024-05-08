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
          <span class="link_name">Dashboard</span>
        </a>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
            <i class='bx bx-collection'></i>
            <span class="link_name">Employee</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Donor</a></li>
          <li><a href="Addemp.php">Add New Employee</a></li>
          <li><a href="viewemp.php">View Employee</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
            <i class='bx bx-collection'></i>
            <span class="link_name">Donor</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Donor</a></li>
          <li><a href="Adddonor.php">Add New Donor</a></li>
          <li><a href="viewdonor.php">View Donor</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="viewinventory.php">
            <i class='bx bx-book-alt'></i>
            <span class="link_name"> Blood Inventory</span>
          </a>
          
        </div>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
            <i class='bx bx-collection'></i>
            <span class="link_name">Report</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Report</a></li>
          <li><a href="dreport.php">Donation Report</a></li>
          <li><a href="rreport.php">Request Report</a></li>
        </ul>
      </li>
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
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="http://placebeard.it/250/250" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name"> Admin </div>
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