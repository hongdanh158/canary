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
	// "autoplay" : false
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
var trackerObj = {};

var ebVideoStarted = "http://log.adtimaserver.vn/track/hit.gif?params=x20mlbps7s_F0hL5OGffeLi3rsq5MqzhxHEuRj1HB-RtZyaGVxuln-lIoeRvXqGWsKwE20OTQhsFDa7KPz4TJ7ClRUNHRkUE_nAupf1HIGHDT4A9nv-lc8oXbFPFM1OAwW4DgMRBYh2_xS1TUbCOA4AP4dZX71WPW-RxYYpSqZI72h0ZXRFqaS4&uid=";
var eb25Per_Played = "http://log.adtimaserver.vn/track/hit.gif?params=8VsQlbps7s_zvNL5OGffTkLfPgo5MprzLOEOxj1x_QwN5yaGYQFNj8nIodKdEomG0OwyqS9TwhsFO4ASan-6EXPERmR5YokqEy_Uhe4MiLrn7mIVvkn_n6IGKfoCjN7ueL3rRf-VBc-zgZl2ooajAGHrgocv1Y811nW52hIp_B0G_RldEQSfNg&uid=";
var eb50Per_Played = "http://log.adtimaserver.vn/track/hit.gif?params=TGYf814k_u9O25ThiKdfc795Xgo5MqfmiCkehj1MGkjFh6aGXB5pR2lIoe94xoEWsKwPzMOTQhsFBte9Q0JDbzGhG5cAwWN8P9jYO-HEIgsUM6ng_fs028-Chy-zpg4M2uzciI3FTrGqnN3AV4DyJiNlDI-Chy_V6lJKdbnaEkzbK5qdGV10q5H-&uid=";
var eb75Per_Played = "http://log.adtimaserver.vn/track/hit.gif?params=wWsgtTps7s_D7BL5OGfffrL_vgo5Mqrj7GEOxj1BDaxN5yaGURENj8nIoeJtcgmG0OwC2W9TwhsFC9DyqfJVObXH3_UPM4emaXhdM9cWbHjJA7gN_nmvv-IHL9DoctydbwLEApi96Bq8OIF6XgrWYwAJ6woXb1WPXeZdmVoSKZQ9Ps1Z3RFsb04&uid=";
var ebVideoFullPlay = "http://log.adtimaserver.vn/track/hit.gif?params=oIpD-76k_u-ij6xRKCdfn5NpHoo5MktCWOmehj2grhAFh6aGsLKBV4nIoQNM7mGWsKzj-PPzAhsF6vNNxEdmUyZkY8JDb1UHSO8yhewFaoTThMxu1TeIm8-ChyxfFBYM2ubl-sVWg-xVrQ9I7jCeJiOJ6D_iBy_VBk7iFbnaEqB3y5qdGV2Yj2ku&uid=";

var timeTrackingArr = [
    {time: 3, link: 'http://log.adtimaserver.vn/track/hit.gif?params=ZkwBQ76k_u9kzYQhiKdfWVmhDkq5Mo2AMHm-Bj1m4FCFh6aGdvQxl4nIocWOyikG0OwlutdDopsFLLFldQfHRgoqwAt2nBkttvYxrIbsMjgG9yvg_dFCzz_iBy-ftap9uN82XlP0PZxFaVnf4Ytg7oPPNpvql29VwAQ6tTnaEmYx88rdmV1esbnu&uid='},
    {time: 10, link: 'http://log.adtimaserver.vn/track/hit.gif?params=flQJ814k_u98pXRhiKdfQXFBDkq5MpWIQDk-Bj1-yHDFh6aGbgyBV4nIod2WiikG0Ow9kqfj4psFNImk8C2sjYuQPMBvKd6g93s9FgLqIgI2t5jN_kbi2-qXbFb4IbJE8WOJBVL1NI3dwBEWcfiew4A2hjbX71WPYtujnZIC6SsSPs1Z3RFTcAo&uid='},
    {time: 30, link: 'http://log.adtimaserver.vn/track/hit.gif?params=81kSjfps7s_xvvrpGOffTETn7kq5Mpj1NLGuRj1z8xwtZyaGYwctD8nIodCbNsEWsKwwr1NzAhsFOYL7OBEpmc5cHR9AR28IXMJlfUdFHHlcFCCWhcR_W8-Chy-NXjk52hEv3HhVPsdsXcmTK9KypiNaOy_Chy_V1X-2HRlaEnMibX5NWd1LQhce&uid='},
    {time: 30, link: 'http://log.adtimaserver.vn/track/hit.gif?params=Zc-EPZrs7s9nMIqpGOff2tav_oo5Mg4PLOEOxj3lYUQtZyaG9XVFH-lIoUYByikG0OymJc_TwhsFrwxja1CH75vCnLjohZiScNlGdiX8gK3_RkVcndLN1__iBy8bz4fHT7SHJJfeFi75uBRxIp-IvkNMteOql29VQ4kWnRlaEuWwhe4N2d3dME_O&uid='} // pls don't change it :)
];

