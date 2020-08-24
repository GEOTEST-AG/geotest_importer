#
# Table structure for table 'tx_geotestimport_fachbereiche'
#
CREATE TABLE tx_geotestimport_fachbereiche (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	id varchar(4) DEFAULT '' NOT NULL,
	fachbereich varchar(255) DEFAULT '' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_geotestimport_filialen'
#
CREATE TABLE tx_geotestimport_filialen (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	id varchar(4) DEFAULT '' NOT NULL,
	filiale varchar(255) DEFAULT '' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for extending table 'tt_address'
#
CREATE TABLE tt_address (
	external_id varchar(255) DEFAULT '' NOT NULL,
	fachbereich_id varchar(255) DEFAULT '' NOT NULL,
	filiale_id varchar(255) DEFAULT '' NOT NULL,
	verwaltungsrat 	tinyint(1),
	gl 	tinyint(1)
);
