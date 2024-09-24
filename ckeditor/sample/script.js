const watchdog = new CKSource.EditorWatchdog();

window.watchdog = watchdog;

watchdog.setCreator( ( element, config ) => {
	return CKSource.Editor
		.create( element, config )
		.then( editor => {
			return editor;
		} );
} );

watchdog.setDestructor( editor => {
	return editor.destroy();
} );

watchdog.on( 'error', handleSampleError );

createDialog().then( config => watchdog.create(
	document.querySelector( '.editor' ), {
		licenseKey: config.licenseKey,
		ckbox: {
			tokenUrl: config.ckboxTokenUrl
		},
		documentOutline: {
			container: document.querySelector( '.document-outline-container' )
		},
		wproofreader: {
			serviceId: config.wproofreaderServiceId,
			srcUrl: 'https://svc.webspellchecker.net/spellcheck31/wscbundle/wscbundle.js'
		}
	}
) )
	.catch( handleSampleError );

function handleSampleError( error ) {
	const issueUrl = 'https://github.com/ckeditor/ckeditor5/issues';

	const message = [
		'Oops, something went wrong!',
		`Please, report the following error on ${ issueUrl } with the build id "xb8fd3v00yll-okajzqt6s5oe" and the error stack trace:`
	].join( '\n' );

	console.error( message );
	console.error( error );
}
