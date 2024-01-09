<!-- hotel resto terlibat marque, jumlah makanan tersakur di ambil dari periodik mingguan [chart bar], jumlah makanan tersalur kecamatan & jenis penerima [pieChart] -->

<main>
  <div class="container-fluid">
    <div class="row mt-3 g-1">
      <div class="col-md-4">
        <div class="card card-border">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">Jumlah Data BakulTasik</div>
          <div class="card-body">
            <div class="row g-2">
              <div class="col-md-4">
                <div class="card-inner shadow mb-3">
                  <div class="p-2 text-center">
                    <p>
                      Pertisipan
                      <br />
                      <span class="fw-bold fs-5">18</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card-inner shadow mb-3">
                  <div class="p-2 text-center">
                    <p>
                      Jumlah Penyaluran Bantuan
                      <br />
                      <span class="fw-bold fs-5">18</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card shadow">
                  <div class="card-body">
                    <!-- CHART CONTAINER -->
                    <div>
                      <div id="chart"></div>
                    </div>

                    <script>
                      var options = {
                        chart: {
                          foreColor: "#ffffff",
                          type: "area",
                          height: 400,
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
                        colors: ["#57AFA9", "#F9C74F"],
                        series: [{
                          name: "BOX Perminggu",
                          data: [376, 297, 242, 259, 231, 179, 60],
                        }, ],
                        xaxis: {
                          categories: [
                            "Minggu 1",
                            "Minggu 2",
                            "Minggu 3",
                            "Minggu 4",
                            "Minggu 5",
                            "Minggu 6",
                            "Minggu 7",
                          ],
                        },
                        stroke: {
                          show: true,
                          width: 4,
                          colors: ["#57AFA9", "#F9C74F"],
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
      <div class="col-md-4">
        <div class="card card-border">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">
            Jumlah BOX Tersalurkan Per Kecamatan
          </div>
          <div class="card-body">
            <!-- CHART CONTAINER -->
            <div>
              <div id="charts"></div>
            </div>

            <script>
              var options = {
                chart: {
                  foreColor: "#ffffff",
                  type: "bar",
                  height: 500,
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
                colors: ["#56E965"],
                series: [{
                  name: "Bantuan Tersalurkan",
                  data: [376, 297, 242, 259, 231, 179, 60],
                }, ],
                xaxis: {
                  categories: [
                    "Minggu 1",
                    "Minggu 2",
                    "Minggu 3",
                    "Minggu 4",
                    "Minggu 5",
                    "Minggu 6",
                    "Minggu 7",
                  ],
                },
                stroke: {
                  show: false,
                  width: 4,
                  colors: ["#56E965"],
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
                document.querySelector("#charts"),
                options
              );
              chart.render();
            </script>
          </div>
        </div>
      </div>
      <!-- data slide -->
      <div class="col-md-4">
        <div class="card card-border mb-4">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">Jenis Penerima BOX</div>
          <div class="card-body">
            <div>
              <div id="charte"></div>
            </div>

            <script>
              var options = {
                chart: {
                  foreColor: "#ffffff",
                  type: "pie",
                  height: 600,
                  toolbar: {
                    show: true,
                  },
                },
                dataLabels: {
                  enabled: true,
                  formatter: function(val) {
                    return Math.round(val);
                  },
                },
                // colors: ["#F94144", "#F8961E", "#F9C74F", "#90BE6D"],
                series: [100, 150, 342, 110, 200],
                labels: [
                  "Lansia",
                  "Disabilitas",
                  "ODGJ",
                  "Warga Miskin",
                  "Korban Bencana",
                ],
                stroke: {
                  show: false,
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
                document.querySelector("#charte"),
                options
              );
              chart.render();
            </script>
            <!-- <section class="splide" id="splide" aria-labelledby="carousel-heading">
              <div class="splide__track">
                <ul class="splide__list">
                  <?php
                  for ($i = 1; $i <= 10; $i++) :
                  ?>
                    <li class="splide__slide">
                      <div class="card shadow">
                        <div class="card-body">
                          <p class="text-center">
                            <span style="font-size: 20px">RM Paddang</span>

                            <br />
                            <span class="fw-bold fs-6">21443</span>
                          </p>
                        </div>
                      </div>
                    </li>
                  <?php endfor; ?>
                </ul>
              </div>
            </section> -->
          </div>
        </div>

        <div class="card card-border mb-4">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">Partisipan Hotel </div>
          <div class="card-body">
            <div class="partisipan w-100">
              <?php
              for ($i = 1; $i <= 9; $i++) :
              ?>
                <div><img src="<?= base_url('/assets/partisipan/hotel-' . $i . '.png') ?>" alt="" class="w-75"></div>
              <?php
              endfor;
              ?>
            </div>

          </div>
        </div>
        <div class="card card-border">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">Partisipan Rumah Makan </div>
          <div class="card-body">
            <div class="partisipan w-100">
              <?php
              for ($i = 1; $i <= 6; $i++) :
              ?>
                <div><img src="<?= base_url('/assets/partisipan/rm-' . $i . '.png') ?>" alt="" class="w-75"></div>
              <?php
              endfor;
              ?>
            </div>

          </div>
        </div>
      </div>
      <script>
        $(document).ready(function() {
          $('.partisipan').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
          });
        });
      </script>
      <!-- data slide -->
      <!-- <div class="col-md-2">
        <div class="card card-border">
          <div class="tops bgtops-bakul py-1 px-4 fw-bold">Partisipan Hotel</div>
          <div class="card-body">
            <div class="card-inner shadow mb-3">
              <div class="p-2 text-center">
                <p>
                  Jumlah Makanan
                  <br />
                  <span class="fw-bold fs-5">18</span>
                </p>
              </div>
            </div>
            <section class="splide" id="splidee" aria-labelledby="carousel-heading">
              <div class="splide__track">
                <ul class="splide__list">
                  <?php
                  for ($i = 1; $i <= 10; $i++) :
                  ?>
                    <li class="splide__slide">
                      <div class="card shadow">
                        <div class="card-body">
                          <p class="text-center">
                            <span style="font-size: 20px">HORISON</span>

                            <br />
                            <span class="fw-bold fs-6">21443</span>
                          </p>
                        </div>
                      </div>
                    </li>
                  <?php endfor; ?>
                </ul>
              </div>
            </section>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</main>