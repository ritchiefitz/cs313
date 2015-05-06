<?php
	session_start();
	define(SITE_ROOT, $_SERVER['DOCUMENT_ROOT']);

	include (SITE_ROOT . "/assignments/survey/modules/header.php");
?>

	<div class="row">
		<div class="col-sm-4 content">
			<h2>Survey</h2>
			<form action="results.php" method="post">
				<label for="gender">Gender:</label> <br>
				<input type="radio" name="gender" value="Male"> Male <br>
				<input type="radio" name="gender" value="Female"> Female <br>
				<br>
				<label for="age">Age:</label>
				<select name="age" id="age">
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				<br>
				<br>
				<label for="often">How often do you see movies in the theatre?</label> <br>
				<input type="radio" name="often" value="Once or twice a week."> Once or twice a week. <br>
				<input type="radio" name="often" value="Once or twice a month."> Once or twice a month. <br>
				<input type="radio" name="often" value="Once or twice every few months."> Once or twice every few months. <br>
				<input type="radio" name="often" value="Once or twice a year."> Once or twice a year. <br>
				<br>
				<label for="remake">Are re-makes of old films a good idea?</label> <br>
				<input type="radio" name="remake" value="Yes"> Yes <br>
				<input type="radio" name="remake" value="No"> No <br>
				<br>
				<label for="theater">Preferred Theater: </label> <br>
				<input type="radio" name="theater" value="Fat Cats"> Fat Cats <br>
				<input type="radio" name="theater" value="Paramount 5"> Paramount 5 <br>
				<input type="radio" name="theater" value="Teton Vu Drive In"> Teton Vu Drive In <br>
				<input type="radio" name="theater" value="Edwards Cinema"> Edwards Cinema <br>
				<br>
				<label for="movie">Which movie are you most excited to see?</label> <br>
				<input type="radio" name="movie" value="Avengers"> Avengers <br>
				<input type="radio" name="movie" value="Star Wars VII"> Star Wars VII <br>
				<input type="radio" name="movie" value="Jurassic World"> Jurassic World <br>
				<input type="radio" name="movie" value="Inside Out"> Inside Out <br>
				<input type="radio" name="movie" value="ANT-MAN"> ANT-MAN <br>
				<input type="radio" name="movie" value="Fantastic Four"> Fantastic Four <br>
				<br>
				<input type="submit" class="btn btn-primary" value="Submit">
				<span class="survey-choice">OR</span>
				<a href="results.php" class="btn btn-primary">View Results</a>
			</form>
		</div>
		<div class="col-sm-8 sidebar">
			<h2>Need Help Deciding?</h2>
			<div class="row">
				<div class="col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/JAUoeqvedMo" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/ngElkyQ6Rhs" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/RFinNxS5KN4" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/_MC3XuMvsDI" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/pWdKf3MneyI" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/_rRoD28-WgU" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include (SITE_ROOT . "/assignments/survey/modules/footer.php"); ?>