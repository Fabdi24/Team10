<!DOCTYPE html>
<html lang="en">

<div id="id01" class="modal">
  
  
  
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>
  <span></span>
  <div id="id03" class="modal">
  
    <form class="modal-content animate" method="post" action ="auth.php">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      </div>
  
      <div class="container">
        <label for="uname"><b>Email</b></label>
        <input type="text" placeholder="Email Address" name="email" required>
  
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" required>
          
        <button type="submit">Login</button>

      </div>
</form>