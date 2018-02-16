<?Php

class searchController extends IdEnController
	{		
		public function __construct(){
                parent::__construct();         
			}
			
		public function index(){  

                $this->vView->visualize('search');
			}
	}
?>