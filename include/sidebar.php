<div id="wrapper">
  <center><a href="?p=index"><div id="logo"></div></a></center>
<div id="position">
<aside>
  <?php
    if ($_SESSION['username'] == "")
    { ?>
      <div class="SideTools">
        <div class="SideTitle">
          Login Form
        </div>
        <div class="SideBody">
          <form action="models/check_login.php" method="post">
            <input class="uname" type="text" name="uname" value="USERNAME" required onblur="if (this.value == '') {this.value = 'USERNAME';}"
   onfocus="if (this.value == 'USERNAME') {this.value = '';}" /><br>
            <input class="pass" type="password" name="pass" value="PASSWORD" required onblur="if (this.value == '') {this.value = 'PASSWORD';}"
   onfocus="if (this.value == 'PASSWORD') {this.value = '';}" /><br>
            <input class="loginbutton" type="submit" value="Login">
          </form>
        </div>
      </div>
    <?php
    }else{ ?>
      <div class="SideTools">
        <div class="SideTitle">
          Account information
        </div>
        <div class="SideBody"><center>
          <p style="margin-top:0px; padding-top:5px; color:#5f4a29;">Welcome <b style="color:#1fca29;"><?php echo $_SESSION['username'] ?></b></p></center>
          <div id="accinfo">
            Expanion: WotLK<br />
            Account Rank: Player<br />
            Account Status: Active<br />
            Memeber Since: 2014-09-18<br />
            Vote Points: 0<br />
            Donation Points 0<br />
          </div>
        </div>
      </div>
    <?php } ?>
    
    <div class="SideTools">
      <div class="SideTitle">
        Menu
      </div>
      <div class="SideBody">
        <div class="tool">
          <?php
            if ($_SESSION['username'] == "")
            { ?>
              <a href="?p=register">Register</a>
          <?php
            }else{ ?>
              <a href="models/logout.php">Logout</a>
              <a href="#">Vote</a>
              <a href="#">Donate</a>
              <a href="#">Shop</a>
            <?php } ?>
          <a href="#">Armory</a>
          <a href="?p=info">Connection Guide</a>
          <a href="#">Changelog</a>
          <a href="#">Bugtracker</a>
          <a href="#">Downloads</a>
          <a href="#">Staff List</a>
        </div>
      </div>
    </div>
</aside>