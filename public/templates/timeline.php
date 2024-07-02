

<?php
   include_once('include/header.php');
   ?>
<style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #8C9EFF;
    background-repeat: no-repeat;
}

.card {
    z-index: 0;
    background-color: #ECEFF1;
    padding-bottom: 20px;
    margin-top: 90px;
    margin-bottom: 90px;
    border-radius: 10px;
}

.top {
    padding-top: 40px;
    padding-left: 13% !important;
    padding-right: 13% !important;
}

/*Icon progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px;
} 

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
}

#progressbar .step0:before {
    font-family: FontAwesome;
    content: "\f10c";
    color: #fff;
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #C5CAE9;
    border-radius: 50%;
    margin: auto;
    padding: 0px;
}

/*ProgressBar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 12px;
    background: #C5CAE9;
    position: absolute;
    left: 0;
    top: 16px;
    z-index: -1;
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%;
}

#progressbar li:nth-child(2):after, #progressbar li:nth-child(3):after {
    left: -50%;
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    position: absolute;
    left: 50%;
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

/*Color number of the step and the connector before it*/
#progressbar li.active:before, #progressbar li.active:after {
    background: #651FFF;
}

#progressbar li.active:before {
    font-family: FontAwesome;
    content: "\f00c";
}


/*Icon progressbar_maintenance*/
#progressbar_mantenance {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px;
} 

#progressbar_mantenance li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
}

#progressbar_mantenance .step0:before {
    font-family: FontAwesome;
    content: "\f10c";
    color: #fff;
}

#progressbar_mantenance li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #C5CAE9;
    border-radius: 50%;
    margin: auto;
    padding: 0px;
}

/*progressbar_mantenance connectors*/
#progressbar_mantenance li:after {
    content: '';
    width: 100%;
    height: 12px;
    background: #C5CAE9;
    position: absolute;
    left: 0;
    top: 16px;
    z-index: -1;
}

#progressbar_mantenance li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%;
}

#progressbar_mantenance li:nth-child(2):after, #progressbar_mantenance li:nth-child(3):after {
    left: -50%;
}

#progressbar_mantenance li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    position: absolute;
    left: 50%;
}

#progressbar_mantenance li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}

#progressbar_mantenance li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

/*Color number of the step and the connector before it*/
#progressbar_mantenance li.active:before, #progressbar_mantenance li.active:after {
    background: #651FFF;
}

#progressbar_mantenance li.active:before {
    font-family: FontAwesome;
    content: "\f00c";
}
#progressbar_mantenance li.active:before, #progressbar_mantenance li.active:after {
    background: #f27e4c;
}

/*  End Maintaince CSS */


.icon {
    width: 60px;
    height: 60px;
    margin-right: 15px;
}

.icon-content { 
    padding-bottom: 20px;
}

@media screen and (max-width: 992px) {
    .icon-content {
        width: 50%;
    }
}
</style>

<div class="container px-1 px-md-4 py-5 mx-auto">
<button type="button" id="treatment" class="btn btn-primary">Treatment</button>
<button type="button" id="maintenance" class="btn btn-secondary">Maintenance</button>

    <div class="card treatment" style="display:block">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h5>Treatment <span class="text-primary font-weight-bold">#Y34XDHR</span></h5>
            </div>
            <!-- <div class="d-flex flex-column text-sm-right">
                <p class="mb-0">Expected Arrival <span>01/12/19</span></p>
                <p>USPS <span class="font-weight-bold">234094567242423422898</span></p>
            </div> -->
        </div>
        <!-- Add class 'active' to progress -->
        <div class="row d-flex justify-content-center">
            <div class="col-12">
            <ul id="progressbar" class="text-center">
                <li class="active step0"></li>
                <li class="active step0"></li>
                <li class="active step0"></li>
                <li class="step0"></li>
            </ul>
            </div>
        </div>
        <div class="row justify-content-between top">
        <div class="row d-flex icon-content">
                <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">17th Jul 2023 <br> Start</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
                <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                <div class="d-flex flex-column">
                <p class="font-weight-bold">17th Sep 2023 <br>Second Date</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
            <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                <div class="d-flex flex-column">
                <p class="font-weight-bold">17th Sep 2023 <br>Third Date</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
                <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">17th Dec 2023 <br>Completed</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card maintenance" style="display:none">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h5>Maintenance <span class="text-primary font-weight-bold">#Y34XDHR</span></h5>
            </div>
            <!-- <div class="d-flex flex-column text-sm-right">
                <p class="mb-0">Expected Arrival <span>01/12/19</span></p>
                <p>USPS <span class="font-weight-bold">234094567242423422898</span></p>
            </div> -->
        </div>
        <!-- Add class 'active' to progress -->
        <div class="row d-flex justify-content-center">
            <div class="col-12">
            <ul id="progressbar_mantenance" class="text-center">
                <li class="active step0"></li>
                <li class="active step0"></li>
                <li class="active step0"></li>
                <li class="step0"></li>
            </ul>
            </div>
        </div>
        <div class="row justify-content-between top">
            <div class="row d-flex icon-content">
                <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">17th Jul 2023 <br> Start</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
                <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                <div class="d-flex flex-column">
                <p class="font-weight-bold">17th Sep 2023 <br>Second Date</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
            <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                <div class="d-flex flex-column">
                <p class="font-weight-bold">17th Sep 2023 <br>Third Date</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
            <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">17th Dec 2023 <br>Next Date</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
   include_once('include/footer.php');
   ?>
<script src="css/js/jquery.min.js"></script>
<script src="css/js/popper.min.js"></script>
<script src="css/js/bootstrap.min.js"></script>
<script src="css/js/cleave.min.js"></script>
<script src="css/js/main.js"></script>

<script>
$('#maintenance').click(function() {

    $('.treatment').css("display","none");
    $('.maintenance').css("display","block");
    $('#maintenance').removeClass('btn btn-secondary').addClass('btn btn-primary');
    $('#treatment').removeClass('btn btn-primary').addClass('btn btn-secondary');
   
});

$('#treatment').click(function() {
$('.maintenance').css("display","none");
$('.treatment').css("display","block");
$('#treatment').removeClass('btn btn-secondary').addClass('btn btn-primary');
$('#maintenance').removeClass('btn btn-primary').addClass('btn btn-secondary');

});
</script>

</body>
</html>