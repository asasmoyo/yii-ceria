<?php

class m140710_080435_create_table_artikel extends CDbMigration {

    public function up() {
        $this->createTable('artikel', [
            'id' => 'pk',
            'judul' => 'VARCHAR(50) NOT NULL',
            'isi' => 'TEXT NOT NULL',
            'tanggal' => 'DATE NOT NULL',
        ]);
    }

    public function down() {
        $this->dropTable('artikel');
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
