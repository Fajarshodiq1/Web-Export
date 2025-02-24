 <div class="w-full">
     <div x-show="openTab === 1" class="mt-10">
         <!-- Content -->
         <header class="flex flex-col text-center w-full mb-10 gap-y-5">
             <h2 class="text-2xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center uppercase">
                 <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">
                     OUR RESOURCE
                 </span>
             </h2>
         </header>
         <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
         <script src="https://www.amcharts.com/lib/3/maps/js/indonesiaLow.js"></script>
         <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
         <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
             media="all" />
         <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
         <div id="chartdiv"></div>
         <div id="export"></div>
         <style>
             #chartdiv {
                 width: 100%;
                 height: 100vh;
             }

             .amcharts-description-div {
                 background: #e6e6e6;
                 padding: 50px 24px 24px;
                 position: relative;
             }

             .amcharts-description-div:after {
                 content: "";
                 pointer-events: none;
                 width: 24px;
                 height: 24px;
                 position: absolute;
                 top: 15px;
                 right: 15px;
                 display: block;
                 background-color: #e6e6e6;
                 background-image: url(data:image/svg+xml,%3Csvg%20id%3D%22Layer_1%22%20style%3D%22enable-background%3Anew%200%200%2064%2064%3B%22%20version%3D%221.1%22%20viewBox%3D%220%200%2064%2064%22%20xml%3Aspace%3D%22preserve%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%3E%3Cg%20id%3D%22Icon-Close%22%20transform%3D%22translate%28381.000000%2C%20231.000000%29%22%3E%3Cpolyline%20class%3D%22st0%22%20id%3D%22Fill-16%22%20fill%3D%22%23737373%22%20points%3D%22-370.7%2C-174.7%20-373%2C-177%20-327%2C-223%20-324.7%2C-220.7%20-370.7%2C-174.7%22/%3E%3Cpolyline%20fill%3D%22%23737373%22%20class%3D%22st0%22%20id%3D%22Fill-17%22%20points%3D%22-327%2C-174.7%20-373%2C-220.7%20-370.7%2C-223%20-324.7%2C-177%20-327%2C-174.7%22/%3E%3C/g%3E%3C/svg%3E);
                 background-size: 28px;
                 background-repeat: no-repeat;
                 background-position: center;
             }

             .description-image {
                 width: 348px;
                 height: 220px;
                 top: -220px;
                 left: 0px;
                 position: absolute;
             }

             .amcharts-description-title-div {
                 padding-bottom: 10px;
                 font-size: 34px;
                 font-weight: 200;
                 line-height: 40px;
                 letter-spacing: 0.025em;
                 padding: 2px 0 5px;
             }

             .amcharts-description-text-div {
                 font-size: 20px;
                 line-height: 24px;
                 font-weight: 400;
                 padding: 8px 0 4px;
             }


             .amcharts-description-text-div a {
                 display: inline-block;
                 padding: 10px 22px 10px 24px;
                 font-size: 13px;
                 color: white;
                 text-decoration: none;
                 text-transform: uppercase;
                 letter-spacing: 0.075em;
                 background: #0067b8;
                 margin: 11px 0 0 0;
             }

             .amcharts-description-close-img {
                 margin: -35px -10px 0 0;
             }

             .amcharts-export-menu,
             .amcharts-chart-div>a[title="Interactive JavaScript maps"] {
                 display: none !important;
             }

             .amcharts-map-image {
                 /*   transform: translateY(-15px); */
                 /*   transform: scale(1.5) */

             }

             .amcharts-description-close-img {
                 position: relative;
             }

             .amcharts-description-close-img:after {
                 content: "";
                 width: 40px;
                 height: 40px;
                 position: absolute;
                 left: 0;
                 top: 0;
                 background: blue;
                 z-index: 9;
                 display: block;

             }
         </style>
         <!-- Chart code -->
         <script>
             /**
              * Create the map
              */
             var map = AmCharts.makeChart("chartdiv", {
                 "type": "map",
                 "theme": "light",
                 "projection": "mercator",
                 "dataProvider": {
                     "map": "indonesiaLow",
                     "getAreasFromMap": true,
                     "images": [{
                             "title": "Aceh",
                             "latitude": 4.595293228577389,
                             "longitude": 96.95101482161841
                         },
                         {
                             "title": "Sumatera Utara",
                             "latitude": 2.531957728835121,
                             "longitude": 99.13162370244832
                         },
                         {
                             "title": "Riau",
                             "latitude": 0.4580512269549423,
                             "longitude": 101.74871844603223
                         },
                         {
                             "title": "Sumatera Barat",
                             "latitude": -0.48920820878879007,
                             "longitude": 100.60191176234093
                         },
                         {
                             "title": "Jambi",
                             "latitude": -1.44487151602796,
                             "longitude": 102.7662183644027
                         },
                         {
                             "title": "Bengkulu",
                             "latitude": -3.346239414247308,
                             "longitude": 102.34232052571556
                         },
                         {
                             "title": "Sumatera Selatan",
                             "latitude": -2.9893120501921113,
                             "longitude": 104.17112545773173
                         },
                         {
                             "title": "Lampung",
                             "latitude": -4.75331257433374,
                             "longitude": 105.0446081632277
                         },
                         {
                             "title": "Bangka Belitung",
                             "latitude": -2.123109782981355,
                             "longitude": 106.04310204906976
                         },
                         {
                             "title": "Banten",
                             "latitude": -6.2709545954461685,
                             "longitude": 106.12373562565186
                         },
                         {
                             "title": "Jawa Barat",
                             "latitude": -6.744668128665165,
                             "longitude": 107.60483700299696
                         },
                         {
                             "title": "Jawa Timur",
                             "latitude": -7.354393761205809,
                             "longitude": 112.20869265623406
                         },
                         {
                             "title": "Jawa Tengah",
                             "latitude": -7.184889977151539,
                             "longitude": 109.84208749587769
                         },
                         {
                             "title": "NTB",
                             "latitude": -8.543852782912369,
                             "longitude": 117.2311157368179
                         },
                         {
                             "title": "NTT",
                             "latitude": -8.407846896212874,
                             "longitude": 120.67011668218527
                         },
                         {
                             "title": "Sulawesi Utara",
                             "latitude": 0.9126159152759212,
                             "longitude": 124.16519612611754
                         },
                         {
                             "title": "Sulawesi Tengah",
                             "latitude": -1.4002369421245764,
                             "longitude": 120.2720424855536
                         },
                         {
                             "title": "Sulawesi Selatan",
                             "latitude": -3.8580,
                             "longitude": 119.9722
                         },
                         {
                             "title": "Sulawesi Tenggara",
                             "latitude": -3.749140712586895,
                             "longitude": 121.87694467953403
                         },
                         {
                             "title": "Maluku Utara",
                             "latitude": 0.7208624747899763,
                             "longitude": 127.73374571848936
                         },
                         {
                             "title": "Papua Barat",
                             "latitude": -1.1137651545211897,
                             "longitude": 132.76548397468304
                         }
                     ].map(location => ({
                         "imageURL": "{{ asset('assets/map.png') }}", // Ganti dengan gambar yang valid
                         "width": 34, // Sesuaikan ukuran gambar
                         "height": 34,
                         "accessibleLabel": location.title,
                         "tabIndex": 2,
                         "zoomLevel": 5,
                         "title": location.title,
                         "latitude": location.latitude,
                         "longitude": location.longitude
                     }))
                 },
                 "areasSettings": {
                     "unlistedAreasColor": "#737373",
                     "alpha": 1,
                     "color": "#16a34a",
                     "outlineColor": "#FFFFFF",
                     "rollOverColor": "#FFCC00",
                     "selectedColor": "#FFCC00"
                 },
                 "imagesSettings": {
                     "rollOverColor": "#2D372D",
                     "rollOverScale": 1.5,
                     "selectedScale": 2,
                     "selectedColor": "#2D372D",
                     "descriptionWindowLeft": 80,
                     "descriptionWindowTop": 278,
                     "descriptionWindowWidth": 300,
                     "easingFunction": "AmCharts.easeOutElastic"
                 },
                 "balloon": {
                     "shadowAlpha": 0,
                     "adjustBorderColor": true,
                     "animationDuration": 0,
                     "borderThickness": 0,
                     "color": "#ffffff",
                     "fillColor": "#2D372D",
                     "horizontalPadding": 25,
                     "verticalPadding": 17,
                     "offsetY": 27,
                     "fontSize": 18
                 },
                 "export": {
                     "enabled": true
                 }
             });
         </script>
     </div>
 </div>
