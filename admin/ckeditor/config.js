/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http=//ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.filebrowserBrowseUrl      = 'ckfinder/index.php',
	config.filebrowserImageBrowseUrl = 'ckfinder/index.php?',
	config.filebrowserFlashBrowseUrl = 'ckfinder/index.php?',
	config.filebrowserUploadUrl      = 'ckfinder/core/connector/php/connector.php',
	config.filebrowserImageUploadUrl = 'ckfinder/core/connector/php/connector.php',
	config.filebrowserFlashUploadUrl = 'ckfinder/core/connector/php/connector.php'
	// 

   // config.filebrowserBrowseUrl = 'media/kcfinder/browse.php?opener=ckeditor&type=files';
   // config.filebrowserImageBrowseUrl = 'media/kcfinder/browse.php?opener=ckeditor&type=images';
   // config.filebrowserFlashBrowseUrl = 'media/kcfinder/browse.php?opener=ckeditor&type=flash';
   // config.filebrowserUploadUrl = 'media/kcfinder/upload.php?opener=ckeditor&type=files';
   // config.filebrowserImageUploadUrl = 'media/kcfinder/upload.php?opener=ckeditor&type=images';
   // config.filebrowserFlashUploadUrl = 'media/kcfinder/upload.php?opener=ckeditor&type=flash';	
};
