<div style="min-height: 918px;" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Buku Agenda
            <small>Isi dari tabel agenda</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Agenda</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Keterangan</th>
                      <th style="width: 40px">Date Modified</th>
                    </tr>
                    <?php
                    $no=1;
                    foreach ($agenda as $isiagenda) {
                    ?>
                    <tr>
                      <td><span class="badge bg-red"><?=$no?></span></td>
                      <td><?=$isiagenda->nama?></td>
                      <td><?=$isiagenda->keterangan?></td>
                      <td><span class="badge bg-yellow"><?=$isiagenda->date_modified?></span></td>
                    </tr>
                    <?php
                      $no++;

                    }

                    ?>
                    
                  </tbody></table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->

              
              
            </div>
          </div>
        </section><!-- /.content -->
      </div>