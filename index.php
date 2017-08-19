<html>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="index.css" type="text/css">
<div class="body-content">

<div class = "Logos">
	<img src="teamLogo.png" alt="HTML5 Icon" align = "left" width="128" height="128">
	<img src="SRMLogo.png" alt="HTML5 Icon" align = "right" width="128" height="128">
	<center><h1>Register</h1></center>
	<center><h2>#DriveTheHybrid</h2></center>
</div>
  <div class="module">
    <form class="form" action="index.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
	<input type="text" placeholder="Register Number" name="regno" required />
	<input type="text" placeholder="Address" name="address" required />
	
	<input type="number" placeholder="Phone Number" name="phnno" required />
		<input type="number" placeholder="Whatsapp Number" name="whatsappno" />
	<div class="avatar"><label>Upload your photograph: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</html>