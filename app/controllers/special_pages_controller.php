<?php
class SpecialPagesController extends AppController
{

	var $name = 'SpecialPages';
	var $helpers = array('Html','Javascript');
	var $components = array('Auth');
	
	function beforeFilter()
	{
		$this->Auth->allow('index','view','display','admin_index','admin_edit','admin_delete','admin_add','admin_view');
	}

	function index()
	{
		$this->set('special_pages', $this->SpecialPage->find('all'));
	}
	function active()
	{
		$user_id = $this->Session->read('Auth.User.id');
		$conditions[] = array('SpecialPage.Active' => 1,'User.id' => $user_id);
		$this->set('special_pages',$this->paginate($this->SpecialPage,$conditions));
	}
	function inactive()
	{
		$user_id = $this->Session->read('Auth.User.id');
		$conditions[] = array('SpecialPage.Active <>' => 1,'User.id' => $user_id);
		$this->set('special_pages',$this->paginate($this->SpecialPage,$conditions));
		$this->render('active');
	}
	
	function add($user_id = null)
	{

		//$this->set('temp3', $this->SpecialPage->User->generatetreelist(null, null, null, '---'));
		$this->SpecialPage->User->id = $this->Session->read('Auth.User.id');
		$this->SpecialPage->User->recursive = 0;
		$this->set('user',$this->SpecialPage->User->read());

		if(!empty($this->data))
		{
			$this->data['SpecialPage']['user_id'] =	 $this->Session->read('Auth.User.id');
			$this->data['SpecialPage']['active']  =	 0;
			//debug($this->data);
			$this->Session->setFlash('The Special Pages Details Added Successfully');
			$this->SpecialPage->saveAll($this->data);
			$this->Session->setFlash('The Special Pages has been added. will be displayed after admins approval');
		}
	}
	
	function edit($id)
	{
			
		// pseudo controller code
		$this->SpecialPage->id = $id; // id of Extreme knitting
		$user_id = $this->Session->read('Auth.User.id');
		if (empty($this->data))
		{
			$this->data = $this->SpecialPage->find('first', array('conditions' => array('User.id' => $user_id,'Post.id' => $id)));
			//$this->data = $this->Post->read();
			//debug($this->data);
		} 
		else 
		{
			$this->data['SpecialPage']['active']  =	 0;
			if ($this->SpecialPage->save($this->data)) 
			{
				$this->Session->setFlash('Your Ad Post has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	function delete($id)
	{
		// pseudo controller code
		$this->SpecialPage->id = $id;
		$this->SpecialPage->delete();
		$this->Session->setFlash('The Post with id: '.$id.' has been deleted.');
		$this->redirect(array('action'=>'index'));
	}
		
	function view($id)
	{
			
		if (!$id) {
			$this->flash(__('Invalid SpecialPage', true), array('action'=>'index'));
		}
		$this->set('special_page', $this->SpecialPage->read(null, $id));
		$this->SpecialPage->saveField('hits', $this->data['Post']['hits'] + 1);
		//debug($this->data);
		//die;
	}
	function display($slug)
	{
		//$this->Post->id = $id;
		$this->data = $this->SpecialPage->findBySlug($slug);
		$this->SpecialPage->id = $this->data['Post']['id'];
		$hits = $this->data['SpecialPage']['hits'] + 1;
		$this->Post->saveField('hits', $hits);
		//$points = $this->data['User']['points'] + $hits/10;
		//$this->Post->User->id = $this->data['User']['id'];
		//$this->Post->User->saveField('points', $points);
		//debug($this->data);
		//die;
	}
		
	function admin_index()
	{
		$this->layout = 'admin';
		//$this->Category->recursive = 0;
		//$this->set('', $this->Category->generatetreelist(null, null, null, '***'));
		$this->set('special_pages',$this->paginate());
	}
	
	function admin_view($id = null) {
		$this->layout = 'admin';
		if (!$id) {
			$this->flash(__('Invalid SpecialPage', true), array('action'=>'index'));
		}
		$this->set('special_page', $this->SpecialPage->read(null, $id));
	}
	
	
	function admin_add($user_id = null)
	{
		$this->layout = 'admin';
		//$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
		//debug($this->SpecialPage);
		//die;
		$this->set('users', $this->SpecialPage->User->find('list'));
		if (!empty($this->data)) {
			$this->SpecialPage->create();
			if ($this->SpecialPage->save($this->data)) {
				$this->flash(__('SpecialPage saved.', true), array('action'=>'index'));
			} else {
			}
		}
	}
	
	function admin_edit($id)
	{
			
		$this->layout = 'admin';
		//$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
		$this->set('users', $this->SpecialPage->User->find('list'));
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid SpecialPage', true), array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SpecialPage->save($this->data)) {
				$this->flash(__('The SpecialPage has been updated.', true), array('action'=>'index'));
			} else {
			}
		}		
		if (empty($this->data)) {
			$this->data = $this->SpecialPage->read(null, $id);
		}
	}
		
	function admin_delete($id = null) {
		$this->layout = 'admin';
		if (!$id) {
			$this->flash(__('Invalid SpecialPage', true), array('action'=>'index'));
		}
		if ($this->SpecialPage->del($id,true)) {
			$this->flash(__('SpecialPage deleted', true), array('action'=>'index'));
		}
	}

}
?>
