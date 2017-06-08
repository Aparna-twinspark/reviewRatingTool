<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReviewSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReviewSettingsTable Test Case
 */
class ReviewSettingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReviewSettingsTable
     */
    public $ReviewSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.review_settings',
        'app.businesses',
        'app.business_users',
        'app.users',
        'app.review_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ReviewSettings') ? [] : ['className' => 'App\Model\Table\ReviewSettingsTable'];
        $this->ReviewSettings = TableRegistry::get('ReviewSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReviewSettings);

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
