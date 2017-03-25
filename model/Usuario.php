<?php
	class Usuario{
		var $nome;
		var $email;
		var $senha;
		var $username;
		var $id;

		function __construct($nome, $email, $senha, $username){
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
			$this->username = $username;
		}

		function getNome(){
			return $this->nome;
		}

		function setNome($nome){
			$this->nome = $nome;
		}

		function getEmail(){
			return $this->email;
		}

		function setEmail($email){
			$this->email = $email;
		}

		function getSenha(){
			return $this->senha;
		}

		function setSenha($senha){
			$this->senha = $senha;
		}

		function getUsername(){
			return $this->username;
		}

		function setUsername($username){
			$this->username = $username;
		}

		function getId(){
			return $this->id;
		}

		function setId($id){
			$this->id = $id;
		}
	}
?>