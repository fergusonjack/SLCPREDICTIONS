<!DOCTYPE html>
<html lang="eng">

<head>
    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/ripples.min.css">

    <link rel="stylesheet" type="text/css" href="myStyle.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <script src="js/chartist.min.js"></script>
    <link href="css/chartist.min.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">

    <script src="mainJavascript.js"></script>

    <title><?php echo "student loan forecaster"?></title>
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="#">Student Finance Forecast</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Download .xlsx</a></li>
                    <li><a href="#">Table of data</a></li>
                </ul>
            </div>

            <div class="jumbotron">
                <h1>Student Finance Forecaster</h1>
                <p>This website will help to predict how your student loan will increase or decrease over time considering many different parameters. These are shown at the side and can be changed or the pre-sets can be used as selected with the drop-down menu. The values that are used are kept up to date like the rpi etc and can be viewed in the table of data tab.</p>
                <p><a class="btn btn-primary btn-lg" href="https://www.slc.co.uk/" role="button">SLC website</website></a></p>
            </div>


            <div class="row" id="padder-bottom">
                <div class="col-md-4" >
                    <div class="col-md-11" id="sideBar">
                        <div class="dropdown " id="padder">
                                <label for="gradsal">Graduate Job</label>
                                <button class="btn btn-default dropdown-toggle" id="dropDown" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Dropdown
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <?php
                                    require_once "getCurrPay.php";
                                    foreach ($earnings as $name=>$pay){
                                        echo "<li><a href='#'>" . $name . "</a></li>";
                                    }
                                    ?>
                                </ul>
                            <label for="tickBox">  Use this </label>
                            <input type="checkbox" id="inlineCheckbox1" value="option1">

                        </div>

                        <div class="form-group form-inline" id="padder repadder">
                            <label for="gradsal">Graduate Salary</label>
                            <div class="input-group">
                                <span class="input-group-addon">£</span>
                                <input type="text" class="form-control"  aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>


                        <div class="form-group form-inline" id="padder repadder">
                            <label for="rpilabel">Current RPI</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value=<?php include_once "getRPI.php"; echo $RPI ?> aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>

                        <div class="form-group form-inline" id="padder repadder">
                            <label for="marginlabel">Margin set by SLC</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value=3 aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>

                        <div class="form-group form-inline" id="padder repadder">
                            <label for="payinc">Percentage pay increase per annum</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value=4 aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>

                        <div class="form-group form-inline" id="padder repadder">
                            <label for="totalLoanAtEnd">Repayment threshold</label>
                            <div class="input-group" style="padding: 5px;">
                                <span class="input-group-addon">£</span>
                                <input type="text" class="form-control" value=21000 aria-label="Amount (to the nearest dollar)">

                            </div>
                        </div>

                        <div class="form-group form-inline" id="padder repadder">
                            <label for="totalLoanAtEnd">Repayment threshold percentage increase</label>
                            <div class="input-group" style="padding: 5px;">
                                <input type="text" class="form-control" value=2 aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>

                        <div class="form-group form-inline" id="padder repadder">
                            <label for="totalLoanAtEnd">Repayment rate</label>
                            <div class="input-group" style="padding: 5px;">
                                <input type="text" class="form-control" value=9 aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>

                        <div class="form-group form-inline" id="padder repadder">
                            <label for="totalLoanAtEnd">Years of study</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value=4 aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>

                        <div class="form-group form-inline" id="padder repadder">
                            <label for="totalLoanAtEnd">fees per year</label>
                            <div class="input-group">
                                <span class="input-group-addon">£</span>
                                <input type="text" class="form-control" value=9000 aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>

                        <div class="form-group form-inline" id="padder repadder">
                            <label for="totalLoanAtEnd">Year in industry, cost of year</label>
                            <div class="input-group" style="padding: 5px;">
                                <span class="input-group-addon">£</span>
                                <input type="text" class="form-control" value=4 aria-label="Amount (to the nearest dollar)">

                            </div>
                            <input id="textBox1" type="checkbox" id="inlineCheckbox1" value="option1">
                        </div>

                        <div class="form-group form-inline" id="padder repadder">
                            <label for="totalLoanAtEnd">Total debt</label>
                            <div class="input-group">
                                <span class="input-group-addon">£</span>
                                <input type="text" class="form-control" value=000000 aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>

                    </div>
                </div>



                <div class="col-md-8" id="sideBar">
                    <div class="col-md-12">

                        <div class="ct-chart"></div>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>

<script src="mainJavascript.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>