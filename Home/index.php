<?php
include "../common1.txt";
?>	
<li class="active"><a href="http://fevery.net/">Home</a></li>
<?php
include "../common2.txt";
?>	
<div class="container">
			<div class="jumbotron text-center">
				<div style="font-size:24px">
					<br>
					<p>
						Welcome to my personal site. Use the navigation bar in the upper right to select a page. Or just play with this widget below.
					</p>
					<br>
					<h2>Random Visitor Comment:</h2>
					<br>
					<p id="quote"></p><p id="author"></p>
					<button onclick="GenerateRandomQuote()">Another Random Comment</button>
					<br><br>
    <form method="post" action="submitquote.php">
        <label for="quote">Submit your own comment:</label><br>
        <textarea id="quote" name="quote" rows="4" cols="50" required></textarea><br>

        <label for="author">Your name:</label><br>
        <input type="text" id="author" name="author" required><br>
		<br>
        <button type="submit">Submit</button>
    </form>
        			<script type="text/javascript" src="../HomeTool.js"></script>


					<ul>
					</ul>
				</div>
			</div>
		</div>
<?php
include "../common3.txt";
?> 