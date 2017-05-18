<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('username', 32)->defalut('')->comment('客户名字');
            $table->string('telephone', 32)->unique()->defalut('')->comment('客户电话');
            $table->unsignedInteger('total')->defalut(0)->comment('客户借款金额');
            $table->string('type', 32)->defalut('')->comment('客户借款方式: 1:公积金贷；2:社保贷；3:工资贷；4:房车贷; 5:生意贷');
            $table->tinyInteger('delete')->defalut(0)->comment('删除标志');
            $table->tinyInteger('is_inform')->defalut(0)->comment('是否通知客户');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
