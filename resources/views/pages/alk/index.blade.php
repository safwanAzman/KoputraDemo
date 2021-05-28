@extends('default.default')
@section('content')
<livewire:page.alk.index />

{{-- lineChart --}}
<script>
    var chart = document.querySelector('#chartline')
    var options = {
        chart: {
            height: 350,
            type: "line",
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        colors: ["#FF1654", "#247BA0"],
        series: [{
                name: "BAYARAN DITERIMA",
                data: [0, 200, 400, 350, 550]
            },
            {
                name: "PATUT BAYAR",
                data: [10, 400, 400, 300, 500]
            }
        ],
        stroke: {
            width: [4, 4],
            curve: 'smooth',
        },
        plotOptions: {
            bar: {
                columnWidth: "20%"
            }
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yaxis: [{
                axisTicks: {
                    show: true
                },
                axisBorder: {
                    show: true,
                    color: "#FF1654"
                },
                labels: {
                    style: {
                        colors: "#FF1654"
                    }
                },
            },
            {
                opposite: true,
                axisTicks: {
                    show: true
                },
                axisBorder: {
                    show: true,
                    color: "#247BA0"
                },
                labels: {
                    style: {
                        colors: "#247BA0"
                    }
                },
            }
        ],
        tooltip: {
            shared: false,
            intersect: true,
            x: {
                show: false
            }
        },
        title: {
            text: 'Kumulatif 2021-Statistik Bayaran Balik',
            align: 'left'
        },
        legend: {
            horizontalAlign: "left",
            offsetX: 40
        }
    };
    var chart = new ApexCharts(chart, options);
    chart.render();
</script>
{{-- lineChart --}}

{{-- pie Chart --}}
<script>
    var chart = document.querySelector('#chartpie')
    var options = {
        series: [44, 55, 13,22 ],
        chart: {
            height: 350,
            type: 'pie',
        },
        title: {
            text: 'Kumulatif 2021-Prestasi Produk Pembiayaan',
            align: 'left'
        },
        labels: ['Cash-i dengan Penjamin', 'Cash-i tanpa Penjamin', 'Caruman Sendiri (PCS)','Skim Ansuran Barangan'],
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };
    var chart = new ApexCharts(chart, options);
    chart.render();
</script>
{{-- pie Chart --}}
@endsection