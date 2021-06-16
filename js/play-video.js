if ($('.video-wrapper').length) {
    $(document).ready(function(){
        $(window).on('load resize',function(){
            resizeVideo();
        });
        function resizeVideo() {
            var wVideo = $('.video').width();
            var hVideo = wVideo*394/600;
            $('.video-js').width(wVideo);
            $('.video-js').height(hVideo);
        }
    });
    var video = videojs("video-default", {
        "poster": "images/video-banner.png",
        "autoplay" : false
    });

    video.on('ended', function () {
        this.posterImage.show();
        this.bigPlayButton.show();
        clearTrackTag();
    });

    video.on('pause', function () {
        this.bigPlayButton.show();
    });

    video.on('play', function () {
        this.trigger('loadstart');
        this.posterImage.hide();
        this.bigPlayButton.hide();
    });
    
    video.on('ended', function () {
    this.posterImage.show();
    this.bigPlayButton.show();
    });
    video.on('play', function () {
    this.bigPlayButton.hide();
    this.posterImage.hide();
    });
    video.on('pause', function () {
    this.trigger('loadstart');
    this.posterImage.hide();
    this.bigPlayButton.show();
    });
}
