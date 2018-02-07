<?php 

class InstallsController extends Controller {

	public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Install();
    }

	public function admin_index() {
		if ( $_POST ) {
			$tables = $_POST['tables'];
			foreach($tables as $key => $value) {
				$desc = $this->model->getTableDescription($key);
				pre($desc);
			}
			exit();
		}

		$this->data = $this->model->getTableList();
	}

	public function admin_crud() {
		$params = $this->params;
		$table = $params[0];
		$this->data = $this->model->getTableDescription($table);
	}
}