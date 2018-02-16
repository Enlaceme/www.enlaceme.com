TRUNCATE TABLE tb_enlaceme_facebookusers;
TRUNCATE TABLE tb_enlaceme_profiles;
TRUNCATE TABLE tb_enlaceme_users;

CREATE TABLE `tb_enlaceme_facebookusers` (
 `n_codfacebookuser` int(11) NOT NULL auto_increment,
 `c_id` TEXT collate utf8_spanish_ci DEFAULT NULL,
 `c_oauth_provider` enum('','facebook','google','twitter') collate utf8_spanish_ci default NULL,
 `c_first_name` TEXT collate utf8_spanish_ci DEFAULT NULL,
 `c_last_name` TEXT collate utf8_spanish_ci DEFAULT NULL,
 `c_email` TEXT collate utf8_spanish_ci DEFAULT NULL,
 `c_gender` TEXT collate utf8_spanish_ci DEFAULT NULL,
 `c_locale` TEXT collate utf8_spanish_ci DEFAULT NULL,
 `c_picture` TEXT collate utf8_spanish_ci DEFAULT NULL,
 `c_link` TEXT collate utf8_spanish_ci DEFAULT NULL,
 `d_datecreate` datetime DEFAULT NULL,
 `d_datemod` datetime DEFAULT NULL,
 PRIMARY KEY (`n_codfacebookuser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tb_enlaceme_users` (
  `n_coduser` int(11) NOT NULL auto_increment,
  `n_codfacebookuser` int(11) NOT NULL,
  `c_username` varchar(50) collate utf8_spanish_ci DEFAULT NULL,
  `c_pass1` text collate utf8_spanish_ci DEFAULT NULL,
  `c_pass2` text collate utf8_spanish_ci DEFAULT NULL,
  `c_email` varchar(100) collate utf8_spanish_ci DEFAULT NULL,
  `c_userrole` text collate utf8_spanish_ci DEFAULT NULL,
  `n_tnc` int(11) DEFAULT NULL,
  `n_activationcode` bigint(255) unsigned DEFAULT NULL,
  `n_active` int(11) DEFAULT NULL,
  `c_usercreate` varchar(50) collate utf8_spanish_ci DEFAULT NULL,
  `d_datecreate` datetime DEFAULT NULL,
  `c_usermod` varchar(50) collate utf8_spanish_ci DEFAULT NULL,
  `d_datemod` datetime DEFAULT NULL,
  PRIMARY KEY (`n_coduser`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE `tb_enlaceme_profiles` (
  `n_codprofile` int(11) NOT NULL auto_increment,
  `n_coduser` int(11) DEFAULT NULL,
  `c_profilename` TEXT collate utf8_spanish_ci DEFAULT NULL,
  `c_name` TEXT collate utf8_spanish_ci DEFAULT NULL,
  `c_lastname` TEXT collate utf8_spanish_ci DEFAULT NULL,  
  `c_description` TEXT collate utf8_spanish_ci DEFAULT NULL,
  `d_datebirth` date DEFAULT NULL,
  `n_profiletype` int(11) DEFAULT NULL,
  `n_active` int(11) DEFAULT NULL,
  `c_usercreate` varchar(50) collate utf8_spanish_ci DEFAULT NULL,
  `d_datecreate` datetime DEFAULT NULL,
  `c_usermod` varchar(50) collate utf8_spanish_ci DEFAULT NULL,
  `d_datemod` datetime DEFAULT NULL,
  PRIMARY KEY  (`n_codprofile`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE `tb_enlaceme_profilelocation` (
  `n_codprofilelocation` int(11) NOT NULL auto_increment,
  `n_codprofile` int(11) DEFAULT NULL,
  `n_coduser` int(11) DEFAULT NULL,
  `c_country` TEXT collate utf8_spanish_ci DEFAULT NULL,
  `c_city` TEXT collate utf8_spanish_ci DEFAULT NULL,
  `c_address` TEXT collate utf8_spanish_ci DEFAULT NULL,  
  `n_active` int(11) DEFAULT NULL,
  `c_usercreate` varchar(50) collate utf8_spanish_ci DEFAULT NULL,
  `d_datecreate` datetime DEFAULT NULL,
  `c_usermod` varchar(50) collate utf8_spanish_ci DEFAULT NULL,
  `d_datemod` datetime DEFAULT NULL,
  PRIMARY KEY  (`n_codprofilelocation`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE `tb_enlaceme_profilephones` (
  `n_codprofilephone` int(11) NOT NULL auto_increment,
  `n_codprofile` int(11) DEFAULT NULL,
  `n_coduser` int(11) DEFAULT NULL,
  `n_type` int(11) DEFAULT NULL,
  `t_number` TEXT collate utf8_spanish_ci DEFAULT NULL,
  `n_active` int(11) DEFAULT NULL,
  `c_usercreate` varchar(50) collate utf8_spanish_ci DEFAULT NULL,
  `d_datecreate` datetime DEFAULT NULL,
  `c_usermod` varchar(50) collate utf8_spanish_ci DEFAULT NULL,
  `d_datemod` datetime DEFAULT NULL,
  PRIMARY KEY  (`n_codprofilephone`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;