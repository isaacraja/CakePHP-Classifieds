<?php
class ImagesController extends AppController
{

	var $name = 'Images';
	var $components = array('Auth','Captcha');
	

	/*	 function beforeFilter() {
		 $this->Auth->fields = array(
		 'username' => 'email', 
		 'password' => 'password'
		 );
		 $this->Auth->allow('*');
	
		 } */

	function index()
	{
		$this->set('images', $this->Image->find('all'));
	}
	
	function add()
	{
		if(!empty($this->data))
		{
			$this->Image->save($this->data);
		}
	}
	function edit($id = null)
	{
		//debug($_SESSION);
		$this->Image->id = $id;
		if (empty($this->data))
		{
			$this->data = $this->Image->read();
		} 
		else 
		{
			if ($this->Image->save($this->data)) 
			{
				$this->Session->setFlash('Your Ad Post has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	function delete($id)
	{
		$this->Image->id = $id;
		$this->Image->delete();
		$this->Session->setFlash('The Post with id: '.$id.' has been deleted.');
		$this->redirect(array('action'=>'index'));

	}		
		
//Admin functions
	function admin_index()
	{
		$this->layout = 'admin';
		$this->set('images', $this->Image->find('all'));
	}
	
	function admin_add()
	{
		$this->layout = 'admin';
		if(!empty($this->data))
		{
			if ($this->Image->save($this->data)) 
			{
				$this->Session->setFlash('User has been added.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	function admin_edit($id = null)
	{
		//debug($_SESSION);
		$this->layout = 'admin';
		$this->Image->id = $id;
		if (empty($this->data))
		{
			$this->data = $this->Image->read();
		} 
		else 
		{
			if ($this->Image->save($this->data)) 
			{
				$this->Session->setFlash('User has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	function admin_delete($id)
	{
		$this->layout = 'admin';
		$this->Image->id = $id;
		$this->Image->delete();
		$this->Session->setFlash('The user with id: '.$id.' has been deleted.');
		$this->redirect(array('action'=>'index'));

	}		
}
?>