<?php

class projectModel extends IdEnModel
	{
		public function __construct(){
				parent::__construct();
			}
        
		public function getProjectData($vProjectCode,$vProfileCode)
			{
				$vProjectCode = (int) $vProjectCode;
                $vProfileCode = (int) $vProfileCode;

				$vResultProjectData = $this->vDataBase->query("SELECT
                                                                    tb_enlaceme_projects.n_codproject,
                                                                    tb_enlaceme_projects.n_codprofile,
                                                                    tb_enlaceme_projects.c_project_name,
                                                                    tb_enlaceme_projects.c_project_description,
                                                                    tb_enlaceme_projects.n_project_hours,
                                                                    tb_enlaceme_projects.n_project_days,
                                                                    tb_enlaceme_projects.n_project_months,
                                                                    tb_enlaceme_projects.n_project_priceini,
                                                                    tb_enlaceme_projects.n_project_priceend,
                                                                    tb_enlaceme_projects.n_active
                                                                FROM tb_enlaceme_projects
                                                                    WHERE tb_enlaceme_projects.n_codproject = $vProjectCode
                                                                        AND tb_enlaceme_projects.n_codprofile = $vProfileCode;");
				return $vResultProjectData->fetchAll();
				$vResultProjectData->close();
			}
   
    }