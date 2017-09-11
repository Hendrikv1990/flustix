function FullscreenVideo(e) {
    var t = $.extend({
        playerId: "",
        mp4: "",
        webm: "",
        ogv: "",
        fallback: "/assets/img/home/hero-super-fallback.jpg",
        modal: $(".hero-modal"),
        body: $(document.body),
        fullscreenBackground: !0,
        openVideoCallback: null,
        closeVideoCallback: null
    }, e || {});
    t.fullscreenBackground ? this.backgroundVideo = new $.BigVideo({
            useFlashForFirefox: !1
        }) : this.backgroundVideo = null, this.modalVideoOpen = !1, this.pauseBackgroundVideo = function () {
        this.backgroundVideo.getPlayer().pause()
    }, this.playBackgroundVideo = function () {
        this.backgroundVideo.getPlayer().play()
    }, this.playModalVideo = function () {
        this.player.api("play")
    }, this.pauseModalVideo = function () {
        this.player.api("pause")
    }, this.resetModalVideo = function () {
        this.player.api("seekTo", 0)
    }, this.initialize = function () {
        var e = this;
        if (t.fullscreenBackground)
            if (e.backgroundVideo.init(), window.location.search.indexOf("autoplay=true") > -1 && e.openVideoModal(), Modernizr.touch) e.backgroundVideo.show(t.fallback);
            else {
                var n = document.getElementById("big-video-wrap");
                TweenLite.set(n, {
                    autoAlpha: 0
                }), e.backgroundVideo.show([{
                    type: "video/mp4",
                    src: t.mp4
                }, {
                    type: "video/webm",
                    src: t.webm
                }, {
                    type: "video/ogg",
                    src: t.ogv
                }], {
                    controls: !1,
                    ambient: !0,
                    doLoop: !0
                }), videojs("big-video-vid_html5_api").ready(function () {
                    this.on("loadeddata", function () {
                        $(".hero").addClass("video-loaded"), TweenLite.to(n, .5, {
                            autoAlpha: 1
                        })
                    }).on("ended", function () {
                        e.backgroundVideo.getPlayer().currentTime(0)
                    })
                }), $(window).on("keyup", function (t) {
                    e.modalVideoOpen && 27 == t.keyCode && e.closeVideoModal()
                })
            }
    }, this.openVideoModal = function () {
        var e = this;
        e.player = $f($("#" + t.playerId)[0]), t.body.addClass("no-overflow"), e.modalVideoOpen = !0, TweenLite.to(t.modal, .5, {
            force3D: !0,
            autoAlpha: 1,
            zIndex: 100,
            display: "block",
            onComplete: function () {
                t.modal.addClass("is-open"), "function" == typeof t.openVideoCallback && t.openVideoCallback(), Modernizr.touch || e.playModalVideo(), t.fullscreenBackground && e.pauseBackgroundVideo()
            }
        }), e.player.addEvent("ready", function () {
            e.player.addEvent("finish", function () {
                e.closeVideoModal()
            })
        })
    }, this.closeVideoModal = function () {
        var e = this;
        t.body.removeClass("no-overflow"), t.modal.removeClass("is-open"), e.pauseModalVideo(), TweenLite.to(t.modal, .5, {
            force3D: !0,
            autoAlpha: 0,
            zIndex: -1,
            onComplete: function () {
                e.modalVideoOpen = !1, "function" == typeof t.closeVideoCallback && t.closeVideoCallback(), e.resetModalVideo(), t.fullscreenBackground && e.playBackgroundVideo(), TweenLite.set(t.modal, {
                    display: "none"
                })
            }
        })
    }
}