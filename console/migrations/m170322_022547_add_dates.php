<?php

use yii\db\Migration;

class m170322_022547_add_dates extends Migration
{
    public function up()
    {
        $dates = [1490918400, 1491523200, 1492128000];

        foreach ($dates as $id=>$date){
            $newDate = new \common\models\Date();
            $newDate->date = $date;
            $newDate->status = \common\models\Date::STATUS_INACTIVE;
            if($id == 0){
                $newDate->status = \common\models\Date::STATUS_ACTIVE;
            }
            $newDate->save();
        }
    }

    public function down()
    {
        return true;
    }
}
