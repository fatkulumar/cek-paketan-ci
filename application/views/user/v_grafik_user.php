<script src="assets/highcharts/code/highcharts.js"></script>

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
    <div class="col-lg-6 mt-5" data-aos="fade-right" data-aos-delay="100">
        <!-- grafik nama paketan  -->
        <div class="mb-5" id="nama_paketan" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        <!-- grafik jenis kirim  -->
        <div class="mb-5" id="jenis_kirim" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div class="col-lg-6 pt-4 pt-lg-0 mt-5" data-aos="fade-left" data-aos-delay="200">
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
    </div>
</div>


<script>
    //grafik nama paketan
    Highcharts.chart('nama_paketan', {

        chart: {
        type: 'line'
        },

        title: {
        text: 'Total fruit consumtion, grouped by gender'
        },

        xAxis: {
        categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
        },

        yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'Number of fruits'
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

        series: [{
        name: 'John',
        data: [5, 3, 4, 7, 2],
        stack: 'male'
        }, {
        name: 'Joe',
        data: [3, 4, 4, 2, 5],
        stack: 'male'
        }, {
        name: 'Jane',
        data: [2, 5, 6, 2, 1],
        stack: 'female'
        }, {
        name: 'Janet',
        data: [3, 0, 4, 4, 3],
        stack: 'female'
        }]
    });
    //grafik jenis kirim
    Highcharts.chart('jenis_kirim', {

        chart: {
        type: 'column'
        },

        title: {
        text: 'Total fruit consumtion, grouped by gender'
        },

        xAxis: {
        categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
        },

        yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'Number of fruits'
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

        series: [{
        name: 'John',
        data: [5, 3, 4, 7, 2],
        stack: 'male'
        }, {
        name: 'Joe',
        data: [3, 4, 4, 2, 5],
        stack: 'male'
        }, {
        name: 'Jane',
        data: [2, 5, 6, 2, 1],
        stack: 'female'
        }, {
        name: 'Janet',
        data: [3, 0, 4, 4, 3],
        stack: 'female'
        }]
    });
    //grafik duta paket
    Highcharts.chart('duta_paket', {

        chart: {
        type: 'pie'
        },

        title: {
        text: 'Total fruit consumtion, grouped by gender'
        },

        xAxis: {
        categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
        },

        yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'Number of fruits'
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

        series: [{
        name: 'John',
        data: [5, 3, 4, 7, 2],
        stack: 'male'
        }, {
        name: 'Joe',
        data: [3, 4, 4, 2, 5],
        stack: 'male'
        }, {
        name: 'Jane',
        data: [2, 5, 6, 2, 1],
        stack: 'female'
        }, {
        name: 'Janet',
        data: [3, 0, 4, 4, 3],
        stack: 'female'
        }]
    });

    //grafik duta peneruma
    Highcharts.chart('duta_penerima', {

chart: {
type: 'pie'
},

title: {
text: 'Total fruit consumtion, grouped by gender'
},

xAxis: {
categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
},

yAxis: {
allowDecimals: false,
min: 0,
title: {
    text: 'Number of fruits'
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

series: [{
name: 'John',
data: [5, 3, 4, 7, 2],
stack: 'male'
}, {
name: 'Joe',
data: [3, 4, 4, 2, 5],
stack: 'male'
}, {
name: 'Jane',
data: [2, 5, 6, 2, 1],
stack: 'female'
}, {
name: 'Janet',
data: [3, 0, 4, 4, 3],
stack: 'female'
}]
});
</script>