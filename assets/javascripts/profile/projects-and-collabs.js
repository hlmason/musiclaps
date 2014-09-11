$(document).ready(function() {

	var publicProjectsContainer = $('section#publicProjectsContainer');
	var groupProjectsContainerProjectsPage = $('section#groupProjectsContainerProjectsPage');
	var auditionProjectsContainer = $('section#auditionProjectsContainer');
	var lyricsProjectContainer = $('#lyricsProjectContainer');
	var privateProjectsContainer = $('section#privateProjectsContainer');

	var requestingCollabContainer = $('section#requestingCollabContainer');
	var requestingCollabForm = $('#requestingCollabForm');
	var collaboratorsContainer = $('#collaboratorsContainer');
	var openCollabContainer = $('section#openCollabContainer');


	var glyphiconPencil = $('.glyphiconPencil');
	var changeSoundImgContainer = $('section.changeSoundImgContainer');
	var projectForm = $('#projectForm');
	var glyphiconOk = $('.glyphiconOk');


	var projectsContainer = $('section.projectsContainer'); // Note that this is different from the variable below
	var projectsContainers = $('#projectsContainers'); // Note that this is different from the variable above


	var projectImg = $('img.projectImg');


	var publicProjectsButton = $('button.publicProjectsButton');
	var groupProjectsButton = $('button.groupProjectsButton');
	var auditionProjectsButton = $('button.auditionProjectsButton');
	var lyricsProjectButton = $('button.lyricsProjectButton');
	var privateProjectsButton = $('button.privateProjectsButton');

	var requestingCollabButton = $('button#requestingCollabButton');
	var collaboratorsButton = $('button#collaboratorsButton');
	var openCollabButton = $('button#openCollabButton');


	var volumeAndPan = $('section.volumeAndPan');
	var noCollabGlyphicon = $('span.noCollabGlyphicon');
	var openCollabGlyphicon = $('span.openCollabGlyphicon');
	var requestingCollabGlyphicon = $('span.requestingCollabGlyphicon');


	publicProjectsContainer.hide();
	groupProjectsContainerProjectsPage.hide();
	auditionProjectsContainer.hide();
	lyricsProjectContainer.hide();

	requestingCollabContainer.hide();
	requestingCollabForm.hide();
	collaboratorsContainer.hide();

	$('.noListings').hide();

	glyphiconPencil.hide();
	changeSoundImgContainer.hide();
	projectForm.hide();

	noCollabGlyphicon.hide();
	openCollabGlyphicon.hide();
	requestingCollabGlyphicon.hide();


	$(projectsContainer).on('click', function() {
		projectsContainer.hide();
		projectForm.fadeIn('fast');
	});

	$(requestingCollabContainer).on('click', function() {
		requestingCollabContainer.hide();
		requestingCollabForm.fadeIn('fast');
	});


	$(projectImg).mouseenter(function() { // TODO: Fix
		glyphiconPencil.show();
	});
	$(projectImg).mouseleave(function() {
		glyphiconPencil.hide();
	});
	$(glyphiconPencil).on('click', function() {
		changeSoundImgContainer.fadeIn('fast');
	});

	$('.glyphiconRemove').on('click', function() {
		changeSoundImgContainer.hide();
	});


	$(publicProjectsButton).on('click', function() {
		privateProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		groupProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		auditionProjectsContainer.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		lyricsProjectButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		privateProjectsContainer.hide();
		groupProjectsContainerProjectsPage.hide();
		auditionProjectsContainer.hide();
		lyricsProjectContainer.hide();
		projectForm.hide();
		
		projectsContainers.fadeIn('fast');
		publicProjectsContainer.fadeIn('fast');
	});

	$(groupProjectsButton).on('click', function() {
		privateProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		publicProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		auditionProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		lyricsProjectButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		publicProjectsContainer.hide();
		privateProjectsContainer.hide();
		auditionProjectsContainer.hide();
		lyricsProjectContainer.hide();
		projectForm.hide();
		
		projectsContainers.fadeIn('fast');
		groupProjectsContainerProjectsPage.fadeIn('fast');
	});

	$(auditionProjectsButton).on('click', function() {
		privateProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		publicProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		groupProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		lyricsProjectButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		publicProjectsContainer.hide();
		privateProjectsContainer.hide();
		groupProjectsContainerProjectsPage.hide();
		lyricsProjectContainer.hide();
		projectForm.hide();
		
		projectsContainers.fadeIn('fast');
		auditionProjectsContainer.fadeIn('fast');
	});

	$(lyricsProjectButton).on('click', function() {
		privateProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		publicProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		groupProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		auditionProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		projectsContainers.hide();		
		lyricsProjectContainer.fadeIn('fast');

	});

	$(privateProjectsButton).on('click', function() {
		publicProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		groupProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		auditionProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		lyricsProjectButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		publicProjectsContainer.hide();
		auditionProjectsContainer.hide();
		groupProjectsContainerProjectsPage.hide();
		lyricsProjectContainer.hide();
		projectForm.hide();
		
		projectsContainers.fadeIn('fast');
		privateProjectsContainer.fadeIn('fast');
	});


	$(requestingCollabButton).on('click', function() {
		openCollabButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		collaboratorsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		openCollabContainer.hide();
		collaboratorsContainer.hide();
		projectForm.hide();
		
		requestingCollabContainer.fadeIn('fast');
	});

	$(collaboratorsButton).on('click', function() {
		requestingCollabButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		openCollabButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		requestingCollabContainer.hide();
		requestingCollabForm.hide();
		openCollabContainer.hide();
		projectForm.hide();
		
		collaboratorsContainer.fadeIn('fast');
	});

	$(openCollabButton).on('click', function() {
		collaboratorsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		requestingCollabButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		collaboratorsContainer.hide();
		requestingCollabContainer.hide();
		requestingCollabForm.hide();
		projectForm.hide();
		
		openCollabContainer.fadeIn('fast');
	});


	$('img.audioMixer').on('click', function() {
		if ( volumeAndPan.is(':visible') ) {
			volumeAndPan.hide();
		} else {
			volumeAndPan.show();
		}
	});

	$('button.noCollab').on('click', function() {
		noCollabGlyphicon.show();
		if ( openCollabGlyphicon.is(':visible') ) {
			openCollabGlyphicon.hide();
		}
		if ( requestingCollabGlyphicon.is(':visible') ) {
			requestingCollabGlyphicon.hide();
		}
	});

	$('button.openCollab').on('click', function() {
		openCollabGlyphicon.show();
		if ( noCollabGlyphicon.is(':visible') ) {
			noCollabGlyphicon.hide();
		}
		if ( requestingCollabGlyphicon.is(':visible') ) {
			requestingCollabGlyphicon.hide();
		}
	});

	$('button.requestingCollab').on('click', function() {
		requestingCollabGlyphicon.show();
		if ( openCollabGlyphicon.is(':visible') ) {
			openCollabGlyphicon.hide();
		}
		if ( noCollabGlyphicon.is(':visible') ) {
			noCollabGlyphicon.hide();
		}
	});

});