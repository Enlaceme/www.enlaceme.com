<?php

class accessModel extends IdEnModel
	{
		public function __construct(){
				parent::__construct();
			}
        
		public function getAccessStatus($vEmail,$vPassword)
			{
				$vEmail = (string) $vEmail;
				$vPassword = (string) IdEnHash::getHash('sha1',$vPassword,DEFAULT_HASH_KEY);

				$vResultAccessStatus = $this->vDataBase->query("SELECT
                                                            tb_enlaceme_users.n_coduser,
                                                            tb_enlaceme_users.c_username,
                                                            tb_enlaceme_users.c_pass1,
                                                            tb_enlaceme_users.c_pass2,
                                                            tb_enlaceme_users.c_email,
                                                            tb_enlaceme_users.c_userrole,
                                                            tb_enlaceme_users.c_email,
                                                            tb_enlaceme_users.n_active,
                                                            tb_enlaceme_usernames.n_codusername,
                                                            tb_enlaceme_usernames.c_names,
                                                            tb_enlaceme_usernames.c_lastnames,
                                                            tb_enlaceme_usernames.c_othername
                                                        FROM tb_enlaceme_users, tb_enlaceme_usernames
                                                        WHERE tb_enlaceme_users.n_coduser = tb_enlaceme_usernames.n_coduser
                                                            AND tb_enlaceme_users.c_email = '$vEmail'
                                                            AND tb_enlaceme_users. c_pass1 = '$vPassword'
                                                            AND tb_enlaceme_users. c_pass2 = '$vPassword';");
				return $vResultAccessStatus->fetch();
				$vResultAccessStatus->close();
			}
    
		public function getValidPassword($vEmail,$vPassword)
			{
				$vEmail = (string) $vEmail;
				$vPassword = (string) IdEnHash::getHash('sha1',$vPassword,DEFAULT_HASH_KEY);

				$vResultValidPassword = $this->vDataBase->query("SELECT
                                                                        COUNT(*)
                                                                    FROM tb_enlaceme_users
                                                                        WHERE tb_enlaceme_users.c_email = '$vEmail'
                                                                            AND tb_enlaceme_users. c_pass1 = '$vPassword'
                                                                            AND tb_enlaceme_users. c_pass2 = '$vPassword';");
				return $vResultValidPassword->fetchColumn();
				$vResultValidPassword->close();
			}    
    }