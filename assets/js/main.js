$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$(function() {
    $('.card-meta').matchHeight();
});

$(function() {
    $('.book-meta').matchHeight();
});

$(".sursub").click(function(e) {
	e.preventDefault;
	$(this).next().toggleClass('hidden');
});