<?php
	class Mensagem{
		var $titulo;
		var $mensagem;
		var $opiniao;
		var $idUsuario;
		var $id;
		var $positivo;
		var $negativo;

		function __construct($titulo, $mensagem, $opiniao, $idUsuario, $positivo, $negativo){
			$this->titulo = $titulo;
			$this->mensagem = $mensagem;
			$this->opiniao = $opiniao;
			$this->idUsuario = $idUsuario;
			$this->positivo = $positivo;
			$this->negativo = $negativo;
		}

		function getTitulo(){
			return $this->titulo;
		}

		function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		function getMensagem(){
			return $this->mensagem;
		}

		function setMensagem($mensagem){
			$this->mensagem = $mensagem;
		}

		function getOpiniao(){
			return $this->opiniao;
		}

		function setOpiniao($opiniao){
			$this->opiniao = $opiniao;
		}

		function getIdUsuario(){
			return $this->idUsuario;
		}

		function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}

		function getId(){
			return $this->id;
		}

		function setId($id){
			$this->id = $id;
		}

		function getPositivo(){
			return $this->positivo;
		}

		function setPositivo($positivo){
			$this->positivo = $positivo;
		}

		function getNegativo(){
			return $this->negativo;
		}

		function setNegativo($negativo){
			$this->negativo = $negativo;
		}
	}
?>