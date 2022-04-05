<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Component\Database\Schema\BluePrint\BluePrint;
use Laventure\Foundation\Facade\Database\Schema;


/**
 * Class Version20220215172630
 *
 * @package App\Migration
*/
class Version20220215172630 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        Schema::create('users', function (BluePrint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->text('address');
            $table->string('code');
            $table->string('city');

            // ...
        });
    }


    /**
     * @return void
    */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}