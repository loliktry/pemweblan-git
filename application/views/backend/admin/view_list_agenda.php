
              <div class="box">
                
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
                    foreach ($daftar_agenda as $isiagenda) {
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
   
          


