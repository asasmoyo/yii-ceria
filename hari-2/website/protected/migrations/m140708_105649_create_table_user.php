<?php

class m140708_105649_create_table_user extends CDbMigration {

    public function up() {
        $this->createTable('user', [
            'id' => 'pk',
            'username' => 'VARCHAR(30) NOT NULL',
            'password' => 'VARCHAR(32) NOT NULL',
            'nama' => 'VARCHAR(100) NOT NULL',
        ]);

        $this->insert('user', [
            'username' => 'kotak',
            'password' => md5('kotak'),
            'nama' => 'kotak',
        ]);
    }

    public function down() {
        $this->dropTable('user');
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
