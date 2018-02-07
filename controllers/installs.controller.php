<?php 

class InstallsController extends Controller {

	public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Install();
    }

	public function admin_index() {
		$this->data = $this->model->getTableList();
	}
}