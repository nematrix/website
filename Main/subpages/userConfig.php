<!doctype html>
<html lang="en">
<head>
   <title>HomeLandings</title>
   	<link rel="stylesheet" type="text/css" href="substyle/userconfig.css" media="all" />
    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="substyle/css/all.css">
</head>
<body>
  <!-- Page header -->
  <header class="nav_header">
    <h1 class="logo">
      <img src = "image/company.jpg" placeholder="thumbail" />
      <input type="search" placeholder="search" />
      <button  type="submit" class="search_btn">
        <i class="fa fa-search"></i>
      </button>
    </h1>
    <nav class="Menu">
      <ul class="nav_icons">
        <li class="sym_icons">
        <a href="../index.php" class="link_icon">
          <i class="fa fa-newspaper"></i>
        </a>
      </li>
        <li class="sym_icons">
          <a href="Shops.html" class="link_icon">
            <i class="fa fa-warehouse"></i>
          </a>
      </li>
        <li class="sym_icons">
          <a href="ads.html" class="link_icon">
            <i class="fa fa-ad"></i>
          </a>
        </li>
        <li class="sym_icons">
          <a href="Progress.html" class="link_icon">
            <i class="fa fa-chart-line" class="link_icon"></i>
          </a>
        </li>
        <li class="sym_icons">
          <a href="notification.php" class="link_icon">
            <i class="fa fa-bell"></i>
          </a>
        </li>
        <li class="sym_icons">
          <a href="activeUsers.php" class="link_icon">
            <i class="fa fa-user"></i>
          </a>
        </li>
        <li class="sym_icons">
          <a href="userConfig.php" class="link_icon">
            <i class="fa fa-cogs"></i>
          </a>
        </li>
      </ul>
    </nav>
    </nav>
  </header>
  <body>
    <main class="user_config">
      <!--user settings -->
      <section class="user_settings">
          <article class="Generaly_settings">
            <span class="user">User settings<i class="fa fa-user-cog"></i></span>
            <ul class="user_profile">
              <li>Edit shop name<i class="fa fa-user-edit"></i></li>
              <li>Edit product name<i class="fa fa-edit"></i></li>
              <li>Change phone<i class="fa fa-phone"></i></li>
              <li>Change Location<i class="fa fa-map-marker-alt"></i></li>
            </ul>
          </article>
          <!--privacy settings -->
          <article class="privacy_settings">
            <span class="privacy">Privacy<i class="fa fa-user-shield"></i></span>
            <ul class="privacy_key">
              <li>Edit keys<i class="fa fa-key"></i></li>
              <li>Lock type<i class="fa fa-lock"></i></li>
            </ul>
          </article>
          <!--Graph_settings-->
          <article class="Graph_settings">
            <span class="Graph">Graph settings<i class="fa fa-chart-line"></i></span>
          <ul class="Graph_options">
            <li>Graph colors <i class="fa fa-eye-dropper"></i></li>
            <li>Graph type<i class="fa fa-chart-bar"></i></li>
          <ul/>
          </article>
          <!--ads_settings-->
          <article class="ads_settings">
              <span class="ads_controller">Ads<i class="fa fa-ad"></i></span>
            <ul class="ads">
              <li>Duration<i class="fa fa-clock"></i></li>
              <li>Quality<i class="fa fa-star"></i></li>
            <ul/>
          </article>
      </section>
      <!--user_Logout-->
      <section class="user_Logout">
          <span class="log">Logout<i class="fa fa-power-off"></i></span>
        <ul class="user_out">
          <li class="active _off">
            <a href="../../index.php">
              Logout<i class="fa fa-door-closed"></i>
            </a>
          </li>
        <ul>
      </section>
    </main>
  </body>
</html>
