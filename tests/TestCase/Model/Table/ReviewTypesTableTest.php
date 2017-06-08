<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReviewTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReviewTypesTable Test Case
 */
class ReviewTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReviewTypesTable
     */
    public $ReviewTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.review_types',
        'app.review_settings',
        'app.businesses',
        'app.business_users',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ReviewTypes') ? [] : ['className' => 'App\Model\Table\ReviewTypesTable'];
        $this->ReviewTypes = TableRegistry::get('ReviewTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReviewTypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
