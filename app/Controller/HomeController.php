<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link https://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController {

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->layout = 'front';
	}

	public function index(){
		$this->loadModel('Product');
		$this->set('products', $this->Product->find('all'));
		
	}
	public function hombre(){

		$this->loadModel('Product');
		$this->set('products', $this->Product->find('all', array(
			'conditions' => array(
				'Product.category_id' => 1
			)
		)));
		
	}
	public function mujer(){
		$this->loadModel('Product');
		$this->set('products', $this->Product->find('all', array(
			'conditions' => array(
				'Product.category_id' => 2
			)
		)));
		
	}
	public function articulo($id = null){
		$this->loadModel('Product');
		$this->set('product', $this->Product->find('first', array(
			'conditions' => array(
				'Product.id' => $id
			)
		)));
		
		$this->loadModel('Category');
		$this->set('categories', $this->Product->Category->find('first'));
	}

	public function perfil(){
		
	}
	public function carrito(){
		
	}

	public function buscar_producto(){
		if (!empty($this->request->data)) {
			if (!empty($this->request->data['Product']['name'])) {
				$redireccion .= 'name:' . $this->request->data['Product']['name'] . '/';
			}
		}
		$this->redirect($redireccion);
	}
	
}
