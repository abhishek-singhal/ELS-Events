<?php
class Driversworld extends Controller
{
	public function index(){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		$page = 1;
		require APP . '../public/includes/simple_html_dom.php';
		$vtmlive = file_get_html('http://www.virtualtruckingmanager.com/company/2642/distance');
		$bank = $vtmlive->find('table', 0)->find('tr',0)->find('td',1);
		$employees = $vtmlive->find('table',0)->find('tr',1)->find('td',1);
		$delivery = $vtmlive->find('table',0)->find('tr',2)->find('td',1);
		$distance = $vtmlive->find('table',0)->find('tr',4)->find('td',1);
		$top5dnames = array($vtmlive->find('table',1)->find('tr',0)->find('td',0)->plaintext,$vtmlive->find('table',1)->find('tr',1)->find('td',0)->plaintext,$vtmlive->find('table',1)->find('tr',2)->find('td',0)->plaintext,$vtmlive->find('table',1)->find('tr',3)->find('td',0)->plaintext,$vtmlive->find('table',1)->find('tr',4)->find('td',0)->plaintext);
		$top5dd = array($vtmlive->find('table',1)->find('tr',0)->find('td',1)->plaintext,$vtmlive->find('table',1)->find('tr',1)->find('td',1)->plaintext,$vtmlive->find('table',1)->find('tr',2)->find('td',1)->plaintext,$vtmlive->find('table',1)->find('tr',3)->find('td',1)->plaintext,$vtmlive->find('table',1)->find('tr',4)->find('td',1)->plaintext);
		$vtmlive2 = file_get_html('http://www.virtualtruckingmanager.com/company/2642/profits');
		$top5pnames = array($vtmlive2->find('table',1)->find('tr',0)->find('td',0)->plaintext,$vtmlive2->find('table',1)->find('tr',1)->find('td',0)->plaintext,$vtmlive2->find('table',1)->find('tr',2)->find('td',0)->plaintext,$vtmlive2->find('table',1)->find('tr',3)->find('td',0)->plaintext,$vtmlive2->find('table',1)->find('tr',4)->find('td',0)->plaintext);
		$top5pp = array($vtmlive2->find('table',1)->find('tr',0)->find('td',1)->plaintext,$vtmlive2->find('table',1)->find('tr',1)->find('td',1)->plaintext,$vtmlive2->find('table',1)->find('tr',2)->find('td',1)->plaintext,$vtmlive2->find('table',1)->find('tr',3)->find('td',1)->plaintext,$vtmlive2->find('table',1)->find('tr',4)->find('td',1)->plaintext);
		if($rank==0||$rank==1){
			$app_count = $this->model->checkApp($_SESSION['user_id']);
			if($app_count!=0){
				$app=$this->model->fetchApp($_SESSION['user_id']);
				if($app->examiner_id!=0){
					
				}
			}
		}
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/index.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function crevent(){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		$page = 2;
		if($rank<8 || ($rank>9 && $rank <13)){
			header('location: ' . URL . 'driversworld/index');
		}
		if(isset($_POST['create_event'])){
			date_default_timezone_set('UTC');
			$event_name = $this->protect($_POST['event_name']);
			$server = $this->protect($_POST['server']);
			$source = $this->protect($_POST['source']);
			$destination = $this->protect($_POST['destination']);
			$time = strtotime($this->protect($_POST['time']));
			if(isset($_POST['trailer'])){
				$trailer = "Yes";
			}
			else{
				$trailer = "No";
			}
			//$trailer = $this->protect($_POST['trailer']);
			$route_map = $this->protect($_POST['route_map']);
			$event_page = $this->protect($_POST['event_page']);
			if($event_name == null || $source == null || $destination == null || $time == null || $route_map == null || $event_page == null){
				$success=0;
			}
			else{
				$this->model->createEvent($_SESSION['user_id'], $event_name, $server, $source, $destination, $time, $trailer, $route_map, $event_page);
				$success=1;
			}
		}
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/crevent.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function upevents(){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		$page = 3;
		$time = time();
		$fetch_events = $this->model->fetchFutureEvents($time);
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/upevent.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function delevent($event_id){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
        $page = 3;
        if($rank==8 || $rank==9 || $rank>12){
			$this->model->deleteEvent($event_id);
			header('location: ' . URL. 'driversworld/upevents');
        }
        else{
			header('location: ' . URL . 'driversworld/index');
		}
    }
	public function join(){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		if($rank>1){
			header('location: ' . URL . 'driversworld/index');
		}
		$page=5;
		if(isset($_POST['apply'])){
			$age = $this->protect($_POST['age']);
			$country = $this->protect($_POST['country']);
			$english = $this->protect($_POST['english']);
			$mic = $this->protect($_POST['mic']);
			$discord = $this->protect($_POST['discord']);
			$about_els = $this->protect($_POST['about_els']);
			$about_user = $this->protect($_POST['about_user']);
			$time = time();
			if($age== null||$country==null||$english==null||$mic==null||$discord==null||$about_els== null||$about_user==null){
				$success = 0;
			}
			else{
				$this->model->submitApp($_SESSION['user_id'], $age, $country, $english, $mic, $discord, $about_els, $about_user, $time);
				$success = 1;
			}
		}
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/join.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function apps(){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		if($rank<11){
			header('location: ' . URL . 'driversworld/index');
		}
		$page=6;
		$apps = $this->model->viewAppss();
		if(isset($_POST['new'])){
			$apps = $this->model->viewApps(0);
		}
		if(isset($_POST['pending'])){
			$apps = $this->model->viewApps(1);
		}
		if(isset($_POST['accept'])){
			$apps = $this->model->viewApps(2);
		}
		if(isset($_POST['reject'])){
			$apps = $this->model->viewApps(3);
		}
		if(isset($_POST['dpending'])){
			$apps = $this->model->viewApps(4);
		}
		if(isset($_POST['all'])){
			$apps = $this->model->viewAppss();
		}
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/apps.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function app($app_id){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		if(!isset($app_id)){
			header('location: ' . URL . 'driversworld/apps');
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		$page=6;
		if($rank<11){
			header('location: ' . URL . 'driversworld/apps');
		}
		$app = $this->model->viewApp($app_id);
		$name = $this->model->fetchUser($app->user_id)->steam_name;
		$count_test = $this->model->countTest($app_id);
		$_STEAMAPI = "03B0C68B2B0BF14C49BF8131D3CF6022";
		$steam_id_app = $this->model->fetchUser($app->user_id)->steam_id;
		$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$_STEAMAPI&steamids=$steam_id_app";
		$json_object = file_get_contents($url);
		$json_decoded = json_decode($json_object);
		foreach($json_decoded->response->players as $player){
			$profile_state = $player->communityvisibilitystate;
			$profile_url = $player->profileurl;
		}
		$url2="http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=$_STEAMAPI&steamid=$steam_id_app";
		$json_object2 = file_get_contents($url2);
		$json_decoded2 = json_decode($json_object2);
		if($profile_state == 3){
			foreach($json_decoded2->response->games as $game){
				$game_id = $game->appid;
				$playtime2 = $game->playtime_forever;
				if($game_id == 227300){
					break;
				}
			}
			if($game_id == 227300){
				$playtime3 = round($playtime2/60);
				$playtime = "$playtime3 hours";
			}
			else{
				$playtime = "Game not owned";
			}
		}
		else{
			$playtime = "Unknown";
		}
		if($count_test==1){
			$test_details = $this->model->fetchTest($app_id);
		}
		if(isset($_POST['examiner'])){
			$this->model->updateExaminer($app_id, $_SESSION['user_id']);
			header('location:' . URL . 'driversworld/app/' . $app_id);
		}
		if(isset($_POST['update_status'])){
			if($this->model->checkExaminer($app_id) == 0){
				$success=0;
			}
			else{
				$status = $this->protect($_POST['status']);
				$this->model->updateStatus($app_id, $status);
				header('location:' . URL . 'driversworld/app/' . $app_id);
			}
		}
		if(isset($_POST['driver_test'])){
			$instruction = $this->protect($_POST['instruction']);
			$speed = $this->protect($_POST['speed']);
			$parking1 = $this->protect($_POST['parking1']);
			$parking2 = $this->protect($_POST['parking2']);
			$driving = $this->protect($_POST['driving']);
			$notes = $this->protect($_POST['notes']);
			$res = $this->protect($_POST['res']);
			$time = time();
			if($instruction==null||$speed==null||$parking1==null||$parking2==null||$driving==null||$notes==null||$res==null){
				$success2=0;
			}
			else{
				$this->model->insertTest($app_id, $instruction, $speed, $parking1, $parking2, $driving, $notes, $res, $time);
				$status=4;
				$this->model->updateStatus($app_id, $status);
				header('location:' . URL . 'driversworld/app/' . $app_id);
			}
		}
		if(isset($_POST['reason'])){
			$reason = $this->protect($_POST['reason_reject']);
			$this->model->insertReason($app_id, $reason);
			header('location:' . URL . 'driversworld/app/' . $app_id);
		}
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/app.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function profile($user_id){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		if(!isset($user_id)){
			header('location: ' . URL . 'driversworld/profiles');
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		$page=7;
		$fetch_role_list = $this->model->fetchRoleList();
		$profile = $this->model->fetchUser($user_id);
		$_STEAMAPI = "03B0C68B2B0BF14C49BF8131D3CF6022";
		$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$_STEAMAPI&steamids=$profile->steam_id";
		$json_object = file_get_contents($url);
		$json_decoded = json_decode($json_object);
		foreach($json_decoded->response->players as $player){
			$profile_state = $player->communityvisibilitystate;
			$profile_url = $player->profileurl;
		}
		$url2="http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=$_STEAMAPI&steamid=$profile->steam_id";
		$json_object2 = file_get_contents($url2);
		$json_decoded2 = json_decode($json_object2);
		if($profile_state == 3){
			foreach($json_decoded2->response->games as $game){
				$game_id = $game->appid;
				$playtime2 = $game->playtime_forever;
				if($game_id == 227300){
					break;
				}
			}
			if($game_id == 227300){
				$playtime3 = round($playtime2/60);
				$playtime = "$playtime3 hours";
			}
			else{
				$playtime = "Game not owned";
			}
		}
		else{
			$playtime = "Unknown";
		}
		$vtm_id = $profile->vtmlive_id;
		if($vtm_id != 0){
			require APP . '../public/includes/simple_html_dom.php';
			$job = file_get_html('http://www.virtualtruckingmanager.com/profile/' . $profile->vtmlive_id);
			for($i=0;$i<7;$i++){
				$vtm_details[$i] = $job->find('table',0)->find('tr',$i)->find('td',1)->plaintext;
			}
		}
		if(isset($_POST['update_vtm'])){
			$new_vtm_id = $this->protect($_POST['vtm_id']);
			$this->model->updateVTMid($user_id, $new_vtm_id);
			header('location: ' . URL . 'driversworld/profile/' . $user_id);
		}
		if(isset($_POST['update_rank'])){
			$new_rank = $this->protect($_POST['rank']);
			$this->model->updateRank($user_id, $new_rank);
			header('location: ' . URL . 'driversworld/profile/' . $user_id);
		}
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/profile.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function profiles(){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		$page=7;
		$profiles = $this->model->fetchProfilesAll();
		if(isset($_POST['guest'])){
			$profiles = $this->model->fetchProfiles(0);
		}
		if(isset($_POST['friend'])){
			$profiles = $this->model->fetchProfiles(1);
		}
		if(isset($_POST['driver'])){
			$profiles = $this->model->fetchProfilesDriver();
		}
		if(isset($_POST['cc'])){
			$profiles = $this->model->fetchProfiles(5);
		}
		if(isset($_POST['media'])){
			$profiles = $this->model->fetchProfilesMedia();
		}
		if(isset($_POST['event'])){
			$profiles = $this->model->fetchProfilesEvent();
		}
		if(isset($_POST['manager'])){
			$profiles = $this->model->fetchProfilesManager();
		}
		if(isset($_POST['exam'])){
			$profiles = $this->model->fetchProfilesExam();
		}
		if(isset($_POST['director'])){
			$profiles = $this->model->fetchProfiles(14);
		}
		if(isset($_POST['ceo'])){
			$profiles = $this->model->fetchProfiles(15);
		}
		if(isset($_POST['founder'])){
			$profiles = $this->model->fetchProfiles(16);
		}
		if(isset($_POST['all'])){
			$profiles = $this->model->fetchProfilesAll();
		}
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/profiles.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function report(){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		$page=8;
		if(isset($_POST['submit'])){
			$topic = $this->protect($_POST['topic']);
			$description = $this->protect($_POST['description']);
			if($topic==null||$description==null){
				$success=0;
			}
			else{
				$this->model->insertFeedback($_SESSION['user_id'], $topic, $description);
				$success=1;
			}
		}
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/report.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function bugs(){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		$page=9;
		if($rank<10 || $rank==11 || $rank==12){
			header('location: ' . URL . 'driversworld/index');
		}
		$fetchBugs = $this->model->fetchAllBugs();
		if(isset($_POST['new'])){
			$fetchBugs = $this->model->fetchBugs(0);
		}
		if(isset($_POST['solved'])){
			$fetchBugs = $this->model->fetchBugs(2);
		}
		if(isset($_POST['unsolved'])){
			$fetchBugs = $this->model->fetchBugs(1);
		}
		if(isset($_POST['all'])){
			$fetchBugs = $this->model->fetchAllBugs();
		}
		if(isset($_POST['not'])){
			$fetchBugs = $this->model->fetchBugs(3);
		}
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/bugs.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function bug($feedback_id){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		if(!isset($feedback_id)){
			header('location: ' . URL . 'driversworld/bugs');
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		$page=9;
		if($rank<10 || $rank==11 || $rank==12){
			header('location: ' . URL . 'driversworld/index');
		}
		$fetchBug = $this->model->fetchBug($feedback_id);
		if(isset($_POST['update_status'])){
			$status = $this->protect($_POST['status']);
			$this->model->updateFeedbackstatus($status, $feedback_id);
			header('location:' . URL . 'driversworld/bugs');
		}
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/bug.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function joblog(){
		if(!isset($_SESSION['user_id'])){
			if(isset($_COOKIE['elslogin'])){
				$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
				if($checkcookie->count_users == 1){
					$_SESSION['user_id'] = $checkcookie->user_id;
				}
				else{
					setcookie('elslogin', '', time()-3600, '/');
					header('location: ' . URL . 'home/driversworld');
				}
			}
			else{
				header('location: ' . URL . 'home/driversworld');
			}
		}
		list($user_details, $avatar, $rank, $role, $app_new, $app_pending, $app_dec_pending, $new_bugs, $unsolved_bugs) = $this->check($_SESSION['user_id']);
		$page=10;
		if($rank<4){
			header('location: ' . URL . 'driversworld/index');
		}
		if($user_details->vtmlive_id != 0){
			require APP . '../public/includes/simple_html_dom.php';
			$job = file_get_html('http://www.virtualtruckingmanager.com/profile/' . $user_details->vtmlive_id);
			for($i=0;$i<7;$i++){
				$vtm_details[$i] = $job->find('table',0)->find('tr',$i)->find('td',1)->plaintext;
			}
		}
		if(isset($_POST['update_vtm'])){
			$new_vtm_id = $this->protect($_POST['vtm_id']);
			$vtm_id_num = is_numeric($new_vtm_id)? 0 : 1;
			if($vtm_id_num == 1){
				$result = 0;
			}
			else if($this->model->checkVTMid($new_vtm_id) != 0){
				$result = 1;
			}
			else{
				$this->model->updateVTMid($_SESSION['user_id'], $new_vtm_id);
				header('location: ' . URL . 'driversworld/joblog');
			}
		}
		// load views
		require APP . 'view/_templates/header2.php';
		require APP . 'view/driversworld/joblog.php';
		require APP . 'view/_templates/footer2.php';
	}
	public function logout(){
		if(isset($_SESSION['user_id']) || isset($_COOKIE['user_id'])){
			session_destroy();
			setcookie('elslogin', '', time()-3600, '/');
		}
		header('location: ' . URL . 'home/driversworld');
	}
}