<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.common.head')
</head>


<body class="hold-transition sidebar-mini layout-fixed">
    <div id="myMap" class="map"></div>

    <!-- Modal -->
    <!-- begin: enter Start Draw Modal -->
    <div class="modal fade" id="selectDrawModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select Draw type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <!-- begin: Carts -->
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Point</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">ATM, Tree, Pole, Bus Stop, etc.</h6>
                                        <p class="card-text"><i class="fas fa-map-marker-alt fa-2x"></i></p>
                                        <a onclick="startDraw('Point')" class="card-link">Add Point</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Line</h5>
                                        <h6 class="card-title mb-2 text-muted">Road, River, etc.</h6>
                                        <p class="card-text"><i class="fas fa-road fa-2x"></i></p>
                                        <a onclick="startDraw('LineString')" class="card-link">Add Line</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Polygon</h5>
                                        <h6 class="card-title mb-2 text-muted">Building, Garden, Ground, etc.</h6>
                                        <p class="card-text"><i class="fas fa-draw-polygon fa-2x"></i></p>
                                        <a onclick="startDraw('Polygon')" class="card-link">Add Polygon</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Cart -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end: enter Start Draw Modal -->
    <!-- begin: enter information Modal -->
    <div class="modal fade" id="enterInformationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select Draw type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <!-- begin: Input -->
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <!-- end: Input -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end: enter information Modal -->

</body>

@include('layouts.common.footer')

</html>