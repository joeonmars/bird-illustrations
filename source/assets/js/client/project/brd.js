goog.provide('brd');

goog.require('brd.apps.Main');


brd.Config = {};


brd.init = function( config ) {

	brd.Config = config;
	
	switch(brd.Config['app']) {
		case 'main':
		brd.apps.Main();
		break;
	};
};

goog.exportProperty(window, 'brd', brd);
goog.exportProperty(brd, 'init', brd.init);