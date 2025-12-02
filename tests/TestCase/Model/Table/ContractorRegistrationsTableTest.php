<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContractorRegistrationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContractorRegistrationsTable Test Case
 */
class ContractorRegistrationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContractorRegistrationsTable
     */
    protected $ContractorRegistrations;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.ContractorRegistrations',
        'app.Contractors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ContractorRegistrations') ? [] : ['className' => ContractorRegistrationsTable::class];
        $this->ContractorRegistrations = $this->getTableLocator()->get('ContractorRegistrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ContractorRegistrations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ContractorRegistrationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ContractorRegistrationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
