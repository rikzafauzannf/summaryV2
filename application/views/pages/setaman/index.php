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
                                                    <p class="fw-bold" style="font-size: 16px;"><?= $banyakSemai ?></p>
                                                </div>
                                                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="<?= $persentasePenyemaian ?>" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated fw-bold" style="width: <?= $persentasePenyemaian ?>;background-color: #57AFA9;color: #1b1c30;"><?= $persentasePenyemaian ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <p class="fw-semibold">Penanaman</p>
                                                    <p class="fw-bold" style="font-size: 16px;"><?= $banyakTanam ?></p>
                                                </div>
                                                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="<?= $persentasePenanaman ?>" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated fw-bold" style="width: <?= $persentasePenanaman ?>;background-color: #FFC56E;color: #1b1c30;"><?= $persentasePenanaman ?></div>
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
                                                            <?php
                                                            foreach ($tertinggiSemai as $variabel) :
                                                            ?>
                                                                <p class=" fw-medium" style="font-size: 14px">
                                                                    <?= $variabel['Kecamatan'] ?>
                                                                </p>
                                                                <p class="fw-bold ps-3" style="font-size: 16px">
                                                                    <?= number_format($variabel['jumlah_semai'], 0, '.', ',') ?>
                                                                </p>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row g-1">
                                                    <div class="col-md-12">Data Tanam:</div>
                                                    <div class="col-md-12">
                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <?php
                                                            foreach ($tertinggiTanam as $variabel) :
                                                            ?>
                                                                <p class=" fw-medium" style="font-size: 14px">
                                                                    <?= $variabel['kecamatan'] ?>
                                                                </p>
                                                                <p class="fw-bold ps-3" style="font-size: 16px">
                                                                    <?= number_format($variabel['jumlah_tanam'], 0, '.', ',') ?>
                                                                </p>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row g-1">
                                                    <div class="col-md-12">Data Panen:</div>
                                                    <div class="col-md-12">
                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <?php
                                                            foreach ($tertinggiPanen as $variabel) :
                                                            ?>
                                                                <p class=" fw-medium" style="font-size: 14px">
                                                                    <?= $variabel['kecamatan'] ?>
                                                                </p>
                                                                <p class="fw-bold ps-3" style="font-size: 16px">
                                                                    <?= number_format($variabel['jumlah_panen'], 0, '.', ',') ?>
                                                                </p>
                                                            <?php
                                                            endforeach;
                                                            ?>
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

                                        <div class="dataSetaman">
                                            <div id="chart1"></div>
                                            <div id="chart2"></div>
                                        </div>

                                        <script>
                                            $(document).ready(function() {
                                                $('.dataSetaman').slick({
                                                    infinite: true,
                                                    slidesToShow: 1,
                                                    slidesToScroll: 1,
                                                    autoplay: true,
                                                    autoplaySpeed: 4000,
                                                    arrows: false,
                                                });
                                            });
                                        </script>

                                        <script>
                                            // Chart 1
                                            var options1 = {
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
                                                        data: [<?php
                                                                $subset1 = array_slice($barPerkecamatan, 0, 5);
                                                                foreach ($subset1 as $items) {
                                                                    echo ($items['total_jumlah_semai'] . ',');
                                                                }
                                                                ?>],
                                                    },
                                                    {
                                                        name: "Penanaman",
                                                        data: [<?php
                                                                $subset1 = array_slice($barPerkecamatan, 0, 5);
                                                                foreach ($subset1 as $items) {
                                                                    echo ($items['total_jumlah_tanam'] . ',');
                                                                }
                                                                ?>],
                                                    },
                                                    {
                                                        name: "Panen",
                                                        data: [<?php
                                                                $subset1 = array_slice($barPerkecamatan, 0, 5);
                                                                foreach ($subset1 as $items) {
                                                                    echo ($items['total_jumlah_panen'] . ',');
                                                                }
                                                                ?>],
                                                    }
                                                ],
                                                xaxis: {
                                                    categories: [
                                                        <?php
                                                        foreach ($subset1 as $items) {
                                                            echo ('"' . $items['kecamatan'] . '",');
                                                        }
                                                        ?>
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

                                            var chart1 = new ApexCharts(
                                                document.querySelector("#chart1"),
                                                options1
                                            );
                                            chart1.render();

                                            // Chart 2
                                            var options2 = {
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
                                                        data: [<?php
                                                                $subset2 = array_slice($barPerkecamatan, 5, 5);
                                                                foreach ($subset2 as $items) {
                                                                    echo ($items['total_jumlah_semai'] . ',');
                                                                }
                                                                ?>],
                                                    },
                                                    {
                                                        name: "Penanaman",
                                                        data: [<?php
                                                                $subset2 = array_slice($barPerkecamatan, 5, 5);
                                                                foreach ($subset2 as $items) {
                                                                    echo ($items['total_jumlah_tanam'] . ',');
                                                                }
                                                                ?>],
                                                    },
                                                    {
                                                        name: "Panen",
                                                        data: [<?php
                                                                $subset2 = array_slice($barPerkecamatan, 5, 5);
                                                                foreach ($subset2 as $items) {
                                                                    echo ($items['total_jumlah_panen'] . ',');
                                                                }
                                                                ?>],
                                                    }
                                                ],
                                                xaxis: {
                                                    categories: [
                                                        <?php
                                                        foreach ($subset2 as $items) {
                                                            echo ('"' . $items['kecamatan'] . '",');
                                                        }
                                                        ?>
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

                                            var chart2 = new ApexCharts(
                                                document.querySelector("#chart2"),
                                                options2
                                            );
                                            chart2.render();
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
                                    foreach ($komoditasTerbanyak as $items) :
                                    ?>
                                        <li class="splide__slide">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="row g-1 textin">
                                                        <div class="col-2">
                                                            <img src="https://setamancinta.tasikmalayakota.go.id//assets/icon_new/<?= $items['Icon'] ?>" alt="" class="w-100" />
                                                        </div>
                                                        <div class="col-10">
                                                            <small>
                                                                <span style="font-size: 16px"><?= $items['nama_komoditas'] ?></span>

                                                                <br />
                                                                <!-- <span class="fw-bold" style="font-size: 20px">21443</span> -->
                                                            </small>
                                                            <div class="row g-1 align-items-center">
                                                                <div class="col-md-12">
                                                                    Komoditas Kecamatan
                                                                </div>
                                                                <div class="col-6 border-end border-white fw-medium" style="font-size: 14px">
                                                                    <?= $items['kecamatan'] ?>
                                                                </div>
                                                                <div class="col-6 ps-2 fw-bold text-center" style="font-size: 16px">
                                                                    <?= $items['total_jumlah_tanam'] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    endforeach;
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
                                    foreach ($komoditas as $items) :
                                    ?>
                                        <li class="splide__slide">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="row g-1 textin">
                                                        <div class="col-md-12">
                                                            <center>
                                                                <img src="https://setamancinta.tasikmalayakota.go.id//assets/icon_new/<?= $items['icon'] ?>" alt="" class="w-25" />
                                                            </center>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p class="text-center">
                                                                <span style="font-size: 18px"><?= $items['nama_komoditas'] ?></span>

                                                                <br />
                                                                <span class="fw-bold fs-6"><?= $items['total_tanam'] ?></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    endforeach;
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