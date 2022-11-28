<!DOCTYPE html>
<html lang="en">

<div id="id01" class="modal">
  
    <form class="modal-content animate">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      </div>
  
    
  
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>
  <span></span>
  <div id="id02" class="modal">
  
    <form class="modal-content animate">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      </div>
  
      <div class="container">
        <label for="email"><b>Email address</b></label>
        <input type="text" placeholder="Enter email address" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
  
        <label for="con-psw"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm Password" name="con-psw" required>
          
          
        <button type="submit">Sign up</button>
     
      </div>
  
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>
  <span></span>
  <div id="id03" class="modal">
  
    <form class="modal-content animate">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      </div>
  
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
  
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
          
        <button type="submit">Login</button>

      </div>