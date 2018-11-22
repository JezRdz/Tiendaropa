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
class AdminController extends AppController {

	public $components = array('SubirImagen');

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->layout = 'admin';		
	}
	
	public function index(){
		$this->loadModel('User');
		$this->set('users', $this->User->find('all'));

		$this->loadModel('Product');
		$this->set('products', $this->Product->find('all'));

		$this->loadModel('Category');
		$this->set('categories', $this->Category->find('all'));	
	}

	//User Views
	public function usuarios(){
		$this->loadModel('User');
		$this->set('users', $this->User->find('all'));
	}

	public function agregar_usuario()
	{
		$this->loadModel('User');
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved'));
				return $this->redirect(array('action' => 'usuarios'));
			}
			$this->Flash->error(
				__('The user could not be saved. Please, try again.')
			);
		}
	}

	public function editar_usuario($id = null)
	{
		$this->loadModel('User');
		$this->set('users', $this->User->find('all'));

		if (!$id) {
			throw new NotFoundException(__('Usuario no valido'));
		}

		$post = $this->User->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Usuario no valido'));
			$msg = new SAMMessage('SAADD');
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->User->id = $id;
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('Los datos han sido actualizados.'));
				return $this->redirect(array('action' => 'usuarios'));
			}
			$this->Flash->error(__('No se pueden actualizar los datos.'));
		}

		if (!$this->request->data) {
			$this->request->data = $post;
		}

	}
	
	public function eliminar_usuario($id)
	{		
			$this->loadModel('User');			

			if ($this->User->delete($id)) {
				$this->Flash->success(
					__('The post with id: %s has been deleted.', h($id))
				);
			} else {
				$this->Flash->error(
					__('The post with id: %s could not be deleted.', h($id))
				);
			}

			return $this->redirect(array('action' => 'usuarios'));
	
	}

	//Product Views
	public function productos(){
		$this->loadModel('Product');
		$this->set('products', $this->Product->find('all'));

		$this->loadModel('Category');
		$this->set('categories', $this->Category->find('all'));		
	}

	public function agregar_producto(){
		$this->loadModel('Product');
		$this->loadModel('Category');
		$this->set('categories', $this->Product->Category->find('list'));

		if ($this->request->is('post')) {
			$this->Product->create();
			if (!empty($this->request->data['Product']['imagen1']['tmp_name'])) {
				$data['path'] = 'img/admin/productos/';
				$data['file'] = $this->request->data['Product']['imagen1'];
				$this->request->data['Product']['image_id'] = $this->SubirImagen->guardar_imagen($data);
			}

			if (!empty($this->request->data['Product']['imagen2']['tmp_name'])) {
				$data['path'] = 'img/admin/productos/';
				$data['file'] = $this->request->data['Product']['imagen2'];
				$this->request->data['Product']['image2_id'] = $this->SubirImagen->guardar_imagen($data);
			}

			if (!empty($this->request->data['Product']['imagen3']['tmp_name'])) {
				$data['path'] = 'img/admin/productos/';
				$data['file'] = $this->request->data['Product']['imagen3'];
				$this->request->data['Product']['image3_id'] = $this->SubirImagen->guardar_imagen($data);
			}

			if ($this->Product->save($this->request->data)) {
				$this->Flash->success(__('The product has been saved'));
				return $this->redirect(array('action' => 'productos'));
			}
			$this->Flash->error(
				__('The product could not be saved. Please, try again.')
			);
		}		
	}

	public function editar_producto($id=null){
		$this->loadModel('Product');
		$this->set('product', $this->Product->find('first', array(
			'conditions' => array(
				'Product.id' => $id
			)
		)));

		$this->loadModel('Category');
		$this->set('categories', $this->Product->Category->find('list'));
		
		if (!$id) {
			throw new NotFoundException(__('Usuario no valido'));
		}

		$post = $this->Product->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Usuario no valido'));
			$msg = new SAMMessage('SAADD');
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Product->id = $id;

			if (!empty($this->request->data['Product']['imagen1']['tmp_name'])) {
				$data['path'] = 'img/admin/productos/';
				$data['file'] = $this->request->data['Product']['imagen1'];
				$this->request->data['Product']['image_id'] = $this->SubirImagen->guardar_imagen($data);
			}

			if (!empty($this->request->data['Product']['imagen2']['tmp_name'])) {
				$data['path'] = 'img/admin/productos/';
				$data['file'] = $this->request->data['Product']['imagen2'];
				$this->request->data['Product']['image2_id'] = $this->SubirImagen->guardar_imagen($data);
			}

			if (!empty($this->request->data['Product']['imagen3']['tmp_name'])) {
				$data['path'] = 'img/admin/productos/';
				$data['file'] = $this->request->data['Product']['imagen3'];
				$this->request->data['Product']['image3_id'] = $this->SubirImagen->guardar_imagen($data);
			}

			if ($this->Product->save($this->request->data)) {
				$this->Flash->success(__('Los datos han sido actualizados.'));
				return $this->redirect(array('action' => 'productos'));
			}
			$this->Flash->error(__('No se pueden actualizar los datos.'));
		}

		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}

	public function eliminar_producto($id){
		$this->loadModel('Product');

		if ($this->Product->delete($id)) {
			$this->Flash->success(
				__('The post with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Flash->error(
				__('The post with id: %s could not be deleted.', h($id))
			);
		}

		return $this->redirect(array('action' => 'productos'));
	}
	
	
}
