<!--Sliding account-->

	$(document).ready(function () {
 
		$('.vert-nav li').hover(
			function() {
				$('ul', this).slideDown(110);
				},
			function() {
				$('ul', this).slideUp(110);
   		});
	});

 <!--/ Sliding account -->


<!--Sliding forms-->


			$('.b-menu SPAN').click(function() {
				if ($(this).hasClass('cur')) return;
				$('.b-menu .cur').removeClass('cur');
				$(this).addClass('cur');
				$('.b-body').hide();
				$('.b-body-' + $(this).data('tab')).show();
				document.location.hash = '#' + $(this).data('tab');
			});
			$(function() {
				var t = document.location.hash.toString().substr(1);
				$('.b-menu SPAN[data-tab="' + t + '"]').click();
			});


 <!--/ Sliding forms -->
