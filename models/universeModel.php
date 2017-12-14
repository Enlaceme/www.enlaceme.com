<?php

class universeModel extends IdEnModel
	{
		public function __construct(){
				parent::__construct();
			}
        
		public function getProfilesActives()
			{

				$vResultProfilesActives = $this->vDataBase->query("SELECT
                                                                    tb_enlaceme_users.n_coduser,
                                                                    tb_enlaceme_users.c_email,
                                                                    CONCAT(tb_enlaceme_usernames.c_names,' ',tb_enlaceme_usernames.c_lastnames) AS c_names,
                                                                    tb_enlaceme_usernames.c_othername,
                                                                    tb_enlaceme_profiles.n_codprofile,
                                                                    tb_enlaceme_profiles.c_profilename,
                                                                    tb_enlaceme_profiles.n_profiletype,
                                                                    (SELECT
                                                                        tb_enlaceme_images.b_image_content
                                                                      FROM tb_enlaceme_images
                                                                        WHERE tb_enlaceme_images.n_codimage = (SELECT
                                                                                                                    tb_enlaceme_profileimages.n_codimage
                                                                                                                  FROM tb_enlaceme_profileimages
                                                                                                                    WHERE tb_enlaceme_profileimages.n_codprofile = tb_enlaceme_profiles.n_codprofile
                                                                                                                      AND tb_enlaceme_profileimages.n_active = 1)) AS b_image_content,
                                                                    (SELECT
                                                                        tb_enlaceme_profiledescription.c_profile_description
                                                                      FROM tb_enlaceme_profiledescription
                                                                        WHERE tb_enlaceme_profiledescription.n_codprofile = tb_enlaceme_profiles.n_codprofile) AS c_profile_description,
                                                                    (SELECT
                                                                        tb_enlaceme_profilecontacts.c_contact_whatsapp
                                                                      FROM tb_enlaceme_profilecontacts
                                                                        WHERE tb_enlaceme_profilecontacts.n_codprofile = tb_enlaceme_profiles.n_codprofile) AS c_contact_whatsapp,
                                                                    tb_enlaceme_users.n_active AS n_active_users,
                                                                    tb_enlaceme_usernames.n_active AS n_active_usernames,
                                                                    tb_enlaceme_profiles.n_active AS n_active_profiles
                                                                FROM tb_enlaceme_users, tb_enlaceme_usernames, tb_enlaceme_profiles
                                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                                        AND tb_enlaceme_usernames.n_coduser = tb_enlaceme_profiles.n_coduser;");
				return $vResultProfilesActives->fetchAll();
				$vResultProfilesActives->close();
			}   
    }