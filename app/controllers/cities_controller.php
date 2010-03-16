<?php
class CitiesController extends AppController
 {

   var $name = 'Cities';
	 //var $helpers = array('Html','Javascript');

	
	function beforeFilter()
	{
	 parent::beforeFilter();
	 $this->Auth->allow(array('*','autoComplete'));
	 $this->set('cities', $this->City->find('list',array('fields'=> 'city')));
	}
	
	function autoComplete()
	{
		Configure::write('debug', 0);
		$this->layout = 'ajax';
		$cities = $this->City->find('all', array('conditions'=>array('City.city LIKE'=> $this->params['url']['q'].'%'),
   'fields'=>array('city', 'id')));
		$this->set('cities', $cities);
}


		//var $scaffold;
        
  function index()
	{
                $this->data = $this->Category->generatetreelist(null, null, null, '***');
               debug ($this->data);
							// die;       
   }
		
		function add()
		{
			$this->set('temp3', $this->Category->generatetreelist(null, null, null, '---'));
			if(!empty($this->data))
			{
				//debug($this->data);
				$this->Category->save($this->data);
			}

		}
		
		function edit($id)
		{
			
			// pseudo controller code
			$this->Category->id = $id; // id of Extreme knitting
			$this->set('temp3', $this->Category->generatetreelist(null, null, null, '---'));
			if (empty($this->data))
			{
				$this->data = $this->Category->read();
			} 
			else 
			{
				if ($this->Category->save($this->data)) 
				{
				 //$this->Session->setFlash('Your Category has been updated.');
				 //$this->redirect(array('action' => 'index'));
				}
			}
		}
		function delete($id)
		{
			// pseudo controller code
			$this->Category->id = $id;
			$this->Category->delete();
			$this->Session->setFlash('The category with id: '.$id.' has been deleted.');
			$this->redirect(array('action'=>'index'));

		}
		
		function list_home()
		{
		  //$this->Category->id = 19;
			$this->Category->recursive = -1;
			$cat['ForSale'] = $this->Category->find('all', array('conditions' => array('Category.parent_id' => 19)));
			$cat['ForSale'][0]['slug'] = 'for-sale';
			
			$cat['Classes'] = $this->Category->find('all', array('conditions' => array('Category.parent_id' => 24)));
			$cat['Classes'][0]['slug'] = 'classes';
			
			$cat['Vehicles'] = $this->Category->find('all', array('conditions' => array('Category.parent_id' => 20)));
			$cat['Vehicles'][0]['slug'] = 'vehicles';
			
			$cat['Matrimonial'] = $this->Category->find('all', array('conditions' => array('Category.parent_id' => 21)));
			$cat['Matrimonial'][0]['slug'] = 'matrimonial';
			
			$cat['RealEstate'] = $this->Category->find('all', array('conditions' => array('Category.parent_id' => 22)));
			$cat['RealEstate'][0]['slug'] = 'real-estate';
			
			$cat['Jobs'] = $this->Category->find('all', array('conditions' => array('Category.parent_id' => 23)));
			$cat['Jobs'][0]['slug'] = 'jobs';
			
			$cat['Services'] = $this->Category->find('all', array('conditions' => array('Category.parent_id' => 25)));
			$cat['Services'][0]['slug'] = 'services';
			
			$cat['Resumes'] = $this->Category->find('all', array('conditions' => array('Category.parent_id' => 26)));
			$cat['Resumes'][0]['slug'] = 'resumes';
			
			$cat['Community'] = $this->Category->find('all', array('conditions' => array('Category.parent_id' => 27)));
	$cat['Community'][0]['slug'] = 'community';			
			$this->data = $cat;
			//$cat['Community1'] = $this->Category->find('all', array('conditions' => array('Category.parent_id' => array(25,26,27))));
			//debug($cat['Community1']);
			//debug($this->data);
			//die;
		}
		function list_postId($id = null)
		{
		  $this->data = $this->Category->Post->find('all',array('conditions' => array('Category.id' => $id)));
			//debug($this->data);
			//die;
		}
		function list_post($slug = null)
		{
		  if($this->Session->check('City.id'))
			{
				$conditions[] = array('City.id' => $this->Session->read('City.id')); 
			}
			$conditions[] = array('Category.slug' => $slug);
			$conditions[] = array('Post.Active' => 1);
			$this->data = $this->Category->Post->find('all',array('conditions' => $conditions));
			$this->set('data',$this->paginate($this->Category->Post,array($conditions)));
			//debug($data);
			//die;
			//debug($this->data);
			if(!empty($this->data))
			{
				$children = $this->Category->children($this->data[0]['Category']['id'], true);
				$this->set('children', $children);
			}
			//$children = $this->Category->find('list',array('conditions' => array('Category.parent_id' => $this->data[0]['Category']['id'])));
			//debug($children);
			//debug($directChildren);
			
			//die;
			//$this->data = $this->paginate('Category',array('conditions' => array('Category.slug' => $slug)));
			//debug($this->data);
			//die;
		}
		function set_city()
		{
			$this->Category->Post->City->id = $this->data['Category']['city_id'];
			$this->data = $this->Category->Post->City->read();
			$this->Session->write('City.id',$this->data['City']['id']);
			$this->Session->write('City.city',$this->data['City']['city']);
			$this->redirect(array('action'=>'list_home'));
			//$this->data = $this->Category->Post->find('all',array('conditions' => array('Category.slug' => $slug)));
			//$this->data = $this->paginate('Category',array('conditions' => array('Category.slug' => $slug)));
			//debug($this->data);
			//die;
		}
}
?>
