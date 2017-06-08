<?php 
namespace App\Event;

use Cake\Event\EventListenerInterface;
use Cake\Log\Log;
use Cake\Network\Exception;
use Cake\Datasource\ModelAwareTrait;

class UserPluginEventListener implements EventListenerInterface {

	use ModelAwareTrait;

	public function implementedEvents()
	{
	    return [
	       'userPlugin.users.index' => 'usersIndex',
	       'userPlugin.users.view' => 'usersView',
	       'userPlugin.users.add.enter'=> 'usersAddEnter',
	       'userPlugin.users.add.save' => 'usersAddSave',
	       'userPlugin.users.edit.enter'=> 'usersEditEnter',
	       'userPlugin.users.edit.save' => 'usersEditSave',
	       'userPlugin.users.delete' => 'usersDelete',
	       'userPlugin.users.login.enter' => 'usersLoginEnter',
	       'userPlugin.users.login.success' => 'usersLoginSuccess',
	       'userPlugin.users.resetPassword.enter' => 'usersResetPasswordEnter',
	       'userPlugin.users.resetPassword.save' => 'usersResetPasswordSave',
	       'userPlugin.users.updatePassword.save' => 'usersUpdatePasswordSave',
	       'userPlugin.users.resetPasswordLink' => 'usersResetPasswordLink',
	       'userPlugin.roles.index' => 'rolesIndex',
	       'userPlugin.roles.view' => 'rolesView',
	       'userPlugin.roles.add.enter'=> 'rolesAddEnter',
	       'userPlugin.roles.add.save' => 'rolesAddSave',
	       'userPlugin.roles.edit.enter'=> 'rolesEditEnter',
	       'userPlugin.roles.edit.save' => 'rolesEditSave',
	       'userPlugin.roles.delete' => 'rolesDelete',
	    ];
	}

	public function usersIndex($event, $data){
		$this->loadModel('BusinessUsers');
		$businesses = $this->BusinessUsers->find()
										  ->contain(['Businesses'])
  									      ->all()->indexBy('user_id')->toArray();

		return $businesses;
	} 	

	public function usersView($event, $data){
		return false;
	} 	

	public function usersAddEnter($event, $data){
		return false;
	} 	

	public function usersAddSave($event, $data){
		return false;
	} 	

	public function usersEditEnter($event, $data){
		return false;
	} 	

	public function usersEditSave($event, $data){
		return false;
	} 	

	public function usersDelete($event, $data){
		return false;
	} 

	public function usersLoginEnter($event, $data){
		return false;
	} 	

	public function usersLoginSuccess($event, $data){
		$this->loadModel('Roles');
		$role = $this->Roles->findById($data['role_id'])
							->first();
		return $role;
	} 	

	public function usersResetPasswordEnter($event, $data){
		return false;
	} 	

	public function usersResetPasswordSave($event, $data){
		return false;
	} 	

	public function usersUpdatePasswordSave($event, $data){
		return false;
	} 	

	public function usersResetPasswordLink($event, $data){
		return false;
	} 	

	public function rolesIndex($event, $data){
		return false;
	} 
	public function rolesView($event, $data){
		return false;
	} 	

	public function rolesAddEnter($event, $data){
		return false;
	} 	

	public function rolesAddSave($event, $data){
		return false;
	} 	

	public function rolesEditEnter($event, $data){
		return false;
	} 	

	public function rolesEditSave($event, $data){
		return false;
	} 	

	public function rolesDelete($event, $data){
		return false;
	} 
		

}

?>