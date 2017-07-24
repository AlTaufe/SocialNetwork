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
		// Traitement du formulaire
		if (!empty($_POST)) {
			$activity_manager = new \Model\ActivityModel();
			$activity_manager->insert([
				'content' => 'Mon activité',
				'type' => 'text'
			]);
		}
		// Affichage du formulaire
		$this->show('activity/create');
	}

}
