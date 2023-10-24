/*!
 * albgold v1.0.0 (https://www.tn34.de)
 * Copyright 2017-2023 Ralph Pfeifer
 * Licensed under the GPL-2.0-or-later license
 */




$(document).ready(function () {
  
	console.log("Script run");
	
	
	//.megamenu-shown
	
	
	$("#mainnavigation a.nav-link-main").on("click", function() {
		
		if ($("#mainnavigation").hasClass("megamenu-shown")) {
			console.log("Mega is shown");
			$(".dropdown-menu").removeClass("slideIn").addClass("fade");
		} else {
			console.log("Mega startup");
			$("#mainnavigation").addClass("megamenu-shown");		
			$(".dropdown-menu").removeClass("fade").addClass("slideIn");
		}
	});

	
	$(".nav-link-close, .dropdown-menu").on("click", function() {
		$("#mainnavigation").removeClass("megamenu-shown");
		$(".dropdown-menu").removeClass("fade").addClass("slideIn");
	});
	
	
	
	/* Asterix into Placeholder */
	$( "label .mandatory" ).each(function( index ) {
	  _obj = $(this).parent().parent().find("input");
	  _placeholdertext = _obj.attr("placeholder") + " *";
		_obj.attr("placeholder",_placeholdertext);
	});
	
	
	

	/*
	$('.dropdown-menu').on('shown.bs.collapse', function() {
	  console.log("shown");
	}).on('show.bs.collapse', function() {
	  console.log("show");
	});
	*/
	
	
	/* Search bar functions */
	searchBarCatSelect();
	
	
	
});







function searchBarCatSelect() {
	var _cattitleclass = $(".news-filter .catselect ul >.title").attr("class");
	console.log("Cat: " + _cattitleclass);
	
	if (_cattitleclass == undefined) {
		console.log("Cat: " + _cattitleclass + " undefined");
	}
	
	
	if (_cattitleclass != "title selected-id-" && _cattitleclass != "" && _cattitleclass != undefined) {
		var cattitleclassArr = _cattitleclass.split(" ");
		
		const catselection = cattitleclassArr[1];
		const itemselection = $("." + cattitleclassArr[1].replace("selected", "item"));
				
		var itemtitle = itemselection.find(".label").text();
		var itemticon = itemselection.find(".icon").html();
		itemselection.parent().hide();
				
		$(".news-filter .catselect ul >.title > .label").text(itemtitle);
		$(".news-filter .catselect ul >.title > .icon").html(itemticon);
	} else {
		$(".news-filter .catselect ul li.allLink").hide();
	}
	
	
}