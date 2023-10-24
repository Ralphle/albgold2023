CREATE TABLE tx_news_domain_model_news (
    _migrated tinyint(4) unsigned DEFAULT '0' NOT NULL,
    _migrated_uid int(11) unsigned DEFAULT '0' NOT NULL,
    _migrated_table varchar(255) DEFAULT '' NOT NULL,
    _migrated_twice tinyint(4) unsigned DEFAULT '0' NOT NULL
);





CREATE TABLE sys_category (
    _migrated tinyint(4) unsigned DEFAULT '0' NOT NULL,
    _migrated_uid int(11) DEFAULT '0' NOT NULL,
    _migrated_table varchar(255) DEFAULT '' NOT NULL,
    _migrated_twice tinyint(4) unsigned DEFAULT '0' NOT NULL,
	
	catcolor varchar(255) DEFAULT '' NOT NULL
);






#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
	location int(11) unsigned DEFAULT '0' NOT NULL,
	eventtime text NOT NULL,
	booked int(1) unsigned DEFAULT '0' NOT NULL,
	price text NOT NULL,
	pricecaption text NOT NULL,
	starttimeevent int(11) unsigned NOT NULL default NULL,
	endtimeevent int(11) unsigned NOT NULL default NULL,
	highlight int(1) unsigned DEFAULT '0' NOT NULL,
	extendedlinks text NOT NULL,
);



#
# Table structure for table 'tx_xxnewsrecipe_domain_model_location'
#
CREATE TABLE tx_event_domain_model_location (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	locationaddress text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 	KEY language (l10n_parent,sys_language_uid)

);



CREATE TABLE tx_bootstrappackage_icon_group_item (
	iconcolor varchar(255) DEFAULT '' NOT NULL,
);