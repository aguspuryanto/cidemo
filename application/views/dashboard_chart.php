


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <section class="col-lg-4">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bar Chart Satu</h3>
              </div><!-- /.card-header -->
              <div class="card-body">

                <div class="position-relative mb-4" style="overflow: auto;white-space: nowrap;">
                  <canvas id="chart1" height="200"></canvas>
                </div>

              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Bar Chart Satu</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
				<form action="<?=site_url('dashboard1/postData1'); ?>" method="POST">
					<div class="row">
						<div class="form-group mb-2 col-md-6">
							<label for="inputEmail3">Nama</label>
							<input type="text" class="form-control" name="nama" placeholder="Enter ..">
						</div>
						<div class="form-group mb-2 col-md-6">
							<label for="inputPassword3">Banyak</label>
							<input type="text" class="form-control" name="jml" placeholder="Enter ..">
						</div>
					</div>
					<button type="submit" class="btn btn-primary mb-2">Simpan</button>
				</form>
                </div>
              </div><!-- /.card-body -->
            </div>
          </section>

          <section class="col-lg-4">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bar Chart Dua</h3>
              </div><!-- /.card-header -->
              <div class="card-body">

                <div class="position-relative mb-4">
                  <canvas id="chart2" height="200"></canvas>
                </div>

              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Bar Chart Dua</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
				<form action="<?=site_url('dashboard1/postData2'); ?>" method="POST">
					<div class="row">
						<div class="form-group mb-2 col-md-6">
							<label for="inputEmail3">Nama</label>
							<input type="text" class="form-control" name="nama" placeholder="Enter ..">
						</div>
						<div class="form-group mb-2 col-md-6">
							<label for="inputPassword3">Banyak</label>
							<input type="text" class="form-control" name="jml" placeholder="Enter ..">
						</div>
					</div>
					<button type="submit" class="btn btn-primary mb-2">Simpan</button>
				</form>
                </div>
              </div><!-- /.card-body -->
            </div>
          </section>

          <section class="col-lg-4">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Rata-rata Bar Chart</h3>
              </div><!-- /.card-header -->
              <div class="card-body">

                <div class="position-relative mb-4">
                  <canvas id="chart3" height="200"></canvas>
                </div>

              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

	<script>
		var chart1Labels = <?=json_encode($chart1['labels']); ?>;
		var chart1Data = <?=json_encode($chart1['data']); ?>;
		// 
		var chart2Labels = <?=json_encode($chart2['labels']); ?>;
		var chart2Data = <?=json_encode($chart2['data']); ?>;
		// 
		var chart3Labels = <?=json_encode($chart3['labels']); ?>;
		var chart3Data = <?=json_encode($chart3['data']); ?>;

		var ticksStyle = {
			fontColor: '#495057',
			fontStyle: 'bold'
		}

		var mode = 'index'
		var intersect = true

		var loadData1 = function(){
			var originalLineDraw = Chart.controllers.bar.prototype.draw;
			Chart.helpers.extend(Chart.controllers.bar.prototype, {
			draw: function() {
				originalLineDraw.apply(this, arguments);

				var chart = this.chart;
				var ctx = chart.chart.ctx;

				var index = chart.config.data.lineAtIndex;
				if (index) {
					var xaxis = chart.scales['x-axis-0'];
					var yaxis = chart.scales['y-axis-0'];

					ctx.save();
					ctx.beginPath();
					ctx.moveTo(35, 60);
					ctx.strokeStyle = '#ff0000';
					ctx.lineTo(500,60);
					ctx.stroke();
					ctx.restore();
				}
			}
			});

			var config = {
				type: 'bar',
				data: {
					labels: chart1Labels,
					datasets: [{
						backgroundColor: '#ced4da',
						borderColor : '#ced4da',
						data : chart1Data
					}],
					lineAtIndex: 2
				},
				options: {
					maintainAspectRatio: false,
					tooltips: {
						mode: mode,
						intersect: intersect
					},
					hover: {
						mode: mode,
						intersect: intersect
					},
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
						// display: false,
						gridLines: {
							display      : true,
							lineWidth    : '4px',
							color        : 'rgba(0, 0, 0, .2)',
							zeroLineColor: 'transparent'
						},
						ticks    : $.extend({
							beginAtZero: true,
							callback: function (value, index, values) {
								return value
							}
						}, ticksStyle)
						}],
						xAxes: [{
						display  : true,
						gridLines: {
							display: false
						},
						ticks    : ticksStyle
						}]
					}
				}
			};

			var ctx = document.getElementById("chart1").getContext("2d");
			new Chart(ctx, config);
		}

		var loadData2 = function() {

			var config = {
				type: 'bar',
				data: {
					labels: chart2Labels,
					datasets: [{
						backgroundColor: '#ced4da',
						borderColor : '#ced4da',
						data : chart2Data
					}],
					lineAtIndex: 2
				},
				options: {
					maintainAspectRatio: false,
					tooltips: {
						mode: mode,
						intersect: intersect
					},
					hover: {
						mode: mode,
						intersect: intersect
					},
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
						// display: false,
						gridLines: {
							display      : true,
							lineWidth    : '4px',
							color        : 'rgba(0, 0, 0, .2)',
							zeroLineColor: 'transparent'
						},
						ticks    : $.extend({
							beginAtZero: true,
							callback: function (value, index, values) {
								return value
							}
						}, ticksStyle)
						}],
						xAxes: [{
						display  : true,
						gridLines: {
							display: false
						},
						ticks    : ticksStyle
						}]
					}
				}
			};

			var ctx = document.getElementById("chart2").getContext("2d");
			new Chart(ctx, config);
		}

		var loadData3 = function() {

			var config = {
				type: 'bar',
				data: {
					labels: chart3Labels,
					datasets: [{
						backgroundColor: '#ced4da',
						borderColor : '#ced4da',
						data : chart3Data
					}],
					lineAtIndex: 2
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
				}
			};

			var ctx = document.getElementById("chart3").getContext("2d");
			new Chart(ctx, config);
		}

		$(function () {
			// 'use strict'

			loadData1();
			loadData2();
			loadData3();

		});
	</script>
