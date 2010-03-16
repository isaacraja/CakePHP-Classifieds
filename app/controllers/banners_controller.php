<?php
class BannersController extends AppController
{

	var $name = 'Banners';
	
	function index()
	{
		$this->set('banners', $this->Banner->find('all'));
	}
	
	function add()
	{
		if(!empty($this->data))
			{
				$this->Banner->save($this->data);
			}
	}
	
		function delete($id)
		{
			// pseudo controller code
			$this->Banner->id = $id;
			$this->Banner->delete();
			$this->Session->setFlash('The Post with id: '.$id.' has been deleted.');
			$this->redirect(array('action'=>'index'));
		}
		
		function view($id)
		{
			$this->Banner->id = $id;
			$this->data = $this->Banner->read();
		}
		
	function admin_add($user_id = null)
	{
		$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
		$this->set('temp4', $this->Post->User->find('list'));
		if(!empty($this->data))
			{
				//$this->data['Post']['user_id'] =  $this->Session->read('Auth.User.id');
				//debug($this->data);
				$this->Post->save($this->data);
			}
	}
	
	function admin_edit($id)
	{
			
			// pseudo controller code
			$this->Post->id = $id; // id of Extreme knitting
			$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
			$this->set('temp4', $this->Post->User->find('list'));
			if (empty($this->data))
			{
				$this->data = $this->Post->find('first', array('conditions' => array('Post.id' => $id)));
				//$this->data = $this->Post->read();
				//debug($this->data);
			} 
			else 
			{
				if ($this->Post->save($this->data)) 
				{
				 $this->Session->setFlash('Your Ad Post has been updated.');
				 //$this->redirect(array('action' => 'index'));
				}
			}
		}
		
}
?>