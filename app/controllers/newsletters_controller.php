<?php
class NewslettersController extends AppController
{

	var $name = 'Newsletters';
	var $components = array('Auth');
	var $paginate = array('Newsletter' => array('limit' => 10,'order' => array('Newsletter.title' => 'asc')
        ));
	
	function beforeFilter()
	{
	$this->Auth->allow('index','view','display','admin_index','admin_edit','admin_delete','admin_add','admin_view');
	}

	function index()
	{
		$this->set('newsletters', $this->Newsletter->find('all'));
	}
	
	function add()
	{
		if(!empty($this->data))
			{
				$this->Newsletter->save($this->data);
			}
	}
	
	function edit($id)
	{
			
			// pseudo controller code
			$this->Newsletter->id = $id; // id of Extreme knitting
			if (empty($this->data))
			{
				$this->data = $this->Newsletter->read();
				//debug($this->data);
			} 
			else 
			{
				if ($this->Newsletter->save($this->data)) 
				{
				 $this->Session->setFlash('Your Newsletter has been updated.');
				 $this->redirect(array('action' => 'index'));
				}
			}
		}
		function delete($id)
		{
			// pseudo controller code
			$this->Newsletter->id = $id;
			$this->Newsletter->delete();
			$this->Session->setFlash('The Newsletter with id: '.$id.' has been deleted.');
			$this->redirect(array('action'=>'index'));
		}
		
		function view($id)
		{
			$this->Newsletter->id = $id;
			$this->data = $this->Newsletter->read();
			//debug($this->data);
			//die;
		}
		
		function admin_index()
	{
		$this->layout = 'admin';
		//$this->Category->recursive = 0;
		//$this->set('', $this->Category->generatetreelist(null, null, null, '***'));
		$this->set('newsletters',$this->paginate());
	}
	
	function admin_view($id = null) {
		$this->layout = 'admin';
		if (!$id) {
			$this->flash(__('Invalid Newsletter', true), array('action'=>'index'));
		}
		$this->set('newsletter', $this->Newsletter->read(null, $id));
	}
	
	
	function admin_add($user_id = null)
	{
		$this->layout = 'admin';
		//$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
		if (!empty($this->data)) {
			$this->Newsletter->create();
			if ($this->Newsletter->save($this->data)) {
				$this->flash(__('Newsletter saved.', true), array('action'=>'index'));
			} else {
			}
		}
	}
	
	function admin_edit($id)
	{
			
		$this->layout = 'admin';
		//$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
		
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid Newsletter', true), array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Newsletter->save($this->data)) {
				$this->flash(__('The Newsletter has been updated.', true), array('action'=>'index'));
			} else {
			}
		}		
		if (empty($this->data)) {
			$this->data = $this->Newsletter->read(null, $id);
		}
		
		function admin_delete($id = null) {
		$this->layout = 'admin';
		if (!$id) {
			$this->flash(__('Invalid Newsletter', true), array('action'=>'index'));
		}
		if ($this->Newsletter->del($id)) {
			$this->flash(__('Newsletter deleted', true), array('action'=>'index'));
		}
	}
}
}
?>