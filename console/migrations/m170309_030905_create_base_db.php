<?php

use yii\db\Schema;
use yii\db\Migration;

class m170309_030905_create_base_db extends Migration
{
    public $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
    public function up()
    {
        $this->createTable('date', array(
            'idDate' => Schema::TYPE_PK,
            'date' => Schema::TYPE_INTEGER.' NOT NULL',
            'status' => Schema::TYPE_INTEGER.' NOT NULL',
        ), $this->tableOptions);

        $this->createTable('vip', array(
        'idVip' => Schema::TYPE_PK,
        'name' => Schema::TYPE_STRING.' NOT NULL',
        'amount' => Schema::TYPE_INTEGER.' NOT NULL',
        'priceForSurplus'=> Schema::TYPE_INTEGER,
    ), $this->tableOptions);

        $this->createTable('table', array(
            'idTable' => Schema::TYPE_PK,
            'idVip' => Schema::TYPE_INTEGER.' NOT NULL',
            'code' => Schema::TYPE_STRING.' NOT NULL',
        ), $this->tableOptions);
        $this->addForeignKey('fk_table_1', 'table', 'idVip', 'vip', 'idVip');

        $this->createTable('vip_manager', array(
            'idVipManager' => Schema::TYPE_PK,
            'idVip' => Schema::TYPE_INTEGER.' NOT NULL',
            'idUser' => Schema::TYPE_INTEGER.' NOT NULL',
        ), $this->tableOptions);

        $this->addForeignKey('fk_vip_manager_1', 'vip_manager', 'idVip', 'vip', 'idVip');
        $this->addForeignKey('fk_vip_manager_2', 'vip_manager', 'idUser', 'user', 'id');

        $this->createTable('reservation', array(
            'idReservation' => Schema::TYPE_PK,
            'idUser' => Schema::TYPE_INTEGER,
            'idTable' => Schema::TYPE_INTEGER.' NOT NULL',
            'idDate' => Schema::TYPE_INTEGER.' NOT NULL',
            'status'=> Schema::TYPE_INTEGER.' NOT NULL',
            'clientName' => Schema::TYPE_STRING.' NOT NULL',
            'clientPhone' => Schema::TYPE_STRING.' NOT NULL',
            'advance' => Schema::TYPE_INTEGER,
            'qtyPersons' => Schema::TYPE_INTEGER.' NOT NULL',
            'reservationDate' => Schema::TYPE_INTEGER.' NOT NULL',
        ), $this->tableOptions);

        $this->addForeignKey('fk_reservation_1', 'reservation', 'idUser', 'user', 'id');
        $this->addForeignKey('fk_reservation_2', 'reservation', 'idTable', 'table', 'idTable');
        $this->addForeignKey('fk_reservation_3', 'reservation', 'idDate', 'date', 'idDate');

        $this->createTable('user_data', array(
            'idListName' => Schema::TYPE_PK,
            'idUser' => Schema::TYPE_INTEGER.' NOT NULL',
            'fullName' => Schema::TYPE_STRING,
            'listName' => Schema::TYPE_STRING,
            'instagram' => Schema::TYPE_STRING,
            'phone' => Schema::TYPE_STRING,
        ), $this->tableOptions);

        $this->addForeignKey('fk_user_data_1', 'user_data', 'idUser', 'user', 'id');

        $this->createTable('list_friday', array(
            'idListFriday' => Schema::TYPE_PK,
            'idUser' => Schema::TYPE_INTEGER.' NOT NULL',
            'name'=> Schema::TYPE_STRING.' NOT NULL',
            'lastName'=> Schema::TYPE_STRING.' NOT NULL',
            'phone'=> Schema::TYPE_STRING.' NOT NULL',
            'instagram'=> Schema::TYPE_STRING,
            'birthday'=> Schema::TYPE_INTEGER,
            'idDate' => Schema::TYPE_INTEGER.' NOT NULL',
        ), $this->tableOptions);

        $this->addForeignKey('fk_list_friday_1', 'list_friday', 'idUser', 'user', 'id');
        $this->addForeignKey('fk_list_friday_3', 'list_friday', 'idDate', 'date', 'idDate');

    }

    public function down()
    {
        $this->dropTable('reservation');
        $this->dropTable('vip_manager');
        $this->dropTable('table');
        $this->dropTable('vip');
        $this->dropTable('list_friday');
        $this->dropTable('date');
        $this->dropTable('user_data');
    }
}
