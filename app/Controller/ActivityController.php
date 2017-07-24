<?php

namespace Controller;

use \W\Controller\Controller;

class ActivityController extends Controller
{

	/**
	 * Page toutes les activités
	 */
	public function all()
	{
		$this->show('activity/all');
	}
	/**
	 * Page créer une activité
	 */
	public function create()
	{
		$this->show('activity/create');
	}

}
