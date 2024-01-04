<main>
    <div class="container-fluid">
        <div class="row g-2">
            <!-- side 1 -->
            <div class="col-md-8">
                <div class="card card-border shadow">
                    <div class="tops bgtops-goso py-1 px-4 fw-bold">
                        Akumulasi Sampah Terserap
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <!-- statistic -->
                            <div class="col-md-4">
                                <div class="card card-inner-goso mb-3">
                                    <div class="card-body textin">
                                        <div class="d-flex justify-content-between border-bottom border-light mb-2">
                                            <p>Total:</p>
                                            <p class="text-end">
                                                <span class="fw-bold" style="font-size: 20px">139169</span>/kg
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom border-light mb-2">
                                            <p>Bulan ini:</p>
                                            <p class="text-end">
                                                <span class="fw-bold" style="font-size: 20px">139169</span>/kg
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom border-light mb-2">
                                            <p>Hari ini:</p>
                                            <p class="text-end">
                                                <span class="fw-bold" style="font-size: 20px">139169</span>/kg
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1 -->
                                <div class="mb-3">
                                    <div class="card card-inner-goso">
                                        <div class="card-body">
                                            <div class="row g-1 textin align-items-center">
                                                <div class="col-md-12 text-center">
                                                    Tertinggi Kecamatan
                                                </div>
                                                <div class="col-6 border-end border-white" style="font-size: 14px;">
                                                    Tawang
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="fw-bold" style="font-size: 20px">
                                                        <span id="counter"></span>
                                                    </div>
                                                    /kg
                                                </div>
                                                <script>
                                                    let counts = setInterval(updated, 50);
                                                    let upto = 20000;

                                                    function updated() {
                                                        let count = document.getElementById("counter");
                                                        count.innerHTML = ++upto;
                                                        if (upto === 28071) {
                                                            clearInterval(counts);
                                                        }
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="mb-3">
                                    <div class="card card-inner-goso">
                                        <div class="card-body">
                                            <div class="row g-1 textin align-items-center">
                                                <div class="col-md-12 text-center">
                                                    Tertinggi Kelurahan
                                                </div>
                                                <div class="col-6 border-end border-white" style="font-size: 14px;">
                                                    Mangkubumi
                                                </div>
                                                <div class="col-6 text-center">
                                                    <div class="fw-bold" style="font-size: 20px">
                                                        <span id="counters"></span>
                                                    </div>
                                                    /kg
                                                </div>
                                                <script>
                                                    let counters = setInterval(updated, 50);
                                                    let up = 20000;

                                                    function updated() {
                                                        let count = document.getElementById("counters");
                                                        count.innerHTML = ++up;
                                                        if (up === 28071) {
                                                            clearInterval(counters);
                                                        }
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- chart -->
                            <div class="col-md-8">
                                <div class="card card-inner-goso">
                                    <div class="card-body">
                                        <div>
                                            <div id="chartall"></div>
                                        </div>

                                        <script>
                                            var options = {
                                                chart: {
                                                    foreColor: "#ffffff",
                                                    type: "area",
                                                    height: 450,
                                                    toolbar: {
                                                        show: true,
                                                    },
                                                },
                                                dataLabels: {
                                                    enabled: true,
                                                },
                                                plotOptions: {
                                                    bar: {
                                                        barHeight: "100%",
                                                        horizontal: true,
                                                        dataLabels: {
                                                            position: "bottom",
                                                        },
                                                    },
                                                },
                                                colors: ["#64CC2C"],
                                                series: [{
                                                    name: "Penyemaian",
                                                    data: [<?php
                                                            foreach ($content as $data) {
                                                                echo ($data['lapsam_jumlah'] . ',');
                                                            } ?>],
                                                }, ],
                                                xaxis: {
                                                    categories: [<?php
                                                                    foreach ($content as $data) {
                                                                        echo ('"' . $data['nama_bulan'] . '",');
                                                                    } ?>],
                                                },
                                                stroke: {
                                                    show: true,
                                                    width: 3,
                                                    colors: ["#64CC2C"],
                                                },
                                                tooltip: {
                                                    theme: "dark",
                                                    x: {
                                                        show: false,
                                                    },
                                                    y: {
                                                        title: {
                                                            formatter: function() {
                                                                return "";
                                                            },
                                                        },
                                                    },
                                                },
                                            };

                                            var chart = new ApexCharts(
                                                document.querySelector("#chartall"),
                                                options
                                            );
                                            chart.render();
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- side 2 -->
            <div class="col-md-4">
                <div class="card card-border shadow">
                    <div class="tops bgtops-goso py-1 px-4 fw-bold">
                        Sampah Terserap Per Kecamatan
                    </div>
                    <div class="card-body">
                        <div class="row g-2">

                            <!-- chart -->
                            <div class="col-md-12">
                                <div class="card card-inner-goso">
                                    <div class="card-body">
                                        <div class="dataSplide" role="group" aria-label="Splide Basic HTML Example">
                                            
                                        <div>
                                            <div id="chartgoso"></div>
                                        </div>

                                        <script>
                                            var options = {
                                                chart: {
                                                    foreColor: "#ffffff",
                                                    type: "bar",
                                                    height: 450,
                                                    toolbar: {
                                                        show: true,
                                                    },
                                                },
                                                dataLabels: {
                                                    enabled: true,
                                                },
                                                plotOptions: {
                                                    bar: {
                                                        barHeight: "100%",
                                                        horizontal: false,
                                                        dataLabels: {
                                                            position: "bottom",
                                                        },
                                                    },
                                                },
                                                colors: ["#56B4E9"],
                                                series: [{
                                                    name: "Penyemaian",
                                                    data: [10, 33, 55, 65, 22, 54, 23, 22, 14, 57],
                                                }, ],
                                                xaxis: {
                                                    categories: [
                                                        "Data 1",
                                                        "Data 2",
                                                        "Data 3",
                                                        "Data 4",
                                                        "Data 5",
                                                        "Data 6",
                                                        "Data 7",
                                                        "Data 8",
                                                        "Data 9",
                                                        "Data 10",
                                                    ],
                                                },
                                                stroke: {
                                                    show: true,
                                                    width: 1,
                                                    colors: ["#56B4E9"],
                                                },
                                                tooltip: {
                                                    theme: "dark",
                                                    x: {
                                                        show: false,
                                                    },
                                                    y: {
                                                        title: {
                                                            formatter: function() {
                                                                return "";
                                                            },
                                                        },
                                                    },
                                                },
                                            };

                                            var chart = new ApexCharts(
                                                document.querySelector("#chartgoso"),
                                                options
                                            );
                                            chart.render();
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>