$(document).ready(function () {

	journalSettings();

	function journalSettings() {
		$("#flipbook").turn({
			width: 1096,
			height: 750,
			autoCenter: true
		});

		$('body').keyup(function (event) {
			if (event.keyCode == 37) {
				$("#flipbook").turn('previous');
			}
			else if (event.keyCode == 39) {
				$("#flipbook").turn('next');
			}
		console.log(event.keyCode);
		});
	}
});