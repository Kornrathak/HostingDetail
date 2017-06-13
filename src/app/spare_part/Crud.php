<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="logos.ico">
    <meta charset="UTF-8">
        <meta http-equiv="Content-Language" content="th"> 
        <meta http-equiv="content-Type" content="text/html; charset=window-874"> 
        <meta http-equiv="content-Type" content="text/html; charset=tis-620"> 
    <title>RELAY SECTION</title>
</head>
<body>


<?php

class Crud {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($product,$equipment, $equipment_parts, $brand, $generation, $serial_no,$purchasing_receiving_date,$expiration_date,$price,$source_info,$budget,$station,$pathfinder,$note) {
        try {
            $stmt = $this->db->prepare("insert into spare_part(product,equipment,equipment_parts,brand,generation,serial_no,purchasing_receiving_date,expiration_date,price,source_info,budget,station,pathfinder,note) values(:product,:equipment,:equipment_parts,:brand,:generation,:serial_no,:purchasing_receiving_date,:expiration_date,:price,:source_info,:budget,:station,:pathfinder,:note)");
            $stmt->bindparam(":product", $product);
            $stmt->bindparam(":equipment", $equipment);
            $stmt->bindparam(":equipment_parts", $equipment_parts);
            $stmt->bindparam(":brand", $brand);
            $stmt->bindparam(":generation", $generation);
            $stmt->bindparam(":serial_no", $serial_no);
            $stmt->bindparam(":purchasing_receiving_date", $purchasing_receiving_date);
            $stmt->bindparam(":expiration_date", $expiration_date);
            $stmt->bindparam(":price", $price);
            $stmt->bindparam(":source_info", $source_info);
            $stmt->bindparam(":budget", $budget);
            $stmt->bindparam(":station", $station);
            $stmt->bindparam(":pathfinder", $pathfinder);
            $stmt->bindparam(":note", $note);
            $stmt->execute();
            return true;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function delete($id) {
        $stmt = $this->db->prepare("Delete from spare_part where id=:id");
        $stmt->bindparam(":id", $id);
        $stmt->execute();
        return true;
    }

    public function getID($id) {
        $stmt = $this->db->prepare("select * from spare_part where id=:id");
        $stmt->execute(array(":id" => $id));
        $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editrow;
    }

    public function update($id, $product,$equipment, $equipment_parts, $brand, $generation,$serial_no,$purchasing_receiving_date,$expiration_date,$price,$source_info,$budget,$station,$pathfinder,$note) {

        try {

            $stmt = $this->db->prepare("update spare_part set product=:product,equipment=:equipment,equipment_parts=:equipment_parts,brand=:brand,generation=:generation,serial_no=:serial_no,purchasing_receiving_date=:purchasing_receiving_date,expiration_date=:expiration_date,price=:price,source_info=:source_info,budget=:budget,station=:station,pathfinder=:pathfinder,note=:note where id=:id");
            $stmt->bindparam(":id", $id);
            $stmt->bindparam(":product", $product);
            $stmt->bindparam(":equipment", $equipment);
            $stmt->bindparam(":equipment_parts", $equipment_parts);
            $stmt->bindparam(":brand", $brand);
            $stmt->bindparam(":generation", $generation);
            $stmt->bindparam(":serial_no", $serial_no);
            $stmt->bindparam(":purchasing_receiving_date", $purchasing_receiving_date);
            $stmt->bindparam(":expiration_date", $expiration_date);
            $stmt->bindparam(":price", $price);
            $stmt->bindparam(":source_info", $source_info);
            $stmt->bindparam(":budget", $budget);
            $stmt->bindparam(":station", $station);
            $stmt->bindparam(":pathfinder", $pathfinder);
            $stmt->bindparam(":note", $note);
            $stmt->execute();
            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function dataview($query) {

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
               <tr>
                    
                    <td><?php
                if (isset($row['product'])) {
                    print($row['product']);
                }
                ?></td>    
                    <td><?php
                if (isset($row['equipment'])) {
                    print($row['equipment']);
                }
                ?></td>  
                    <td><?php
                if (isset($row['equipment_parts'])) {
                    print($row['equipment_parts']);
                }
                ?></td> 
                    <td><?php
                if (isset($row['brand'])) {
                    print($row['brand']);
                }
                ?></td> 
                    <td><?php
                if (isset($row['generation'])) {
                    print($row['generation']);
                }
                ?></td>
                    <td><?php
                if (isset($row['serial_no'])) {
                    print($row['serial_no']);
                }
                ?></td>
                    <td><?php
                if (isset($row['purchasing_receiving_date'])) {
                    print($row['purchasing_receiving_date']);
                }
                ?></td>
                    <td><?php
                if (isset($row['expiration_date'])) {
                    print($row['expiration_date']);
                }
                ?></td>
                    <td><?php
                if (isset($row['price'])) {
                    print($row['price']);
                }
                ?></td>
                    <td><?php
                if (isset($row['source_info'])) {
                    print($row['source_info']);
                }
                ?></td>
                    <td><?php
                if (isset($row['budget'])) {
                    print($row['budget']);
                }
                ?></td>
                    <td><?php
                if (isset($row['station'])) {
                    print($row['station']);
                }
                ?></td>
                    <td><?php
                if (isset($row['pathfinder'])) {
                    print($row['pathfinder']);
                }
                ?></td>
                    <td><?php
                if (isset($row['note'])) {
                    print($row['note']);
                }
                ?></td>
                    <td align="center"><a href="edit.php?id=<?php echo $row['id']; ?>"><i class="glyphicon glyphicon-edit"></a></td>
                    <td align="center"><a href="delete.php?id=<?php echo $row['id']; ?>"><i class="glyphicon glyphicon-remove-circle"></i></a></td>
                </tr>         

                <?php
            }
        } else {
            ?>
            <tr>
                <td>Nothing here...</td>
            </tr>
            <?php
        }
    }

    public function paging($query, $record_per_page) {
        $starting_position = 0;
        if(isset($_GET['page_no']))
        {
            $starting_position=($_GET['page_no']-1)*$record_per_page;
        }
        $query2 = $query . " limit $starting_position,$record_per_page";
        return $query2;
    }

    public function pagelink($query, $record_per_page) {
        $self = $_SERVER['PHP_SELF'];
            
        $stmt=$this->db->prepare($query);
        $stmt->execute();
        
        $total_no_of_records=$stmt->rowCount();
       
        if($total_no_of_records > 0)
        {
        ?>
            <ul class="pagination">
             <?php
              
             $total_no_pages=ceil($total_no_of_records/$record_per_page);
             $current_page=1;
             if(isset($_GET["page_no"]))
             {
             $current_page=$_GET["page_no"];
             }
             if($current_page!=1)
             {
                 $previous=$current_page-1;
                echo "<li><a href='".$self."?page_no=1'>First</a></li>";
                echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
             }
            
             for($i=1;$i<=$total_no_pages;$i++)
             {
                 if($i==$current_page)
                 {
                     echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
                 }
                 else
                 {
                     echo "<li><a href='".$self."?page_no=".$i."''>".$i."</a></li>";
                 }
                 
                 
             }
             
              if($current_page!= $total_no_pages)
             {
                 $next=$current_page+1;
               	echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
                echo "<li><a href='".$self."?page_no=".$total_no_pages."'>Last</a></li>";
             }
             
             
             
             
             
             
             
             ?>


                
            </ul>
            
            
            
         <?php   
        }
        
        
       
        
        
        
        
        
        
        
        
        
        
        
        
    }

}
?>
</body>
</html>