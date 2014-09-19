  <div id="BoxBody">

    <div class="Bar2">
      <div class="bartitle">Registration Page</div>
    </div>
    <div class="MainBody">
      <center>
      <br /><br /><br /><br />
      <form action="models/regi_db.php" method="post">
        <input class="textbox" type="text" name="uname"  value="USERNAME" required onblur="if (this.value == '') {this.value = 'USERNAME';}"
 onfocus="if (this.value == 'USERNAME') {this.value = '';}" /><br>
        <input class="textbox" type="password" name="pass" placeholder="Password" required /><br>
        <input class="textbox" type="password" name="pass2" placeholder="Password" required /><br>
        <input class="textbox" type="email" name="email" placeholder="Email" required /><br>
        <br><br>
        <input class="loginbutton" type="submit" value="register">
      </form>
      </center>

      <br><br>
    </div>
  </div>
</div>