video.on('timeupdate', function () {
    var del = Math.round((video.currentTime() / video.duration()) * 100);
    var currentTime = video.currentTime();

    for (var i = 0; i < timeTrackingArr.length; i++)
    {
        var trackVO = timeTrackingArr[i];
        if (currentTime >= trackVO.time && trackVO.link && !trackVO.isTrack)
        {
            console.log("TRACKING: " + trackVO.time + '_Played');
            loadTracker(trackVO.link);
            trackVO.isTrack = true;
        }
    }

    if (del == 100 && !trackerObj["ebVideoFullPlay"] && ebVideoFullPlay) // 100%
    {
        console.log("TRACKING: ebVideoFullPlay");
        trackerObj["ebVideoFullPlay"] = true;
        loadTracker(ebVideoFullPlay);
    } else if (del >= 75 && !trackerObj["eb75Per_Played"] && eb75Per_Played) // 75%
    {
        console.log("TRACKING: eb75Per_Played");
        trackerObj["eb75Per_Played"] = true;
        loadTracker(eb75Per_Played);
    } else if (del >= 50 && !trackerObj["eb50Per_Played"] && eb50Per_Played) // 50%
    {
        console.log("TRACKING: eb50Per_Played");
        trackerObj["eb50Per_Played"] = true;
        loadTracker(eb50Per_Played);
    } else if (del >= 25 && !trackerObj["eb25Per_Played"] && eb25Per_Played) // 25%
    {
        console.log("TRACKING: eb25Per_Played");
        trackerObj["eb25Per_Played"] = true;
        loadTracker(eb25Per_Played);
    } else if (del >= 0 && !trackerObj["ebVideoStarted"] && ebVideoStarted) // 0%
    {
        console.log("TRACKING: ebVideoStarted");
        trackerObj["ebVideoStarted"] = true;
        loadTracker(ebVideoStarted);
    }
});

function loadTracker(param) {
    if (Array.isArray(param))
    {
        for (var i = 0; i < param.length; i++)
        {
            iTracker(param[i]);
        }
    } else
    {
        iTracker(param);
    }

}

function iTracker(val)
{
    if (val.length > 0) {
        var rnd = Math.floor(Math.random() * 10000000000);
        val = val.replace('[timestamp]', rnd);

        var img_tracking = document.createElement('img');
        img_tracking.src = '' + val;
        img_tracking.style.height = '0px';
        img_tracking.style.width = '0px';
        img_tracking.style.display = 'none';
        document.body.appendChild(img_tracking);
        console.log("iTracker: " + val);
    }
}

function clearTrackTag() {
    trackerObj["ebVideoStarted"] = false;
    trackerObj["eb25Per_Played"] = false;
    trackerObj["eb50Per_Played"] = false;
    trackerObj["eb75Per_Played"] = false;
    trackerObj["ebVideoFullPlay"] = false;

    for (var i = 0; i < timeTrackingArr.length; i++) {
        var trackVO = timeTrackingArr[i];
        trackVO.isTrack = false;
    }
}
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