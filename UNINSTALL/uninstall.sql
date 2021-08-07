##################################################################################
# UNINSTALL Facebook Inventory 1.0.1 - 2021-08-07 - webchills
# UNINSTALL - NUR AUSFÜHREN WENN SIE DAS MODUL KOMPLETT ENTFERNEN WOLLEN!
##################################################################################

SET @gid=0;
SELECT @gid:=configuration_group_id
FROM configuration_group
WHERE configuration_group_title = 'Facebook Inventory' LIMIT 1;
DELETE FROM configuration WHERE configuration_group_id = @gid;
DELETE FROM configuration_group WHERE configuration_group_id = @gid;
DELETE FROM admin_pages WHERE page_key='configFacebookInventory';
DELETE FROM admin_pages WHERE page_key='facebookinventory';