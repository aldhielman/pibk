<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rpa}}`.
 */
class m240220_073651_create_rpa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rpa}}', [
            'id' => $this->primaryKey(),
            'uuid' => $this->string(36)->notNull(),
            'hashcode' => $this->string(50)->notNull(),
            'pemilik_barang' => $this->string(100)->notNull(),
            'alamat' => $this->text()->notNull(),
            'no_passport' => $this->string(15)->notNull(),
            'kebangsaan' => $this->string(50)->notNull(),
            'flight_voyage' => $this->string(50)->notNull(),
            'negara_asal' => $this->string(50)->notNull(),
            'jumlah' => $this->string(50)->notNull(),
            'uraian_barang' => $this->text()->notNull(),
            'keterangan' => $this->text(),
            'kurs' => $this->integer()->notNull(),
            'insurance' => $this->bigInteger()->notNull(),
            'fob' => $this->bigInteger()->notNull(),
            'freight' => $this->bigInteger()->notNull(),
            'cif' => $this->bigInteger()->notNull(),
            'nilai_pabean' => $this->bigInteger()->notNull(),
            'bm' => $this->bigInteger()->notNull(),
            'ppn' => $this->bigInteger()->notNull(),
            'ppnbm' => $this->bigInteger()->notNull(),
            'pph' => $this->bigInteger()->notNull(),
            'denda_adm' => $this->bigInteger()->notNull(),
            'total_bm_pdri' => $this->bigInteger()->notNull(),
            'nama_petugas' => $this->string(50)->notNull(),
            'nip_petugas' => $this->string(18)->notNull(),
            'tanggal_rekam' => $this->date()->notNull(),
            'no' => $this->string(20)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rpa}}');
    }
}
