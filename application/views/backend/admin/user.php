 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
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
            <div class="col-md-10">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Bordered Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Username</th>
                      <th>Password</th>
                      
                    </tr>
                  <?php                               
                  $no = 1;                
                  foreach($user as $row)
                  {
                  ?>
                    
                    <tr>
                      <td><?=$no?></td>
                      <td><?=$row->username;?></td>
                      
                      <td><span class="badge bg-red">55%</span><?=$row->username;?></td>
                    </tr>
                    
                  <?php 
                    $no++;
                  }
                  ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->