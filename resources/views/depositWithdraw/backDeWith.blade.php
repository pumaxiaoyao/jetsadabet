@extends('master')
@section('content')
    <div class="col-lg-12">
      <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li style="background:#eaeaea">
              <a class="no-margins text-center" href="/depositWithdraw">
                <i class="fa fa-list-ol"></i> รายการ แจ้ง ฝาก-ถอน
              </a>
            </li><li class="active">
              <a class="no-margins text-center text-nowrap" href="/depositWithdraw/backDeWith">
                <i class="fa fa-history"></i> รายการ แจ้ง ฝาก-ถอนย้อนหลัง
              </a>
            </li>
        </ul>
        <div class="tab-pane active">
          <div class="panel-body p-xs">
              <div class="row m-b-xs">
                <div class="col-xs-12 col-md-6 col-sm-3 m-b-xs">
                  <form method="GET" action="/member/request" enctype="application/x-www-form-urlencoded" class="form-horizontal form-request" data-reload-esc="true">
                    <div class="input-group">
                      <input type="text" name="search" value="" placeholder="Search" class="input-sm form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-primary">ค้นหา</button>
                      </span>
                    </div>
                    <input type="hidden" name="show" value="history" id="show">
                  </form>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-9 text-right">
                  <a class="btn btn-info" href="/member/request/deposit"><i class="fa fa-plus-circle"></i> แจ้งเติมเครดิต</a>
                  <a class="btn btn-danger" href="/member/request/withdraw"><i class="fa fa-minus-circle"></i> แจ้งถอนเครดิต</a>
                </div>
              </div> <!-- /.row -->

              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>วันที่</th>
                      <th>ผู้แจ้ง</th>
                      
                      <th>ประเภท</th>
                      <th>ธนาคาร</th>
                      <th>ชื่อบัญชี</th>
                      <th>เลขที่บัญชี</th>
                      <th>วันที่/เวลาฝาก</th>
                      <th>จำนวน</th>
                      <th>ข้อความหมายเหตุ</th>
                      <th>สถานะ</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <td colspan="100%">
                        
                        
  
  
    
  
  
    
  
  
  <style>
    .nav-pagination {
      text-align: right;
    }
    @media screen and (max-width:768px) {
      .nav-pagination {
        text-align: center !important;
      }
    }
  </style>
    <nav aria-label="pagination" class="nav-pagination">
      <ul class="pagination">
        
          <li class="paginate_button previous disabled page-away-1" style="display: inline;">
            <span>«</span>
          </li>
        

        
            <li class="paginate_button active page-away-0" style="display: inline;">
              <span>1</span>
            </li>
          

        
          <li class="paginate_button next disabled page-away-1" style="display: inline;">
            <span>»</span>
          </li>
        
      </ul>
    </nav>
  

                      </td>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                      <tr>
                        <td>23/12/2560 08:22:01</td>
                        <td>porthachapong</td>
                        
                        <td>
                          
                            <span class="label label-info">เติมเครดิต</span>
                          
                        </td>
                        <td>ธนาคารไทยพาณิชย์</td>
                        <td>
                          
                            ไม่ระบุ
                          
                        </td>
                        <td>
                          
                            ไม่ระบุ
                          
                        </td>
                        <td></td>
                        <td>500.25</td>
                        <td>ฝากเงิน</td>
                        <td>
                          
                            <span class="label label-info">ดำเนินการแล้ว</span>
                          
                        </td>
                      </tr>
                    
                  </tbody>
                </table>
              </div> <!-- /.table-responsive -->

              <span class="text-primary-new">อัพเดตล่าสุด 26/12/2560 11:05:50 (อัพเดตทุก 5 นาที)</span>

          </div>
        </div>
      </div> <!-- /.col-lg-12 -->
    </div>
@endsection