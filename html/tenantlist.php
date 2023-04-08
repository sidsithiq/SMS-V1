<?php include('header.php'); ?>
<?php include 'config.php'; ?>
<?php $apartmentDatas = mysqli_query($db, "SELECT * FROM resident_details WHERE purpose='TENANT'");
?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include('menu.php'); ?>
            <!-- Layout container -->
            <div class="layout-page">
                <?php include('nav.php'); ?>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <!-- <div class="container-xxl flex-grow-1 container-p-y"> -->
                    <div class="container-xxl flex-grow-1">
                        <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light"> </span><b>TENANT LIST</b>
                        </h4>
                        <div class="mb-4 col-md-2">
                            <label for="SHOW" class="form-label">SHOW</label>
                            <select id="SHOW" class="select2 form-select">
                                <option value="">SELECT</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                            
                        </div>

                        <div class="card">
                            <!-- <h5 class="card-header">Table Basic</h5> -->

                            <div class="table-responsive text-nowrap">

                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th>ID </th>
                                            <th>BLOCK NAME</th>
                                            <th>UNIT</th>
                                            <th>UNIT TYPE</th>
                                            <th>TENANT NAME</th>
                                            <th>TENANT MOBILE NUMBER</th>

                                        </tr>
                                    </thead>
                                    <?php while ($row = mysqli_fetch_array($apartmentDatas)) {
                                            ?>
                                            <tr>
                                                <td>                                               
                                                    <?php echo $row['id']; ?>                                                    
                                                </td>
                                                <td>
                                                    <?php echo $row['blocks']; ?>
                                                </td>
                                                <td>                                   
                                                                                                                    
                                                    <?php echo "A".$row['unit'];?>
                                                    
                                                </td>
                                                <td>
                                                    <?php echo $row['type']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['first_name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['contact']; ?>
                                                </td>
                                                
                                            </tr>
                                            <?php
                                        } ?>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>