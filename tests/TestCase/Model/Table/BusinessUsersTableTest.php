<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessUsersTable Test Case
 */
class BusinessUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessUsersTable
     */
    public $BusinessUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.business_users',
        'app.businesses',
        'app.review_settings',
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
        $config = TableRegistry::exists('BusinessUsers') ? [] : ['className' => 'App\Model\Table\BusinessUsersTable'];
        $this->BusinessUsers = TableRegistry::get('BusinessUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BusinessUsers);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
