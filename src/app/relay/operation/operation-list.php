<div class="container">
    <div class="row">

    <div>
    <?php
        $r_sub=selectDb("from substation where id='".$select."'");
        $d_sub=mysql_fetch_array($r_sub);
        echo '<h2 align="center">สถานีไฟฟ้า '.$d_sub['sub_name'].'</h2>';
        $r_province=selectDb("from provinceinfo where sub_id='".$d_sub[1]."'");
        echo '<h2 align="center">['.$d_sub[1].']</h2>';
    ?>
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title"></h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <?php
                     include 'operation-insert.php' ;
                     ?>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <!--<th class="hidden-xs">ID</th>-->
                        <th>Feeder Name</th>
                        <th>Operation ID</th>
                    </tr> 
                  </thead>
                  <tbody>
                          <tr>
                          <?PHP
                   $sql=selectDb("from relay where substation_id in(select id from substation where sub_id='".$d_sub[1]."')");
                    while($row=mysql_fetch_array($sql))
                  {
                      $sqlfeeder=mysql_query("select * from feeder where id like '$row[feeder_id]' ");
                        $rowfeeder=mysql_fetch_array($sqlfeeder);
  
                      $sqlop=mysql_query("select operation_id from operation_info where id like '$row[operation_id]' ");
                        $rowop=mysql_fetch_array($sqlop);

                        $feeder=$rowfeeder['name'];
                        $os=$rowop['operation_id'];
                            echo "<tr class=active><td align='center'>
                              <form action='relay-delete.php' method='POST'>
                              <button class='btn btn-danger' type='submit' name='btn'><em class='fa fa-trash'></em></button>
                              </form>
                            </td><td>$feeder</td> <td><a href=http://localhost/HostingDetail/src/app/relay/operation/operation-edit.php?operation=".$os.">$os</a></td></tr>";
                  } ?>
                          </tr>
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                
              </div>
            </div>

</div></div></div></div>