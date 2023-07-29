  <aside class="left-side sidebar-offcanvas" id="leftmenu">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="advanced_tables.html">
                                    <i class="livicon" data-name="table" title="Advanced tables" data-c="#418BCA" data-hc="#418BCA" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="tasks.html">
                                    <i class="livicon" data-c="#EF6F6C" title="Tasks" data-hc="#EF6F6C" data-name="list-ul" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="gallery.html">
                                    <i class="livicon" data-name="image" title="Gallery" data-c="#F89A14" data-hc="#F89A14" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="users_list.html">
                                    <i class="livicon" data-name="users" title="Users List" data-size="25" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                         
                         <li>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Nhân sự</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                   <a href="{{url('admin/hocvien/add')}}">
                                       <i class="fa fa-angle-double-right"></i> Cán bộ phòng ban
                                   </a>
                               </li>
                                <li>
                                    <a href="{{url('admin/hocvien/list')}}">
                                        <i class="fa fa-angle-double-right"></i> Giáo viên-giảng viên
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Học sinh-sinh viên</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                               <!--  <li>
                                   <a href="{{url('admin/hocvien/add')}}">
                                       <i class="fa fa-angle-double-right"></i> Import Học viên
                                   </a>
                               </li> -->
                                <li>
                                    <a href="{{url('admin/hocvien/list')}}">
                                        <i class="fa fa-angle-double-right"></i> Danh sách HS-SV
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('admin/hocvien/import')}}">
                                        <i class="fa fa-angle-double-right"></i> Import HS-SV
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Môn học</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                              
                                <li>
                                    <a href="{{url('admin/monhoc/list')}}">
                                        <i class="fa fa-angle-double-right"></i> Danh sách môn học
                                    </a>
                                </li>
                            </ul>
                        </li>
                       
                         <li>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Lớp học</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                               <!--  <li>
                                   <a href="{{url('admin/hocvien/add')}}">
                                       <i class="fa fa-angle-double-right"></i> Import Học viên
                                   </a>
                               </li> -->
                                <li>
                                    <a href="{{url('admin/lophoc/list')}}">
                                        <i class="fa fa-angle-double-right"></i> Danh sách Lớp học
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                         <li>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Đăng ký học tín chỉ</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                              
                                <li>
                                    <a href="{{url('admin/monhoc/list')}}">
                                        <i class="fa fa-angle-double-right"></i> Danh sách đăng ký
                                    </a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Điểm theo lớp</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <!-- <li>
                                   <a href="{{url('admin/diemtheomon/add')}}">
                                       <i class="fa fa-angle-double-right"></i> Thêm điểm môn chính
                                   </a>
                               </li>
                                <li>
                                   <a href="{{url('admin/diemtheomon/add_tcqp')}}">
                                       <i class="fa fa-angle-double-right"></i> Thêm điểm môn TC-QP
                                   </a>
                               </li> -->
                                <!-- <li>
                                   <a href="{{url('admin/diemtheomon/add_diembaoluu')}}">
                                       <i class="fa fa-angle-double-right"></i> Thêm điểm môn BL
                                   </a>
                               </li>
                                <li>
                                    <a href="{{url('admin/diemtheomon/list')}}">
                                        <i class="fa fa-angle-double-right"></i> Danh sách điểm
                                    </a>
                                </li> 
                                <li>
                                    <a href="{{url('admin/diemtheomon/list_datatable')}}">
                                        <i class="fa fa-angle-double-right"></i> DS điểm datatable
                                    </a>
                                </li> -->
                                 <li>
                                    <a href="{{url('admin/diemtheomon/them_diemtheolop')}}">
                                        <i class="fa fa-angle-double-right"></i> Thêm điểm ĐK theo lớp
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('admin/diemtheomon/diemtheolop')}}">
                                        <i class="fa fa-angle-double-right"></i>  Danh sách điểm theo lớp
                                    </a>
                                </li>
                               <!--  <li>
                                    <a href="{{url('admin/diemtheomon/diemtbkt_diemthi')}}">
                                        <i class="fa fa-angle-double-right"></i> Điểm tbkt & điểm thi

                                    </a>
                                </li> -->
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Điểm tổng kết Full</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                   <a href="{{url('admin/diemtheomon/diemtongket_toantruong')}}">
                                       <i class="fa fa-angle-double-right"></i> Điểm TK toàn trường
                                   </a>
                               </li>
                                <li>
                                    <a href="{{url('admin/diemtheomon/import')}}">
                                        <i class="fa fa-angle-double-right"></i> import điểm theo lớp
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Học phí online</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                               <!--  <li>
                                   <a href="{{url('admin/hocvien/add')}}">
                                       <i class="fa fa-angle-double-right"></i> Import Học viên
                                   </a>
                               </li> -->
                                <li>
                                    <a href="{{url('admin/diemtheomon/list')}}">
                                        <i class="fa fa-angle-double-right"></i> Danh sách điểm
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                         <li>
                            <a href="#">
                                <i class="livicon" data-name="doc-portrait" data-c="#00bc8c" data-hc="#00bc8c" data-size="18" data-loop="true"></i>
                                <span class="title">Điểm danh</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{url('admin/diemdanh/add')}}">
                                        <i class="fa fa-angle-double-right"></i> Thêm điểm danh
                                       
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('admin/diemdanh/list')}}">
                                        <i class="fa fa-angle-double-right"></i> Danh sách điểm danh
                                    </a>
                                </li>
                                 <li>
                                    <a href="{{url('admin/diemdanh/list')}}">
                                        <i class="fa fa-angle-double-right"></i> Thống kê điểm danh
                                    </a>
                                </li>
                               
                               
                            </ul>
                        </li>
                       
                       <!--  <li>
                           <a href="#">
                               <i class="livicon" data-name="doc-portrait" data-c="#00bc8c" data-hc="#00bc8c" data-size="18" data-loop="true"></i>
                               <span class="title">Đơn hàng</span>
                               <span class="fa arrow"></span>
                           </a>
                           <ul class="sub-menu">
                               <li>
                                   <a href="{{url('admin/donhang/add')}}">
                                       <i class="fa fa-angle-double-right"></i> Import đơn hàng
                                   </a>
                               </li>
                               <li>
                                   <a href="{{url('admin/donhang/list')}}">
                                       <i class="fa fa-angle-double-right"></i> Danh sách đơn hàng
                                   </a>
                               </li>
                              
                              
                           </ul>
                       </li> -->
                      <!--   <li>
                          <a href="#">
                              <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                              <span class="title">Nhật ký sản xuất</span>
                              <span class="fa arrow"></span>
                          </a>
                          <ul class="sub-menu">
                             <li>
                                 <a href="{{url('admin/nhatkysanxuat/list')}}">
                                     <i class="fa fa-angle-double-right"></i> Danh sách nhật ký
                                 </a>
                             </li>
                              <li>
                                  <a href="{{url('admin/nhatkysanxuat/add')}}">
                                      <i class="fa fa-angle-double-right"></i> Import file
                                  </a>
                              </li>
                               <li>
                                  <a href="{{url('admin/nhatkysanxuat/danhsachphieu')}}">
                                      <i class="fa fa-angle-double-right"></i> Danh sách phiếu
                                  </a>
                              </li>
                             
                          </ul>
                      </li> -->

                        <!--  <li>
                           <a href="#">
                               <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                               <span class="title">TH DL Nhật ký</span>
                               <span class="fa arrow"></span>
                           </a>
                           <ul class="sub-menu">
                               <li>
                                   <a href="{{url('admin/nhatkysanxuat/list')}}">
                                       <i class="fa fa-angle-double-right"></i> Danh sách nhật ký
                                   </a>
                               </li>
                               <li>
                                   <a href="{{url('admin/nhatkysanxuat/add')}}">
                                       <i class="fa fa-angle-double-right"></i> Import file nhật ký
                                   </a>
                               </li>
                               
                              
                           </ul>
                                                </li>
                                                -->
                       
                        
                    <!--      
                    <li>
                       <a href="#">
                           <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                           <span class="title">Công đoạn</span>
                           <span class="fa arrow"></span>
                       </a>
                       <ul class="sub-menu">
                           <li>
                               <a href="{{url('admin/congdoan/add')}}">
                                   <i class="fa fa-angle-double-right"></i> Thêm mới công đoạn
                               </a>
                           </li>
                           <li>
                               <a href="{{url('admin/congdoan/list')}}">
                                   <i class="fa fa-angle-double-right"></i> Danh sách công đoạn
                               </a>
                           </li>
                          
                       </ul>
                                            </li>
                                            <li>
                       <a href="{{url('admin/nhatkysanxuat/tonghopsoluongsp')}}">
                           <i class="livicon" data-name="table" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
                           <span class="title">TH SL sản phẩm</span>
                           <span class="fa arrow"></span>
                       </a>
                      
                                            </li> 
                    <li>
                       <a href="{{url('admin/nhatkysanxuat/baocaothongke')}}">
                           <i class="livicon" data-name="table" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
                           <span class="title">BC thống kê SX</span>
                           <span class="fa arrow"></span>
                       </a>
                      
                                            </li>
                                            <li>
                       <a href="{{url('admin/nhatkysanxuat/list')}}">
                           <i class="livicon" data-name="table" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
                           <span class="title">TH đơn giá GC theo SP</span>
                           <span class="fa arrow"></span>
                       </a>
                      
                                            </li>  
                    -->
                        
                      
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="users" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Users</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{url('admin/member/list')}}">
                                        <i class="fa fa-angle-double-right"></i> Users List
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="{{url('admin/member/add')}}">
                                        <i class="fa fa-angle-double-right"></i> Add New User
                                    </a>
                                </li> -->
                               
                            </ul>
                        </li>
                        
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>