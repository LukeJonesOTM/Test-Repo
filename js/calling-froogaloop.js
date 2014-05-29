var iframe = $('#otmsizzle')[0],
    player = $f(iframe),
    status = $('.status');

// When the player is ready, add listeners for pause, finish, and playProgress
player.addEvent('ready', function() {
    status.text('ready');
    
    player.addEvent('pause', onPause);
    player.addEvent('finish', onFinish);
    player.addEvent('playProgress', onPlayProgress);
});

var playButton = document.getElementById(".video-overlay");
playButton.addEventListener("click", function() {
  player.api("play");
});