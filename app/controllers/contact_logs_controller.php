<?php
class ContactLogsController extends AppController {

	var $name = 'ContactLogs';
	
	function index($post_id)
	{
		//App::import('Model', 'Post');
		if(empty($this->data))
		{
			$this->loadModel('Post');
			$this->Post->id = $post_id;
			$this->data = $this->Post->read();
			$this->set('data',$this->data);
		}	
		else 
		{
			if ($this->ContactLog->save($this->data)) 
			{
				$this->Session->setFlash('Email Sent successfully.');
				//$this->redirect(array('action' => 'index'));
			}
		}
		//debug($this->data);
		//die;
	}
	
	function _mail_seller()
	{
	}
	
  }
?>
