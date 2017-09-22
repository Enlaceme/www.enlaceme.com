<?Php

class errorController extends IdEnController
	{		
		public function __construct(){
                parent::__construct();     
			}
			
		public function index(){
            $this->vView->visualize('index');
			}
        
		public function controller(){
            $this->vView->visualize('controller');
			}

		public function view(){
            $this->vView->visualize('view');
			} 
    
		public function sessionTimeExpired(){
            $this->vView->visualize('sessionTimeExpired');
			}     
	}
?>