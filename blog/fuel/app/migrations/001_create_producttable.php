<?php
namespace Fuel\Migrations;

use Fuel\Core\DBUtil;
class Create_ProductTable
{
    /**
     * up
     */
    public function up()
    {
        DBUtil::create_table('product',
            [
                'id'   => ['type' => 'int', 'constraint' => 5, 'auto_increment' => true],
                'name' => ['type' => 'varchar', 'constraint' => 250],
                'code' => ['type' => 'varchar', 'constraint' => 100],
                'price'=> ['type' => 'varchar', 'constraint' => 100],
                'desc' => ['type' => 'text'],
                'created_at' => ['type' => 'datetime'],
                'updated_at' => ['type' => 'datetime']
            ],
            ['id']
            );
    }

    /**
     * down
     */
    public function down()
    {
        DBUtil::drop_table('product');
    }

}