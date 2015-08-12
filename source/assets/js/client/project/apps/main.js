goog.provide( 'brd.apps.Main' );

goog.require( 'goog.dom' );
goog.require( 'goog.fx.anim' );
goog.require( 'brd.templates.Main' );


brd.apps.Main = function() {

	goog.fx.anim.setAnimationWindow( window );

	var helloWorld = soy.renderAsFragment( brd.templates.Main.HelloWorld );
	goog.dom.appendChild( document.body, helloWorld );

	console.log( TweenMax );
};