<?php
class EventsController extends AppController
{

	var $name = 'Events';
	var $components = array('Auth');
	var $helpers = array('Html','Javascript');
	var $paginate = array('Event' => array('limit' => 10,'order' => array('Event.name' => 'asc')
        ));
	
	function beforeFilter()
	{
	$this->Auth->allow('index','view','display','admin_index','admin_edit','admin_delete','admin_add','admin_view');
	}

	function index()
	{
		$this->set('events', $this->Event->find('all'));
	}
	function active()
	{
		$user_id = $this->Session->read('Auth.User.id');
		$conditions[] = array('Event.Active' => 1,'User.id' => $user_id);
		$this->set('events',$this->paginate($this->Event,$conditions));
	}
	function inactive()
	{
		$user_id = $this->Session->read('Auth.User.id');
		$conditions[] = array('Event.Active <>' => 1,'User.id' => $user_id);
		$this->set('events',$this->paginate($this->Event,$conditions));
		$this->render('active');
	}
	
	function add($user_id = null)
	{
		//$this->set('temp3', $this->Event->Category->generatetreelist(null, null, null, '---'));
		$this->Event->User->id = $this->Session->read('Auth.User.id');
		$this->Event->User->recursive = 0;
		$this->set('user',$this->Event->User->read());
				
		if(!empty($this->data))
			{
				$this->data['Event']['user_id'] =  $this->Session->read('Auth.User.id');
				$this->data['Event']['active']  =  0;
				//debug($this->data);
				$this->Event->save($this->data);
				$this->Session->setFlash('The ad has been added. will be displayed after admins approval');
			}
	}
	
	function edit($id)
	{
			
			// pseudo controller code
			$this->Event->id = $id; // id of Extreme knitting
			$user_id = $this->Session->read('Auth.User.id');
			if (empty($this->data))
			{
				$this->data = $this->Event->find('first', array('conditions' => array('User.id' => $user_id,'Event.id' => $id)));
				//$this->data = $this->Post->read();
				//debug($this->data);
			} 
			else 
			{
			  $this->data['Event']['active']  =  0;
				if ($this->Event->save($this->data)) 
				{
				 $this->Session->setFlash('Your Event has been updated.');
				 $this->redirect(array('action' => 'index'));
				}
			}
		}
		function delete($id)
		{
			// pseudo controller code
			$this->Event->id = $id;
			$this->Event->delete();
			$this->Session->setFlash('The Event with id: '.$id.' has been deleted.');
			$this->redirect(array('action'=>'index'));
		}
		
		function view($id)
		{
			if (!$id) {
			$this->flash(__('Invalid Event', true), array('action'=>'index'));
		 }
			$this->set('event', $this->Event->read(null, $id));
			//debug($this->data);
			//die;
		}
		function display($slug)
		{
			//$this->Post->id = $id;
			$this->data = $this->Event->findBySlug($slug);
			//debug($this->data);
			//die;
		}
		
	function admin_index()
	{
		$this->layout = 'admin';
		//$this->Category->recursive = 0;
		//$this->set('', $this->Category->generatetreelist(null, null, null, '***'));
		$this->set('events',$this->paginate());
	}
	
	function admin_view($id = null) {
		$this->layout = 'admin';
		if (!$id) {
			$this->flash(__('Invalid Event', true), array('action'=>'index'));
		}
		$this->set('event', $this->Event->read(null, $id));
	}
	
	
	function admin_add($user_id = null)
	{
		$this->layout = 'admin';
		//$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
		$this->set('users', $this->Event->User->find('list'));
		if (!empty($this->data)) {
			$this->Event->create();
			if ($this->Event->save($this->data)) {
				$this->flash(__('Event saved.', true), array('action'=>'index'));
			} else {
			}
		}
	}
	
	function admin_edit($id)
	{
			
		$this->layout = 'admin';
		//$this->set('temp3', $this->Post->Category->generatetreelist(null, null, null, '---'));
		$this->set('users', $this->Event->User->find('list'));
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid Event', true), array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Event->save($this->data)) {
				$this->flash(__('The Event has been updated.', true), array('action'=>'index'));
			} else {
			}
		}		
		if (empty($this->data)) {
			$this->data = $this->Event->read(null, $id);
		}
		}
		
		function admin_delete($id = null) {
		$this->layout = 'admin';
		if (!$id) {
			$this->flash(__('Invalid Event', true), array('action'=>'index'));
		}
		if ($this->Event->del($id)) {
			$this->flash(__('Event deleted', true), array('action'=>'index'));
		}
	}
}
?>
