<?php
define('TEXT_FACEBOOKINVENTORY_STARTED', 'Facebook Feeder gestartet ' . date("Y/m/d H:i:s"));
define('TEXT_FACEBOOKINVENTORY_FILE_LOCATION', 'Feed Datei - ');
define('TEXT_FACEBOOKINVENTORY_FEED_COMPLETE', 'Facebook Datei vollständig');
define('TEXT_FACEBOOKINVENTORY_FEED_TIMER', 'Zeit:');
define('TEXT_FACEBOOKINVENTORY_FEED_SECONDS', 'Sekunden');
define('TEXT_FACEBOOKINVENTORY_FEED_RECORDS', ' Einträge');
define('FACEBOOKINVENTORY_TIME_TAKEN', 'in');
define('FACEBOOKINVENTORY_VIEW_FILE', 'Datei ansehen:');
define('ERROR_FACEBOOKINVENTORY_DIRECTORY_NOT_WRITEABLE', 'Ihr Facebook Feed Verzeichnis ist nicht beschreibbar! Bitte setzen Sie für das /' . FACEBOOKINVENTORY_DIRECTORY . ' Verzeichnis chmod 755 oder 777 je nach Ihrer Serverkonfiguration.');
define('ERROR_FACEBOOKINVENTORY_DIRECTORY_DOES_NOT_EXIST', 'Ihr Facebook Feed  Verzeichnis existiert nicht! Bitte legen Sie das /' . FACEBOOKINVENTORY_DIRECTORY . ' Verzeichis an und setzen chmod 755 oder 777 je nach Ihrer Serverkonfiguration.');
define('ERROR_FACEBOOKINVENTORY_OPEN_FILE', 'Fehler beim Öffnen der Facebook Feed Datei "' . DIR_FS_CATALOG . FACEBOOKINVENTORY_DIRECTORY . FACEBOOKINVENTORY_OUTPUT_FILENAME . '"');
define('TEXT_FACEBOOKINVENTORY_UPLOAD_STARTED', 'Upload gestartet...');
define('TEXT_FACEBOOKINVENTORY_UPLOAD_FAILED', 'Upload fehlgeschlagen...');
define('TEXT_FACEBOOKINVENTORY_UPLOAD_OK', 'Upload ok!');
define('TEXT_FACEBOOKINVENTORY_ERRSETUP', 'Facebook Feeder Setup Fehler:');
define('TEXT_FACEBOOKINVENTORY_ERRSETUP_L', 'Facebook Feed Sprache "%s" ist nicht in der Zen-Cart Administration konfiguriert.');
define('TEXT_FACEBOOKINVENTORY_ERRSETUP_C', 'Facebook Feed Währung "%s" ist nicht in der Zen-Cart Administration konfiguriert.');