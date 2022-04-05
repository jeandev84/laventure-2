<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Component\Database\Schema\BluePrint\BluePrint;
use Laventure\Foundation\Facade\Database\Schema;


/**
 * Class Version20220301083816
 *
 * @package App\Migration
*/
class Version20220301083816 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        Schema::create('teachers', function (BluePrint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('age', 10);
            $table->text('address');
            $table->timestamps();
        });
    }


    /**
     * @return void
    */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
