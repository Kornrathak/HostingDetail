<div class="header">
    <h4>ตารางแสดงอุปกรณ์ </h4>
</div>
<div class="col-md-12 col-sm-12 ">
    <table class="table table-bordered "><!--table-striped-->
        <tr class="info" >
            <th scope="col"><center>Equipment</center></th>
            <th scope="col"><center>Name</center></th>
            <th scope="col"><center>Panel</center></th>
            <th scope="col"><center>Serial</center></th>
            <th scope="col"><center>Voltage</center></th>
        </tr>
        <tr>
            <?php
                $result=selectDb("from substation where id='".$select."'");
                $sql=selectDb("from equipment_info where active='1' and sub_id='".mysql_fetch_array($result)[1]."'");
                while($row=mysql_fetch_array($sql)) {
                    echo "<tr><td>".$row[0]."</td> <td>".$row[1]."</td> <td>".$row[2]."</td> <td>".$row[3]."</td> <td>".$row."</td></tr>";
                }
            ?>
        </tr>
    </table>
</div>
<div class="col-md-12 col-sm-12 ">
    <div class="center">
        <button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">กรอกข้อมูล</button>
    </div>
<!-- line modal -->
    <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
	        <div class="modal-content">
		        <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			        <h3 class="modal-title" id="lineModalLabel">My Modal</h3>
		        </div>
		        <div class="modal-body">
            <!-- content goes here -->
    		    	<form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
		        </div>
		        <div class="modal-footer">
	    		    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
    				    <div class="btn-group" role="group">
					        <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
				        </div>
    		    		<div class="btn-group btn-delete hidden" role="group">
	        				<button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
	    	    		</div>
    			    	<div class="btn-group" role="group">
				    	    <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
				        </div>
			        </div>
		        </div>
	        </div>
        </div>
    </div>
</div>