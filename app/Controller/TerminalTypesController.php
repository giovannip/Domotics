<?php
App::uses('AppController', 'Controller');
/**
 * TerminalTypes Controller
 *
 * @property TerminalType $TerminalType
 * @property PaginatorComponent $Paginator
 */
class TerminalTypesController extends AppController {

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
		$this->TerminalType->recursive = 0;
		$this->set('terminalTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TerminalType->exists($id)) {
			throw new NotFoundException(__('Invalid terminal type'));
		}
		$options = array('conditions' => array('TerminalType.' . $this->TerminalType->primaryKey => $id));
		$this->set('terminalType', $this->TerminalType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TerminalType->create();
			if ($this->TerminalType->save($this->request->data)) {
				$this->Session->setFlash(__('The terminal type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terminal type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TerminalType->exists($id)) {
			throw new NotFoundException(__('Invalid terminal type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TerminalType->save($this->request->data)) {
				$this->Session->setFlash(__('The terminal type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terminal type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TerminalType.' . $this->TerminalType->primaryKey => $id));
			$this->request->data = $this->TerminalType->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TerminalType->id = $id;
		if (!$this->TerminalType->exists()) {
			throw new NotFoundException(__('Invalid terminal type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TerminalType->delete()) {
			$this->Session->setFlash(__('The terminal type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The terminal type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
