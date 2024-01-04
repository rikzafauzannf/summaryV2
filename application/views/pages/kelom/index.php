 <main>
   <div class="container-fluid">
     <div class="row g-2">
       <!-- 1 -->
       <div class="col-md-4">
         <div class="card card-border">
           <div class="tops bgtops-kelom py-1 px-4 fw-bold">
             Total Kemiskinan Per Kategori
           </div>
           <div class="card-body">
             <!-- CHART CONTAINER -->
             <div class="row g-2 mb-3">
               <div class="col-md-12">
                 <div class="card card-inner-goso shadow">
                   <div class="p-1 textin text-center align-items-center d-flex justify-content-center w-100 h-100">
                     <p style="font-size: 14px">
                       Akumulasi Kemiskinan Kota Tasikmalaya <br />
                       <span class="fw-bold" style="font-size: 20px">
                         40,55</span>KK
                     </p>
                   </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="card card-inner-goso shadow">
                   <div class="p-1 textin text-center align-items-center d-flex justify-content-center w-100 h-100">
                     <p style="font-size: 14px">
                       Sangat Miskin <br />
                       <span class="fw-bold" style="font-size: 20px">
                         40,55</span>KK
                     </p>
                   </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="card card-inner-goso shadow">
                   <div class="p-1 textin text-center align-items-center d-flex justify-content-center w-100 h-100">
                     <p style="font-size: 14px">
                       Miskin <br />
                       <span class="fw-bold" style="font-size: 20px">
                         40,55</span>KK
                     </p>
                   </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="card card-inner-goso shadow">
                   <div class="p-1 textin text-center align-items-center d-flex justify-content-center w-100 h-100">
                     <p style="font-size: 14px">
                       Rentan Miskin <br />
                       <span class="fw-bold" style="font-size: 20px">
                         40,55</span>KK
                     </p>
                   </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="card card-inner-goso shadow">
                   <div class="p-1 textin text-center align-items-center d-flex justify-content-center w-100 h-100">
                     <p style="font-size: 14px">
                       Tidak Miskin <br />
                       <span class="fw-bold" style="font-size: 20px">
                         40,55</span>KK
                     </p>
                   </div>
                 </div>
               </div>
             </div>

             <div>
               <div id="chart"></div>
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
                     return val;
                   },
                 },
                 colors: ["#F94144", "#F8961E", "#F9C74F", "#90BE6D"],
                 series: [1000, 150, 342, 110],
                 labels: [
                   "Sangat Miskin",
                   "Miskin",
                   "Rentan Miskin",
                   "Tidak Miskin",
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
                 document.querySelector("#chart"),
                 options
               );
               chart.render();
             </script>

           </div>
         </div>
       </div>
       <!-- 2 -->

       <!-- 3 -->
       <div class="col-md-8">
         <div class="card card-border">
           <div class="tops bgtops-kelom py-1 px-4 fw-bold">
             Akumulasi data Kemiskinan Per Kecamatan
           </div>
           <div class="card-body">
             <!-- CHART CONTAINER -->

             <div class="your-class">
               <div>
                 <div id="charts"></div>
               </div>
               <div>
                 <div id="chartsr"></div>
               </div>
             </div>

             <script>
               $(document).ready(function() {
                 $('.your-class').slick({
                   infinite: true,
                   slidesToShow: 1,
                   slidesToScroll: 1,
                   autoplay: true,
                   autoplaySpeed: 2000,
                   arrows: false,

                 });
               });
             </script>


             <script>
               var options = {
                 chart: {
                   foreColor: "#ffffff",
                   stacked: true,
                   stackType: "reguler",
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
                 colors: ["#F94144", "#F8961E", "#F9C74F", "#90BE6D"],
                 series: [{
                     name: "Sangat Miskin",
                     data: [10, 33, 55, 65, 42],
                   },
                   {
                     name: "Miskin",
                     data: [23, 24, 54, 66, 25],
                   },
                   {
                     name: "Rentan Miskin",
                     data: [22, 30, 45, 36, 23],
                   },
                   {
                     name: "Tidak Miskin",
                     data: [10, 33, 55, 65, 22],
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
                   colors: ["#F94144", "#F8961E", "#F9C74F", "#90BE6D"],
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
               var charts = new ApexCharts(
                 document.querySelector("#chartsr"),
                 options
               );
               charts.render();
             </script>
           </div>
         </div>
       </div>
     </div>
   </div>
 </main>