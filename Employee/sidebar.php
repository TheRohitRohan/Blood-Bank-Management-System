<!DOCTYPE html>
<html lang="en" >
<head>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'><link rel="stylesheet" href="CSS/sidebar.css">
  <link rel="stylesheet" href="CSS/form.css">
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
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
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
          <li><a href="#">Add New Donor</a></li>
          <li><a href="#">View Donor</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="link_name">Blood Request</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Blood Request</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="link_name">Appointment Schedule </span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Appointment Schedule</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="#">
            <i class='bx bx-book-alt'></i>
            <span class="link_name"> Blood Inventory</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Blood Inventory</a></li>
          <li><a href="#">Add Blood Bag</a></li>
          <li><a href="#">View Inventory</a></li>
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
          <li><a href="#">Account </a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="http://placebeard.it/250/250" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name">Farid Vatani</div>
            <div class="job">Software Engineer</div>
          </div>
          <i class='bx bx-log-out'></i>
        </div>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
    </div>
    <div class="formcontainer">
      <div class="container">
        <div class="title">Registration</div>
        <form action="#">
          <div class="user__details">
            <div class="input__box">
              <span class="details">Full Name</span>
              <input type="text" placeholder="E.g: John Smith" required>
            </div>
            <div class="input__box">
              <span class="details">Username</span>
              <input type="text" placeholder="johnWC98" required>
            </div>
            <div class="input__box">
              <span class="details">Email</span>
              <input type="email" placeholder="johnsmith@hotmail.com" required>
            </div>
            <div class="input__box">
              <span class="details">Phone Number</span>
              <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="012-345-6789" required>
            </div>
            <div class="input__box">
              <span class="details">Password</span>
              <input type="password" placeholder="********" required>
            </div>
            <div class="input__box">
              <span class="details">Confirm Password</span>
              <input type="password" placeholder="********" required>
            </div>
      
          </div>
          <div class="gender__details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <input type="radio" name="gender" id="dot-3">
            <span class="gender__title">Gender</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span>Male</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span>Female</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span>Prefer not to say</span>
              </label>
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Register">
          </div>
        </form>
      </div>
    </div>
  </section>

  <script  src="JS/sidebar.js"></script>
</body>
</html>
