$(document).ready(function() {

	var newProject = $('section#newProject');
	var addPart = $('section#addPart');
	var selectPartExplanation = $('#selectPartExplanation');
	var addPartToGroup = $('section#addPartToGroup');

	var instrumentImg = $('img.instrumentJS');


	newProject.hide();
	addPart.hide();
	selectPartExplanation.hide();
	addPartToGroup.hide();

	$('input').on('click', function() {
		if ( $('input[value="newProject"]').is(':checked') ) {
			addPart.hide();
			addPartToGroup.hide();
			newProject.fadeIn('fast');
		} else if ( $('input[value="addPart"]').is(':checked') ) {
			newProject.hide();
			addPartToGroup.hide();
			addPart.fadeIn('fast');
		} else if ( $('input[value="addPartToGroup"]').is(':checked') ) {
			addPart.hide();
			newProject.hide();
			addPartToGroup.fadeIn('fast');
		}
	});

	$('#glyphiconQuestionSignPart').hover(function() {
		selectPartExplanation.fadeIn('slow');
	});

	/* ================================================
		// Sorry this code is so dumb.  TODO: Refactor
	================================================ */
	instrumentImg.hide();

	document.onkeydown = checkKey;
	function checkKey(key) {
		key = key || window.event;
		if (key.keyCode == '40') { // If user presses down arrow key
			instrumentImg.hide();
			// if ( $('select#parts').val() === 'accordion') {
			// 	$('img.banjoJS').fadeIn('fast');
			// }
			if ( $('select#parts').val() === 'banjo') {
				$('img.bassJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'bass') {
				$('img.castanetsJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'castanets') {
				$('img.celloJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'cello') {
				$('img.clarinetJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'clarinet') {
				$('img.congasJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'congas') {
				$('img.contrabassJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'contrabass') {
				$('img.drumKit').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'drum_kit') {
				$('img.fiddleJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'fiddle') {
				$('img.fluteJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'flute') {
				$('img.guitarAcoustic').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_acoustic') {
				$('img.guitarAcousticElectric').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_acoustic_electric') {
				$('img.guitarClassical').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_classical') {
				$('img.guitarElectric1').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_1') {
				$('img.guitarElectric2').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_2') {
				$('img.guitarElectric3').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_3') {
				$('img.guitarElectric4').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_4') {
				$('img.guitarElectric5').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_5') {
				$('img.guitarElectric6').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_6') {
				$('img.guitarSemiAcoustic').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_semi_acoustic') {
				$('img.harmonicaJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'harmonica') {
				$('img.harpJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'harp') {
				$('img.hornJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'horn') {
				$('img.keyboard1JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'keyboard_1') {
				$('img.keyboard2JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'keyboard_2') {
				$('img.keyboard3JS').fadeIn('fast');
			}
			// if ( $('select#parts').val() === 'keyboard_3') {
			// 	$('img.lyricsJS').fadeIn('fast');
			// }
			if ( $('select#parts').val() === 'lyrics') {
				$('img.mandolinJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'mandolin') {
				$('img.maracasJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'maracas') {
				$('img.marimbaJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'marimba') {
				$('img.metallophoneJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'metallophone') {
				$('img.melodicaJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'melodica') {
				$('img.mixerJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'mixer') {
				$('img.oboeJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'oboe') {
				$('img.ocarinaJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'ocarina') {
				$('img.organJS').fadeIn('fast');
			}
			// if ( $('select#parts').val() === 'organ') {
			// 	$('img.otherJS').fadeIn('fast');
			// }
			// if ( $('select#parts').val() === 'other') {
			// 	$('img.percussionJS').fadeIn('fast');
			// }
			if ( $('select#parts').val() === 'percussion') {
				$('img.pianoElectric').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'piano_electric') {
				$('img.pianoGrand').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'piano_grand') {
				$('img.pianoUpright').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'piano_upright') {
				$('img.piccoloJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'piccolo') {
				$('img.recorderAlto').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'recorder_alto') {
				$('img.recorderSoprano').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'recorder_soprano') {
				$('img.saxAlto').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'sax_alto') {
				$('img.saxBaritone').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'sax_baritone') {
				$('img.saxSoprano').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'sax_soprano') {
				$('img.saxTenor').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'sax_tenor') {
				$('img.shakuhachiJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'shakuhachi') {
				$('img.shamisenJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'shamisen') {
				$('img.tambourineJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'tambourine') {
				$('img.timpaniJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'timpani') {
				$('img.triangleJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'triangle') {
				$('img.tromboneJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'trombone') {
				$('img.trumpet1JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'trumpet_1') {
				$('img.trumpet2JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'trumpet_2') {
				$('img.ukuleleJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'ukulele') {
				$('img.violaJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'viola') {
				$('img.violinJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'violin') {
				$('img.mic1JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'vocals_1') {
				$('img.mic2JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'vocals_2') {
				$('img.mic3JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'vocals_3') {
				$('img.wadaikoJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'wadaiko') {
				$('img.xylophoneJS').fadeIn('fast');
			}
		} else if (key.keyCode == '38') { // If user presses up arrow key
			instrumentImg.hide();
			if ( $('select#parts').val() === 'xylophone') {
				$('img.wadaikoJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'wadaiko') {
				$('img.mic3JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'vocals_3') {
				$('img.mic2JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'vocals_2') {
				$('img.mic1JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'vocals_1') {
				$('img.violinJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'violin') {
				$('img.violaJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'viola') {
				$('img.ukuleleJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'ukulele') {
				$('img.trumpet2JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'trumpet_2') {
				$('img.trumpet1JS').fadeIn('trumpet_1');
			}
			if ( $('select#parts').val() === 'trumpet_1') {
				$('img.tromboneJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'trombone') {
				$('img.triangleJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'triangle') {
				$('img.timpaniJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'timpani') {
				$('img.tambourineJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'tambourine') {
				$('img.shamisenJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'shamisen') {
				$('img.shakuhachiJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'shakuhachi') {
				$('img.saxTenor').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'sax_tenor') {
				$('img.saxSoprano').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'sax_soprano') {
				$('img.saxBaritone').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'sax_baritone') {
				$('img.saxAlto').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'sax_alto') {
				$('img.recorderSoprano').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'recorder_soprano') {
				$('img.recorderAlto').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'recorder_alto') {
				$('img.piccoloJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'piccolo') {
				$('img.pianoUpright').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'piano_upright') {
				$('img.pianoGrand').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'piano_grand') {
				$('img.pianoElectric').fadeIn('fast');
			}
			// if ( $('select#parts').val() === 'piano_electric') {
			// 	$('img.percussionJS').fadeIn('fast');
			// }
			// if ( $('select#parts').val() === 'percussion') {
			// 	$('img.otherJS').fadeIn('fast');
			// }
			if ( $('select#parts').val() === 'other') {
				$('img.organJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'organ') {
				$('img.ocarinaJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'ocarina') {
				$('img.oboeJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'oboe') {
				$('img.mixerJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'mixer') {
				$('img.melodicaJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'melodica') {
				$('img.metallophoneJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'metallophone') {
				$('img.marimbaJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'marimba') {
				$('img.maracasJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'maracas') {
				$('img.mandolinJS').fadeIn('fast');
			}
			// if ( $('select#parts').val() === 'mandolin') {
			// 	$('img.lyricsJS').fadeIn('fast');
			// }
			if ( $('select#parts').val() === 'lyrics') {
				$('img.keyboard3JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'keyboard_3') {
				$('img.keyboard2JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'keyboard_2') {
				$('img.keyboard1JS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'keyboard_1') {
				$('img.hornJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'horn') {
				$('img.harpJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'harp') {
				$('img.harmonicaJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'harmonica') {
				$('img.guitarSemiAcoustic').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_semi_acoustic') {
				$('img.guitarElectric6').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_6') {
				$('img.guitarElectric5').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_5') {
				$('img.guitarElectric4').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_4') {
				$('img.guitarElectric3').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_3') {
				$('img.guitarElectric2').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_2') {
				$('img.guitarElectric1').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_electric_1') {
				$('img.guitarClassical').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_classical') {
				$('img.guitarAcousticElectric').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_acoustic_electric') {
				$('img.guitarAcoustic').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'guitar_acoustic') {
				$('img.fluteJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'flute') {
				$('img.fiddleJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'fiddle') {
				$('img.drumKit').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'drum_kit') {
				$('img.contrabassJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'contrabass') {
				$('img.congasJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'congas') {
				$('img.clarinetJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'clarinet') {
				$('img.celloJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'cello') {
				$('img.castanetsJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'castanets') {
				$('img.bassJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'bass') {
				$('img.banjoJS').fadeIn('fast');
			}
			if ( $('select#parts').val() === 'banjo') {
				$('img.accordionJS').fadeIn('fast');
			}
		}
	}

	$('option.accordionJS').on('click', function() {
		instrumentImg.hide();
		$('img.accordionJS').fadeIn('fast');
	});

	$('option.banjoJS').on('click', function() {
		instrumentImg.hide();
	});

	$('option.bassJS').on('click', function() {
		instrumentImg.hide();
		$('img.bassJS').fadeIn('fast');
	});

	$('option.castanetsJS').on('click', function() {
		instrumentImg.hide();
		$('img.castanetsJS').fadeIn('fast');
	});

	$('option.celloJS').on('click', function() {
		instrumentImg.hide();
		$('img.celloJS').fadeIn('fast');
	});

	$('option.clarinetJS').on('click', function() {
		instrumentImg.hide();
		$('img.clarinetJS').fadeIn('fast');
	});

	$('option.congasJS').on('click', function() {
		instrumentImg.hide();
		$('img.congasJS').fadeIn('fast');
	});

	$('option.contrabassJS').on('click', function() {
		instrumentImg.hide();
		$('img.contrabassJS').fadeIn('fast');
	});

	$('option.drumKit').on('click', function() {
		instrumentImg.hide();
		$('img.drumKit').fadeIn('fast');
	});

	$('option.fiddleJS').on('click', function() {
		instrumentImg.hide();
		$('img.fiddleJS').fadeIn('fast');
	});

	$('option.fluteJS').on('click', function() {
		instrumentImg.hide();
		$('img.fluteJS').fadeIn('fast');
	});

	$('option.guitarAcoustic').on('click', function() {
		instrumentImg.hide();
		$('img.guitarAcoustic').fadeIn('fast');
	});

	$('option.guitarAcousticElectric').on('click', function() {
		instrumentImg.hide();
		$('img.guitarAcousticElectric').fadeIn('fast');
	});

	$('option.guitarClassical').on('click', function() {
		instrumentImg.hide();
		$('img.guitarClassical').fadeIn('fast');
	});

	$('option.guitarElectric1').on('click', function() {
		instrumentImg.hide();
		$('img.guitarElectric1').fadeIn('fast');
	});

	$('option.guitarElectric2').on('click', function() {
		instrumentImg.hide();
		$('img.guitarElectric2').fadeIn('fast');
	});

	$('option.guitarElectric3').on('click', function() {
		instrumentImg.hide();
		$('img.guitarElectric3').fadeIn('fast');
	});

	$('option.guitarElectric4').on('click', function() {
		instrumentImg.hide();
		$('img.guitarElectric4').fadeIn('fast');
	});

	$('option.guitarElectric5').on('click', function() {
		instrumentImg.hide();
		$('img.guitarElectric5').fadeIn('fast');
	});

	$('option.guitarElectric6').on('click', function() {
		instrumentImg.hide();
		$('img.guitarElectric6').fadeIn('fast');
	});

	$('option.guitarSemiAcoustic').on('click', function() {
		instrumentImg.hide();
		$('img.guitarSemiAcoustic').fadeIn('fast');
	});

	$('option.harmonicaJS').on('click', function() {
		instrumentImg.hide();
		$('img.harmonicaJS').fadeIn('fast');
	});

	$('option.harpJS').on('click', function() {
		instrumentImg.hide();
		$('img.harpJS').fadeIn('fast');
	});

	$('option.hornJS').on('click', function() {
		instrumentImg.hide();
		$('img.hornJS').fadeIn('fast');
	});

	$('option.keyboard1JS').on('click', function() {
		instrumentImg.hide();
		$('img.keyboard1JS').fadeIn('fast');
	});
	
	$('option.keyboard2JS').on('click', function() {
		instrumentImg.hide();
		$('img.keyboard2JS').fadeIn('fast');
	});

	$('option.keyboard3JS').on('click', function() {
		instrumentImg.hide();
		$('img.keyboard3JS').fadeIn('fast');
	});

	$('option.lyricsJS').on('click', function() {
		instrumentImg.hide();
	});

	$('option.mandolinJS').on('click', function() {
		instrumentImg.hide();
		$('img.mandolinJS').fadeIn('fast');
	});

	$('option.maracasJS').on('click', function() {
		instrumentImg.hide();
		$('img.maracasJS').fadeIn('fast');
	});

	$('option.marimbaJS').on('click', function() {
		instrumentImg.hide();
		$('img.marimbaJS').fadeIn('fast');
	});

	$('option.metallophoneJS').on('click', function() {
		instrumentImg.hide();
		$('img.metallophoneJS').fadeIn('fast');
	});

	$('option.melodicaJS').on('click', function() {
		instrumentImg.hide();
		$('img.melodicaJS').fadeIn('fast');
	});

	$('option.mixerJS').on('click', function() {
		instrumentImg.hide();
		$('img.mixerJS').fadeIn('fast');
	});

	$('option.oboeJS').on('click', function() {
		instrumentImg.hide();
		$('img.oboeJS').fadeIn('fast');
	});

	$('option.ocarinaJS').on('click', function() {
	instrumentImg.hide();
		$('img.ocarinaJS').fadeIn('fast');
	});

	$('option.organJS').on('click', function() {
		instrumentImg.hide();
		$('img.organJS').fadeIn('fast');
	});

	$('option.otherJS').on('click', function() {
		instrumentImg.hide();
	});

	$('option.percussionJS').on('click', function() {
		instrumentImg.hide();
	});

	$('option.pianoElectric').on('click', function() {
		instrumentImg.hide();
		$('img.pianoElectric').fadeIn('fast');
	});

	$('option.pianoGrand').on('click', function() {
		instrumentImg.hide();
		$('img.pianoGrand').fadeIn('fast');
	});

	$('option.pianoUpright').on('click', function() {
		instrumentImg.hide();
		$('img.pianoUpright').fadeIn('fast');
	});

	$('option.piccoloJS').on('click', function() {
		instrumentImg.hide();
		$('img.piccoloJS').fadeIn('fast');
	});

	$('option.recorderAlto').on('click', function() {
		instrumentImg.hide();
		$('img.recorderAlto').fadeIn('fast');
	});

	$('option.recorderSoprano').on('click', function() {
		instrumentImg.hide();
		$('img.recorderSoprano').fadeIn('fast');
	});

	$('option.saxAlto').on('click', function() {
		instrumentImg.hide();
		$('img.saxAlto').fadeIn('fast');
	});

	$('option.saxBaritone').on('click', function() {
		instrumentImg.hide();
		$('img.saxBaritone').fadeIn('fast');
	});

	$('option.saxSoprano').on('click', function() {
		instrumentImg.hide();
		$('img.saxSoprano').fadeIn('fast');
	});

	$('option.saxTenor').on('click', function() {
		instrumentImg.hide();
		$('img.saxTenor').fadeIn('fast');
	});

	$('option.shakuhachiJS').on('click', function() {
		instrumentImg.hide();
		$('img.shakuhachiJS').fadeIn('fast');
	});

	$('option.shamisenJS').on('click', function() {
		instrumentImg.hide();
		$('img.shamisenJS').fadeIn('fast');
	});

	$('option.tambourineJS').on('click', function() {
		instrumentImg.hide();
		$('img.tambourineJS').fadeIn('fast');
	});

	$('option.timpaniJS').on('click', function() {
		instrumentImg.hide();
		$('img.timpaniJS').fadeIn('fast');
	});

	$('option.triangleJS').on('click', function() {
		instrumentImg.hide();
		$('img.triangleJS').fadeIn('fast');
	});

	$('option.tromboneJS').on('click', function() {
		instrumentImg.hide();
		$('img.tromboneJS').fadeIn('fast');
	});

	$('option.trumpet1JS').on('click', function() {
		instrumentImg.hide();
		$('img.trumpet1JS').fadeIn('fast');
	});

	$('option.trumpet2JS').on('click', function() {
		instrumentImg.hide();
		$('img.trumpet2JS').fadeIn('fast');
	});

	$('option.ukuleleJS').on('click', function() {
		instrumentImg.hide();
		$('img.ukuleleJS').fadeIn('fast');
	});

	$('option.violaJS').on('click', function() {
		instrumentImg.hide();
		$('img.violaJS').fadeIn('fast');
	});

	$('option.violinJS').on('click', function() {
		instrumentImg.hide();
		$('img.violinJS').fadeIn('fast');
	});

	$('option.mic1JS').on('click', function() {
		instrumentImg.hide();
		$('img.mic1JS').fadeIn('fast');
	});

	$('option.mic2JS').on('click', function() {
		instrumentImg.hide();
		$('img.mic2JS').fadeIn('fast');
	});

	$('option.mic3JS').on('click', function() {
		instrumentImg.hide();
		$('img.mic3JS').fadeIn('fast');
	});

	$('option.wadaikoJS').on('click', function() {
		instrumentImg.hide();
		$('img.wadaikoJS').fadeIn('fast');
	});

	$('option.xylophoneJS').on('click', function() {
		instrumentImg.hide();
		$('img.xylophoneJS').fadeIn('fast');
	});

});