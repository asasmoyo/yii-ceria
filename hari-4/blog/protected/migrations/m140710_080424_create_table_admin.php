<?php

class m140710_080424_create_table_admin extends CDbMigration {

    public function up() {
        $this->createTable('admin', [
            'id' => 'pk',
            'username' => 'VARCHAR(30) NOT NULL',
            'password' => 'VARCHAR(32) NOT NULL',
        ]);

        $this->insert('admin', [
            'username' => 'admin',
            'password' => md5('admin'),
        ]);
    }

    public function down() {
        $this->dropTable('admin');
    }

    /*
      // Use safeUp/safeDown to do migration with transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
