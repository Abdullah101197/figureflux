<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/css/nextpages.css">
        <link rel="stylesheet" type="text/css" href="assets/css/layout.css">
    <title>FigureFlux</title>
    <style>
        .basic-plan-main{
    box-shadow: 0px 4px 26px 0px #00000040;
    border: 1px solid #EEEEEE;
    border-radius: 32px;
    padding: 50px 60px 70px;
    transition: 0.45s;
}
.basic-plan-main .basic-btn a{
    font-size: 16px;
    color: #000;
    border: 1px solid #111111;
    border-radius: 16px;
    display: inline-block;
    width: 152px;
    height: 49px;
    line-height: 49px;
    text-align: center;
    margin-bottom: 10px;
}
.basic-plan-main .basic-plan{
    display: flex;
    flex-wrap: wrap;
}
.basic-plan-main .basic-plan .plan-list{
    width: 50%;
}
.basic-plan-main .basic-plan .plan-list ul{
    margin: 0;
    padding: 0;
}
.basic-plan-main .basic-plan .plan-list ul li{
    font-size: 16px;
    color:#333333;
    line-height: 55px;
}
.basic-plan-main .basic-plan .plan-list ul li span {
    width: 24px;
    height: 24px;
    line-height: 24px;
    display: inline-block;
    background: #000;
    text-align: center;
    border-radius: 50px;
    margin-right: 5px;
}
.basic-plan-main .basic-plan .plan-list ul li span i{
    color: #fff;
    margin-top: 4px;
}
.basic-plan-card .basic-plan-main{
    padding: 40px 15px;
}
.basic-plan-card .basic-plan-main .basic-plan .plan-list {
    width: 60%;
}
.basic-plan-card .basic-plan-main .basic-plan .plan-content {
    width: 40%;
}
.basic-plan-card .basic-plan-main .basic-plan .plan-list ul li {
    width: 50%;
    float: left;
    line-height: 35px;
    font-size: 13px;
}
.basic-plan-card .basic-plan-main .basic-plan .plan-content h2 span {
    font-size: 14px;
}
.basic-plan-card .basic-plan-main .basic-plan .plan-content h2 {
    font-size: 31px;
}
.basic-plan-card .basic-plan-main .basic-plan .plan-content button{
    background-color: #00D2D2;
    border-color:#00D2D2;
}
@media screen and (max-width:1200px) {
    .basic-plan-card .basic-plan-main .basic-plan .plan-list{
        width: 100%;
    }
    .basic-plan-card .basic-plan-main .basic-plan .plan-content{
        width: 100%;
        margin-bottom: 30px;
    }
    .basic-plan-card .basic-plan-main .basic-plan{
        flex-direction: column-reverse;
    }
}
.basic-plan-main:hover .basic-plan .plan-list ul li span i{
    color: #000;
}
.basic-plan-main .basic-plan .plan-content{
    width: 50%
}
.basic-plan-main .basic-plan .plan-content h2{
    font-size: 64px;
    color: #333333;
    line-height: 75px;
    font-weight: 600;
}
.basic-plan-main .basic-plan .plan-content h2 span{
    font-size: 24px;
    font-weight: 500;
    color: #5A5A5A;
}
.basic-plan-main .basic-plan .plan-content p{
    font-size: 18px;
    font-weight: 400;
    color: #5A5A5A;
    line-height: 32px;
    padding-bottom: 10px;
}
.basic-plan-main .basic-plan .plan-content a{
    background-color: #00D2D2;
    border-radius: 12px;
    font-size: 20px;
    font-weight: 500;
    color: #121D4D;
    display: inline-block;
    width: 225px;
    height: 72px;
    line-height: 72px;
    text-align: center;
}
    </style>
</head>
<body>
                     <div class="row">
                                <div class="col-lg-4">
                                    <div class="basic-plan-card">
                                        <div class="basic-plan-main">
                                            <div class="basic-btn">
                                                <h2> <a href="#">Plan name</a> </h2>
                                            </div>
                                            <div class="basic-plan">
                                                <div class="plan-list">
                                                    <ul>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Chat</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Tasks </li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Documents</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Business</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Payments</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Accounts</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Sales</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Suppliers</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Purchase</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Contracts</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-content">
                                                    <h2>Basic<span>per month</span>
                                                    </h2>
                                                    <p></p>
                                                    <button type="button"  class="btn btn-primary btn-lg " id="tag<%={{ $pacakage['id'] }}%>"
                                                        value="{{ $pacakage['id'] }}">Pay
                                                        now</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="basic-plan-card">
                                        <div class="basic-plan-main">
                                            <div class="basic-btn">
                                                <h2> <a href="#">Plan name</a> </h2>
                                            </div>
                                            <div class="basic-plan">
                                                <div class="plan-list">
                                                    <ul>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Chat</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Tasks </li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Documents</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Business</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Payments</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Accounts</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Sales</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Suppliers</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Purchase</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Contracts</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-content">
                                                    <h2>Basic<span>per month</span>
                                                    </h2>
                                                    <p></p>
                                                    <button type="button"  class="btn btn-primary btn-lg " id="tag<%={{ $pacakage['id'] }}%>"
                                                        value="{{ $pacakage['id'] }}">Pay
                                                        now</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="basic-plan-card">
                                        <div class="basic-plan-main">
                                            <div class="basic-btn">
                                                <h2> <a href="#">Plan name</a> </h2>
                                            </div>
                                            <div class="basic-plan">
                                                <div class="plan-list">
                                                    <ul>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Chat</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Tasks </li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Documents</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Business</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Payments</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Accounts</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Sales</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Suppliers</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Purchase</li>
                                                        <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Contracts</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-content">
                                                    <h2>Basic<span>per month</span>
                                                    </h2>
                                                    <p></p>
                                                    <button type="button"  class="btn btn-primary btn-lg " id="tag<%={{ $pacakage['id'] }}%>"
                                                        value="{{ $pacakage['id'] }}">Pay
                                                        now</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                  </body>
                  </html>
