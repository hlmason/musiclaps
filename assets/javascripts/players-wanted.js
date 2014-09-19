$(document).ready(function() {

	var bandMembersWantedContainer = $('#bandMembersWantedContainer');
	var arrangersWantedContainer = $('#arrangersWantedContainer');
	var lyricWritersWantedContainer = $('#lyricWritersWantedContainer');
	var composersWantedContainer = $('#composersWantedContainer');
	var othersWantedContainer = $('#othersWantedContainer');
	var karaokeSongsWantedContainer = $('#karaokeSongsWantedContainer');

	var noListings = $('h4#noListings');
	var newRequestContainer = $('section#newRequestContainer');
	
	var table = $('table');
	var postNewRequestButton = $('button.postNewRequest');

	bandMembersWantedContainer.hide();
	arrangersWantedContainer.hide();
	lyricWritersWantedContainer.hide();
	composersWantedContainer.hide();
	othersWantedContainer.hide();

	noListings.hide()
	newRequestContainer.hide();


	$('#bandMembersContainer').on('click', function() {
		karaokeSongsWantedContainer.hide();
		arrangersWantedContainer.hide();
		lyricWritersWantedContainer.hide();
		composersWantedContainer.hide();
		othersWantedContainer.hide();
		newRequestContainer.hide();
		bandMembersWantedContainer.fadeIn('fast');
			postNewRequestButton.fadeIn('fast');
			table.fadeIn('fast');
	});

	$('#arrangersContainer').on('click', function() {
		karaokeSongsWantedContainer.hide();
		bandMembersWantedContainer.hide();
		lyricWritersWantedContainer.hide();
		composersWantedContainer.hide();
		othersWantedContainer.hide();
		newRequestContainer.hide();
		arrangersWantedContainer.fadeIn('fast');
			postNewRequestButton.fadeIn('fast');
			table.fadeIn('fast');
	});

	$('#lyricsContainer').on('click', function() {
		karaokeSongsWantedContainer.hide();
		bandMembersWantedContainer.hide();
		arrangersWantedContainer.hide();
		composersWantedContainer.hide();
		othersWantedContainer.hide();
		newRequestContainer.hide();
		lyricWritersWantedContainer.fadeIn('fast');
			postNewRequestButton.fadeIn('fast');
			table.fadeIn('fast');
	});

	$('#composersContainer').on('click', function() {
		karaokeSongsWantedContainer.hide();
		bandMembersWantedContainer.hide();
		arrangersWantedContainer.hide();
		lyricWritersWantedContainer.hide();
		othersWantedContainer.hide();
		newRequestContainer.hide();
		composersWantedContainer.fadeIn('fast');
			postNewRequestButton.fadeIn('fast');
			table.fadeIn('fast');
	});

	$('#othersContainer').on('click', function() {
		karaokeSongsWantedContainer.hide();
		bandMembersWantedContainer.hide();
		arrangersWantedContainer.hide();
		lyricWritersWantedContainer.hide();
		composersWantedContainer.hide();
		newRequestContainer.hide();
		othersWantedContainer.fadeIn('fast');
			postNewRequestButton.fadeIn('fast');
			table.fadeIn('fast');
	});

	$('#karaokeContainer').on('click', function() {
		bandMembersWantedContainer.hide();
		arrangersWantedContainer.hide();
		lyricWritersWantedContainer.hide();
		composersWantedContainer.hide();
		othersWantedContainer.hide();
		newRequestContainer.hide();
		karaokeSongsWantedContainer.fadeIn('fast');
			postNewRequestButton.fadeIn('fast');
			table.fadeIn('fast');
	});


	postNewRequestButton.on('click', function() {
		postNewRequestButton.hide();
		table.hide();
		newRequestContainer.fadeIn('fast');
	});

});