<?php 

class InstallsController extends Controller {

	public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Install();
    }

	public function admin_index() {
		if ( $_POST ) {
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			exit();
		}

		$this->data = $this->model->getTableList();
	}
}