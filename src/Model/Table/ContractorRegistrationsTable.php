<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContractorRegistrations Model
 *
 * @property \App\Model\Table\ContractorsTable&\Cake\ORM\Association\BelongsTo $Contractors
 *
 * @method \App\Model\Entity\ContractorRegistration newEmptyEntity()
 * @method \App\Model\Entity\ContractorRegistration newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ContractorRegistration> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContractorRegistration get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ContractorRegistration findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ContractorRegistration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ContractorRegistration> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContractorRegistration|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ContractorRegistration saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ContractorRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ContractorRegistration>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ContractorRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ContractorRegistration> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ContractorRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ContractorRegistration>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ContractorRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ContractorRegistration> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ContractorRegistrationsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('contractor_registrations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Contractors', [
            'foreignKey' => 'contractor_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->allowEmptyString('last_name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 255)
            ->allowEmptyString('phone_number');

        $validator
            ->scalar('specialised_in')
            ->maxLength('specialised_in', 255)
            ->allowEmptyString('specialised_in');

        $validator
            ->integer('contractor_id')
            ->allowEmptyString('contractor_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['contractor_id'], 'Contractors'), ['errorField' => 'contractor_id']);

        return $rules;
    }
}
