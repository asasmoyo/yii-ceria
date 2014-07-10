<?php

class m140710_080442_create_table_komentar extends CDbMigration {

    public function up() {
        $this->createTable('komentar', [
            'id' => 'pk',
            'nama' => 'VARCHAR(50) NOT NULL',
            'komentar' => 'VARCHAR(500) NOT NULL',
            'tanggal' => 'DATE NOT NULL',
            'id_artikel' => 'INTEGER NOT NULL REFERENCES artikel(id)',
        ]);
    }

    public function down() {
        $this->dropTable('komentar');
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
