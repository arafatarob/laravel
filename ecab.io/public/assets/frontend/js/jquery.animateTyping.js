var _____WB$wombat$assign$function_____ = function (name) {
    return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name];
};
if (!self.__WB_pmw) {
    self.__WB_pmw = function (obj) {
        this.__WB_source = obj;
        return this;
    }
} {
    let window = _____WB$wombat$assign$function_____("window");
    let self = _____WB$wombat$assign$function_____("self");
    let document = _____WB$wombat$assign$function_____("document");
    let location = _____WB$wombat$assign$function_____("location");
    let top = _____WB$wombat$assign$function_____("top");
    let parent = _____WB$wombat$assign$function_____("parent");
    let frames = _____WB$wombat$assign$function_____("frames");
    let opener = _____WB$wombat$assign$function_____("opener");

    (($) => {
        const typeText = (elementTyping, text, speed, delay) => new Promise((resolve) => setTimeout(() => {
            var charIndex = 0;
            var typing = setInterval(() => {
                elementTyping.text(text.substr(0, ++charIndex));
                if (charIndex == text.length) {
                    clearInterval(typing);
                    return resolve();
                }
            }, speed);
        }, delay));
        const removeText = (elementTyping, speed, delay) => new Promise((resolve) => setTimeout(function () {
            var text = elementTyping.text();
            var removing = setInterval(function () {
                text = text.substr(0, text.length - 1);
                elementTyping.text(text);
                if (!text.length) {
                    clearInterval(removing);
                    return resolve();
                }
            }, speed);
        }, delay));
        const showCursor = (elementTyping, index, speed) => {
            elementTyping.attr("data-animate-index", index);
            $("head").append(`
           <style>
               .animate-typing[data-animate-index="${index}"]::after {
                   content: '|';
                   animation: animateCursor ${speed}ms infinite alternate cubic-bezier(.68,-0.55,.27,1.55);
               }
           </style>
       `);
        };
        $(".animate-typing").each(function (index) {
            const elementTyping = $(this);
            const typeSpeed = +elementTyping.data("type-speed") || 200;
            const typeDelay = +elementTyping.data("type-delay") || 200;
            const removeSpeed = +elementTyping.data("remove-speed") || 50;
            const removeDelay = +elementTyping.data("remove-delay") || 500;
            const cursorSpeed = +elementTyping.data("cursor-speed") || 300;
            const loop = elementTyping.data("animate-loop") || false;
            const textList = elementTyping.text().split("|");
            elementTyping.text("");
            showCursor(elementTyping, index, cursorSpeed);
            (async () => {
                var cycle = 0;
                do {
                    for (let subText of textList) {
                        if (cycle++)
                            await removeText(elementTyping, removeSpeed, removeDelay);
                        if (subText.trim())
                            await typeText(elementTyping, subText.trim(), typeSpeed, typeDelay);
                    }
                } while (loop);
            })();
        });
        (() => $("head").append(`
            <style>
                @keyframes animateCursor {
                    0% { opacity: 0; }
                    100% { opacity: 1; }
                }
            </style>
        `))();
    })(jQuery);

}
/*
     FILE ARCHIVED ON 06:01:12 Mar 24, 2024 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 10:52:56 Nov 25, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 0.548
  exclusion.robots: 0.027
  exclusion.robots.policy: 0.016
  esindex: 0.012
  cdx.remote: 12.833
  LoadShardBlock: 56.337 (3)
  PetaboxLoader3.datanode: 74.853 (4)
  load_resource: 119.79
  PetaboxLoader3.resolve: 71.547
*/