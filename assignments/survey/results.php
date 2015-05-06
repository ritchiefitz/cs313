<?php
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
		?>
		<div class="row category">
			<div class="col-sm-12">
				<h3><?php echo $category_title; ?></h3>
				<?php foreach ($category as $option => $votes): ?>
					<div class="choice">
						<div class="option"><?php echo $option; ?>: </div>
						<div class="votes"><?php echo $votes; ?></div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php
	}
?>
<?php include (SITE_ROOT . "/assignments/survey/modules/header.php"); ?>
	<div class="content">
		<h2>Raw Results</h2>
		<?php display_results($genderQues, "Gender"); ?>
		<?php display_results($ageQues, "Age"); ?>
		<?php display_results($oftenQues, "Often"); ?>
		<?php display_results($remakeQues, "Remake"); ?>
		<?php display_results($theaterQues, "Theater"); ?>
		<?php display_results($movieQues, "Movie"); ?>
	</div>
<?php include (SITE_ROOT . "/assignments/survey/modules/footer.php"); ?>