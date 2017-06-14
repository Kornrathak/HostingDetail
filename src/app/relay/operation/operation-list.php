<div class="container">
    <div class="row">
      <div>
        <?php
          $r_sub=selectDb("from substation where id='".$select."'");
          $d_sub=mysql_fetch_array($r_sub);
          echo '<h2 align="center">สถานีไฟฟ้า '.$d_sub['sub_name'].'</h2>';
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
                    include 'operation-insert.php';
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
                    <?php
                      $sql=selectDb("from relay where substation_id in (select id from substation where sub_id='".$d_sub[1]."')");
                      while($row=mysql_fetch_array($sql)) {
                        $sqlfeeder=selectDb('from feeder where id="'.$row['feeder_id'].'"');
                        $rowfeeder=mysql_fetch_array($sqlfeeder);
                        $sqlop=selectDb('from operation_info where id="'.$row['operation_id'].'"');
                        $rowop=mysql_fetch_array($sqlop);
                        echo "<tr class=active><td align='center'>
                                <form action='http://localhost/HostingDetail/src/app/relay/relay.php?sub=".$select."' method='POST'>
                                  <button class='btn btn-danger' type='submit' name='btn' value='".$row['id']."'><em class='fa fa-trash'></em></button>
                                </form>
                              </td>
                              <td>".$rowfeeder['name']."</td>
                              <td><a href=http://localhost/HostingDetail/src/app/relay/operation/operation-edit.php?operation=".$rowop['unique_id'].">".$rowop['operation_id']."</a></td>
                              </tr>";
                      } 
                    ?>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php
  if (isset($_POST['btn'])) {
    $result=deleteDb('relay', 'id='.$_POST['btn']);
  }
?>