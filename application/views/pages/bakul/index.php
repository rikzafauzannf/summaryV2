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
                            series: [
                              {
                                name: "Bantuan Tersalurkan",
                                data: [10, 33, 55, 65, 22, 54, 23, 22, 14, 57],
                              },
                              {
                                name: "Barang Tersalurkan",
                                data: [23, 24, 54, 66, 22, 54, 54, 23, 42, 75],
                              },
                            ],
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
                                  formatter: function () {
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
                Jumlah Bantuan Per Kecamatan
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
                    series: [
                      {
                        name: "Bantuan Tersalurkan",
                        data: [10, 33, 55, 65, 22, 54, 23, 22, 14, 57],
                      },
                    ],
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
                          formatter: function () {
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
          <div class="col-md-2">
            <div class="card card-border">
              <div class="tops bgtops-bakul py-1 px-4 fw-bold">Pertisipan RM Makan</div>
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
                <section
                  class="splide"
                  id="splide"
                  aria-labelledby="carousel-heading"
                >
                  <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        for($i=1;$i<=10;$i++):
                        ?>
                      <li class="splide__slide">
                        <div class="card shadow">
                          <div class="card-body">
                            <p class="text-center">
                              <span style="font-size: 20px">Kangkung</span>

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
          </div>
          <!-- data slide -->
          <div class="col-md-2">
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
                <section
                  class="splide"
                  id="splidee"
                  aria-labelledby="carousel-heading"
                >
                  <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        for($i=1;$i<=10;$i++):
                        ?>
                      <li class="splide__slide">
                        <div class="card shadow">
                          <div class="card-body">
                            <p class="text-center">
                              <span style="font-size: 20px">Kangkung</span>

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
          </div>
        </div>
      </div>
    </main>