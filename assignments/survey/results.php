<?php
	session_start();

	define(SITE_ROOT, $_SERVER['DOCUMENT_ROOT']);
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$survey = [];
		$survey['gender'] = $_POST["gender"];
		$survey['age'] = $_POST["age"];
		$survey['often'] = $_POST["often"];
		$survey['remake'] = $_POST["remake"];
		$survey['theater'] = $_POST["theater"];
		$survey['movie'] = $_POST["movie"];

		write_survey($survey);
	}

	$results = read_surveys();

	$genderQues = [];
	$ageQues = [];
	$oftenQues = [];
	$remakeQues = [];
	$theaterQues = [];
	$movieQues = [];

	foreach ($results as $choice => $votes) {

		switch ($choice) {
			case 'Male':
			case 'Female':
				$genderQues[$choice] = $votes;
				break;
			case '17':
			case '18':
			case '19':
			case '20':
			case '21':
			case '22':
			case '23':
			case '24':
			case '25':
			case '26':
			case '27':
			case '28':
			case '29':
			case '30':
			case '31':
				$ageQues[$choice] = $votes;
				break;
			case 'Once or twice a week.':
			case 'Once or twice a month.':
			case 'Once or twice every few months.':
			case 'Once or twice a year.':
				$oftenQues[$choice] = $votes;
				break;
			case 'Yes':
			case 'No':
				$remakeQues[$choice] = $votes;
				break;
			case 'Fat Cats':
			case 'Paramount 5':
			case 'Teton Vu Drive In':
			case 'Edwards Cinema':
				$theaterQues[$choice] = $votes;
				break;
			case 'Avengers':
			case 'Star Wars VII':
			case 'Jurassic World':
			case 'Inside Out':
			case 'ANT-MAN':
			case 'Fantastic Four':
				$movieQues[$choice] = $votes;
				break;
			case '':
				break;
			
			default:
				echo "Include this in case statements - " . $choice;
				break;
		}
	}

	function write_survey($survey) {
		$file = fopen(SITE_ROOT . "/assignments/survey/survey-results.csv", "a");
		fputcsv($file, $survey);
		fclose($file);
	}

	function read_surveys() {
		$read = fopen(SITE_ROOT . "/assignments/survey/survey-results.csv", "r");

		$results = [];
		while (($data = fgetcsv($read)) !== FALSE) {
			foreach ($data as $value) {
				if (array_key_exists($value, $results)) {
					$results[$value] += 1;
				}
				else {
					$results[$value] = 1;
				}
			}
		}

		fclose($read);

		return $results;
	}

	function display_results($category, $category_title) {
		arsort($category);
		$count = 1;
		?>
		<div class="row category">
			<div class="col-sm-12">
				<table class="table table-striped">
					<caption><?php echo $category_title; ?> Rank</caption>
					<thead>
						<tr>
							<th>Rank</th>
							<th>Option</th>
							<th>Votes</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($category as $option => $votes): ?>
						<tr>
							<td><?php echo $count; ?></td>
							<td><?php echo $option; ?></td>
							<td><?php echo $votes; ?></td>
						</tr>
					<?php
						$count += 1;
						endforeach;
					?>
					</tbody>
				</table>
			</div>
		</div>
		<?php
	}
?>
<?php include (SITE_ROOT . "/assignments/survey/modules/header.php"); ?>
	<div class="row content">
		<div class="col-sm-12">
			<div class="col-sm-8">
				<h2>Raw Results</h2>
				<div class="col-sm-6">
					<?php display_results($genderQues, "Gender"); ?>
					<?php display_results($ageQues, "Age"); ?>
					<?php display_results($oftenQues, "How often?"); ?>
				</div>
				<div class="col-sm-6">
					<?php display_results($remakeQues, "Remake"); ?>
					<?php display_results($theaterQues, "Theater"); ?>
					<?php display_results($movieQues, "Movie"); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<h2>Result Meanings</h2>
				<p><strong><?php echo array_search(max($genderQues),$genderQues); ?>'s</strong> are more likely to go see movies.</p>
				<p>Generally people <strong><?php echo array_search(max($ageQues),$ageQues); ?> years old</strong> are more likely to go see movies.</p>
				<p>Generally people go to the movies <strong><?php echo strtolower(array_search(max($oftenQues),$oftenQues)); ?></strong></p>
				<p>Generally people believe it is a <strong><?php echo (array_search(max($remakeQues),$remakeQues) == "Yes") ? "good" : "bad"; ?> idea to remake old movies.</strong></p>
				<p>People are more likely to go to <strong><?php echo array_search(max($theaterQues),$theaterQues); ?></strong> to see movies.</p>
				<p>The movie that everyone is most excited to see is...</p>

				<?php 
					$winning_movie = array_search(max($movieQues),$movieQues);
					$img_path = 'images/' . str_replace(' ', '-', strtolower($winning_movie)) . '.jpg';
				?>

				<p class="movie-title text-center"><?php echo $winning_movie; ?></p>
				<img class="movie-poster" src="<?php echo $img_path; ?>" alt="">
			</div>
		</div>
	</div>
<?php include (SITE_ROOT . "/assignments/survey/modules/footer.php"); ?>