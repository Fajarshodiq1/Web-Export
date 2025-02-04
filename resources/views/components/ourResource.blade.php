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
                 "M0,5.5 C0,2.462434 2.238576,0 5,0 C7.761424,0 10,2.462434 10,5.5 C10,5.668539 9.993108,5.835307 9.979617,6 C10,9.005737 5,16 5,16 C5,16 0,9.022339 0,6 C0.006892,5.835307 0,5.668539 0,5.5 Z";

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
                             "svgPath": targetSVG,
                             "scale": 1.5,
                             "accessibleLabel": "Aceh",
                             "tabIndex": 2,
                             "zoomLevel": 5,
                             // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                             "title": "Aceh",
                             "latitude": 4.693845487278484,
                             "longitude": 96.70931558270588
                         },
                         {
                             "svgPath": targetSVG,
                             "scale": 1.5,
                             "accessibleLabel": "Wonogiri",
                             "tabIndex": 2,
                             "zoomLevel": 5,
                             // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                             "title": "Wonogiri",
                             "latitude": -7.8962,
                             "longitude": 110.9235
                         },
                         {
                             "svgPath": targetSVG,
                             "scale": 1.5,
                             "accessibleLabel": "Malang",
                             "tabIndex": 2,
                             "zoomLevel": 5,
                             // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                             "title": "Malang",
                             "latitude": -7.9666,
                             "longitude": 112.6326
                         },
                         {
                             "svgPath": targetSVG,
                             "scale": 1.5,
                             "accessibleLabel": "Pacitan",
                             "tabIndex": 2,
                             "zoomLevel": 5,
                             // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                             "title": "Pacitan",
                             "latitude": -8.1812,
                             "longitude": 111.0750
                         },
                         {
                             "svgPath": targetSVG,
                             "scale": 1.5,
                             "accessibleLabel": "Surabaya",
                             "tabIndex": 2,
                             "zoomLevel": 5,
                             // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                             "title": "Surabaya",
                             "latitude": -7.2575,
                             "longitude": 112.7521
                         },
                         {
                             "svgPath": targetSVG,
                             "scale": 1.5,
                             "accessibleLabel": "Gresik",
                             "tabIndex": 2,
                             "zoomLevel": 5,
                             // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                             "title": "Gresik",
                             "latitude": -7.1566,
                             "longitude": 112.6555
                         },
                         {
                             "svgPath": targetSVG,
                             "scale": 1.5,
                             "accessibleLabel": "Kediri",
                             "tabIndex": 2,
                             "zoomLevel": 5,
                             // "description": "This is a description of this marker<br>",
                             "title": "Kediri",
                             "latitude": -7.8485,
                             "longitude": 112.0170
                         }
                     ]
                 },
                 "areasSettings": {
                     "unlistedAreasColor": "#737373",
                     "alpha": 1,
                     "color": "#16a34a", // Green color for the areas
                     "outlineColor": "#FFFFFF",
                     "rollOverColor": "#FFCC00",
                     "selectedColor": "#FFCC00"
                 },
                 "imagesSettings": {
                     "rollOverColor": "#2D372D",
                     "rollOverScale": 1.5,
                     "selectedScale": 2,
                     "selectedColor": "#2D372D",
                     "color": "#006DD1",
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
