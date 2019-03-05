<?php namespace MikAuthEternity\Interfaces;

interface MikAuthServiceInterface{

	public function requestToken();
	public function getResult($token): MikUserContainerInterface;
	public function logout();
	public function isAuthenticated();
	public function getUser($create = true);

}