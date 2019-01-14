<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lead_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $sql = 'SELECT * FROM contact_info order by id desc';
 $result = mysqli_query($conn, $sql);
 
 //echo '<pre>'; print_r($result);

?>
<!DOCTYPE html>
<html>
    <head>
	 </head>
<body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">        
            <div class="content-wrapper">              
                <section class="content-header">
                    <h1> Lead Infomation</h1>                    
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">                                
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="text-align:center; width:5%;">No.</th>
                                                <th style="text-align:center; width:20%;"> Name</th>
                                                <th style="text-align:center; width:20%;">Email</th>
                                                <th style="text-align:center; width:20%;">Phone</th>                                               
                                                <th style="text-align:center; width:10%;">View Detail </th>
                                                
                                            </tr>
                                            <?php
                                            $rowno = 0;
                                               if (mysqli_num_rows($result) > 0) {
                                               while($row = mysqli_fetch_assoc($result)) {
												   $rowno++;
                                                    ?>
                                                    <tr>
                                                        <td style="text-align:center;"><?php echo $rowno; ?></td>
                                                        <td style="text-align:center;"><?php echo $row['name']; ?></td>
                                                        <td style="text-align:center;"><?php echo $row['email']; ?></td>
                                                        <td style="text-align:center;"><?php echo  $row['phone']; ?></td>                                                        
                                                        <td style="text-align:center; vertical-align:middle;"><a class="fa fa-fw fa-edit" href="lead-detail.php?id=<?php echo $row['id']?>">Click</a></td>
                                                        
                                                    </tr>
                                                    <?php
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan="7" align="center"> Sorry.. No records found.</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            
            <!-- Control Sidebar -->
           
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        
    </body>
</html>