<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memes</title>
    <!-- Favicon -->
    <!-- Main font -->
    <link href="./assets/css/lato-font.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/vendors/bootstrap/bootstrap.min.css">
    <!-- Color Picker -->
    <link rel="stylesheet" href="./assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap select-->
    <link rel="stylesheet" href="./assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="./assets/css/fonts.css">
    <!-- Style -->
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/style.css'>
</head>

<body>
    <div id="header-wrapper">
    <header id="header" class="container">

        <!-- Logo -->
        <div id="logo">
            <img src="./images/anthos.png" alt="anthos" style="height: 100px; width: 100px; margin-bottom: -.28em;">
            <a href="index.php"><img src="./images/memesgen.png" alt="logo"></a>
            
        </div>

        <!-- Nav -->
            <nav id="nav">
                <ul>
                    
                    <li><a href="index.php">Top Memes</a></li>
                    <li class="current"> <a href="Memes.php">Create A Meme</a></li>
                    <li>
                    </li>
                </ul>
            </nav>

    </header>
</div>
  
    <div class="choice-section mt-5">
        <div class="choice text-center mr-auto ml-auto mb-5">
            <div class="d-inline-block mb-2">
                <p class="display-5 mb-0 ">Choose a Meme or Upload one</p>
            </div>
            <div class="form-group input-image mb-0">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="meme-input" >
                        <label  for="meme-input"  id="browse">Browse</label>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <!-- meme div -->
            <div class="meme-wrapper">
            <div class="grid memes-container">
                <div class="grid-sizer"></div>
            </div>
        </div>

        </div>
    </div>

