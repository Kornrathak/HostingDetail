<div class="container">
    <div class="row">
    
    <!--<p></p>
    <h1>Bootstrap Table Panel with Pagination</h1>
    <p>ข้อความ1</p>
    <p>ข้อความ2 <a href="https://twitter.com/asked_io" target="_new">@asked_io</a> & <a href="https://asked.io/" target="_new">asked.io</a>.</p>
    <p> </p><p> </p>-->
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
                    <button type="button" class="btn btn-sm btn-magick btn-create">Create New</button>
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
                            <td align="center">
                              <form action="" method="POST">
                              <!--<a class="btn btn-default"><em class="fa fa-pencil"></em></a>-->
                              <button class="btn btn-danger" type="submit" name="btn"><em class="fa fa-trash"></em></button>
                              </form>
                            </td>
                            <!--<td class="hidden-xs">1</td>-->
                            <?php
                            $sql=selectDb("from relay where substation_id in(select id from substation where sub_id='".$d_sub[1]."')");

while($row=mysql_fetch_array($sql))
{
  $sqlfeeder=mysql_query("select * from feeder where id like '$row[feeder_id]' ");
  $rowfeeder=mysql_fetch_array($sqlfeeder);
  
  $sqlop=mysql_query("select operation_id from operation_info where id like '$row[operation_id]' ");
  $rowop=mysql_fetch_array($sqlop);

  $feeder=$rowfeeder['name'];
  $os=$rowop['operation_id'];
  
echo "<td>$feeder</td> <td><a href=osid5.php?operation=".$os.">$os</a></td>";
} ?>
                          </tr>
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                
              </div>
            </div>

</div></div></div></div>