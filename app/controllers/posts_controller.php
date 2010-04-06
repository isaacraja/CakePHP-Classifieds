<?php
class PostsController extends AppController
{

	var $name = 'Posts';
	var $components = array('Auth');
	
	var $helpers = array('Html','Javascript');
	
	var $paginate = array('Post' => array('limit' => 10,'order' => array('Post.title' => 'asc')
        ));
	
	function beforeFilter()
	{
	parent::beforeFilter();
	$this->Auth->allow('index','view','display');
	$this->set('countries',$this->Post->Country->find('list',array('fields' => 'country')));
	$this->set('typeofad',array('Services Offered','Services Needed'));
	$this->set('postedby',array('Individual','Business'));
	$this->set('cities', $this->Post->City->find('list',array('fields'=> 'city')));
	$this->set('categories', $this->Post->Category->find('list',array('fields'=> 'name')));
	}

	function index()
	{
		$this->set('posts', $this->Post->find('all'));
	}
	
	function active()
	{
		$user_id = $this->Session->read('Auth.User.id');
		$conditions[] = array('Post.Active' => 1,'User.id' => $user_id);
		$this->set('posts',$this->paginate($this->Post,$conditions));
		$this->render();
	}
	function inactive()
	{
		$user_id = $this->Session->read('Auth.User.id');
		$conditions[] = array('Post.Active <>' => 1,'User.id' => $user_id);
		$this->set('posts',$this->paginate($this->Post,$conditions));
		$this->render('active');
	}
	
	function add($user_id = null)
	{
		$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
		$this->Post->User->id = $this->Session->read('Auth.User.id');
		$this->Post->User->recursive = 0;
		$this->set('user',$this->Post->User->read());
		
		
		if(!empty($this->data))
			{
				$this->data['Post']['user_id'] =  $this->Session->read('Auth.User.id');
				$this->data['Post']['active']  =  0;
				//debug($this->data);
				if($this->Post->saveAll($this->data,array('validate' => 'only')))
				{
				  //$this->Session->setFlash('The ad has been added. will be displayed after admins approval');
			    //$this->redirect(array('action'=>'inactive'));
			  }  
			}
	}
	
	function edit($id)
	{
			
			// pseudo controller code
			$this->Post->id = $id; // id of the Post
			$user_id = $this->Session->read('Auth.User.id');
			$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
			if (!$id && empty($this->data)) {
			$this->flash(__('Invalid Post', true), array('action'=>'index'));
		}
		if (!empty($this->data)) {
		  //$this->data['Post']['active']  =  0;
			if ($this->Post->saveAll($this->data,array('validate' => 'only'))) {
				$this->flash(__('The Post has been updated.', true), array('action'=>'inactive'));
			} else {
			}
		}		
		if (empty($this->data)) {
			$this->data = $this->Post->find('first', array('conditions' => array('User.id' => $user_id,'Post.id' => $id)));
		}		
			
	}
		function delete($id)
		{
			// pseudo controller code
			if (!$id) {
			$this->flash(__('Invalid Post', true), array('action'=>'index'));
		}
		if ($this->Post->del($id)) {
			$this->Session->setFlash('The Post with id: '.$id.' has been deleted.');
			$this->redirect(array('action'=>'index'));
		}
	}
		
		function view($id)
		{
			if (!$id) {
			$this->flash(__('Invalid Post', true), array('action'=>'index'));
		 }
			$this->set('post', $this->Post->read(null, $id));
			$this->Post->saveField('hits', $this->data['Post']['hits'] + 1);
			//debug($this->data);
			//die;
		}
		function display($slug)
		{
			//$this->Post->id = $id;
			$this->set('data',$this->Post->findBySlug($slug));
			$this->Post->id = $this->data['Post']['id'];
			$hits = $this->data['Post']['hits'] + 1;
			$this->Post->saveField('hits', $hits);
			$points = $this->data['User']['points'] + $hits/10;
			$this->Post->User->id = $this->data['User']['id'];
			$this->Post->User->saveField('points', $points);
			//debug($this->data);
			//die;
		}
		
	function admin_index()
	{
		$this->layout = 'admin';
		$this->Post->recursive = 0;
		$this->set('posts',$this->paginate());
	}
	
	function admin_view($id = null) {
		$this->layout = 'admin';
		if (!$id) {
			$this->flash(__('Invalid Post', true), array('action'=>'index'));
		}
		$this->set('post', $this->Post->read(null, $id));
	}
	
	
	function admin_add($user_id = null)
	{
		$this->layout = 'admin';
		$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
		$this->set('temp4', $this->Post->User->find('list'));
		if (!empty($this->data)) {
			$this->Post->create();
			if ($this->Post->saveAll($this->data)) {
				$this->flash(__('Post saved.', true), array('action'=>'index'));
			} else {
			}
		}
	}
	
	function admin_edit($id)
	{
			
		$this->layout = 'admin';
		$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
		$this->set('temp4', $this->Post->User->find('list'));
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid Post', true), array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Post->save($this->data)) {
				$this->flash(__('The Post has been updated.', true), array('action'=>'index'));
			} else {
			}
		}		
		if (empty($this->data)) {
			$this->data = $this->Post->read(null, $id);
		}
	}	
		/*
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
			}*/
			
		function admin_delete($id = null) {
		$this->layout = 'admin';
		if (!$id) {
			$this->flash(__('Invalid Post', true), array('action'=>'index'));
		}
		if ($this->Post->del($id,true)) {
			$this->flash(__('Post deleted', true), array('action'=>'index'));
		}
	}
}
?>
