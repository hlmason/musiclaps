$(document).ready(function() {

	/* ===================================
    	My Projects
	=================================== */
	var lyricsExplanation = $('.lyricsExplanation');

	lyricsExplanation.hide();

	$('.glyphiconQuestionSignLyrics').hover(function() {
		lyricsExplanation.fadeIn('slow');
	});

	/* ====================================
	    My Projects and Collaborations
	==================================== */
	var glyphiconPencil = $('.glyphiconPencil');
	var privateURL = $('#privateURL');
	var projectForm = $('#projectForm');
	var noCollabGlyphicon = $('span.noCollabGlyphicon');
	var openCollabGlyphicon = $('span.openCollabGlyphicon');
	var requestingCollabGlyphicon = $('span.requestingCollabGlyphicon');

	var requestingCollabForm = $('#requestingCollabForm');
	var requestingCollabContainer = $('section#requestingCollabContainer');

	var CCBYDescription = $('#CCBYDescription');
	var CCBYNDDescription = $('#CCBYNDDescription');
	var CCBYNCSADescription = $('#CCBYNCSADescription');
	var CCBYSADescription = $('#CCBYSADescription');
	var CCBYNCDescription = $('#CCBYNCDescription');
	var CCBYNCNDDescription = $('#CCBYNCNDDescription');
	var PublicDomainDescription = $('#PublicDomainDescription');

	var changeProjectImgContainer = $('section.changeProjectImgContainer');
	
	var projectsContainer = $('section.projectsContainer');

	var volumeAndPan = $('section.volumeAndPan');

	var projectImg = $('img.projectImg');

	
	$('.noListings').hide();

	privateURL.hide();
	projectForm.hide();
	noCollabGlyphicon.hide();
	openCollabGlyphicon.hide();
	requestingCollabGlyphicon.hide();

	requestingCollabForm.hide();

	CCBYDescription.hide();
	CCBYNDDescription.hide();
	CCBYNCSADescription.hide();
	CCBYSADescription.hide();
	CCBYNCDescription.hide();
	CCBYNCNDDescription.hide();
	PublicDomainDescription.hide();

	changeProjectImgContainer.hide();

	
	$(projectsContainer).on('click', function() {
		projectsContainer.hide();
		privateURL.fadeIn('fast');
		projectForm.fadeIn('fast');
	});
	$(requestingCollabContainer).on('click', function() {
		requestingCollabContainer.hide();
		requestingCollabForm.fadeIn('fast');
	});


	$('.glyphiconRemove').on('click', function() {
		changeProjectImgContainer.hide();
	});


	$('img.audioMixer').on('click', function() {
		if ( volumeAndPan.is(':visible') ) {
			volumeAndPan.hide();
		} else {
			volumeAndPan.show();
		}
	});

		 /* ===================================
		    Type of Collaboration
		=================================== */
		$('input.noCollab').on('click', function() {
			noCollabGlyphicon.show();
			if ( openCollabGlyphicon.is(':visible') ) {
				openCollabGlyphicon.hide();
			}
			if ( requestingCollabGlyphicon.is(':visible') ) {
				requestingCollabGlyphicon.hide();
			}
		});
		$('input.openCollab').on('click', function() {
			openCollabGlyphicon.show();
			if ( noCollabGlyphicon.is(':visible') ) {
				noCollabGlyphicon.hide();
			}
			if ( requestingCollabGlyphicon.is(':visible') ) {
				requestingCollabGlyphicon.hide();
			}
		});
		$('input.requestingCollab').on('click', function() {
			requestingCollabGlyphicon.show();
			if ( openCollabGlyphicon.is(':visible') ) {
				openCollabGlyphicon.hide();
			}
			if ( noCollabGlyphicon.is(':visible') ) {
				noCollabGlyphicon.hide();
			}
		});

		/* ===================================
		    Copyright Type
		=================================== */
		$('#glyphiconQuestionSignCCBY').hover(function() {
			CCBYDescription.fadeIn('slow');

			CCBYNDDescription.hide();
			CCBYNCSADescription.hide();
			CCBYSADescription.hide();
			CCBYNCDescription.hide();
			CCBYNCNDDescription.hide();
			PublicDomainDescription.hide();
		});
		$('#glyphiconQuestionSignCCBYND').hover(function() {
			CCBYNDDescription.fadeIn('slow');
			
			CCBYDescription.hide();
			CCBYNCSADescription.hide();
			CCBYSADescription.hide();
			CCBYNCDescription.hide();
			CCBYNCNDDescription.hide();
			PublicDomainDescription.hide();
		});
		$('#glyphiconQuestionSignCCBYNCSA').hover(function() {
			CCBYNCSADescription.fadeIn('slow');

			CCBYDescription.hide();
			CCBYNDDescription.hide();
			CCBYSADescription.hide();
			CCBYNCDescription.hide();
			CCBYNCNDDescription.hide();
			PublicDomainDescription.hide();
		});
		$('#glyphiconQuestionSignCCBYSA').hover(function() {
			CCBYSADescription.fadeIn('slow');

			CCBYDescription.hide();
			CCBYNDDescription.hide();
			CCBYNCSADescription.hide();
			CCBYNCDescription.hide();
			CCBYNCNDDescription.hide();
			PublicDomainDescription.hide();
		});
		$('#glyphiconQuestionSignCCBYNC').hover(function() {
			CCBYNCDescription.fadeIn('slow');

			CCBYDescription.hide();
			CCBYNDDescription.hide();
			CCBYNCSADescription.hide();
			CCBYSADescription.hide();
			CCBYNCNDDescription.hide();
			PublicDomainDescription.hide();
		});
		$('#glyphiconQuestionSignCCBYNCND').hover(function() {
			CCBYNCNDDescription.fadeIn('slow');

			CCBYDescription.hide();
			CCBYNDDescription.hide();
			CCBYNCSADescription.hide();
			CCBYSADescription.hide();
			CCBYNCDescription.hide();
			PublicDomainDescription.hide();
		});
		$('#glyphiconQuestionSignPublicDomain').hover(function() {
			PublicDomainDescription.fadeIn('slow');

			CCBYDescription.hide();
			CCBYNDDescription.hide();
			CCBYNCSADescription.hide();
			CCBYSADescription.hide();
			CCBYNCDescription.hide();
			CCBYNCNDDescription.hide();
		});

	/* =================================== */

	// projectImg.on({
	// 	mouseenter: function() 
	// 	{
	// 		glyphiconPencil.show();
	// 	},
	// 	mouseleave: function() 
	// 	{
	// 		glyphiconPencil.hide();
	// 	}
	// });
	glyphiconPencil.on('click', function() {
		changeProjectImgContainer.fadeIn('fast');
	});

});