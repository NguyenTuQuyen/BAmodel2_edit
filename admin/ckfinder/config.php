<?php

$_CONFIG = array(
// GENERAL SETTINGS
    'disabled' => false,
    'theme' => "default",
    'uploadURL' => "../upload/".$barURL,
    'uploadDir' => "../upload/".$barURL,
    'types' => array(
    	// (F)CKEditor types
        'files'   =>  "",
        'flash'   =>  "swf",
        'images'  =>  "*img",
    	// TinyMCE types
        'file'    =>  "",
        'media'   =>  "swf flv avi mpg mpeg qt mov wmv asf rm",
        'image'   =>  "*img",
    ),

	// IMAGE SETTINGS
    'imageDriversPriority' 	=> "imagick gmagick gd",
    'jpegQuality' 			=> 90,
    'thumbsDir' 			=> "thumbs",
    'maxImageWidth' 		=> 0,
    'maxImageHeight' 		=> 0,
    'thumbWidth' 			=> 100,
    'thumbHeight' 			=> 100,
    'watermark' 			=> "",
	// DISABLE / ENABLE SETTINGS
    'denyZipDownload' => false,
    'denyUpdateCheck' => false,
    'denyExtensionRename' => false,
	// PERMISSION SETTINGS
    'dirPerms' => 0755,
    'filePerms' => 0644,
    'access' => array('files' => array('upload' => true,
									   'delete' => true,
									   'copy'   => true,
									   'move'   => true,
									   'rename' => true),
        			  'dirs' => array('create' => true,
            						  'delete' => true,
            						  'rename' => true)
    				  ),
	'deniedExts' => "exe com msi bat php phps phtml php3 php4 php5 php6 cgi pl",
	// MISC SETTINGS
    'filenameChangeChars' => array(/*
        ' ' => "_",
        ':' => "."
    */),

    'dirnameChangeChars' => array(/*
        ' ' => "_",
        ':' => "."
    */),

    'mime_magic' => "",
    'cookieDomain' => "",
    'cookiePath' => "",
    'cookiePrefix' => 'KCFINDER_',
	// THE FOLLOWING SETTINGS CANNOT BE OVERRIDED WITH SESSION SETTINGS

    '_check4htaccess' => true,
    //'_cssMinCmd' => "java -jar /path/to/yuicompressor.jar --type css {file}",
    //'_jsMinCmd' => "java -jar /path/to/yuicompressor.jar --type js {file}",
    //'_tinyMCEPath' => "/tiny_mce",

    '_sessionVar' => "KCFINDER",
    //'_sessionLifetime' => 30,
    //'_sessionDir' => "/full/directory/path",

    //'_sessionDomain' => ".mysite.com",
    //'_sessionPath' => "/my/path",
);

?>