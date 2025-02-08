 <div class="w-full">
     <div x-show="openTab === 1" class="mt-10">
         <!-- Content -->
         <div class="text-center my-10">
             <h1 class="font-extrabold text-4xl">
                 <span
                     class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">OUR
                     RESOURCES
                 </span>
             </h1>
         </div>
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
              * Define SVG path for target icon
              */
             var targetSVG =
                 "M256,0c-70.592,0-128,57.408-128,128c0,63.296,46.229,115.861,106.667,126.08v236.587 c0,11.776,9.536,21.333,21.333,21.333c11.797,0,21.333-9.557,21.333-21.333V254.08C337.771,243.861,384,191.296,384,128 C384,57.408,326.592,0,256,0z M234.667,128c-11.776,0-21.333-9.557-21.333-21.333s9.557-21.333,21.333-21.333 S256,94.891,256,106.667S246.443,128,234.667,128z";

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
                             "latitude": 4.6938,
                             "longitude": 96.7093
                         },
                         {
                             "title": "Sumatera Utara",
                             "latitude": 2.1587,
                             "longitude": 99.4942
                         },
                         {
                             "title": "Riau",
                             "latitude": 0.2823,
                             "longitude": 101.6718
                         },
                         {
                             "title": "Sumatera Barat",
                             "latitude": -0.7309,
                             "longitude": 100.7887
                         },
                         {
                             "title": "Jambi",
                             "latitude": -1.4999,
                             "longitude": 102.4512
                         },
                         {
                             "title": "Bengkulu",
                             "latitude": -3.5820,
                             "longitude": 102.3478
                         },
                         {
                             "title": "Sumatera Selatan",
                             "latitude": -3.3020,
                             "longitude": 103.9239
                         },
                         {
                             "title": "Lampung",
                             "latitude": -4.5617,
                             "longitude": 105.3577
                         },
                         {
                             "title": "Bangka Belitung",
                             "latitude": -2.3207,
                             "longitude": 106.0431
                         },
                         {
                             "title": "Banten",
                             "latitude": -6.4375,
                             "longitude": 106.1265
                         },
                         {
                             "title": "Jawa Barat",
                             "latitude": -6.8456,
                             "longitude": 107.6021
                         },
                         {
                             "title": "Jawa Timur",
                             "latitude": -7.6703,
                             "longitude": 112.2252
                         },
                         {
                             "title": "Jawa Tengah",
                             "latitude": -7.3320,
                             "longitude": 109.9080
                         },
                         {
                             "title": "NTB",
                             "latitude": -8.7285,
                             "longitude": 117.2915
                         },
                         {
                             "title": "NTT",
                             "latitude": -8.6293,
                             "longitude": 120.7971
                         },
                         {
                             "title": "Sulawesi Utara",
                             "latitude": 0.7188,
                             "longitude": 124.2068
                         },
                         {
                             "title": "Sulawesi Tengah",
                             "latitude": -1.7137,
                             "longitude": 120.8643
                         },
                         {
                             "title": "Sulawesi Selatan",
                             "latitude": -3.8580,
                             "longitude": 119.9722
                         },
                         {
                             "title": "Sulawesi Tenggara",
                             "latitude": -4.1382,
                             "longitude": 122.1791
                         },
                         {
                             "title": "Maluku Utara",
                             "latitude": 0.6879,
                             "longitude": 127.9315
                         },
                         {
                             "title": "Papua Barat",
                             "latitude": -1.3150,
                             "longitude": 132.8667
                         }
                     ].map(location => ({
                         "svgPath": targetSVG,
                         "scale": 0.07,
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
                     "color": "red",
                     "accessibleLabel": "[[title]]",
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
