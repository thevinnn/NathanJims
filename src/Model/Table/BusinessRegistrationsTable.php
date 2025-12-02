<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BusinessRegistrations Model
 *
 * @property \App\Model\Table\OrganisationsTable&\Cake\ORM\Association\BelongsTo $Organisations
 *
 * @method \App\Model\Entity\BusinessRegistration newEmptyEntity()
 * @method \App\Model\Entity\BusinessRegistration newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\BusinessRegistration> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessRegistration get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\BusinessRegistration findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\BusinessRegistration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\BusinessRegistration> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessRegistration|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\BusinessRegistration saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\BusinessRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BusinessRegistration>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BusinessRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BusinessRegistration> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BusinessRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BusinessRegistration>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BusinessRegistration>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BusinessRegistration> deleteManyOrFail(iterable $entities, array $options = [])
 */
class BusinessRegistrationsTable extends Table
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

        $this->setTable('business_registrations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Organisations', [
            'foreignKey' => 'organisation_id',
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
            ->scalar('business_name')
            ->maxLength('business_name', 255)
            ->allowEmptyString('business_name');

        $validator
            ->scalar('contact_first_name')
            ->maxLength('contact_first_name', 255)
            ->allowEmptyString('contact_first_name');

        $validator
            ->scalar('contact_last_name')
            ->maxLength('contact_last_name', 255)
            ->allowEmptyString('contact_last_name');

        $validator
            ->scalar('contact_email')
            ->maxLength('contact_email', 255)
            ->allowEmptyString('contact_email');

        $validator
            ->scalar('current_website')
            ->maxLength('current_website', 255)
            ->allowEmptyString('current_website');

        $validator
            ->scalar('industry')
            ->maxLength('industry', 255)
            ->allowEmptyString('industry');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->integer('organisation_id')
            ->allowEmptyString('organisation_id');

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
        $rules->add($rules->existsIn(['organisation_id'], 'Organisations'), ['errorField' => 'organisation_id']);

        return $rules;
    }
}
