<?php
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function login($username, $password) {
        $username = $this->db->conn->real_escape_string($username);
        $password = md5($password);
        $result = $this->db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
        return $result->fetch_assoc();
    }
}
?>
