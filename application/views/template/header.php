<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= site_url('assets/style.css'); ?>">
</head>

<body>
    <!-- Grid helper -->
    <div class="opacity-80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1" style="background-color: red">1</div>
                <div class="col-1" style="background-color: red">2</div>
                <div class="col-1" style="background-color: red">3</div>
                <div class="col-1" style="background-color: red">4</div>
                <div class="col-1" style="background-color: red">5</div>
                <div class="col-1" style="background-color: red">6</div>
                <div class="col-1" style="background-color: red">7</div>
                <div class="col-1" style="background-color: red">8</div>
                <div class="col-1" style="background-color: red">9</div>
                <div class="col-1" style="background-color: red">10</div>
                <div class="col-1" style="background-color: red">11</div>
                <div class="col-1" style="background-color: red">12</div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-6" style="background-color: blue">6</div>
                <div class="col-6" style="background-color: blue">6</div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-8" style="background-color: lightblue">sisa</div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2" style="background-color: darkgreen"></div>
                <div class="col" style="background-color: lightgreen">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-1">1</div>
                            <div class="col-1">2</div>
                            <div class="col-1">3</div>
                            <div class="col-1">4</div>
                            <div class="col-1">5</div>
                            <div class="col-1">6</div>
                            <div class="col-1">7</div>
                            <div class="col-1">8</div>
                            <div class="col-1">9</div>
                            <div class="col-1">10</div>
                            <div class="col-1">11</div>
                            <div class="col-1">12</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2" style="background-color: darkgreen"></div>
            </div>
        </div>
    </div>
    <!-- grid helper end -->

    <div class="container-fluid text-center bg-danger judul m-0">
        <div class="row justify-content-center">
            <div class="col-md-8">
                Anu
            </div>
        </div>
    </div>
    <div class="container bg-primary">
        <div class="row">
            <div class="col-md">
                <h1><?= site_url('assets/style.css'); ?></h1>
                <h1>Hello, world!</h1>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>