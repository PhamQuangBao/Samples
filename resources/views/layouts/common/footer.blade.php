<!-- <script src="/lib/openlayers/v6.14.1-dist/ol.js"></script> -->
<script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
<!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
    //All Global Variable
    var draw;
    var flagIsDrawingOn = false;

    window.app = {};
    var app = window.app;

    app.DrawingApp = function(opt_options) {

    var options = opt_options || {};

    var button = document.createElement('button');
    button.id = 'drawBtn';
    button.innerHTML = '<i class="fas fa-pencil-ruler"></i>';

    var this_ = this;
    var startStopApp = function() {
        if(flagIsDrawingOn == false){
            $('#selectDrawModal').modal('show');
            
        }else{
            map.removeInteraction(draw);
            flagIsDrawingOn = false;
            document.getElementById('drawBtn').innerHTML = '<i class="fas fa-pencil-ruler"></i>'
            $('#enterInformationModal').modal('show');
        }
    };

    button.addEventListener('click', startStopApp, false);
    button.addEventListener('touchstart', startStopApp, false);

    var element = document.createElement('div');
    element.className = 'draw-app ol-unselectable ol-control';
    element.appendChild(button);

    ol.control.Control.call(this, {
        element: element,
        target: options.target
    });

    };
    ol.inherits(app.DrawingApp, ol.control.Control);

    //View
    var myView = new ol.View({
        center: [12058967.723979553, 1795341.2859919432],
        zoom: 17,
    })

    //OSM Layer
    var baseLayer = new ol.layer.Tile({
        source: new ol.source.OSM({
            attributions: 'Surveyor Application'
        }),
    })

    //Draw vector layer
    //1. Define source
    var drawSource = new ol.source.Vector()
    //2.Define layer
    var drawLayer = new ol.layer.Vector({
        source: drawSource
    })

    //Layer Array
    var layerArray = [baseLayer, drawLayer]

    //Map
    var map = new ol.Map({
        controls: ol.control.defaults({
            attributionOptions: {
                collapsible: false
            }
        }).extend([
            new app.DrawingApp(),
        ]),
        target: 'myMap',
        view: myView,
        layers: layerArray
    })

    function startDraw(geomType){
        draw = new ol.interaction.Draw({
            type: geomType,
            source: drawSource,
        })
        $('#selectDrawModal').modal('hide')
        document.getElementById('drawBtn').innerHTML = '<i class="far fa-stop-circle"></i>'
        map.addInteraction(draw)
        
        //Change value after draw
        flagIsDrawingOn = true
    }

    map.on('singleclick', function(evt) {
        var pixel = map.getPixelFromCoordinate(evt.coordinate);
        map.forEachFeatureAtPixel(pixel, function(feature) {
            console.log(feature.getId()); // id of selected feature
        });
    });

</script>


@yield('footer')