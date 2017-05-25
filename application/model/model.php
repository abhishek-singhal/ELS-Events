<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    public function checkUser($steam_id){
    	$sql = "SELECT count(user_id) AS count_user, user_id, cookie FROM users WHERE steam_id = :steam_id";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':steam_id' => $steam_id);
    	$query->execute($parameters);
    	return $query->fetch();
    }
    public function insertUser($steam_id, $truckersmp_id, $steam_name, $avatar, $truckersmp_date, $register_time, $cookie){
    	$sql = "INSERT INTO users (steam_id, truckersmp_id, steam_name, avatar, truckersmp_joindate, register_time, cookie) VALUES (:steam_id, :truckersmp_id, :steam_name, :avatar, :truckersmp_date, :register_time, :cookie)";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':steam_id' => $steam_id, ':truckersmp_id' => $truckersmp_id, ':steam_name' => $steam_name, ':avatar' => $avatar, ':truckersmp_date' => $truckersmp_date, ':register_time' => $register_time, ':cookie' => $cookie);
    	$query->execute($parameters);
    }
    public function updateUser($steam_id, $steam_name, $avatar){
    	$sql = "UPDATE users SET steam_name = :steam_name, avatar = :avatar WHERE steam_id = :steam_id";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':steam_id' => $steam_id, ':steam_name' => $steam_name, ':avatar' => $avatar);
    	$query->execute($parameters);
    }
    public function fetchUser($user_id){
    	$sql = "SELECT * FROM users WHERE user_id = :user_id";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':user_id' => $user_id);
    	$query->execute($parameters);
    	return $query->fetch();
    }
    public function createEvent($user_id, $event_name, $server, $source, $destination, $time, $trailer, $route_map, $event_page){
    	$sql = "INSERT INTO events (user_id, event_name, server, source, destination, time, trailer, route_map, event_page) VALUES (:user_id, :event_name, :server, :source, :destination, :time, :trailer, :route_map, :event_page)";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':user_id' => $user_id, ':event_name' => $event_name, ':server' => $server, ':source' => $source, ':destination' => $destination, ':time' => $time, ':trailer' => $trailer, ':route_map' => $route_map, ':event_page' => $event_page);
    	$query->execute($parameters);
    }
    public function submitApp($user_id, $age, $country, $english, $mic, $discord, $about_els, $about_user, $time){
    	$sql = "INSERT INTO app(user_id, age, country, english, mic, discord, about_els, about_user, time) VALUES (:user_id, :age, :country, :english, :mic, :discord, :about_els, :about_user, :time)";
    	$query = $this->db->prepare($sql);
    	$parameters = array('user_id' => $user_id, ':age' => $age, ':country' => $country, ':english' => $english, ':mic' => $mic, ':discord' => $discord, ':about_els' => $about_els, ':about_user' => $about_user, ':time' => $time);
    	$query->execute($parameters);
    }
    public function insertContactus($name, $email, $message){
    	$sql = "INSERT INTO contactus(name, email, message) VALUES (:name, :email, :message)";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':name' => $name, ':email' => $email, ':message' => $message);
    	$query->execute($parameters);
    }
    public function viewApps($result){
    	$sql = "SELECT app_id, user_id, time, result, examiner_id FROM app WHERE result = :result ORDER BY time DESC";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':result' => $result);
    	$query->execute($parameters);
    	return $query->fetchAll();
    }
    public function viewAppss(){
    	$sql = "SELECT app_id, user_id, time, result, examiner_id FROM app ORDER BY time DESC";
    	$query = $this->db->prepare($sql);
    	$parameters = array();
    	$query->execute($parameters);
    	return $query->fetchAll();
    }
    public function viewApp($app_id){
    	$sql = "SELECT * FROM app WHERE app_id = :app_id";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':app_id' => $app_id);
    	$query->execute($parameters);
    	return $query->fetch();
    }
    public function fetchLatestEvent($time){
    	$sql = "SELECT min(time) AS min_time FROM events WHERE time >= :time";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':time' => $time);
    	$query->execute($parameters);
    	return $query->fetch()->min_time;
    }
    public function fetchFutureEvents($time){
    	$sql = "SELECT * FROM events WHERE time >= :time ORDER BY time ASC";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':time' => $time);
    	$query->execute($parameters);
    	return $query->fetchAll();
    }
	public function countFutureEvents($time){
		$sql = "SELECT count(event_id) AS count_events FROM events WHERE time >= :time";
		$query = $this->db->prepare($sql);
		$parameters = array(':time' => $time);
		$query->execute($parameters);
		return $query->fetch()->count_events;
	}
	public function fetchProfiles($rank){
		$sql = "SELECT user_id, steam_id, steam_name, rank FROM users WHERE rank = :rank ORDER BY user_id ASC";
		$query = $this->db->prepare($sql);
		$parameters = array(':rank' => $rank);
		$query->execute($parameters);
		return $query->fetchAll();
	}
	public function fetchProfilesAll(){
		$sql = "SELECT user_id, steam_id, steam_name, rank FROM users ORDER BY user_id ASC";
		$query = $this->db->prepare($sql);
		$parameters = array('');
		$query->execute($parameters);
		return $query->fetchAll();
	}
	public function fetchProfilesDriver(){
		$sql = "SELECT user_id, steam_id, steam_name, rank FROM users WHERE rank = 2 OR rank = 3 OR rank = 4 OR rank = 17";
		$query = $this->db->prepare($sql);
		$parameters = array('');
		$query->execute($parameters);
		return $query->fetchAll();
	}
	public function fetchProfilesMedia(){
		$sql = "SELECT user_id, steam_id, steam_name, rank FROM users WHERE rank = 6 OR rank = 7";
		$query = $this->db->prepare($sql);
		$parameters = array('');
		$query->execute($parameters);
		return $query->fetchAll();
	}
	public function fetchProfilesEvent(){
		$sql = "SELECT user_id, steam_id, steam_name, rank FROM users WHERE rank = 8 OR rank = 9";
		$query = $this->db->prepare($sql);
		$parameters = array('');
		$query->execute($parameters);
		return $query->fetchAll();
	}
	public function fetchProfilesManager(){
		$sql = "SELECT user_id, steam_id, steam_name, rank FROM users WHERE rank = 9 OR rank = 10 OR rank = 11 OR rank = 13";
		$query = $this->db->prepare($sql);
		$parameters = array('');
		$query->execute($parameters);
		return $query->fetchAll();
	}
	public function fetchProfilesExam(){
		$sql = "SELECT user_id, steam_id, steam_name, rank FROM users WHERE rank = 11 OR rank = 12";
		$query = $this->db->prepare($sql);
		$parameters = array('');
		$query->execute($parameters);
		return $query->fetchAll();
	}
    public function deleteEvent($event_id){
        $sql = "DELETE FROM events WHERE event_id = :event_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':event_id' => $event_id);
        $query->execute($parameters);
    }
	public function fetchRole($rank){
		$sql = "SELECT role FROM ranks WHERE rank = :rank";
		$query = $this->db->prepare($sql);
		$parameters = array(':rank' => $rank);
		$query->execute($parameters);
		return $query->fetch()->role;
	}
	public function count_apps($result){
		$sql = "SELECT count(app_id) AS count_app FROM app WHERE result = :result";
		$query = $this->db->prepare($sql);
		$parameters = array(':result' => $result);
		$query->execute($parameters);
		return $query->fetch()->count_app;
	}
	public function updateExaminer($app_id, $user_id){
		$sql = "UPDATE app SET examiner_id = :user_id WHERE app_id = :app_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':app_id' => $app_id, ':user_id' => $user_id);
		$query->execute($parameters);
	}
	public function checkExaminer($app_id){
		$sql = "SELECT examiner_id FROM app WHERE app_id = :app_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':app_id' => $app_id);
		$query->execute($parameters);
		return $query->fetch()->examiner_id;
	}
	public function updateStatus($app_id, $status){
		$sql = "UPDATE app SET result = :status WHERE app_id = :app_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':app_id' => $app_id, ':status' => $status);
		$query->execute($parameters);
	}
	public function updateRank($user_id, $rank){
		$sql = "UPDATE users SET rank = :rank WHERE user_id = :user_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':user_id' => $user_id, ':rank' => $rank);
		$query->execute($parameters);
	}
	public function countTest($app_id){
		$sql = "SELECT count(app_id) AS count_app FROM drivertest WHERE app_id = :app_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':app_id' => $app_id);
		$query->execute($parameters);
		return $query->fetch()->count_app;
	}
	public function insertTest($app_id, $instruction, $speed, $parking1, $parking2, $driving, $notes, $res, $time){
		$sql = "INSERT INTO drivertest (app_id, instruction, speed, parking1, parking2, driving, notes, result, time) VALUES (:app_id, :instruction, :speed, :parking1, :parking2, :driving, :notes, :res, :time)";
		$query = $this->db->prepare($sql);
		$parameters = array(':app_id' => $app_id, ':instruction' => $instruction, ':speed' => $speed, ':parking1' => $parking1, ':parking2' => $parking2, ':driving' => $driving, ':notes' => $notes, ':res' => $res, ':time' => $time);
		$query->execute($parameters);
	}
	public function checkApp($user_id){
		$sql = "SELECT count(app_id) AS count_app FROM app WHERE user_id = :user_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':user_id' => $user_id);
		$query->execute($parameters);
		return $query->fetch()->count_app;
	}
	public function fetchApp($user_id){
		$sql = "SELECT * FROM app WHERE user_id = :user_id ORDER BY time DESC LIMIT 1";
		$query = $this->db->prepare($sql);
		$parameters = array(':user_id' => $user_id);
		$query->execute($parameters);
		return $query->fetch();
	}
	public function insertFeedback($user_id, $topic, $description){
		$sql = "INSERT INTO feedback (user_id, topic, description) VALUES (:user_id, :topic, :description)";
		$query = $this->db->prepare($sql);
		$parameters = array(':user_id' => $user_id, ':topic' => $topic, ':description' => $description);
		$query->execute($parameters);
	}
	public function fetchTest($app_id){
		$sql = "SELECT * FROM drivertest WHERE app_id = :app_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':app_id' => $app_id);
		$query->execute($parameters);
		return $query->fetch();
	}
	public function fetchAllBugs(){
		$sql = "SELECT * FROM feedback";
		$query = $this->db->prepare($sql);
		$parameters = array('');
		$query->execute($parameters);
		return $query->fetchAll();
	}
	public function fetchBugs($status){
		$sql = "SELECT * FROM feedback WHERE status = :status";
		$query = $this->db->prepare($sql);
		$parameters = array(':status' => $status);
		$query->execute($parameters);
		return $query->fetchAll();
	}
	public function fetchBug($feedback_id){
		$sql = "SELECT * FROM feedback WHERE feedback_id = :feedback_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':feedback_id' => $feedback_id);
		$query->execute($parameters);
		return $query->fetch();
	}
	public function updateFeedbackStatus($status, $feedback_id){
		$sql = "UPDATE feedback SET status = :status WHERE feedback_id = :feedback_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':status' => $status, ':feedback_id' => $feedback_id);
		$query->execute($parameters);
	}
	public function countBugs($status){
		$sql = "SELECT count(feedback_id) AS count_bugs FROM feedback WHERE status = :status";
		$query = $this->db->prepare($sql);
		$parameters = array(':status' => $status);
		$query->execute($parameters);
		return $query->fetch()->count_bugs;
	}
	public function fetchCookieID($cookie){
		$sql = "SELECT count(user_id) AS count_users, user_id FROM users WHERE cookie = :cookie";
		$query = $this->db->prepare($sql);
		$parameters = array(':cookie' => $cookie);
		$query->execute($parameters);
		return $query->fetch();
	}
	public function updateVTMid($user_id, $vtm_id){
		$sql = "UPDATE users SET vtmlive_id = :vtm_id WHERE user_id = :user_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':vtm_id' => $vtm_id, ':user_id' => $user_id);
		$query->execute($parameters);
	}
	public function insertReason($app_id, $reason){
		$sql = "UPDATE app SET REASON = :reason WHERE app_id = :app_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':app_id' => $app_id, ':reason' => $reason);
		$query->execute($parameters);
	}
	public function checkVTMid($vtmlive_id){
		$sql = "SELECT count(user_id) AS count_user FROM users WHERE vtmlive_id = :vtmlive_id";
		$query = $this->db->prepare($sql);
		$parameters = array(':vtmlive_id' => $vtmlive_id);
		$query->execute($parameters);
		return $query->fetch()->count_user;
	}
	public function fetchRoleList(){
		$sql = "SELECT * FROM ranks ORDER BY rank ASC";
		$query = $this->db->prepare($sql);
		$parameters = array('');
		$query->execute($parameters);
		return $query->fetchAll();
	}
}