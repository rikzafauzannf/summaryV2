<main>
    <div class="container-fluid">
        <div class="row mt-3 g-1">
            <!-- data 1 -->
            <div class="col-md-7">
                <div class="card card-border shadow">
                    <div class="tops bgtops-setaman py-1 px-4 fw-bold">
                        Data Semai & Tanaman Per Kecamatan
                    </div>
                    <div class="card-body">
                        <div class="row my-3 g-2">
                            <div class="col-md-4">
                                <!-- data pencapaian -->
                                <div class="card card-inner shadow mb-4">
                                    <div class="tops bgtops-setaman py-1 px-4 fw-bold">Target 1jt Tanaman</div>
                                    <div class="card-body">
                                        <div class="row g-2 textin">
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <p class="fw-semibold">Penyemaian</p>
                                                    <p class="fw-bold" style="font-size: 16px;">28282828</p>
                                                </div>
                                                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%">75%</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <p class="fw-semibold">Penanaman</p>
                                                    <p class="fw-bold" style="font-size: 16px;">28282828</p>
                                                </div>
                                                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%">75%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- data terbanyak -->
                                <div class="card card-inner shadow">
                                    <div class="tops bgtops-setaman py-1 px-4 fw-bold">Data Terbanyak</div>
                                    <div class="card-body">
                                        <div class="row g-1 textin">
                                            <div class="col-md-12">
                                                <div class="row g-1">
                                                    <div class="col-md-12">Data Semai:</div>
                                                    <div class="col-md-12">
                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <p class=" fw-medium" style="font-size: 14px">
                                                                Mangkubumi</p>
                                                            <p class="fw-bold ps-3" style="font-size: 16px">28071</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row g-1">
                                                    <div class="col-md-12">Data Tanam:</div>
                                                    <div class="col-md-12">
                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <p class=" fw-medium" style="font-size: 14px">
                                                                Mangkubumi</p>
                                                            <p class="fw-bold ps-3" style="font-size: 16px">28071</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row g-1">
                                                    <div class="col-md-12">Data Panen:</div>
                                                    <div class="col-md-12">
                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <p class=" fw-medium" style="font-size: 14px">
                                                                Mangkubumi</p>
                                                            <p class="fw-bold ps-3" style="font-size: 16px">28071</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card card-inner shadow">
                                    <div class="card-body">
                                        <!-- CHART CONTAINER -->
                                        <div>
                                            <div id="chart"></div>
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
                                                        horizontal: true,
                                                        dataLabels: {
                                                            position: "bottom",
                                                        },
                                                    },
                                                },
                                                colors: ["#57AFA9", "#FFC56E", "#EE63A1"],
                                                series: [{
                                                        name: "Penyemaian",
                                                        data: [10, 33, 55, 65, 22],
                                                    },
                                                    {
                                                        name: "Penanaman",
                                                        data: [23, 24, 54, 66, 22],
                                                    },
                                                    {
                                                        name: "Panen",
                                                        data: [22, 30, 45, 36, 22],
                                                    },
                                                ],
                                                xaxis: {
                                                    categories: [
                                                        "Data 1",
                                                        "Data 2",
                                                        "Data 3",
                                                        "Data 4",
                                                        "Data 5",
                                                    ],
                                                },
                                                stroke: {
                                                    show: true,
                                                    width: 1,
                                                    colors: ["#fff"],
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
                                                document.querySelector("#chart"),
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
            <!-- data 2 -->
            <div class="col-md-3">
                <div class="card card-border shadow">
                    <div class="tops bgtops-setaman py-1 px-4 fw-bold">
                        Data Komoditas Tanam Terbanyak
                    </div>
                    <div class="card-body">
                        <section class="splide" id="splide" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php
                                    for ($i = 1; $i <= 10; $i++) :
                                    ?>
                                        <li class="splide__slide">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="row g-1 textin">
                                                        <div class="col-2">
                                                            <img src="<?= base_url("assets/img/pin-selada-bokor.svg") ?>" alt="" class="w-100" />
                                                        </div>
                                                        <div class="col-10">
                                                            <small>
                                                                <span style="font-size: 16px">Kangkung</span>

                                                                <br />
                                                                <span class="fw-bold" style="font-size: 20px">21443</span>
                                                            </small>
                                                            <div class="row g-1 align-items-center">
                                                                <div class="col-md-12">
                                                                    Komoditas Kecamatan
                                                                </div>
                                                                <div class="col-6 border-end border-white fw-medium" style="font-size: 14px">
                                                                    Mangkubumi
                                                                </div>
                                                                <div class="col-6 ps-2 fw-bold text-center" style="font-size: 16px">
                                                                    13120
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    endfor;
                                    ?>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- data 3 -->
            <div class="col-md-2">
                <div class="card card-border shadow">
                    <div class="tops bgtops-setaman py-1 px-4 fw-bold">Data Panen Komoditas</div>
                    <div class="card-body">
                        <section class="splide" id="splidee" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php
                                    for ($i = 1; $i <= 10; $i++) :
                                    ?>
                                        <li class="splide__slide">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="row g-1 textin">
                                                        <div class="col-md-12">
                                                            <center>
                                                                <img src="<?= base_url("assets/img/pin-selada-bokor.svg") ?>" alt="" class="w-25" />
                                                            </center>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p class="text-center">
                                                                <span style="font-size: 20px">Kangkung</span>

                                                                <br />
                                                                <span class="fw-bold fs-6">21443</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    endfor;
                                    ?>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>