<?php
include "../common1.txt";
?>	
<li class="active"><a href="http://fevery.net/">Home</a></li>
<?php
include "../common2.txt";
?>	
<link rel="stylesheet" href="../styles.css" />
<link rel="stylesheet" href="../styles2.css" />
<div class="container">
			<div class="jumbotron text-center">
				<div style="font-size:24px">
					<br>
					<h1>FEVERY.NET</h1>
					<form action="" class="border">
        <h1 class="title">Contact Form</h1>
        <label for="uname"  class="label">Name:</label>
        <input type="text" id="uname" name="uname" class="input"><br><br>
        <label for="email"  class="label">Email:</label>
        <input type="email" id="email" name="email" class="input"><br><br>
        <label for="messagebox"  class="label">Message:</label>
        <textarea id="messagebox" name="messagebox" rows="4" cols="30"></textarea>
        <br><br><br><br><br>
        <legend class="label">Would you like a copy mailed to you?</legend>
        <input type="radio" id="yes">
        <label for="yes">Yes send it</label><br>
        <input type="radio" id="no">
        <label for="no">No thank you</label><br>
        <br>
        <label for="date" class="label">Date:</label>
        <input type="date" id="date" class="input">
        <br><br>
        <input type="submit" value="Submit" class="btn-primary">
        <input type="reset" value="Reset" class="btn-secondary">
      </form>
				</div>
        
			</div>
		</div>
<?php
include "../common3.txt";
?> 