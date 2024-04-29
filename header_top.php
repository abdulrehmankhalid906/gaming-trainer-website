<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="logo/stronghold_hd.png" alt="Expert Here" height="60"><span style="font-family:calibery;  font-weight:52px;"> Expert Here<span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="download.php">Download</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="about.php">About Us</a>
        </li>

        <li class="nav-item">
        <?php
          if(isset($_SESSION['name'])){
          ?>
            <a class="nav-link" href="all_requests.php" id="bt-requests">Requests</a>
          <?php
          }
          else{
            ?>
            <script>
              $(document).ready(function(){
                $("#bt-requests").hide();
              });
            </script>
            <?php
          }
        ?>
        </li>

        <li class="nav-item">
        <?php
          if(isset($_SESSION['name'])){
          ?>
            <a class="nav-link" href="post.php" id="bt-post">Post</a>
          <?php
          }
          else{
            ?>
            <script>
              $(document).ready(function(){
                $("#bt-post").hide();
              });
            </script>
            <?php
          }
        ?>
        </li>

        <li class="nav-item">
        <?php
          if(!isset($_SESSION['name'])){
          ?>
            <a class="nav-link" href="login.php" id="bt-login">Admin Login</a>
          <?php
          }
          else{
            ?>
            <script>
              $(document).ready(function(){
                $("#bt-login").hide();
              });
            </script>
            <?php
          }
        ?>
        </li>

        <li class="nav-item">
        <?php
          if(isset($_SESSION['name'])){
          ?>
            <a class="nav-link" href="logout.php" id="bt-logout">Logout</a>
          <?php
          }
          else{
            ?>
            <script>
              $(document).ready(function(){
                $("#bt-logout").hide();
              });
            </script>
            <?php
          }
        ?>
        </li>
      </ul>
    </div>
  </div>
</nav>