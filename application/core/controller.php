<?php

class Controller
{
    /**
     * @var null Database Connection
     */
    public $db = null;

    /**
     * @var null Model
     */
    public $model = null;

    /**
     * Whenever controller is created, open a database connection too and load "the model".
     */
    function __construct()
    {
        $this->openDatabaseConnection();
        $this->loadModel();
        session_start();
		date_default_timezone_set('UTC');
    }

    /**
     * Open the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {
        // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
        // "objects", which means all results will be objects, like this: $result->user_name !
        // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
        // @see http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        // generate a database connection, using the PDO connector
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }

    /**
     * Loads the "model".
     * @return object model
     */
    public function loadModel(){
        require APP . 'model/model.php';
        // create new "model" (and pass the database connection)
        $this->model = new Model($this->db);
    }
    public function protect($input){
    	$input = htmlspecialchars($input);
    	$input = trim($input);
    	return $input;
    }
	public function check($user_id){
		$user_details = $this->model->fetchUser($user_id);
		$avatar = $user_details->avatar;
		$rank = $user_details->rank;
		$role = $this->model->fetchRole($rank);
		$app_new = $this->model->count_apps(0);
		$app_pending = $this->model->count_apps(1);
		$app_dec_pending = $this->model->count_apps(4);
		$new_bugs = $this->model->countBugs(0);
		$unsolved_bugs = $this->model->countBugs(1);
		return array ($user_details, $avatar, $rank, $role, $app_new, $app_pending,$app_dec_pending, $new_bugs, $unsolved_bugs);
	}
}
