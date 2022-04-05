<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Component\Database\Schema\BluePrint\BluePrint;
use Laventure\Foundation\Facade\Database\Schema;


/**
 * Class Version20220301031605
 *
 * @package App\Migration
*/
class Version20220301031605 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        Schema::create('comments', function (BluePrint $table) {
            $table->increments('id');
            $table->text('content');
            $table->datetime('created_at');
            // ...
        });
    }


    /**
     * @return void
    */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
