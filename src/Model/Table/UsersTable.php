<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Integrateideas\User\Model\Table\UsersTable as Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Roles
 * @property \Cake\ORM\Association\HasMany $BusinessUsers
 * @property \Cake\ORM\Association\HasMany $ResetPasswordHashes
 * @property \Cake\ORM\Association\HasMany $UserOldPasswords
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Muffin/Trash.Trash', [
              'field' => 'is_deleted'
          ]);

        $this->hasMany('BusinessUsers', [
            'foreignKey' => 'user_id'
        ]);
        // $this->belongsTo('Roles', [
        //     'foreignKey' => 'role_id',
        //     'joinType' => 'INNER'
        // ]);
        // $this->hasMany('ResetPasswordHashes', [
        //     'foreignKey' => 'user_id'
        // ]);
        // $this->hasMany('UserOldPasswords', [
        //     'foreignKey' => 'user_id'
        // ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        parent::validationDefault($validator);
        // $validator
        //     ->integer('id')
        //     ->allowEmpty('id', 'create');

        // $validator
        //     ->allowEmpty('first_name');

        // $validator
        //     ->allowEmpty('last_name');

        // $validator
        //     ->requirePresence('username', 'create')
        //     ->notEmpty('username');

        // $validator
        //     ->requirePresence('password', 'create')
        //     ->notEmpty('password');

        // $validator
        //     ->email('email')
        //     ->allowEmpty('email');

        // $validator
        //     ->allowEmpty('phone');

        // $validator
        //     ->requirePresence('uuid', 'create')
        //     ->notEmpty('uuid');

        // $validator
        //     ->boolean('status')
        //     ->requirePresence('status', 'create')
        //     ->notEmpty('status');

        // $validator
        //     ->dateTime('is_deleted')
        //     ->allowEmpty('is_deleted');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }
}
