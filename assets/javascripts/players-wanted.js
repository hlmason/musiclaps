$(document).ready(function() {

	var bandMembersWantedContainer = $('section#bandMembersWantedContainer');
	var arrangersWantedContainer = $('section#arrangersWantedContainer');
	var lyricWritersWantedContainer = $('section#lyricWritersWantedContainer');
	var composersWantedContainer = $('section#composersWantedContainer');
	var othersWantedContainer = $('section#othersWantedContainer');
	var karaokeSongsRequestedContainer = $('section#karaokeSongsRequestedContainer');
	var postNewRequestButton = $('button.postNewRequest');

	var noListings = $('h4#noListings');
	var newRequestContainer = $('section#newRequestContainer');
	

	bandMembersWantedContainer.hide();
	arrangersWantedContainer.hide();
	lyricWritersWantedContainer.hide();
	composersWantedContainer.hide();
	othersWantedContainer.hide();

	noListings.hide()
	newRequestContainer.hide();


	$('#bandMembersContainer').on('click', function() {
		karaokeSongsRequestedContainer.hide();
		arrangersWantedContainer.hide();
		lyricWritersWantedContainer.hide();
		composersWantedContainer.hide();
		othersWantedContainer.hide();
		newRequestContainer.hide();
		bandMembersWantedContainer.fadeIn('fast');
		postNewRequestButton.fadeIn('fast');
	});

	$('#arrangersContainer').on('click', function() {
		karaokeSongsRequestedContainer.hide();
		bandMembersWantedContainer.hide();
		lyricWritersWantedContainer.hide();
		composersWantedContainer.hide();
		othersWantedContainer.hide();
		newRequestContainer.hide();
		arrangersWantedContainer.fadeIn('fast');
		postNewRequestButton.fadeIn('fast');
	});

	$('#lyricsContainer').on('click', function() {
		karaokeSongsRequestedContainer.hide();
		bandMembersWantedContainer.hide();
		arrangersWantedContainer.hide();
		composersWantedContainer.hide();
		othersWantedContainer.hide();
		newRequestContainer.hide();
		lyricWritersWantedContainer.fadeIn('fast');
		postNewRequestButton.fadeIn('fast');
	});

	$('#composersContainer').on('click', function() {
		karaokeSongsRequestedContainer.hide();
		bandMembersWantedContainer.hide();
		arrangersWantedContainer.hide();
		lyricWritersWantedContainer.hide();
		othersWantedContainer.hide();
		newRequestContainer.hide();
		composersWantedContainer.fadeIn('fast');
		postNewRequestButton.fadeIn('fast');
	});

	$('#othersContainer').on('click', function() {
		karaokeSongsRequestedContainer.hide();
		bandMembersWantedContainer.hide();
		arrangersWantedContainer.hide();
		lyricWritersWantedContainer.hide();
		composersWantedContainer.hide();
		newRequestContainer.hide();
		othersWantedContainer.fadeIn('fast');
		postNewRequestButton.fadeIn('fast');
	});

	$('#karaokeContainer').on('click', function() {
		bandMembersWantedContainer.hide();
		arrangersWantedContainer.hide();
		lyricWritersWantedContainer.hide();
		composersWantedContainer.hide();
		othersWantedContainer.hide();
		newRequestContainer.hide();
		karaokeSongsRequestedContainer.fadeIn('fast');
		postNewRequestButton.fadeIn('fast');
	});


	postNewRequestButton.on('click', function() {
		postNewRequestButton.hide();
		newRequestContainer.fadeIn('fast');
	});

});