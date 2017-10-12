<?php

class professionModel extends IdEnModel
	{
		public function __construct(){
				parent::__construct();
			}
        
        /* BEGIN SELECT STATEMENT QUERY  */
		public function getProfessions()
			{
				$vResultProfessions = $this->vDataBase->query("SELECT
                                                                    tb_enlaceme_professions.n_codprofession,
                                                                    tb_enlaceme_professions.c_profession_name,
                                                                    tb_enlaceme_professions.c_profession_description,
                                                                    tb_enlaceme_professions.n_active
                                                                FROM tb_enlaceme_professions
                                                                    WHERE tb_enlaceme_professions.n_active = 1");
				return $vResultProfessions->fetchAll();
				$vResultProfessions->close();
			}   
    
		public function getProfessionExists($vProfessionName)
			{
				$vProfessionName = (string) $vProfessionName;
				

				$vResultProfessionExists = $this->vDataBase->query("SELECT
                                                                        COUNT(*)
                                                                    FROM tb_enlaceme_professions
                                                                        WHERE tb_enlaceme_professions.c_profession_name = '$vProfessionName'
                                                                            AND tb_enlaceme_professions.n_active = 1");
				return $vResultProfessionExists->fetchColumn();
				$vResultProfessionExists->close();
			}    
            
        /* END SELECT STATEMENT QUERY  */
    
        /* BEGIN INSERT STATEMENT QUERY  */    
		public function insertProfession($vProfessionName, $vProfessionDescription){
            
                $vProfessionName = (string) stripslashes(htmlentities($vProfessionName));
                $vProfessionDescription = (string) stripslashes(htmlentities($vProfessionDescription));
                
                $vActive = 1;

                $vUserCreate = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

				$vResultInsertProfession = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_professions(c_profession_name, c_profession_description, n_active, c_usercreate, d_datecreate)
																VALUES(:c_profession_name, :c_profession_description, :n_active, :c_usercreate, NOW())")
								->execute(
										array(
                                            ':c_profession_name' => $vProfessionName,
                                            ':c_profession_description' => $vProfessionDescription,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
										));
                return $vResultInsertProfession = $this->vDataBase->lastInsertId();
                $vResultInsertProfession->close();            
			}
        /* END INSERT STATEMENT QUERY  */
    }