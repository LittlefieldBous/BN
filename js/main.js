

$(function(){
    var voicehover     = $('.birds');
        var birdaudio = birdhover.find('audio')[0];

    birdhover.hover(function(){
       birdaudio.play();
    }, function(){
       birdaudio.stop();
    });
});