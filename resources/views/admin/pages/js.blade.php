<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
{{-- <script src="../js/raphael.min.js"></script> --}}

<!-- Custom Theme JavaScript -->
<script src="../js/startmin.js"></script>


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js" integrity="sha512-Lii3WMtgA0C0qmmkdCpsG0Gjr6M0ajRyQRQSbTF6BsrVh/nhZdHpVZ76iMIPvQwz1eoXC3DmAg9K51qT5/dEVg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
<script type="text/javascript" src="chartjss/Chart.js"></script>
<script>
    const labels = [
        <?php
            $koneksi = mysqli_connect("localhost","u7693570_diagnosa","u7693570_diagnosa","u7693570_diagnosa");
            $query1 = mysqli_query($koneksi,"select jenis_kelamin FROM pengkajian GROUP BY jenis_kelamin");
            while($data1 = mysqli_fetch_array($query1)){
        ?>
      '<?php echo $data1['jenis_kelamin'] ?>',
        <?php
            }
        ?>

    ];

    const data = {
      labels: labels,
      datasets: [{
        label: 'My First dataset',
        backgroundColor: [
            'blue',
					'pink'
        ],
        borderColor: 'white',
        data: [
            <?php
                $koneksi = mysqli_connect("localhost","u7693570_diagnosa","u7693570_diagnosa","u7693570_diagnosa");
                $query2 = mysqli_query($koneksi,"select count(jenis_kelamin) as jml FROM pengkajian GROUP BY jenis_kelamin");
                while($data2 = mysqli_fetch_array($query2)){
            ?>
            <?php echo $data2['jml'] ?>,
            <?php
                }
            ?>

            ],
      }]
    };

    const config = {
      type: 'pie',
      data: data,
      options: {}
    };
    const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
  </script>


<script>
		var ctx = document.getElementById("myChart1").getContext('2d');
		var myChart1 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [
                    <?php
                        $koneksi = mysqli_connect("localhost","u7693570_diagnosa","u7693570_diagnosa","u7693570_diagnosa");
                        $query3 = mysqli_query($koneksi,"select kesadaran FROM pengkajian GROUP BY kesadaran");
                        while($data3 = mysqli_fetch_array($query3)){
                    ?>
                    "<?php echo $data3['kesadaran'] ?>",
                    <?php
                        }
                    ?>
                ],
				datasets: [{
					label: '# Tingkat Kesadaran',
					data: [
                        <?php
                            $koneksi = mysqli_connect("localhost","u7693570_diagnosa","u7693570_diagnosa","u7693570_diagnosa");
                            $query4 = mysqli_query($koneksi,"select count(kesadaran) as jml FROM pengkajian GROUP BY kesadaran");
                            while($data4 = mysqli_fetch_array($query4)){
                        ?>
                        <?php echo $data4['jml'] ?>,
                        <?php
                            }
                        ?>
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
