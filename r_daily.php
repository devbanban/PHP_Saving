<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $query = "
            SELECT detail,amount, SUM(amount) AS totol, DATE_FORMAT(datesave, '%d-%M-%Y') AS datesave
            FROM tbl_income
            GROUP BY DATE_FORMAT(datesave, '%d%')
            ORDER BY DATE_FORMAT(datesave, '%Y-%m-%d') DESC
            ";
            $result = mysqli_query($con, $query);
            $resultchart = mysqli_query($con, $query);
            //for chart
            $datesave = array();
            $totol = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $datesave[] = "\"".$rs['datesave']."\"";
            $totol[] = "\"".$rs['totol']."\"";
            }
            $datesave = implode(",", $datesave);
            $totol = implode(",", $totol);
            
            ?>
            <h3 align="center">รายงานในแบบกราฟ by devbanban.com</h3>
            
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
            <hr>
            <p align="center">
                <!--devbanban.com-->
                <canvas id="myChart" width="800px" height="300px"></canvas>
                <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                labels: [<?php echo $datesave;?>
                
                ],
                datasets: [{
                label: 'รายงานรายได้ แยกตามวัน (บาท)',
                data: [<?php echo $totol;?>
                ],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
                }]
                },
                options: {
                scales: {
                yAxes: [{
                ticks: {
                beginAtZero:true
                }
                }]
                }
                }
                });
                </script>
            </p>
            <div class="col-sm-12">
                <h3>List</h3>
                <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                    <thead>
                        <tr class="table-primary">
                            <th width="20%">ว/ด/ป</th>
                            <th width="50%">รายละเอียด</th>
                            <th width="10%"><center>รายได้</center></th>
                        </tr>
                    </thead>
                    
                    
                    <?php 
					
		   $sql = "
            SELECT * FROM tbl_income
            ORDER BY id DESC
            ";
            $result2 = mysqli_query($con, $sql);
					while($row2 = mysqli_fetch_array($result2)) { 
					
					?>
                    <tr>
                        <td><?php echo $row2['datesave'];?></td>
                        <td><?php echo $row2['detail'];?></td>
                        <td align="right"><?php echo number_format($row2['amount'],2);?></td>
                    </tr>
                    <?php
                    @$amount_total += $row2['amount'];
                    }
                    ?>
                    <tr class="table-danger">
                         <td align="center"></td>
                        <td align="center">รวม</td>
                        <td align="right"><b>
                        <?php echo number_format($amount_total,2);?></b></td></td>
                    </tr>
                </table>
            </div>
            <?php mysqli_close($con);?>
        </div>
    </div>
</div>