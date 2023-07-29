<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTongkethocky extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tongkethocky', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lop', 200);
            $table->string('masv', 100);
            $table->string('hodem', 100);
            $table->string('ten', 100);
            $table->string('ghichu', 100);
            $table->string('ngaysinh1', 100);
            $table->string('ngaysinh2', 100);
            $table->string('gioi', 100);
            $table->string('noisinh', 100);
            $table->string('nhaphoc', 100);

            $table->string('gdtc', 100);
            $table->string('gdtc_diemchu', 100);
            $table->string('gdtc_diem4', 100);
            $table->string('gdtc_11', 100);
            $table->string('gdtc_tinchi', 100);

            $table->string('gdqp', 100);
            $table->string('gdqp_diemchu', 100);
            $table->string('gdqp_diem4', 100);
            $table->string('gdqp_11', 100);
            $table->string('gdqp_tinchi', 100);

            $table->string('tbkt_chinhtri', 100);
            $table->string('thi_chinhtrilan1', 100);
            $table->string('thi_chinhtrilan2', 100);
            $table->string('tb_chinhtrilan1', 100);
            $table->string('chinhtri_tinchi', 100);
            $table->string('chinhtri_diemchu', 100);
            $table->string('chinhtri_diem4', 100);
            $table->string('chinhtri_11', 100);
            $table->string('chinhtri_4tc1', 100);
            $table->string('chinhtri_4tc2', 100);

            $table->string('tbkt_pldc', 100);
            $table->string('thi_pldclan1', 100);
            $table->string('thi_pldclan2', 100);
            $table->string('tb_pldc1', 100);
            $table->string('cpldc_tinchi', 100);
            $table->string('pldc_diemchu', 100);
            $table->string('pldc_diem4', 100);
            $table->string('pldc_11', 100);
            $table->string('pldc_4tc1', 100);
            $table->string('pldc_4tc2', 100);

            $table->string('tbkt_nn1', 100);
            $table->string('thi_nn1lan1', 100);
            $table->string('thi_nn1lan2', 100);
            $table->string('tb_pnn1', 100);
            $table->string('nn1_tinchi', 100);
            $table->string('nn1_diemchu', 100);
            $table->string('nn1_diem4', 100);
            $table->string('nn1_11', 100);
            $table->string('nn1_4tc1', 100);
            $table->string('nn1_4tc2', 100);
            
            $table->string('tbkt_vxd1', 100);
            $table->string('thi_vxd1lan1', 100);
            $table->string('thi_vxd1lan2', 100);
            $table->string('tb_vxd1', 100);
            $table->string('vxd1_tinchi', 100);
            $table->string('vxd1_diemchu', 100);
            $table->string('vxd1_diem4', 100);
            $table->string('vxd1_11', 100);
            $table->string('vxd1_4tc1', 100);
            $table->string('vxd1_4tc2', 100);

            $table->string('tbkt_tinhoc', 100);
            $table->string('thi_tinhoclan1', 100);
            $table->string('thi_tinhoclan2', 100);
            $table->string('tb_tinhoclan1', 100);
            $table->string('tinhoc_tinchi', 100);
            $table->string('tinhoc_diemchu', 100);
            $table->string('tinhoc_stvbdiem4', 100);
            $table->string('tinhoc_11', 100);
            $table->string('tinhoc_4tc1', 100);
            $table->string('tinhoc_4tc2', 100);

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
        Schema::dropIfExists('tongkethocky');
    }
}
