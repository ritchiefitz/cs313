$(document).ready(function () {

	journalSettings();
	searchSettings();

	function searchSettings() {
		$('#search').bind('click', function () {
			var search = $("#q").val();
			var journal = $("#jid").val();

			if (search) {
				if ($(".has-error").length > 0) {
					$(".form-group").removeClass("has-error");
					$("#q").attr("placeholder", "");
				}

				$.ajax({
					method: "POST",
					url: "/assignments/iris/search.php",
					data: { q: search, jid: journal }
					}).done(function( msg ) {
						if ($(".matched-results").length > 0) {
							$(".matched-results").remove();
						}

						$(".sidebar").append(msg);
				});
			}
			else {
				$(".form-group").addClass("has-error");
				$("#q").attr("placeholder", "Value is required!");
			}
		});

		$(document).on('click', ".matched-result", function () {
			var pageNumber = ($(this).find(".number").text() * 1) + 2;
			$("#flipbook").turn("page", pageNumber);
		});

		$("#search-form").submit(function() {
			$("#search").click();
			return false;
		});
		
	}

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
		});
	}
});