<!-- Code for Editing the Memes -->
    <div class="container edit-section d-none">
        <div class="back-btn mb-2">
            <button class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</button>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="meme-preview">
                    <div class="fabric-canvas-wrapper"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="edit-methods">
                    <div class="form-group d-lg-none d-md-none">
                        <label for="scale">Scale:</label>
                        <input type="range" class="form-control-range" id="scale" min="0.1" step="0.01">
                    </div>
                    <div class="form-group">
                        <label for="text">Text: </label>
                        <div class="input-group cp" id="cp-text">
                            <textarea class="form-control text-method" id="text" placeholder="Type your text here"
                                rows="2"></textarea>
                            <span class="input-group-append">
                                <span class="input-group-text colorpicker-input-addon" id="text-color"
                                    value="#ffffff"><i></i></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-row mb-0">
                        <div class="form-group col-7 col-sm-6 col-md-7 col-lg-5">
                            <label for="font-size">Font Family: </label>
                            <select class="form-control text-method" name="font-family" id="font-family">
                                <optgroup label="English">
                                    <option value="Arial">Arial</option>
                                    <option value="Arial Black">Arial Black</option>
                                    <option value="Comic Sans Ms">Comic Sans Ms</option>
                                    <option value="Impact">Impact</option>
                                    <option value="Times New Roman">Times New Roman</option>
                                    <option value="Trebuchet MS">Trebuchet MS</option>
                                </optgroup>
                                <optgroup label="Arabic">
                                    <option value="Bahij Myriad Arabic Bold">Bahij Myriad Arabic</option>
                                    <option value="Hacen Liner XXL">Hacen Liner XXL</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group col-5 col-sm-6 col-md-5 col-lg-3">
                            <label for="font-size">Font Size: </label>
                            <input class="form-control text-method" type="number" value="150" id="font-size">
                        </div>
                        <div class="form-group col-6 col-lg-4">
                            <label for="font-size">Style: </label>
                            <div>
                                <div class="input-group" id="font-style">
                                    <button class="btn btn-warning edit-btn mr-1 text-method" id="bold" value="bold"
                                        data><i class="fas fa-bold"></i></button>
                                    <button class="btn btn-warning edit-btn mr-1 text-method" id="italic" value="italic"
                                        data><i class="fas fa-italic"></i></button>
                                    <button class="btn btn-warning edit-btn text-method" id="underline" value="true"
                                        data><i class="fas fa-underline"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-6 col-lg-auto">
                            <label for="font-size">Text alignment: </label>
                            <div>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-warning active align">
                                        <input type="radio" value="left" name="align" id="left" checked> <i
                                            class="fas fa-align-left"></i>
                                    </label>
                                    <label class="btn btn-warning align">
                                        <input type="radio" value="center" name="align" id="center"> <i
                                            class="fas fa-align-center"></i>
                                    </label>
                                    <label class="btn btn-warning align">
                                        <input type="radio" value="right" name="align" id="right"> <i
                                            class="fas fa-align-right"></i>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group col-4 col-sm-4 col-md-4 col-lg-3">
                            <label for="font-size">Stroke: </label>
                            <div class="input-group cp cp-black" id="cp-stroke">
                                <input class="form-control text-method" type="number" value="1" id="stroke-width"
                                    min="0" max="20" placeholder="0">
                                <span class="input-group-append">
                                    <span class="input-group-text colorpicker-input-addon" id="stroke-color"
                                        value="#000000"><i></i></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-4 col-sm-4 col-md-4 col-lg-3">
                            <label for="font-size">Shadow: </label>
                            <div class="input-group cp cp-black" id="cp-shadow">
                                <input class="form-control text-method" type="number" value="5" id="shadow-depth"
                                    min="0" max="20" placeholder="0">
                                <span class="input-group-append">
                                    <span class="input-group-text colorpicker-input-addon" id="shadow-color"
                                        value="#000000"><i></i></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-auto col-sm-auto col-md-auto col-lg-auto">
                            <label for="font-size">BG Color: </label>
                            <div class="input-group cp cp-black" id="cp-background">
                                <button class="btn btn-warning edit-btn text-method" id="bg-option" value="" data><i
                                        class="fas fa-fill-drip"></i></button>
                                <span class="input-group-append">
                                    <span class="input-group-text colorpicker-input-addon" id="bg-color"
                                        value="#000000"><i></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="opacity">Opacity:</label>
                        <input type="range" class="form-control-range" id="opacity" min="0" max="100" value="100">
                    </div>
                    <div class="form-group form-row add-btns pb-3">
                        <div class="col-auto">
                            <button class="btn btn-warning" id="add-text">Add text</button>
                        </div>
                        <div class="custom-file col">
                            <input type="file" class="custom-file-input d-none" id="add-image">
                            <label class="btn btn-warning mb-0" for="add-image">Add Image</label>
                        </div>
                    </div>
                </div>
                <div class="mb-4 mt-3">
                    <button class="btn btn-success" id="generate-meme">Generate Meme</button>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
    </div>

    <div class="col-12 alert-container alert alert-danger" style="display: none;"></div>

    <script id="meme-template" type="x-tmpl-mustache">
        <div class="grid-item">
            <img src="{{url}}" crossorigin alt="{{name}}" img-height="{{height}}" img-width="{{width}}"/>
        </div>
    </script>

    <!-- js files for editing the meme -->
    <script src="./assets/vendors/jquery/jquery-3.5.1.min.js"></script>

    <script src="./assets/vendors/popper/popper.min.js"></script>
    <script src="./assets/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/vendors/mustache/mustache.js"></script>
    <script src="./assets/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="./assets/vendors/fabric-js/fabric.js"></script>
    <script src="./assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="./assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="./assets/vendors/fontfaceobserver/fontfaceobserver.standalone.js"></script>
    <!-- end -->

    <script src="./assets/js/initialization.js"></script>
    <script src="./assets/js/helpers.js"></script>
    <script src="./assets/js/load-images.js"></script>
    <script src="./assets/js/choice-image.js"></script>
    <script src="./assets/js/handlers.js"></script>
    <script src="./assets/js/meme-main.js"></script>
</body>

</html>