<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Foundation\Facade\Database\Schema;
use Laventure\Component\Database\Schema\BluePrint\BluePrint;


/**
 * @Version20220405165503
 *
 * @package App\Migration
 *
 * <Generated By Laventure 05/04/2022 16:55:03>
*/
class Version20220405165503 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        /*
        Schema::create('tableName', function (BluePrint $table) {
            $table->increments('id');
            // ...
        });
        */
    }


    /**
     * @return void
    */
    public function down()
    {
        // Schema::dropIfExists('tableName');
    }
}