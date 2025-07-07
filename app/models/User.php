<?php

class User
{

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    
    public function inserir($name, $email, $password) {
        $stmt = $this->db->prepare("INSERT INTO users (nome, email, senha) VALUES (?,?,?)");
        return $stmt->execute([$name, $email,$password]);
    }

    public function emailValidate($email) {
        $stmt = $this->db->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch() ? true : false;
    }

    public function buscarPorEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
