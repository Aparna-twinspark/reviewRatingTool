<?php
use Migrations\AbstractMigration;

class AddIsDeletedToBusinessUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('business_users');
        $table->addColumn('is_deleted', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->update();
    }
}
