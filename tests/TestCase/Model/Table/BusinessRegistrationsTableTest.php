<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessRegistrationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessRegistrationsTable Test Case
 */
class BusinessRegistrationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessRegistrationsTable
     */
    protected $BusinessRegistrations;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.BusinessRegistrations',
        'app.Organisations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BusinessRegistrations') ? [] : ['className' => BusinessRegistrationsTable::class];
        $this->BusinessRegistrations = $this->getTableLocator()->get('BusinessRegistrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BusinessRegistrations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BusinessRegistrationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BusinessRegistrationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
