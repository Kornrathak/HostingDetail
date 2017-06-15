<html>
    <head>
        <title>RELAY SECTION</title>
        <link rel="shortcut icon" href="../../img/logo/logos.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../shared/css/insert.css" />
        <link rel="stylesheet" type="text/css" href="../../shared/css/layout.css" />
    </head>
    <body id="myPage">
        <div class="container">
            <?php 
                include '../../shared/nav/nav.php';
                //echo '<div class="header"><h2>ข้อมูลอุปกรณ์ CSCS</h2></div>';
                echo '<div class="header">
            <h1 class="text-center">คู่มือผลิตภัณฑ์ Relay</h1>
            <p class="text-center text-primary">แผนกรีเลย์ และ อุปกรณ์ควบคุม</p>
          </div>';
            echo "<a href=pdf/Manual_CSCS_Remsdaq_Callisto_IES.pdf><h1>ผลิตภัณฑ์ Remsdaq รุ่น Callisto IES</h1></a><br/>";
			echo "<a href=pdf/Manual_CSCS_Remsdaq_Callisto_I.pdf><h1>ผลิตภัณฑ์ Remsdaq รุ่น Callisto I</h1></a><br/>";
			echo "<a href=pdf/Manual_CSCS_Arteche.pdf><h1>ผลิตภัณฑ์ Ingeteam (Arteche)</h1></a><br/>";
			echo "<a href=pdf/Manual_CSCS_ABB.pdf><h1>ผลิตภัณฑ์ ABB</h1></a><br/>";
			echo "<a href=pdf/Manual_CSCS_ISKRA.pdf><h1>ผลิตภัณฑ์ ISKRA</h1></a><br/>";
                include '../../shared/footer/footer.php';
            ?>
        </div>
    </body>
</html>