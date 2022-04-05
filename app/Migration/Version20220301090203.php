<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Component\Database\Schema\BluePrint\BluePrint;
use Laventure\Foundation\Facade\Database\Schema;


/**
 * Class Version20220301090203
 *
 * @package App\Migration
*/
class Version20220301090203 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        Schema::create('rooms', function (BluePrint $table) {
            $table->increments('id');
            $table->text('description');
            // ...
        });
    }


    /**
     * @return void
    */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
