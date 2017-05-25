<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
	public function index(){
		$page = 1;
		$time = time();
		$event = $this->model->fetchLatestEvent($time);
		$t = $event - $time;
		// load views
		//require APP . 'view/_templates/header.php';
		require APP . 'view/home/index.php';
		require APP . 'view/_templates/footer.php';
	}
	public function events(){
		$page = 2;
		$t = time();
		$time = $t - 3600;
		$events = $this->model->fetchFutureEvents($time);
		// load views
		require APP . 'view/_templates/header.php';
		require APP . 'view/home/events.php';
		require APP . 'view/_templates/footer.php';
	}
	public function message(){
		$name = $this->protect($_GET['name']);
		$email = $this->protect($_GET['email']);
		$message = $this->protect($_GET['message']);
		if($name == null || $email == null || $message1 == null){
			$result = "Fill all the empty fields.";
		}
		else{
			$from = "contactus@elsvtc.cu.cc";
			$to = "support@elsvtc.cu.cc";
			$sender_name = "ELS | Contact Us";
			$subject = "contact us";
			$message1 = "Name: $sender_name<br>Email: $email<br>Message: $message";
			$headers= "From: $sender_name "."<".$from.">rn";
			//mail($to,$subject,$message1,$headers);
			$this->model->insertContactus($name, $email, $message);
			$result = "Message sent!";
		}
		echo $result;
	}
	public function driversworld(){
		$page = 4;
		if(isset($_COOKIE['elslogin'])){
			$checkcookie = $this->model->fetchCookieID($_COOKIE['elslogin']);
			if($checkcookie->count_users == 1){
				$_SESSION['user_id'] = $checkcookie->user_id;
			}
		}
		if(isset($_SESSION['user_id'])){
			$user_details = $this->model->fetchUser($_SESSION['user_id']);
		}
		require APP . '../public/includes/openid.php';
		$_STEAMAPI = "03B0C68B2B0BF14C49BF8131D3CF6022";
		try{
			$openid = new LightOpenID('http://127.0.0.1/els2/home/driversworld');
			if(!$openid->mode){
				if(isset($_GET['login'])){
					$openid->identity = "http://steamcommunity.com/openid?l=english";
					header('location:' . $openid->authUrl());
				}
			}
			else if($openid->mode == 'cancel'){
				$message = "User has cancelled authentication.";
			}
			else{
				if($openid->validate()){
					$id = $openid->identity;
					$ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
					preg_match($ptn, $id, $matches);
						
					$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$_STEAMAPI&steamids=$matches[1]";
					$json_object = file_get_contents($url);
					$json_decoded = json_decode($json_object);
					
					foreach($json_decoded->response->players as $player){
						$steam_id = $player->steamid;
						$steam_name = $player->personaname;
						$avatar = $player->avatarfull;
						$user_details = $this->model->checkUser($steam_id);
						if($user_details->count_user == 0){
							$url2 = "https://api.truckersmp.com/v2/player/$steam_id";
							$json_object2 = file_get_contents($url2);
							$json_decoded2 = json_decode($json_object2);
							$check_error = $json_decoded2->error;
							if($check_error == false){
								$truckersmp_id = $json_decoded2->response->id;
								$truckersmp_date = $json_decoded2->response->joinDate;
							}
							else if($check_error == true){
								$truckersmp_id = 0;
								$truckersmp_date = 0;
							}
							$register_time = time();
							$ran = rand(1000,9999);
							$combine = $steam_id . $ran;
							$key = hash('sha256', $combine);
							$this->model->insertUser($steam_id, $truckersmp_id, $steam_name, $avatar, $truckersmp_date, $register_time, $key);
						}
						else if($user_details->count_user == 1){
							$this->model->updateUser($steam_id, $steam_name, $avatar);
						}
						$user_details = $this->model->checkUser($steam_id);
						$_SESSION['user_id'] = $user_details->user_id;
						setcookie("elslogin", $user_details->cookie, time() + (86400 * 90), "/");
						header('location: ' . 'http://127.0.0.1/els2/home/driversworld');
					}
				}
				else{
					$message = "User is not logged in";
				}
			}
		}
		catch(ErrorException $e){
			echo $e->getMessage();
		}
		// load views
		require APP . 'view/_templates/header.php';
		require APP . 'view/home/driversworld.php';
		require APP . 'view/_templates/footer.php';
	}
	public function logout(){
		if(isset($_SESSION['user_id']) || isset($_COOKIE['elslogin'])){
			session_destroy();
			setcookie('elslogin', '', time()-3600, '/');
		}
		header('location: ' . URL . 'home/driversworld');
	}
}