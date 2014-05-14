(function ($) {


	var aeFancySelect = function () {

		$('.gform_wrapper .add-fancy-select').find('select').filter(function (i) {
			var $theSelect = $(this);

			$theSelect.each(function () {
				var elementID = this.id;
				$theSelect.addClass('add-fancy');
				$('.add-fancy').fancySelect();
				$('.add-fancy').trigger('update');

			});


		});
	};
	$(document).ready(function () {
		aeFancySelect();
		$('.trigger').addClass('select-gray');
		$('.trigger').click(function () {
			$('.trigger').removeClass('select-gray');
		});

	});

})(jQuery);
