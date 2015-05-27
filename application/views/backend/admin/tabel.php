<div style="min-height: 918px;" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Simple Tables
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
          </ol>
        </section>
        
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Bordered Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Password</th>
                      
                    </tr>
                    <?php
                    $no=0;
                    foreach($user as $pengguna){

                    ?>
                    <tr>
                      <td><?=$no?></td>
                      <td><?=$pengguna->username?></td>
                      <td>
                        <?=$pengguna->password?>
                      </td>
                      
                    </tr>
                    <?php
                    $no++;
                    }
                    
                    ?>
                   
                  </tbody></table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->

              
            </div><!-- /.col -->
           
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div>