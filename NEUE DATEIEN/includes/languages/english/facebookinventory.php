<?php
define('TEXT_FACEBOOKINVENTORY_STARTED', 'Facebook Feeder started ' . date("Y/m/d H:i:s"));
define('TEXT_FACEBOOKINVENTORY_FILE_LOCATION', 'Feed File - ');
define('TEXT_FACEBOOKINVENTORY_FEED_COMPLETE', 'Facebook File complete');
define('TEXT_FACEBOOKINVENTORY_FEED_TIMER', 'Time:');
define('TEXT_FACEBOOKINVENTORY_FEED_SECONDS', 'Seconds');
define('TEXT_FACEBOOKINVENTORY_FEED_RECORDS', ' Entries');
define('FACEBOOKINVENTORY_TIME_TAKEN', 'in');
define('FACEBOOKINVENTORY_VIEW_FILE', 'Show file:');
define('ERROR_FACEBOOKINVENTORY_DIRECTORY_NOT_WRITEABLE', 'Your Facebook Feed directory is not writeable! Please set /' . FACEBOOKINVENTORY_DIRECTORY . ' to chmod 755 or 777 depending on your server configuration.');
define('ERROR_FACEBOOKINVENTORY_DIRECTORY_DOES_NOT_EXIST', 'Your Facebook Feed  directory does not exist! Please create /' . FACEBOOKINVENTORY_DIRECTORY . ' directory and set it to chmod 755 or 777 depending on your server configuration.');
define('ERROR_FACEBOOKINVENTORY_OPEN_FILE', 'Fehler beim Öffnen der Facebook Feed Datei "' . DIR_FS_CATALOG . FACEBOOKINVENTORY_DIRECTORY . FACEBOOKINVENTORY_OUTPUT_FILENAME . '"');
define('TEXT_FACEBOOKINVENTORY_UPLOAD_STARTED', 'Upload started...');
define('TEXT_FACEBOOKINVENTORY_UPLOAD_FAILED', 'Upload failes...');
define('TEXT_FACEBOOKINVENTORY_UPLOAD_OK', 'Upload ok!');
define('TEXT_FACEBOOKINVENTORY_ERRSETUP', 'Facebook Feeder Setup Error:');
define('TEXT_FACEBOOKINVENTORY_ERRSETUP_L', 'Facebook Feed language "%s" is not configured in your Zen Cart Administration.');
define('TEXT_FACEBOOKINVENTORY_ERRSETUP_C', 'Facebook Feed currency "%s" is not configured in your Zen Cart Administration.');