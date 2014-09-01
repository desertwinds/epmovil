<?php
App::uses('AppController', 'Controller');
/**
 * CompaniesUsers Controller
 *
 * @property CompaniesUser $CompaniesUser
 * @property PaginatorComponent $Paginator
 */
class CompaniesUsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CompaniesUser->recursive = 0;
		$this->set('companiesUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompaniesUser->exists($id)) {
			throw new NotFoundException(__('Invalid companies user'));
		}
		$options = array('conditions' => array('CompaniesUser.' . $this->CompaniesUser->primaryKey => $id));
		$this->set('companiesUser', $this->CompaniesUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompaniesUser->create();
			if ($this->CompaniesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The companies user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies user could not be saved. Please, try again.'));
			}
		}
		$companies = $this->CompaniesUser->Company->find('list');
		$users = $this->CompaniesUser->User->find('list');
		$this->set(compact('companies', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CompaniesUser->exists($id)) {
			throw new NotFoundException(__('Invalid companies user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompaniesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The companies user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompaniesUser.' . $this->CompaniesUser->primaryKey => $id));
			$this->request->data = $this->CompaniesUser->find('first', $options);
		}
		$companies = $this->CompaniesUser->Company->find('list');
		$users = $this->CompaniesUser->User->find('list');
		$this->set(compact('companies', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompaniesUser->id = $id;
		if (!$this->CompaniesUser->exists()) {
			throw new NotFoundException(__('Invalid companies user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompaniesUser->delete()) {
			$this->Session->setFlash(__('The companies user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The companies user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
