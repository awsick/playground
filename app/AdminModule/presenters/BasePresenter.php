<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasePresenter
 *
 * @author strnad
 */

namespace AdminModule;

class BasePresenter extends \refresh\Presenters\BasePresenter
{

	/**
	 * @var \refresh\Packages\Admin\Services\AdminConfig
	 */
	protected $adminCnf;
	protected $ent;

	/** @persistent */
	public $id;
	/** @persistent */
	public $email;
	/** @persistent */
	public $slug;

	public function startUp()
	{
		parent::startup();

		$this->adminCnf = $this->context->admin->adminconfig;
	}

	public function createComponentBaseMenu()
	{
		return $this->context->admin->createMainmenu();
	}


}

?>