<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\I18n\FrozenTime;

/**
 * Businesses Controller
 *
 * @property \App\Model\Table\BusinessesTable $Businesses
 *
 * @method \App\Model\Entity\Business[] paginate($object = null, array $settings = [])
 */
class BusinessesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $businesses = $this->paginate($this->Businesses);

        $this->set(compact('businesses'));
        $this->set('_serialize', ['businesses']);
    }

    /**
     * View method
     *
     * @param string|null $id Business id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $business = $this->Businesses->get($id, [
            'contain' => ['BusinessUsers']
        ]);

        $this->set('business', $business);
        $this->set('_serialize', ['business']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $business = $this->Businesses->newEntity();
        if ($this->request->is('post')) {
            $userData = $this->request->data['business_users'][0]['user'];
            $userData['username'] = $this->Businesses->BusinessUsers->Users->getUsername($userData);
            $hasher = new DefaultPasswordHasher();
            $userData['password'] = $hasher->hash($userData['password']);
            $userData['role_id'] = 2;
            
            $this->request->data['business_users'][0]['user'] = $userData;
            // pr($this->request->data);die;
            $business = $this->Businesses->patchEntity($business, $this->request->getData(), ['associated' => ['BusinessUsers', 'BusinessUsers.Users']]);
            if($this->Businesses->save($business)){
                // pr($business);die;
                $this->Flash->success(__('The business has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            // pr($business);die;
            $this->Flash->error(__('The business could not be saved. Please, try again.'));
        }
        $this->set(compact('business'));
        $this->set('_serialize', ['business']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Business id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $business = $this->Businesses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $business = $this->Businesses->patchEntity($business, $this->request->getData());
            if ($this->Businesses->save($business)) {
                $this->Flash->success(__('The business has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business could not be saved. Please, try again.'));
        }
        $this->set(compact('business'));
        $this->set('_serialize', ['business']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Business id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $business = $this->Businesses->get($id);
        // pr($business);die;
        $businessId = $business->id;
        $this->loadModel('BusinessUsers');
        $businessUsers = $this->BusinessUsers->findByBusinessId($businessId)
                                             ->all()->extract('user_id')->toArray();

        if ($this->Businesses->delete($business)) {
            if(!empty($businessUsers) || count($businessUsers) > 0){
                $this->loadModel('Users');
                $users = $this->Users->find()
                                     ->where(['id IN' => $businessUsers])->all();
                $users = $users->map(function($value, $key){
                    $value->is_deleted = FrozenTime::now();
                    return $value;
                });
                $users = $users->toArray();

                if($this->Users->saveMany($users)){
                    $this->Flash->success(__('The business has been deleted.'));
                }else{
                    $this->Flash->error(__('The business users could not be deleted. Please, try again.'));   
                }
            }
        } else {
            $this->Flash->error(__('The business could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
