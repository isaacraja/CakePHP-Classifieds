<?php
class UsersController extends AppController
{

	var $name = 'Users';
	//var $scaffold;

	var $components = array('Auth','Captcha');
	

    function beforeFilter() {
    
        parent::beforeFilter();
        $this->Auth->fields = array(
            'username' => 'email', 
            'password' => 'password'
            );
       
       //debug($this->params['admin']); 
       if(isset($this->params['admin']) && ($this->params['admin'] == 1))
       {
         
         $this->checkAdminSession();  
       }    
			$this->Auth->allow('captcha','register','login','logout','admin_login');
			$this->set('groups',$this->User->Group->find('list',array('fields' => 'name')));
			//$this->Auth->autoRedirect = false;
	
    }
    
		function captcha()
    {
        $this->Captcha->render();
    } 
	function login()
	{ 
	  
  }

	function logout()
	{
			 $this->Session->del('Permissions');
			 $this->Session->del('Groups');
       $this->Session->del('Auth'); 
			 $this->redirect('/users/login');
   }
	function register()
	{
    if (!empty($this->data))
		{
			if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['confirm_password']))
			{
				$captcha = $this->Session->read('captcha');
				$this->data['Group']['Group'][0] = 5;  //Default to a Member
				//debug($captcha);
				//die;
				$this->User->create();
				  if($this->User->save($this->data))
				  {
  				  $this->Session->setFlash('Thanks for your registration. Please Login to Continue');
  				  $this->redirect('/users/dashboard');				  
				  }				
			}
		}
	}

	function index()
	{
		$this->set('users', $this->User->find('all'));
	}
	
	function add()
	{
		if(!empty($this->data))
			{
				$this->User->save($this->data);
			}
	}
	function edit($id = null)
		{
			//debug($_SESSION);
			$this->User->id = $this->Session->read('Auth.User.id');
			if (empty($this->data))
			{
				$this->data = $this->User->read();
			} 
			else 
			{
				if ($this->User->save($this->data)) 
				{
				 $this->Session->setFlash('Your Ad Post has been updated.');
				 $this->redirect(array('action' => 'index'));
				}
			}
		}
		function delete($id)
		{
			$this->User->id = $id;
			$this->User->delete();
			$this->Session->setFlash('The Post with id: '.$id.' has been deleted.');
			$this->redirect(array('action'=>'index'));

		}
		
		function dashboard()
		{
		 /* $user_id = $this->Session->read('Auth.User.id');
			$data['User'] = $this->Auth->user();
			//debug($data);
			//die;
			$this->data = $this->User->Post->find('all', array('conditions' => array('User.id' => $user_id))); */
		}
		
		function userprofile() {
		
		$user_id = $this->Session->read('Auth.User.id');
				
		if (empty($this->data)) {
				$this->data = $this->User->Profile->find('first', array('conditions' => array('Profile.user_id' => $user_id)));
				//$this->data = $this->Post->read();
				//debug($this->data);
				//die;
			} 
			else 
			{
				if ($this->User->Profile->saveAll($this->data)) 
				{
				 $this->Session->setFlash('Your Profile has been updated.');
				 $this->redirect(array('action' => 'index'));
				}
			}
		
		}
	function changepass()
	{
	    if(!empty($this->data['User']['password']))
			{
			  $this->User->id = $this->Session->read('Auth.User.id');
	      $this->data['User']['password'] = $this->Auth->password($this->data['User']['password']);
				if ($this->User->save($this->data)) 
				{
				 $this->Session->setFlash('Password Sucessfully Changed.Please Login Again');
				 $this->logout();
				 //$this->redirect(array('action' => 'index'));
				}
			}
	}	
		
//Admin functions
function admin_index()
	{
		$this->layout = 'admin';
		$this->set('users', $this->User->find('all'));
	}
	
	function admin_add()
	{
		$this->layout = 'admin';
		if(!empty($this->data))
			{
			    //debug($this->data);
			    //die;
				if ($this->User->save($this->data)) 
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
			$this->User->id = $id;
			if (empty($this->data))
			{
				$this->data = $this->User->read();
			} 
			else 
			{
				if ($this->User->save($this->data)) 
				{
				 $this->Session->setFlash('User has been updated.');
				 $this->redirect(array('action' => 'index'));
				}
			}
		}
		
		function admin_delete($id)
		{
			$this->layout = 'admin';
			$this->User->id = $id;
			$this->User->delete();
			$this->Session->setFlash('The user with id: '.$id.' has been deleted.');
			$this->redirect(array('action'=>'index'));

		}	
	
	function admin_login()
	{
	 

	 $this->layout = 'admin';
	 //$this->Auth->autoRedirect = false;

	 if ($this->Auth->user()) {
		$groups = $this->Session->read('Groups');
		//debug($groups);
		//die;
		if(!in_group('Admin',$groups) || !in_group('Moderator',$groups))
		{
			$this->Session->del('Auth');
			$this->Session->del('Permissions');
			$this->Session->del('Groups');
			$this->Session->setFlash('You do not have permission to access the administration.');
      $this->redirect(array('admin'=>false,'controller'=>'users','action'=>'login'));
    }	
			$this->redirect('/admin/posts');

  }
	}
	
	function admin_logout()
	{
		
		$this->Session->del('Auth');
		$this->Session->del('Permissions');
		$this->Session->del('Groups');			 
		$this->redirect('/');
  }
  
 
  
  
} 
?>
