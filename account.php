<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EpicAsset Income</title>
    <link rel="stylesheet" href="css/accountlogin.css" type="text/css">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="css/accountphone.css" type="text/css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="container">
        <div class="nav">
            <div class="nav_left">
                <img src="images/logo.png" alt="">
                <h1>EpicAsset Income</h1>
            </div>
            <div class="nav_right">
                <ul>
                    <li><a href="#" class="nav_right-superior-links" id="accountbtn">ACCOUNT</a></li>
                    <li><a href="#" class="nav_right-superior-links" id="widthdrawbtn">WITHDRAW</a></li>
                    <li><a href="#" class="nav_right-superior-links" id="investbtn">INVEST</a></li>   
                    <li><a href="#" id="transactionbtn">CURRENT</a></li>
                </ul>
            </div>
        </div>
        <div class="name">
            <div id="main-wrapper">
                    <center>
                        <?php echo'<h1> '.$_SESSION["fullname"].' </h1>';  ?>
                    </center>
            

                <form action="account.php" method="post" class="myform">

                    <input name="logout" type="submit" id="logout_btn" value="Log Out"><br>        
                
                </form>

                <?php
                if(isset($_POST['logout']))
                {
                    session_destroy();
                    header('location:login.php');
                }    
                ?>
            </div>
        </div>
        <div class="intro">
            <h1>WELCOME!🧑</h1>
        </div>
  
        <!-- investment ------------------------------------------------------------------------------------------------->
        <div class="invest" id="invest">

            <h2 class="mainaccount-header">MAIN - INVEST</h2> 
            <h2 class="invest-header">MAKE AN INVESTMENT IN</h2>

            <div class="services_main">
                <div class="div_1">
                    <div class="text">
                        <h2>Crypto</h2>
                        <a href="deposit.html">
                            <button class="INVESTbtn">INVEST NOW</button> 
                        </a>
                    </div>
                    <select name="plan">
                        <option value="plan1">PLAN 1 {$50-$1,000}</option>
                        <option value="plan2" >PLAN 2 {$1,000-$10,000}</option>
                        <option value="plan3">PLAN 3{$10,000-$100,000}</option>
                        <option value="plan4">PLAN 4{$100,000-$1,000,000}</option>
                    </select><br>
                </div>
                <div class="div_2">
                    <div class="text">
                        <h2>Real Estate</h2>
                        <a href="deposit.html">
                            <button class="INVESTbtn">INVEST NOW</button>
                        </a>
                    </div>
                    <select name="plan">
                        <option value="plan1">PLAN 1 {$50-$1,000}</option>
                        <option value="plan2" >PLAN 2 {$1,000-$10,000}</option>
                        <option value="plan3">PLAN 3{$10,000-$100,000}</option>
                        <option value="plan4">PLAN 4{$100,000-$1,000,000}</option>
                    </select><br>
                </div>
                <div class="div_3">
                    <div class="text">
                        <h2>Reirement</h2>
                        <a href="deposit.html">
                            <button class="INVESTbtn">INVEST NOW</button>
                        </a>
                    </div>
                    <select name="plan" class="plan">
                        <option value="plan1">PLAN 1 {$50-$1,000}</option>
                        <option value="plan2" >PLAN 2 {$1,000-$10,000}</option>
                        <option value="plan3">PLAN 3{$10,000-$100,000}</option>
                        <option value="plan4">PLAN 4{$100,000-$1,000,000}</option>
                    </select><br>
                </div>
            </div>

        </div>
        <!-- investment end --------------------------------------------------------------------------------->


        <!-- widthdraw ------------------------------------------------------------------------------------------->
        <div class="withdraw" id="withdraw">
            <h2 class="mainaccount-header">MAIN - WITHDRAWAL</h2>
            <h2 class="invest-header">WITHDRAWAL TABLE</h2>

            <div class="transaction-intro" style="border: 1px dashed darkgray;">
                <div class="transaction-1 general">
                    <div class="transaction-1-top"><h3</h3></div>
                    <div class="transaction-1-under"><h4>INVOICE</h4></div>
                </div>
                <div class="transaction-2 general">
                    <div class="transaction-2-top"> <h3</h3></div>
                    <div class="transaction-2-under"><h4>AMOUNT</h4></div>
                </div>
                <div class="transaction-3 general">
                    <div class="transaction-3-top"><h3</h3></div>
                    <div class="transaction-3-under"><h4>METHOD</h4></div>
                </div>
                <div class="transaction-4 general">
                    <div class="transaction-4-top"><h3></h3></div>
                    <div class="transaction-4-under"><h4>STATUS</h4></div>
                </div>
                <div class="transaction-5 general">
                    <div class="transaction-5-top"><h3</h3></div>
                    <div class="transaction-5-under"><h4>DATE</h4></div>
                </div>
            </div>
            <h2 class="invest-header" style="color:Red;">YOU HAVE MADE NO WITHDRAWALS YET</h2>
            <div class="dep-button">
                <a>
                    <button class="INVESTbtn text-center illegal">WITHDRAW NOW!</button>
                </a>
            </div>
        </div>

        <!-- widthdraw end ------------------------------------------------------------------------------------------>


        <!-- deposit start ------------------------------------------------------------------------------------------>
        <div class="deposit" id="deposit">
            <h2 class="mainaccount-header">MAIN - DEPOSITS</h2>
            <h2 class="invest-header">DEPOSITS TABLE</h2>

            <div class="transaction-intro" style="border: 1px dashed darkgray;">
                <div class="transaction-1 general">
                    <div class="transaction-1-top"><h3</h3></div>
                    <div class="transaction-1-under"><h4>INVOICE</h4></div>
                </div>
                <div class="transaction-2 general">
                    <div class="transaction-2-top"> <h3</h3></div>
                    <div class="transaction-2-under"><h4>AMOUNT</h4></div>
                </div>
                <div class="transaction-3 general">
                    <div class="transaction-3-top"><h3</h3></div>
                    <div class="transaction-3-under"><h4>METHOD</h4></div>
                </div>
                <div class="transaction-4 general">
                    <div class="transaction-4-top"><h3></h3></div>
                    <div class="transaction-4-under"><h4>STATUS</h4></div>
                </div>
                <div class="transaction-4 general">
                    <div class="transaction-4-top"><h3></h3></div>
                    <div class="transaction-4-under"><h4>PLAN</h4></div>
                </div>
                <div class="transaction-5 general">
                    <div class="transaction-5-top"><h3</h3></div>
                    <div class="transaction-5-under"><h4>DATE</h4></div>
                </div>

                <h2 class="invest-header" style="color:Red;">YOU HAVE MADE NO DEPOSITS YET</h2>
            </div>
            <div class="dep-button">
                <a href="deposit.html">
                    <button class="INVESTbtn text-center">DEPOSIT NOW</button>
                </a>
            </div>
        </div>


        <!-- deposit end  ------------------------------------------------------------------------------------->

            <!-- account begin  ------------------------------------------------------------------------------->

        <div class="account" id="account">
                <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
            "symbols": [
                {
                "proName": "FOREXCOM:SPXUSD",
                "title": "S&P 500"
                },
                {
                "proName": "FOREXCOM:NSXUSD",
                "title": "Nasdaq 100"
                },
                {
                "proName": "FX_IDC:EURUSD",
                "title": "EUR/USD"
                },
                {
                "proName": "BITSTAMP:BTCUSD",
                "title": "BTC/USD"
                },
                {
                "proName": "BITSTAMP:ETHUSD",
                "title": "ETH/USD"
                }
            ],
            "colorTheme": "dark",
            "isTransparent": false,
            "displayMode": "adaptive",
            "locale": "en"
            }
            </script>
            </div>
            <!-- TradingView Widget END -->
            </br>

            <p class="mainaccount-header">MAIN - ACCOUNT</p>

            <div class="transaction-intro">
                <div class="transaction-1 general">
                    <div class="transaction-1-top"><h3>$0.00</h3></div>
                    <div class="transaction-1-under"><h4>BALANCE</h4></div>
                </div>
                <div class="transaction-2 general">
                    <div class="transaction-2-top"> <h3>$0.00</h3></div>
                    <div class="transaction-2-under"><h4>DEPOSITS</h4></div>
                </div>
                <div class="transaction-3 general">
                    <div class="transaction-3-top"><h3>$0.00</h3></div>
                    <div class="transaction-3-under"><h4>PENDING DEPOSITS</h4></div>
                </div>
                <div class="transaction-4 general">
                    <div class="transaction-4-top"><h3 style="color: red;">$0.00</h3></div>
                    <div class="transaction-4-under"><h4>WITHDRAWALS</h4></div>
                </div>
                <div class="transaction-5 general">
                    <div class="transaction-5-top"><h3>$0.00</h3></div>
                    <div class="transaction-5-under"><h4>PROFITS</h4></div>
                </div>
            </div>
            <div class="tradebutton">
                <a href="deposit.html">
                    <button class="tradebtn">INVEST NOW</button>
                </a>
            </div>   
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                {
                "width": "100%",
                "height": "100%",
                "defaultColumn": "overview",
                "screener_type": "crypto_mkt",
                "displayCurrency": "USD",
                "colorTheme": "dark",
                "locale": "en"
            }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>    
        <!-- account end ----------------------------------------------------------------------->







    </div>
    <script src="js/accountlogin.js" type="text/javascript"></script>
</body>
</html>