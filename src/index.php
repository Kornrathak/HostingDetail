<html>
    <head>
        <title>Web</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include './shared/database/connection.php';
            // insert pattern
            // $data = array(
            //     'equipment' => 'SDSS',
            //     'active' => 1,
            //     'unique_id' => a4, // ไม่จำเป้นต้องใส่ '' แบบ unique_id ก็ได้ insert, update ได้
            //     'sub_id' => 'AAA',
            //     'generation' => 'asdas',
            //     'serial_n' => 'fsdafsda',
            //     'type' => 'DIM',
            //     'installed' => 'COMON',
            //     'voltage' => '22KV',
            //     'working_status' => 'ใช้งานได้'
            // );
            // echo '<br>'.insertDb($data, 'equipment_info');

            // update มีเงื่อนไข
            // $data = array(
            //     'equipment' => 'SDSS',
            //     'active' => '0', // boolean is number (0 flase, 1 true)
            //     'unique_id' => 'a4',
            //     'sub_id' => 'DTA',
            //     'generation' => 'asdas',
            //     'serial_n' => 'fsdafsda',
            //     'type' => 'DIM',
            //     'installed' => 'COMON',
            //     'voltage' => '22KV',
            //     'working_status' => 'ใช้งานได้'
            // );
            // echo '<br>'.updateDb($data, 'equipment_info', 'id=4');

            // update ไม้มั เงื่อนไข
            // $data = array(
            //     'sub_id' => 'HHH',
            //     'sub_name' => 'what'
            // );
            // echo '<br>'.updateDb($data, 'substation');
        ?>
    </body>
</html>