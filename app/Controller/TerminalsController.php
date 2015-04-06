<?php

App::uses('AppController', 'Controller');

class TerminalsController extends AppController {

    public $components = array('Paginator');

    public function index() {
        $this->Terminal->recursive = 0;
        $this->set('terminals', $this->Paginator->paginate());
    }
    
    public function dashboard() {
        //$this->Terminal->recursive = 0;
        $this->set('terminals', $this->Terminal->find('all'));
    }

    public function view($id = null) {
        if (!$this->Terminal->exists($id)) {
            throw new NotFoundException(__('Invalid terminal'));
        }
        $options = array('conditions' => array('Terminal.' . $this->Terminal->primaryKey => $id));
        $this->set('terminal', $this->Terminal->find('first', $options));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Terminal->create();
            if ($this->Terminal->save($this->request->data)) {
                $this->Session->setFlash(__('The terminal has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The terminal could not be saved. Please, try again.'));
            }
        }
        $terminalTypes = $this->Terminal->TerminalType->find('list');
        $this->set(compact('terminalTypes'));
    }

    public function edit($id = null) {
        if (!$this->Terminal->exists($id)) {
            throw new NotFoundException(__('Invalid terminal'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Terminal->save($this->request->data)) {
                $this->Session->setFlash(__('The terminal has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The terminal could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Terminal.' . $this->Terminal->primaryKey => $id));
            $this->request->data = $this->Terminal->find('first', $options);
        }
        $terminalTypes = $this->Terminal->TerminalType->find('list');
        $this->set(compact('terminalTypes'));
    }

    public function delete($id = null) {
        $this->Terminal->id = $id;
        if (!$this->Terminal->exists()) {
            throw new NotFoundException(__('Invalid terminal'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Terminal->delete()) {
            $this->Session->setFlash(__('The terminal has been deleted.'));
        } else {
            $this->Session->setFlash(__('The terminal could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
