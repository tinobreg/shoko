<?php

use yii\db\Migration;

class m170322_022547_add_dates extends Migration
{
    public function up()
    {
        $dates = [1490313600, 1490918400, 1491523200, 1492128000];

        foreach ($dates as $date){
            $newDate = new \common\models\Date();
            $newDate->date = $date;
            $newDate->save();
        }
    }

    public function down()
    {
        return true;
    }
}
