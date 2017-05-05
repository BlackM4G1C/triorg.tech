$(function () {
    $("#mynav").append($("#mainNav").clone().attr("id", "mynav").attr("class", ""));
    $("#mynav").mmenu({
        "extensions" : [
			"effect-menu-zoom",
			"effect-panels-zoom",
			"pagedim-black"
		],
		"offCanvas" :{
			"position" : "right"
		},
		"navbar" :{
			"title" : "TRI Organization"
		}
    });
});