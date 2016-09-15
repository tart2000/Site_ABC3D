$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$(".sursub").click(function(e) {
	e.preventDefault;
	$(this).next().toggleClass('hidden');
});