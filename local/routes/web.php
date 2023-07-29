<?php
Route::group(['namespace'=>'backend'], function()
{		
		Route::get('loginql','logincontroller@getlogin')->name('login');
		Route::post('loginql','logincontroller@postlogin');
		Route::get('logout','logincontroller@getlogout');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function()
	{	
		Route::get('index', 'homecontroller@getlist');

		Route::group(['prefix'=>'member'], function()
		{
			Route::get('list','usercontroller@getlist');
			Route::get('delete/{id}','usercontroller@getdelete');
			Route::post('add','usercontroller@postadd')->name('addmember');
		});
		Route::group(['prefix'=>'product'], function()
		{
			Route::group(['prefix'=>'cate'], function()
			{
				Route::get('list','product\cateController@getlist');
				Route::get('add','product\cateController@getadd');
				Route::post('add','product\cateController@postadd');
				Route::get('edit/{id}','product\cateController@getedit');
				Route::post('edit/{id}','product\cateController@postedit');
				Route::get('delete/{id}','product\cateController@getdelete');
				Route::get('search_catepro','product\cateController@getsearch');
			});
			Route::group(['prefix'=>'listpro'], function()
			{
				Route::get('list','product\productcontroller@getlist');
				Route::get('add','product\productcontroller@getadd');
				Route::post('add','product\productcontroller@postadd');
				Route::get('edit/{id}','product\productcontroller@getedit');
				Route::post('edit/{id}','product\productcontroller@postedit');
				Route::get('delete/{id}','product\productcontroller@getdelete');
				Route::get('search_pro','product\productcontroller@getsearch');
				Route::get('comment','product\productcontroller@getcomment');
			});
			Route::group(['prefix'=>'img_product'], function()
			{
				Route::get('list','product\img_pro_cotroller@getlist');
				Route::get('add','product\img_pro_cotroller@getadd');
				Route::post('add','product\img_pro_cotroller@postadd');
				Route::get('edit/{id}','product\img_pro_cotroller@getedit');
				Route::post('edit/{id}','product\img_pro_cotroller@postedit');
				Route::get('delete/{id}','product\img_pro_cotroller@getdelete');
			});
		});////// KẾT THÚC GROUP PRODUCT//////
		Route::group(['prefix'=>'post'], function()
		{
			Route::group(['prefix'=>'cate'], function()
			{
				Route::get('list','post\catecontroller@getlist');
				Route::get('add','post\catecontroller@getadd');
				Route::post('add','post\catecontroller@postadd');
				Route::get('edit/{id}','post\catecontroller@getedit');
				Route::post('edit/{id}','post\catecontroller@postedit');
				Route::get('delete/{id}','post\catecontroller@getdelete');
				Route::get('search_cate_post','post\catecontroller@getsearch');
			});
			Route::group(['prefix'=>'listpost'], function()
			{
				Route::get('list','post\lispostcontroller@getlist');
				Route::get('add','post\lispostcontroller@getadd');
				Route::post('add','post\lispostcontroller@postadd');
				Route::get('edit/{id}','post\lispostcontroller@getedit');
				Route::post('edit/{id}','post\lispostcontroller@postedit');
				Route::get('delete/{id}','post\lispostcontroller@getdelete');
				Route::get('search_post','post\lispostcontroller@getsearch');
				Route::get('comment','post\lispostcontroller@getcomment');
			});
			// chức năng postimg
			Route::group(['prefix'=>'postimg'], function()
			{
				Route::get('list','post\post_imgcontroller@getlist');
				Route::get('add','post\post_imgcontroller@getadd');
				Route::post('add','post\post_imgcontroller@postadd');
				Route::get('edit/{id}','post\post_imgcontroller@getedit');
				Route::post('edit/{id}','post\post_imgcontroller@postedit');
				Route::get('delete/{id}','post\post_imgcontroller@getdelete');
			});
		});////// KẾT THÚC GROUP Post//////
		
		Route::group(['prefix'=>'header-footer'], function()
		{
				Route::get('list','head\head_footcontroller@getlist');
				Route::get('add','head\head_footcontroller@getadd');
				Route::post('add','head\head_footcontroller@postadd');
				Route::get('edit/{id}','head\head_footcontroller@getedit');
				Route::post('edit/{id}','head\head_footcontroller@postedit');
		});

		//// 9/10/2018// tvqg tang 4// lam chuc nang quan ly header-footer
		Route::group(['prefix'=>'background'], function()
		{
				Route::get('list','backgroundcontroller@getlist');
				Route::get('add','backgroundcontroller@getadd');
				Route::post('add','backgroundcontroller@postadd');
				Route::get('edit/{id}','backgroundcontroller@getedit');
				Route::post('edit/{id}','backgroundcontroller@postedit');
		});

		///// bắt đầu route slider_no;
		Route::group(['prefix'=>'slider'], function()
		{
			Route::get('list','slider\slider_nocontroller@getlist');
			Route::get('add','slider\slider_nocontroller@getadd');
			Route::post('add','slider\slider_nocontroller@postadd');
			Route::get('edit/{id}','slider\slider_nocontroller@getedit');
			Route::post('edit/{id}','slider\slider_nocontroller@postedit');
			Route::get('delete/{id}','slider\slider_nocontroller@getdelete');
		});
		////kết thúc phần slider//
		Route::group(['prefix'=>'block'], function()
		{
			Route::get('list','block\blockcontroller@getlist');
			Route::get('add','block\blockcontroller@getadd');
			Route::post('add','block\blockcontroller@postadd');
			Route::get('edit/{id}','block\blockcontroller@getedit');
			Route::post('edit/{id}','block\blockcontroller@postedit');
			Route::get('delete/{id}','block\blockcontroller@getdelete');
		});
		//// Bắt đầu phần quảng cáo 10/11/2017//
		Route::group(['prefix'=>'quangcao'], function()
		{
			Route::get('list','quangcao\quangcaocontroller@getlist');
			Route::get('add','quangcao\quangcaocontroller@getadd');
			Route::post('add','quangcao\quangcaocontroller@postadd');
			Route::get('edit/{id}','quangcao\quangcaocontroller@getedit');
			Route::post('edit/{id}','quangcao\quangcaocontroller@postedit');
			Route::get('delete/{id}','quangcao\quangcaocontroller@getdelete');
		});
		// bắt đầu chức kho giao diện
		Route::group(['prefix'=>'giaodien'], function()
		{
			Route::get('list','giaodien\giaodiencontroller@getlist');
			Route::get('add','giaodien\giaodiencontroller@getadd');
			Route::post('add','giaodien\giaodiencontroller@postadd');
			Route::get('edit/{id}','giaodien\giaodiencontroller@getedit');
			Route::post('edit/{id}','giaodien\giaodiencontroller@postedit');
			Route::get('delete/{id}','giaodien\giaodiencontroller@getdelete');
		});
		//kết thúc chức năng kho giao diện
		// bat dau chuc nang quan ly link lien ket dung de ql link dan dong do phai copy link nhieu lan. de thay doi
		Route::group(['prefix'=>'link'], function()
		{
			Route::get('list','link\linkcontroller@getlist');
			Route::get('add','link\linkcontroller@getadd');
			Route::post('add','link\linkcontroller@postadd');
			Route::get('edit/{id}','link\linkcontroller@getedit');
			Route::post('edit/{id}','link\linkcontroller@postedit');
			Route::get('delete/{id}','link\linkcontroller@getdelete');
		});
		// lam ngay 20/3/2019 tai viettel 1 giang văn minh.
		Route::group(['prefix'=>'service'], function()
		{	Route::get('listService','ServiceController@getlistService');
			Route::get('add', 'ServiceController@getadd');
			Route::post('add','ServiceController@postadd');
			Route::get('edit/{item}','ServiceController@getedit');
			Route::get('delete/{id}','ServiceController@getdelete');
			Route::get('all','ServiceController@allService');
			Route::get('{id}','ServiceController@getlist');
		    Route::get('reason/{reason}/{DFfect}/{idHfix}/{Des}/{Idhis}','ServiceController@getreason');
  			Route::get('reason2/{reason}/{DFfect}/{idHfix}/{Des}/{Idhis}','ServiceController@getreason2');
			Route::get('ajax/{view}/{id}','ServiceController@getView');
			Route::get('list/{reason}/{DFfect}/{idHfix}/{Des}/{Idhis}/{SId}','ServiceController@getViewList');
		});
		Route::group(['prefix'=>'donhang'], function()
		{
			Route::get('list','donhangcontroller@getlist');
			Route::get('add','donhangcontroller@getadd');
			Route::post('add','donhangcontroller@postadd');
			Route::get('edit/{id}','donhangcontroller@getedit');
			Route::post('edit/{id}','donhangcontroller@postedit');
			Route::get('delete/{id}','donhangcontroller@getdelete');
			Route::get('export','donhangcontroller@export')->name('exportdonhang');
		});

		Route::group(['prefix'=>'congdoan'], function()
		{
			Route::get('list','ErrorController@getlist');
			Route::post('add','ErrorController@postadd')->name('erroradd');
			Route::post('edit','ErrorController@postedititem')->name('erroredit');
			Route::get('delete/{id}/{error_code}','ErrorController@getdelete');
			Route::get('status/{ac}/{id}','ErrorController@getstatus');
			Route::get('statusMe/{ac}/{id}','ErrorController@getstatusMe');
			Route::get('dowload/{name}','ErrorController@getdowload');
			Route::get('dowloaderror','ErrorController@getdowloaderror');
			
		});

		Route::group(['prefix'=>'nhatkysanxuat'], function()
		{
			Route::get('list','nhatkysanxuatController@getlist');
			Route::get('add','nhatkysanxuatController@getadd');
			Route::post('add','nhatkysanxuatController@postadd');
			Route::get('phongbanto/{val}','nhatkysanxuatController@getphongbanto');
            Route::get('changestatus/{status}/{id}','nhatkysanxuatController@getchangestatus');

			Route::post('edit','nhatkysanxuatController@postedititem');
			Route::get('delete/{id}','nhatkysanxuatController@getdelete');
			Route::get('export','nhatkysanxuatController@export')->name('exportnhatkysanxuat');
			Route::get('tonghopsoluongsp','nhatkysanxuatController@getsoluongsp');
			Route::get('baocaothongke','nhatkysanxuatController@getbaocaothongke');
			Route::get('addphieu','nhatkysanxuatController@getaddphieu');
			Route::get('danhsachphieu','nhatkysanxuatController@getdanhsachphieu');
			
			
			
		});

		Route::group(['prefix'=>'hocvien'], function()
		{
			Route::get('list','sinhvienController@getlist');
			Route::post('list','sinhvienController@getaddhocsinh')->name('addhocvien');
			Route::get('add','sinhvienController@getadd');
			Route::post('add','sinhvienController@postadd');
			Route::get('export','sinhvienController@export')->name('exportcongnhan');
			/*Route::get('edit/{itemJson}/{id}','congnhanController@getedit');*/
			Route::get('delete/{id}','sinhvienController@getdelete');
			Route::get('import','sinhvienController@getimport');
			Route::post('import','sinhvienController@postimport');

			/*Route::get('status/{ac}/{id}','congnhanController@getstatus');
			Route::get('statusMe/{ac}/{id}','ErrorSloveController@getstatusMe');*/
		});

		Route::group(['prefix'=>'diemtheomon'], function()
		{
			Route::get('list_datatable','diemtheomon_controller@list_datatable');
			Route::get('list','diemtheomon_controller@getlist');
			Route::post('list','diemtheomon_controller@getaddhocsinh');
			Route::get('add','diemtheomon_controller@getadd');
			Route::post('add','diemtheomon_controller@postadd');

			Route::get('add_diembaoluu','diemtheomon_controller@getadd_diembaoluu');
			Route::post('add_diembaoluu','diemtheomon_controller@postadd_diembaoluu');

			Route::get('edit/{id}','diemtheomon_controller@getedit_monchinh');
			Route::post('edit/{id}','diemtheomon_controller@posgetedit_monchinh');

			Route::get('add_tcqp','diemtheomon_controller@getadd_tc');
			Route::post('add_tcqp','diemtheomon_controller@postadd_tc');
			Route::get('diemtheolop','diemtheomon_controller@getdiemtheolop');
			Route::get('diemtheolop_delete/{id}', 'diemtheomon_controller@getdelete_diemtheolop');
			Route::get('diemtheolop_bomonduyet/{id}', 'diemtheomon_controller@diemtheolop_bomonduyet');
			Route::get('diemtheolop_khoaduyet/{id}', 'diemtheomon_controller@diemtheolop_khoaduyet');
			Route::get('diemtheolop_daotaoduyet/{id}', 'diemtheomon_controller@diemtheolop_daotaoduyet');
			Route::get('danhsachthi/{id}', 'diemtheomon_controller@diemtheolop_danhsachthi');
			Route::get('add_diemthi/{id}', 'diemtheomon_controller@getadd_diemthi');
			Route::post('add_diemthi/{id}', 'diemtheomon_controller@postadd_diemthi');
			Route::get('add_diemthi_lan2/{id}', 'diemtheomon_controller@getadd_diemthi_lan2');
			Route::post('add_diemthi_lan2/{id}', 'diemtheomon_controller@postadd_diemthi_lan2');
			Route::get('diemtbkt_diemthi', 'diemtheomon_controller@getdiemtbkt_diemthi');
		    Route::get('tp_khaothiduyet/{id}', 'diemtheomon_controller@gettp_khaothiduyet');
		    Route::get('dongbo/{id}', 'diemtheomon_controller@dongbo_sangdiemtheomon');
			
			
			
			Route::get('them_diemtheolop','diemtheomon_controller@getaddnew');
			Route::post('them_diemtheolop','diemtheomon_controller@postdiemtheolop');
			Route::get('diemtheolop_edit/{id}','diemtheomon_controller@getdiemtheolop_edit');
			Route::post('diemtheolop_edit/{id}','diemtheomon_controller@postdiemtheolop_edit');

			Route::get('export','diemtheomon_controller@export');
			Route::get('getsv/{id}','diemtheomon_controller@getsv');
			Route::post('list','diemtheomon_controller@editdiemsv')->name('editdiemsv');
			Route::get('delete/{id}','diemtheomon_controller@getdelete');
			Route::get('import','diemtheomon_controller@getimport');
			Route::post('search','diemtheomon_controller@postsearch')->name('search_diem');
			Route::get('danhsachlop/{id}','diemtheomon_controller@get_dslop');
			Route::get('diemtongket_toantruong','diemtheomon_controller@diemtongket_toantruong');
		    Route::get('diemtongket_dongbo','diemtheomon_controller@diemtongket_dongbo');

		});


		Route::group(['prefix'=>'bophanxuong'], function()
		{
			Route::get('list','bophanxuongController@getlist');
			Route::get('add/{name}/{mabophanxuong}','bophanxuongController@postadd');
			Route::get('export','bophanxuongController@export');
			Route::get('delete/{id}','bophanxuongController@getdelete');
			
		});


		Route::group(['prefix'=>'monhoc'], function()
		{
			Route::get('list','monhocController@getlist');
			Route::get('import','monhocController@getimport');
			Route::post('import','monhocController@postimport');
			Route::get('add/{ten}/{mamon}/{tinchi}','monhocController@postadd');
			Route::get('export','monhocController@export');
			Route::get('delete/{id}','monhocController@getdelete');
			
		});
		Route::group(['prefix'=>'lophoc'], function()
		{
			Route::get('list','lophocController@getlist');
			Route::get('import','lophocController@getimport');
			Route::post('import','lophocController@postimport');
			Route::get('add/{name}/{id_hocvien}','lophocController@getadd');
			Route::get('edit/{nameedit}/{idedit}','lophocController@getedit');
			Route::get('export','lophocController@export');
			Route::get('delete/{id}','lophocController@getdelete');
			Route::get('getsv/{lop}','lophocController@getsv');
			
		});



		Route::group(['prefix'=>'diemdanh'], function()
		{
			Route::get('list','diemdanhController@getlist');

		     Route::post('list','diemdanhController@xuatbaocaotonghopths')->name('xuatbcthtunghs');
			/*Route::post('list','diemdanhController@xuatbaocaotheolop');*/
			Route::post('xuatbaocaotheolop','diemdanhController@xuatbaocaotheolop')->name('xuatbaocaotheolop');
			Route::get('add','diemdanhController@getadd');
			Route::post('add','diemdanhController@postadd');
			Route::get('export','diemdanhController@export')->name('exportdongia');
			Route::get('delete/{id}','diemdanhController@getdelete');
			Route::post('xuatbaocaochitieths','diemdanhController@xuatbaocaochitieths')->name('xuatbaocaochitieths');
			
		});
		/*lam ngay 8/4*/
		Route::group(['prefix'=>'congdoan'], function()
		{
			Route::get('list','CongdoanController@getlist');
			Route::get('add','CongdoanController@getadd');
			Route::post('add','CongdoanController@postadd');
			Route::get('edit/{id}/{Ds}/{sT}/{En}/{li}/{le}','CongdoanController@postedit');
			Route::get('delete/{id}','CongdoanController@getdelete');
		});
		// lam ngay 20/3/2019 tai viettel 1 giang văn minh.
		Route::group(['prefix'=>'chatbox'], function()
		{
		Route::get('list','ChatboxController@getlist');
		Route::get('ajaxdata','ChatboxController@getajaxdata');
		Route::get('report/{text}/{user}','ChatboxController@ContenChat');	
		});

		Route::group(['prefix'=>'live'], function()
		{
			Route::get('list','LiveController@getlist');
		    Route::get('handover/{item}','LiveController@addhandover');
	        Route::get('add/{users}/{sT}/{date3}','LiveController@getadd');	
	        Route::get('delete/{id}','LiveController@getdelete');
		    Route::get('update/{id}/{users}/{date2}/{sT}','LiveController@getupdate');
		    Route::post('ajax_edit','LiveController@postedititem')->name('ajaxedit');
		    Route::get('ajax_upload','LiveController@getload');			
		    Route::post('ajax_upload','LiveController@postload')->name('ajaxupload');
    		Route::get('searchdate/{startdate}/{enddate}','LiveController@searchdate');

		});

		Route::group(['prefix'=>'confix'], function()
		{
			Route::get('list','ConfixController@getlist');
			Route::get('add/{itemjson}','ConfixController@getadd');
			Route::get('delete/{id}','ConfixController@getdelete');
			Route::get('update/{itemjson}','ConfixController@getupdate'); 	
			Route::get('active/{ac}/{id}','ConfixController@getactive');
		});

		Route::group(['prefix'=>'health'], function()
		{
			Route::get('list','healthController@getlist');
			Route::get('add/{itemjson}','healthController@getadd');
			Route::get('delete/{id}','healthController@getdelete');
			Route::get('update/{itemjson}','healthController@getupdate'); 	
			Route::get('active/{ac}/{id}','healthController@getactive');
		});
		Route::group(['prefix'=>'search'], function()
		{
			Route::get('list','searchController@getlist');
			Route::get('add/{itemjson}','searchController@getadd');
			Route::get('delete/{id}','searchController@getdelete');
			Route::get('update/{itemjson}','searchController@getupdate'); 	
			Route::get('active/{ac}/{id}','searchController@getactive');
		});

		Route::group(['prefix'=>'grafana'], function()
		{
			Route::get('paymentTranHis',function(){return view('backend.grafana.paymentTranHis');});
			Route::get('tpp_trans_daily_his',function(){return view('backend.grafana.tpp_trans_daily_his');});
			Route::get('mobile_service',function(){ return view('backend.grafana.mobile_service');});
			Route::get('trans-gateway-egate',function(){ return view('backend.grafana.trans-gateway-egate');});
			Route::get('trans-gateway-error',function(){ return view('backend.grafana.trans-gateway-error');});
			
			
		});

		Route::group(['prefix'=>'seo'], function()
		{
			Route::get('list','seocontroller@getlist');
			Route::get('add','seocontroller@getadd');
			Route::post('add','seocontroller@postadd');
			Route::get('edit/{id}','seocontroller@getedit');
			Route::post('edit/{id}','seocontroller@postedit');
			Route::get('delete/{id}','seocontroller@getdelete');
		});

		// Route::group(['prefix'=>'api'], function()
		// {
		// 	Route::get('list','apicontroller@index');
		// 	Route::get('add','seocontroller@getadd');
		// 	Route::post('add','seocontroller@postadd');
		// 	Route::get('edit/{id}','seocontroller@getedit');
		// 	Route::post('edit/{id}','seocontroller@postedit');
		// 	Route::get('delete/{id}','seocontroller@getdelete');
		// });


		Route::group(['prefix'=>'Question'], function()
		{
			Route::get('list','QuestionController@getlist');
			Route::get('add','QuestionController@getadd');
			Route::post('add','QuestionController@postadd');
			Route::get('edit/{id}','QuestionController@getedit');
			Route::post('edit/{id}','QuestionController@postedit');
			Route::get('delete/{id}','QuestionController@getdelete');
			Route::get('ChangeStatus/{status}/{idQues}','QuestionController@getChangeStatus');
		});
		///kết thúc phần quảng cáo///
		Route::group(['prefix'=>'guimail'], function()
		{
			Route::get('mail','mail\mailcontroller@getmail');
			Route::post('mail','mail\mailcontroller@postmail');
		});

		Route::any('{all}', function () {
		    return view('backend.master.error');
		});

	});//// Kết thúc route admins
	
});


Route::group(['namespace'=>'fontend'], function()
{
	Route::get('/', 'homecontroller@getlogin');
	Route::post('/', 'homecontroller@postlogin');
	Route::get('thongtin/{id}', 'homecontroller@getthongtin');
    Route::post('thongtin/{id}', 'homecontroller@postdoimk');
	Route::get('logoutfontend', 'homecontroller@getlogout');
	Route::get('list', 'homecontroller@getlist');
	Route::get('theoma_lop/{ma_sv}/{lop}/{hocky2}/{namhoc}','homecontroller@getpost');
	Route::get('theo_masv/{ma_sv}','homecontroller@get_theomasv');
    Route::get('theoma_lop_namhoc/{ma_sv}/{lop}/{namhoc}','homecontroller@get_theonamhoc');

   
   

});

Route::group(['namespace'=>'api'], function()
{
	 Route::group(['prefix' => 'api'], function() 
	{
		Route::get('monhoclist', 'monhocApicontroller@index')->name('monhoc.index');
		Route::post('monhoclist', 'monhocApicontroller@store')->name('monhoclist.store');
	});
});



// Route::any('{all}', function () {
//     return view('backend.master.error');
// });


