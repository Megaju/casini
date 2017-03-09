$(document).ready(function () {
	var origOffsetY = $('#sidebar').offset().top;

        function scroll() {
            if ($(window).scrollTop() >= origOffsetY) {
                $('#sidebar').css("position", "fixed");
                $('#sidebar').css("top", "100px");
            }
            else {
                $('#sidebar').css("position", "absolute");
                $('#sidebar').css("top", "auto");
            }
        }

	document.onscroll = scroll;
});
