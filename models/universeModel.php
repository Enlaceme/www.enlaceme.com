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
                                                                    tb_enlaceme_profiles.n_profiletype
                                                                FROM tb_enlaceme_users, tb_enlaceme_usernames, tb_enlaceme_profiles
                                                                    WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                                        AND tb_enlaceme_usernames.n_coduser = tb_enlaceme_profiles.n_coduser
                                                                        AND tb_enlaceme_users.n_active = 1
                                                                        AND tb_enlaceme_usernames.n_active = 1
                                                                        AND tb_enlaceme_profiles.n_active = 1");
				return $vResultProfilesActives->fetchAll();
				$vResultProfilesActives->close();
			}   
    }