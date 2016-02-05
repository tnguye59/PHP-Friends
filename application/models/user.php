<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

public function add_user($post)
	{
		$query = "INSERT INTO users (name, alias, email, password, birthday, updated_at, created_at) VALUES (?,?,?,?,?,NOW(),NOW())";
		$values = array($post['name'], $post['alias'], $post['email'], md5($post['password']), $post['birthday'], 0);
		return $this->db->query($query, $values);
	}
	public function get_login_user($email)
	{
		return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
	}
	public function getUserWithFriend()
	{
		$query = "SELECT users.id, users.name, friendships.friend_id, users2.name as friend_name, users2.alias as friend_alias, users2.email as friend_email FROM USERS LEFT JOIN FRIENDSHIPS ON USERS.ID = FRIENDSHIPS.USER_ID LEFT JOIN USERS AS USERS2 ON USERS2.ID = FRIENDSHIPS.FRIEND_ID WHERE USERS.ID = ? GROUP BY FRIENDSHIPS.FRIEND_ID limit 4";
		$value = $this->session->userdata['user_id'];
		return $this->db->query($query, $value)->result_array();
	}
	public function userInfo($id)
	{
		return $this->db->query("SELECT * FROM users WHERE id =$id")->row_array();
	}
	public function removeFriendById($id)
	{
		return $this->db->query("DELETE FROM friendships WHERE friend_id = $id");
	}
	public function notFriend()
	{
		$query = "SELECT * FROM USERS WHERE ID NOT IN (SELECT friend_id from friendships WHERE friendships.USER_ID = ?);";
		$value = $this->session->userdata['user_id'];	
		return $this->db->query($query, $value)->result_array();
	}
	public function addFriend($post)
	{
		$query = "INSERT INTO friendships (friend_id, user_id, updated_at, created_at) VALUES (?,?,NOW(),NOW())";
		$value = array($post['friend_id'], $this->session->userdata['user_id']);
		return $this->db->query($query, $value);
	}
}