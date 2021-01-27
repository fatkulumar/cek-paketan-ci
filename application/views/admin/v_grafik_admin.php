<script src="<?= base_url('assets/highcharts/code/highcharts.js') ?>"></script>
<?php
        
        $data = [];
        foreach($nama_paket as $pk){
            $nama = $pk["nama_paket"];
            $jml = intval($pk["jumlah"]);
            $data[] = [
                'name' => $nama,
                'y' => $jml,
            ];
        }

        $data_penerima = [];
        foreach($penerima as $pen){
            $nama_penerima = $pen["penerima"];
            $jumlah_penerima = intval($pen["jumlah"]);
            $data_penerima[] = [
                'name' => $nama_penerima,
                'y' => $jumlah_penerima,
            ];
        }
        
    ?>

    <section id="counts" class="counts bg-success">
      <div class="container ">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

<div class="row content">
    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <!-- grafik nama paketan  -->
        <div class="mb-5" id="nama_paketan" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        <!-- grafik jenis kirim  -->
        <div class="mb-5" id="jenis_kirim" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
        <!-- grafik duta paket -->
        <div class="mb-5" id="duta_paket" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    <ul>
        <!-- grafik duta penerima -->
        <div class="mb-5" id="duta_penerima" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </ul>
        <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
        </p>

        <p>
            <div class="alert alert-danger">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias quis quae, eius aliquid corrupti sint suscipit dolore eligendi possimus earum esse unde, provident doloribus perferendis, tempora autem debitis distinctio consequuntur!</div>
        </p>
    </div>
</div>


<script>
$().ready(function() {


$.getJSON('http://'+ window.location.host +'/cek-paketan-ci/user/grafikNamaPaket', function(data) {
    var nama_paket = data.nama_paket
        var langsung = data.langsung
        var cod = data.cod
        var nama_paketan = []
        var jumlah = []
        var jenis_kirim = []
        var jumlah_kirim_cod = []
        var jumlah_kirim_langsung = []


        $(langsung).each(function(ia){
            jumlah_kirim_langsung.push(langsung[ia].jumlah_langsung);
        })
        $(cod).each(function(i){
            jumlah_kirim_cod.push(cod[i].jumlah_cod);
        })
        $(nama_paket).each(function(i){
            nama_paketan.push(nama_paket[i].nama_paket);
            jumlah.push(parseFloat(nama_paket[i].jumlah));
            jenis_kirim.push(nama_paket[i].jenis_kirim);
        })
    //    alert(jumlah_kirim_langsung.length);
       var jml_langsung = jumlah_kirim_langsung.length
       var jml_cod = jumlah_kirim_cod.length
    //grafik nama paketan
        // alert(jumlah)
    //grafik nama paketan
    Highcharts.chart('nama_paketan', {

        chart: {
        type: 'line'
        },

        title: {
        text: 'Paketan'
        },

        xAxis: {
        categories: nama_paketan
        },

        yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'Jumlah Paketan'
        }
        },

        tooltip: {
        formatter: function () {
            return '<b>' + this.x + '</b><br/>Total Paketan: ' + this.y + '<br/>' +
            // this.series.name + ': ' + this.y + '<br/>' +
            // 'Total: ' + this.point.stackTotal + 
            '<br>' +'Langsung:' + jumlah_kirim_langsung + '<br>' +'COD:' + jumlah_kirim_cod;
        }
        },

        plotOptions: {
        column: {
            stacking: 'normal'
        }
        },

        series: 
        [
        {
            name: 'Paketan',
            data: jumlah,
        },

        //  {
        // name: 'Joe',
        // data: [3, 4, 4, 2, 5],
        // stack: 'male'
        // }, {
        // name: 'Jane',
        // data: [2, 5, 6, 2, 1],
        // stack: 'female'
        // }, {
        // name: 'Janet',
        // data: [3, 0, 4, 4, 3],
        // stack: 'female'
        // }
        ]
        });

    //grafik jenis kirim
    Highcharts.chart('jenis_kirim', {

        chart: {
        type: 'column'
        },

        title: {
        text: 'Jumlah Jenis Kirim'
        },

        xAxis: {
        categories: ['Langsung', 'COD']
        },

        yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'Jumlah Jenis Kirim'
        }
        },

        tooltip: {
        formatter: function () {
            return '<b>' + this.x + '</b><br/>' +
            this.series.name + ': ' + this.y + '<br/>' +
            'Total: ' + this.point.stackTotal;
        }
        },

        plotOptions: {
        column: {
            stacking: 'normal'
        }
        },

        series: [
            {
        name: 'Langsung',
        data: [jml_langsung, jml_cod],
        stack: 'male'
        }, 
        {
        name: 'COD',
        data: [jml_cod],
        stack: 'male'
        },
        //  {
        // name: 'Jane',
        // data: [2, 5, 6, 2, 1],
        // stack: 'female'
        // }, {
        // name: 'Janet',
        // data: [3, 0, 4, 4, 3],
        // stack: 'female'
        // }
        ]
        });

    //grafik duta paket
        Highcharts.chart('duta_paket', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Duta Paktean'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Persentase',
                colorByPoint: true,
                data: <?php echo json_encode($data)?>
            //     [
                //     {
                //     name: 'Chrome',
                //     y: 61.41,
                //     sliced: true,
                //     selected: true
                // }, 
            //     {
            //         name: 'Firefox',
            //         y: 10.85
            //     }, {
            //         name: 'Edge',
            //         y: 4.67
            //     }, {
            //         name: 'Safari',
            //         y: 4.18
            //     }, {
            //         name: 'Sogou Explorer',
            //         y: 1.64
            //     }, {
            //         name: 'Opera',
            //         y: 1.6
            //     }, {
            //         name: 'QQ',
            //         y: 1.2
            //     }, {
            //         name: 'Other',
            //         y: 2.61
            //     }
            // ]
            }]
        });
    //grafik duta peneruma
        Highcharts.chart('duta_penerima', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Duta Penerima'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Persentase',
                colorByPoint: true,
                data: <?php echo json_encode($data_penerima)?>
            //     [
                //     {
                //     name: 'Chrome',
                //     y: 61.41,
                //     sliced: true,
                //     selected: true
                // }, 
            //     {
            //         name: 'Firefox',
            //         y: 10.85
            //     }, {
            //         name: 'Edge',
            //         y: 4.67
            //     }, {
            //         name: 'Safari',
            //         y: 4.18
            //     }, {
            //         name: 'Sogou Explorer',
            //         y: 1.64
            //     }, {
            //         name: 'Opera',
            //         y: 1.6
            //     }, {
            //         name: 'QQ',
            //         y: 1.2
            //     }, {
            //         name: 'Other',
            //         y: 2.61
            //     }
            // ]
            }]
        });
});
})
</script>