<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BusinessUsers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Businesses
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\BusinessUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusinessUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BusinessUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessUser findOrCreate($search, callable $callback = null, $options = [])
 */
class BusinessUsersTable extends Table
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

        $this->setTable('business_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Muffin/Trash.Trash', [
              'field' => 'is_deleted'
          ]);

        $this->belongsTo('Businesses', [
            'foreignKey' => 'business_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

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
        $rules->add($rules->existsIn(['business_id'], 'Businesses'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
