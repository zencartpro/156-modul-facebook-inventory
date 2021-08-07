<?php
/**
 * @package Facebook Inventory
 * based on Google Merchant Center Feeder Copyright 2007 Numinix Technology (www.numinix.com)
 * @copyright Copyright 2011-2021 webchills (www.webchills.at)
 * @copyright Portions Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: 1_0_0.php 2021-08-07 19:11:54Z webchills $
 */


$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'Facebook Inventory'
LIMIT 1;");

$db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) VALUES
('URL des Shops', 'FACEBOOKINVENTORY_ADDRESS', 'https://www.meinshop.de', 'Geben Sie die URL Ihres Shops ein', @gid, 1, NOW(), NULL, NULL),
('Kurzbeschreibung Ihres Shops', 'FACEBOOKINVENTORY_DESCRIPTION', '', 'Geben Sie eine kurze Beschreibung Ihres Shops ein', @gid, 2, NOW(), NULL, NULL),
('Dateiname des Produktfeeds', 'FACEBOOKINVENTORY_OUTPUT_FILENAME', 'meinshop', 'Geben Sie den gewünschten Dateinamen für das Produktfeed an. Wird dann ergänzt mit _products.xml', @gid, 6, NOW(), NULL, NULL),
('Produktfeeddatei komprimieren', 'FACEBOOKINVENTORY_COMPRESS', 'false', 'Produktfeed komrimieren?<br/>Voreinstellung: false', @gid, 7, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('EAN im Produktfeed', 'FACEBOOKINVENTORY_EAN', 'false', 'Soll die EAN ins Produktfeed aufgenommen werden?<br/>Eigenes Feld für die EAN in der Tabelle products erforderlich!', @gid, 8, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Marke im Produktfeed', 'FACEBOOKINVENTORY_BRAND', 'false', 'Soll die Marke ins Produktfeed aufgenommen werden?<br/>Eigenes Feld für die Marke in der Tabelle products erforderlich!', @gid, 9, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('ISBN im Produktfeed', 'FACEBOOKINVENTORY_ISBN', 'false', 'Soll die ISBN ins Produktfeed aufgenommen werden?<br/>Eigenes Feld für die ISBN in der Tabelle products erforderlich!', @gid, 10, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Online Only im Produktfeed', 'FACEBOOKINVENTORY_ONLINE_ONLY', 'false', 'Soll den Artikeln das Attribut Online Only zugeordnet werden?<br/>Nur auf yes stellen, falls alle Ihre Artikel nur online bestellbar sind und nicht vor Ort in Ihrem Ladenlokal erworben können!', @gid, 11, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Ablaufdatum Basiseinstellung', 'FACEBOOKINVENTORY_EXPIRATION_BASE', 'now', 'Wovon soll das Ablaufdatum ausgehen?:<ul><li>now - vom jetzigen Datum;</li><li>product - vom beim Artikel hinterlegten Datum</li></ul>', @gid, 12, NOW(), NULL, 'zen_cfg_select_option(array(\'now\', \'product\'),'),
('Ablaufdatum in Tagen', 'FACEBOOKINVENTORY_EXPIRATION_DAYS', '20', 'Wieviel Tage sollen beim Ablaufdatum hinzugezählt werden?<br/>Voreinstellung: 20', @gid, 13, NOW(), NULL, NULL),
('Währung aufnehmen', 'FACEBOOKINVENTORY_CURRENCY_DISPLAY', 'false', 'Soll die Währung ins Produktfeed übernommen werden? Falls ja, wird an die Artikellinks im Feed das Kürzel für die Währung angehängt.<br/>Nur sinnvoll falls es im Shop verschiedene Währungen gibt.', @gid, 14, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Währung', 'FACEBOOKINVENTORY_CURRENCY', 'EUR', 'Welche Währung soll Ihr Produktfeed haben? Euro oder Dollar?<br/<Voreingestellt: EUR', @gid, 15, NOW(), NULL, 'zen_cfg_select_option(array(\'EUR\', \'USD\'),'),
('Offer ID', 'FACEBOOKINVENTORY_OFFER_ID', 'id', 'Eine eindeutige ID für jeden Artikel<br/>die Produkt ID aus Zen-Cart', @gid, 16, NOW(), NULL, 'zen_cfg_select_option(array(\'id\'),'),
('Menge im Produktfeed', 'FACEBOOKINVENTORY_IN_STOCK', 'false', 'Soll der Lagerbestand der Artikel ins Produktfeed übernommen werden?', @gid, 17, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Artikel mit Menge Null aufnehmen', 'FACEBOOKINVENTORY_ZERO_QUANTITY', 'false', 'Sollen Artikel aufgenommen werden, deren Lagerbestand Null ist?', @gid, 18, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Menge Voreinstellung', 'FACEBOOKINVENTORY_DEFAULT_QUANTITY', '0', 'Welche Mengenangabe wollen Sie für Artikel mit Lagerbestand Null?', @gid, 19, NOW(), NULL, NULL), 
('Verzeichnis des Produktfeeds', 'FACEBOOKINVENTORY_DIRECTORY', 'feed/facebookinventory/', 'Geben Sie hier das Verzeichnis an, in dem das Produktfeed gespeichert werden soll.', @gid, 21, NOW(), NULL, NULL),
('cPath in der URL verwenden', 'FACEBOOKINVENTORY_USE_CPATH', 'false', 'Sollen die Artikel URLs den cPath enthalten?', @gid, 22, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Maximale Artikelanzahl', 'FACEBOOKINVENTORY_MAX_PRODUCTS', '0', 'Voreinstellung = 0 für unbegrenzte Artikelanzahl', @gid, 23, NOW(), NULL, NULL),
('Startpunkt', 'FACEBOOKINVENTORY_START_PRODUCTS', '0', 'Soll erst ab einem bestimmten Eintrag gestartet werden (dies ist NICHT die Artikel ID, es geht hier darum die Zahl der Artikel zu begrenzen)<br />Voreinstellung=0', @gid, 24, NOW(), NULL, NULL),
('Enthaltene Kategorien', 'FACEBOOKINVENTORY_POS_CATEGORIES', '', 'Geben Sie die Kategorienummern an, die enthalten sein sollen, durch Komma getrennt (z.B. 1,2,3)<br>Leer lassen, um alle Kategorien aufzunehmen (empfohlen)', @gid, 25, NOW(), NULL, NULL),
('Ausgeschlossene Kategorien', 'FACEBOOKINVENTORY_NEG_CATEGORIES', '', 'Geben Sie die Kategorienummern an, die ausgeschlossen werden sollen durch Komma getrennt (z.B. 1,2,3)<br>Leer lassen, um alle Kategorien aufzunehmen (empfohlen)', @gid, 26, NOW(), NULL, NULL),
('Enthaltene Hersteller', 'FACEBOOKINVENTORY_POS_MANUFACTURERS', '', 'Geben Sie die Hersteller IDs an, die enthalten sein sollen, durch Komma getrennt (z.B. 1,2,3)<br>Leer lassen, um alle Hersteller aufzunehmen (empfohlen)', @gid, 27, NOW(), NULL, NULL),
('Ausgeschlossene Hersteller', 'FACEBOOKINVENTORY_NEG_MANUFACTURERS', '', 'Geben Sie die Hersteller IDs an, die ausgeschlossen werden sollen durch Komma getrennt (z.B. 1,2,3)<br>Leer lassen, um alle Hersteller aufzunehmen (empfohlen)', @gid, 28, NOW(), NULL, NULL),
('Gewicht im Produktfeed', 'FACEBOOKINVENTORY_SHIPPINGWEIGHT', 'false', 'Soll das beim Artikel hinterlegte Versandgewicht ins Produktfeed übernommen werden?', @gid, 29, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Masseinheit Gewicht', 'FACEBOOKINVENTORY_UNITS', 'Kilogramm', 'In welcher Einheit geben Sie das Gewicht an?<br />Kilogramm oder Pounds', @gid, 30, NOW(), NULL, 'zen_cfg_select_option(array(\'Kilogramm\', \'Pfund\'),'),
('Artikeltyp', 'FACEBOOKINVENTORY_PRODUCT_TYPE', 'top', 'Top-Level, Bottom-Level, oder Full-Path<br/>Sollte auf top gelassen werden', @gid, 31, NOW(), NULL, 'zen_cfg_select_option(array(\'top\', \'bottom\', \'full\'),'),
('Alternative Bild URL', 'FACEBOOKINVENTORY_ALTERNATE_IMAGE_URL', '', 'Falls Ihre Artikelbilder woanders gehostet werden, geben Sie hier die alternative URL zu den Bildern an (z.B.. http://www.domain.com/images/).  Die Bilddatei wird dann ans Ende dieses speziellen Links angehängt.', @gid, 32, NOW(), NULL, NULL),
('Image Handler', 'FACEBOOKINVENTORY_IMAGE_HANDLER', 'false', 'Bilder per Image Handler verkleinern? Nur auf true stellen, falls Sie das Modul Image Handler im Einsatz haben!', @gid, 33, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Metatag Titel verwenden', 'FACEBOOKINVENTORY_META_TITLE', 'false', 'Soll als Artikelname der in den Metatags angegebene Titel verwendet werden?', @gid, 34, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Debug', 'FACEBOOKINVENTORY_DEBUG', 'true', 'Debug Modus aktivieren? Beim Erstellen des Feeds werden dann Zusatzinfos angezeigt. Nur für Fehlersuche interessant.', @gid, 35, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Sprache des Feeds', 'FACEBOOKINVENTORY_LANGUAGE', 'Deutsch', 'Sprache für das Artikelfeed. Nicht ändern! Nur falls in Ihrer Tabelle languages der Name für Deutsch anders lauten sollte!', @gid, 36, NOW(), NULL, NULL),
('Sicherheitsschlüssel', 'FACEBOOKINVENTORY_KEY', '".md5(time() . rand(0,99999))."', 'Geben Sie eine zufällige Folge von Ziffern und Buchstaben ein, um sicherzustellen, dass nur der Admin das Produktfeed generieren kann.', @gid, 37, NOW(), NULL, NULL)");

// add configuration/tools menu
if (!zen_page_key_exists($admin_page)) {
$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'Facebook Inventory'
LIMIT 1;");
$db->Execute("INSERT IGNORE INTO " . TABLE_ADMIN_PAGES . " (page_key,language_key,main_page,page_params,menu_key,display_on_menu,sort_order) VALUES 
('configFacebookInventory','BOX_CONFIGURATION_FACEBOOKINVENTORY','FILENAME_CONFIGURATION',CONCAT('gID=',@gid),'configuration','Y',@gid)");
$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'Facebook Inventory'
LIMIT 1;");
$db->Execute("INSERT IGNORE INTO " . TABLE_ADMIN_PAGES . " (page_key,language_key,main_page,page_params,menu_key,display_on_menu,sort_order) VALUES 
('facebookinventory','BOX_FACEBOOKINVENTORY','FILENAME_FACEBOOKINVENTORY','','tools','Y',101)");
$messageStack->add('Facebook Inventory erfolgreich installiert.', 'success');  
}