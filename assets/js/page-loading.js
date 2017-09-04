/*
 * Title:   Travelo | Responsive HTML5 Travel Template - Page Loading Js
 * Author:  http://themeforest.net/user/soaptheme
 */

// pace.js should be active

if (typeof Pace != "undefined") {
    var soapPageLoadingContent = false;
    //document.write('<img alt="" src="images/logo2.png" style="display: none;">');
    var logoImg = new Image();
    logoImg.src = "images/logo.png";
    var soapPageLoadingProgressInterval = setInterval(function() {
        try {
            if (document.body.className.indexOf("pace-done") != -1) {
                clearInterval(soapPageLoadingProgressInterval);
            }
            if (document.body.className.indexOf("pace-running") == -1) {
                return;
            }
            if (!soapPageLoadingContent) {
                document.getElementsByClassName("pace-activity")[0].innerHTML = '<div class="page-loading-wrapper">' +
                    '<header>' +
                        '<h1 class="logo"><a href="#"><img src="images/logo.png" alt="">Miracle</a></h1>' +
                    '</header>' +
                    '<div class="progress-bar">' +
                        '<div class="progress-inner" style="width: 1%;"></div>' +
                    '</div>' +
                    '<div class="loading-text">Loading ...</div>' +
                '</div>';
                soapPageLoadingContent = true;
            }

            var percent = document.getElementsByClassName("pace-progress")[0].getAttribute("data-progress-text");
            document.getElementsByClassName("progress-inner")[0].style.width = percent;
        } catch(e) {  }
    }, 50);
}