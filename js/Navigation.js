/* js/Navigation.js */

$('.mobile-navigation__toggle').click(function() {
		$('.mobile-navigation-panel').removeClass('hidden').addClass('slideLeft');
	});

$('.close-panel__toggle').click(function() {
		$('.mobile-navigation-panel').removeClass('slideLeft');
		setTimeout(function() {
			$(this).addClass('hidden');
		},3000);
});


