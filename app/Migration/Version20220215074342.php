<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Component\Database\Schema\BluePrint\BluePrint;
use Laventure\Foundation\Facade\Database\Schema;


/**
 * Class Version20220215074342
 *
 * @package App\Migration
*/
class Version20220215074342 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        Schema::create('region', function (BluePrint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('district')->nullable(); // unique
            $table->integer('code', 3);
        });
    }


    /**
     * @return void
    */
    public function down()
    {
        Schema::dropIfExists('region');
    }
}