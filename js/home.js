
	var iframe = $('#otmsizzle')[0],
	player = $f(iframe);

// When the player is ready, add listeners for pause, finish, and playProgress
player.addEvent('ready', function() {
	status.text('ready');

	player.addEvent('pause', onPause);
	player.addEvent('finish', onFinish);
	player.addEvent('play', onPlay);
});


	$('.button').bind('click', function() {
		player.api('play');
		$('.video-overlay').fadeOut(1000);
		$('.overlay').fadeOut(1000);
		$('.button').fadeOut(1000);
	});


	$('.video-overlay').click(function() {
	});
