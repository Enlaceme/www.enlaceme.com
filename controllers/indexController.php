<?Php

class indexController extends IdEnController
	{		
		public function __construct(){
                parent::__construct();
			}
			
		public function index(){
            $this->vView->visualize('index');
			}       
	}
?>