// 3D Swinging Door GSAP
TweenMax.set("#book", {
    perspective: 1000
});
TweenMax.set(".page", {
    transformStyle: "preserve-3d"
});
TweenMax.set(".back", {
    rotationY: -180
});
TweenMax.set([".back", ".front"], {
    backfaceVisibility: "hidden"
});

var page = $(".page");

page.on("click", ".front", function () {
    var $this = $(this).parent();

    var action = new TimelineMax()
        .set('.page', {
            zIndex: 0
        }) // see also .page in css ...
        .set($this, {
            zIndex: 2
        })
        .to($this, 0.6, {
            rotationY: -180,
            transformOrigin: "0% 100%",
            ease: Cubic.easeOut,
        })

});

page.on("click", ".back", function () {
    var $this = $(this).parent();

    var action = new TimelineMax()
        .set('.page', {
            zIndex: 0
        })
        .set($this, {
            zIndex: 2
        })
        .to($this, 0.6, {
            rotationY: 0,
            transformOrigin: "0% 100%",
            ease: Cubic.easeOut
        });
});
