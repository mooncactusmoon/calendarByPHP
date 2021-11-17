<html>
<title>萬年曆作業</title>
<style>
    /*請在這裹撰寫你的CSS*/

    * {
        box-sizing: border-box;
        font-family: Impact, Comic Sans MS, 'monospace';
        background-color: while;
        cursor: url('./image/other/parrot.png'),auto;

    }

    body {
        /* 有透明度的黑色半透明遮罩 */
        background-color: rgba(0, 0, 0, .3);
        /* 設置背景混和模式為相乘模式 */
        background-blend-mode: multiply; 
        background-image: url('./image/b/<?php echo rand(1, 5); ?>.jpg');
        margin: 0px;
        width: 100%;
        
    }

    .div1 {
        width: 702px;
        height: 492px;
        margin: auto;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: start;
        align-content: start;
        border: 1px solid black;
        color: #003060;

    }

    .cell {
        width: 100px;
        height: 70px;
        border: 1px solid black;
        display: inline-block;
        font-size: 28px;
        text-align: center;
        background-color: #D1E9E9;
    }

    .cell:hover {
        background-color: #FFEBCD;
        cursor: url('./image/other/lovebird.png'),auto;
    }

    .weeks {
        background-color: #A3D1D1;
        font-size: 38px;
        padding-top: 10px;
        width: 100px;
        height: 70px;
        border: 1px solid black;
        display: inline-block;
        text-align: center;
        text-shadow: 1px 1px white, -1px -1px #444;
    }

    .cell0,
    .cell6 {
        color: rgb(255, 0, 0);
    }

    .spday {
        background: none;
        font-size: 15.5px;
    }

    .div-title {
        text-align: center;
        font-size: 30px;
        background: none;
    }

    .div-title>h1 {
        background: none;
        font-size: 50px;
        text-shadow: -1px -1px white, 1px 1px #333;
    }
    a>span {
        font-size: 20px;
        color: rgb(159, 178, 207);
        background: none;
        /* text-shadow: white 0.1em 0.1em 0.2em; */
        text-shadow: -1px -1px black, 1px 1px #333;
    }

    main {
        display: flex;
        width: 1200px;
        padding-top: 100px;
        margin: auto;
        flex-wrap: wrap;
        height: 900px;
        background: none;
    }

    .section {
        flex-basis: 65%;
        height: 700px;
        padding: auto;
        padding-bottom: 30px;
        margin: auto;
        color: #003060;
        background-color: rgba(196, 225, 225, 0.5);
        border-top-left-radius: 40px;
        border-bottom-left-radius: 40px;
    }

    .aside {
        color: #ECF5FF;
        flex-basis: 35%;
        height: 700px;
        padding: 20px;
        margin: auto;
        background-size: 100% 100%;
        background-image: url('./image/<?php echo rand(1, 68); ?>.jpg');
        border-top-right-radius: 40px;
        border-bottom-right-radius: 40px;
    }

    .aside-year {
        padding-top: 450px;
        font-size: 30px;
        font-family: 'Microsoft YaHei', 'Noto Sans TC', sans-serif;
        background: none;
        text-shadow: 0.1em 0.1em 0.2em black;
    }

    .aside-year>h1 {
        background: none;
    }

    a:link,
    a:visited{
        color: rgb(22, 76, 156);
        text-decoration: none;
        background: none;
        /* text-shadow: 1px 1px white, -1px -1px #444; */
        text-shadow: -1px -1px white, 1px 1px #333;
    }
    .inquire {
        position: fixed;
        width: 15px;
        height: 150px;
        margin-right: 0px;
        margin-top: 300px;
        border: 1px solid #4b6b65;
        border-left: none;
        background-color: black;
    }
    .input {
        display: none;
        position: absolute;
        width: 100px;
        height: 90px;
        margin-top: 30px;
    }
    input{
        border: 0px;
    }
    input {
        background-color: #ECF5FF;
        width: 100px;
        height: 30px;
        text-align: center;
        font-size: 15px;
        margin-top: 0px;
        border-radius: 10px;
        color: #120b63;
    }

    .inquire:hover .input {
        display: block;
        background: none;
    }

    .img {
        /* background: none; */
        margin: 0px;
        width: 30px;
        height: 35px;
        background-color: rgba(0, 0, 0, 0.7);
    }
    select{
        width: 100px;
        height: 30px;
        font-size: 16px;
        border: 1px solid #4b6b65;
        border-radius: 10px;
        text-align: center;
        color: #120b63;
    }
    .bird{
        width:30px;
        height: 30px;
        margin-top: 20px;
        opacity: 0.6;
    }
</style>

<body>
    <div class="inquire">
        <img src="./image/other/2.png" alt="search" class="img">
        <div class="input">
            <form action='./index.php'>
                <input type='number' name='year' placeholder="Entry AD year " min="1970" required="required">
                <select name="month">
                   <option value="1">January</option>
                   <option value="2">February</option>
                   <option value="3">March</option>
                   <option value="4">April</option>
                   <option value="5">May</option>
                   <option value="6">June</optio;n>
                   <option value="7">July</option>
                   <option value="8">August</option>
                   <option value="9">September</option>
                   <option value="10">October</option>
                   <option value="11">November</option>
                   <option value="12">December</option>
                </select>
                <!-- <input type='number' name='month' placeholder="Entry month" min="1" max="12"> -->
                <input type='submit' value="Search&rarr;&rarr;" style="color:#c7161e;border-radius: 40px;cursor: url('./image/other/kiwi2.png'),auto;">
            </form>
        </div>
        <img src="./image/other/3.png" alt="search" class="img">
    </div>
    <!-- 選擇日期 -->
    <main>
        <?php
        /*請在這裹撰寫你的萬年曆程式碼*/
        ?>

        <?php
        //新增紀念日//
        $specialDate = [
            '1-1' => "New Year's Day",
            '2-14' => "Valentine's Day",
            '2-28' => 'Peace Memorial Day',
            '3-8' => "Women's Day",
            '4-1' => "April Fools' Day",
            '4-4' => "Children's Day",
            '4-17' => "Easter",
            '4-22' => "Earth day",
            '5-1' => 'Labor Day',
            '8-8' => "Father's Day",
            '9-28' => "Teachers' Day",
            '10-4' => 'World Animal Day',
            '10-10' => 'Double ten Festival',
            '10-31' => 'Halloween',
            '11-26' => 'Thanksgiving Day',
            '12-24' => 'Christmas Eve',
            '12-25' => 'Christmas',
        ];
        //紀念日每年顯示方法 date('Y-12-25')

        date_default_timezone_set('Asia/Taipei');

        //   $year= date("Y");
        //直接訪問本頁不帶值
        //訪問本業帶月份值

        //  $month = date('m');
        //empty(1)=>false  !empty(1)=>!false=>true
        //empty(0)=>true  !empty(0)=>!true=>false
        if (isset($_GET['month'])) {
            $month = $_GET['month'];
            $year = $_GET['year'];
        } else {
            $month = date("m");
            $year = date("Y");
        }

        $lastmonth = $month - 1;
        $lastyear = $year;

        $nextmonth = $month + 1;
        $nextyear = $year;

        if ($month == 1) {
            $lastmonth = 12;
            $lastyear = $year - 1;

            $nextmonth = $month + 1;
            $nextyear = $year;
        } else if ($month == 12) {

            $lastmonth = $month - 1;
            $lastyear = $year;

            $nextmonth = 1;
            $nextyear = $year + 1;
        }

        $firstDay = date("$year-$month-01");
        $firstWeekfirstDay = date("w", strtotime($firstDay));

        //$a為非閏年，$b為閏年
        $a = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        $b = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        $td = ['Sun.', 'Mon.', 'Tue.', 'Wed.', 'Thu.', 'Fri.', 'Sat.'];
        //31天的有:1.3.5.7.8.10.12
        //30天的有:4.6.9.11
        //閏年2月29天。非閏年2月28天
        ?>

        <section class="section">
            <div class="div-title">
                <h1><?= $year; ?>&nbsp;/&nbsp;<?= $month; ?></h1>
                <a href="index.php?year=<?= $lastyear; ?>&month=<?= $lastmonth; ?>">Last month<span class="title-day">&nbsp;&nbsp;<?= $lastyear . '/' . $lastmonth; ?></span></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="index.php?year=<?= $nextyear; ?>&month=<?= $nextmonth; ?>">Next month<span class="title-day">&nbsp;&nbsp;<?= $nextyear . '/' . $nextmonth; ?></span></a>
            </div>
            <?php
            $bird=rand(1,17);

            echo "<div class='div1'>";

            for ($i = 0; $i < 7; $i++) {
                echo "<div class='weeks'>" . $td[$i] . "</div>";
            }
            for ($i = 0; $i < 6; $i++) {
                for ($j = 0; $j < 7; $j++) {

                    if (($i == 0 && $j < $firstWeekfirstDay)) {
                        //第一row且$j<第一天星期不顯示數字
                        echo "<div class='cell cell$j'>";
                        echo "<img class='bird' src='./image/other/bird$bird.png' alt='bird'>";
                        echo "</div>";
                    } else {
                        echo "<div class='cell cell$j'>";
                        if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
                            $days = $i * 7 + $j + 1 - $firstWeekfirstDay;
                            //因為天數字串太長用$days代替,下面else也要在宣告一次
                            if ($days > $b[$month - 1]) {
                                echo "<img class='bird' src='./image/other/bird$bird.png' alt='bird'>";
                            } else {
                                $date = date("$month-") . $days;
                                // $date=date("$year-$month-$days");
                                echo $days;
                                if (array_key_exists($date, $specialDate)) {
                                    echo "<br>";
                                    echo "<span class='spday'>";
                                    echo $specialDate[$date] . "</span>";
                                }
                            }
                        } else {
                            $days = $i * 7 + $j + 1 - $firstWeekfirstDay;
                            if ($days > $a[$month - 1]) {
                                echo "<img class='bird' src='./image/other/bird$bird.png' alt='bird'>";
                            } else {
                                $date = date("$month-") . $days;
                                // $date=date("$year-$month-$days");
                                echo $days;
                                if (array_key_exists($date, $specialDate)) {
                                    echo "<br>";
                                    echo "<span class='spday'>";
                                    echo $specialDate[$date] . "</span>";
                                }
                            }
                        }
                        echo "</div>";
                    }
                }
            }
            echo "</div>";
            ?>
        </section>
        <aside class="aside">

            <?php
            //天干地支年，西元4年為第一個甲子年
            $sky = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
            $land = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
            //1984甲子年
            $zodiac = [];
            for ($i = 0; $i < 60; $i++) {
                $zodiac[] = $sky[$i % 10] . $land[$i % 12];
            }
            //  echo "<pre>";
            //  print_r($zodiac);
            //  echo "</pre>";
            // $animal = ['鼠', '牛', '虎', '兔', '龍', '蛇', '馬', '羊', '猴', '雞', '狗', '豬'];
            $img = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
            $c = ($year - 4) % 12;
            echo "<div class='aside-year'>";
            echo "<h1>Perpetual Calendar</h1>";
            echo "<img src='./image/y/$img[$c].png' style='background:none;opacity:0.9;' width='52px' height='52px'>";
            echo '&nbsp' . $zodiac[($year - 4) % 60];
            //    echo $animal[($year-4)%12] . '年';
            echo "<br><br>";

            echo "</div>";
            ?>
            <!-- 小月曆 -->
            <style>
                .current {
                    position: relative;
                    bottom: 135px;
                    left: 200px;
                    font-size: 18px;
                    opacity: 0.7;
                }

                .div2 {
                    width: 177px;
                    height: 100px;
                    margin: auto;
                    text-align: center;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: start;
                    align-content: start;
                    border: 0px;
                    position: relative;
                    bottom: 135px;
                    left: 90px;
                    opacity: 0.6;
                }

                .cell22 {
                    width: 25px;
                    height: 15px;
                    border: 0px ;
                    display: inline-block;
                    font-size: 5px;
                    text-align: center;
                    background-color: #ECF5FF;
                    border-radius: 25%;
                }
                
                .weeks2 {
                    border-radius: 25%;
                    background-color: wheat;
                    font-size: 10px;
                    padding-top: 1px;
                    width: 25px;
                    height: 17px;
                    border: 0px ;
                    display: inline-block;
                    text-align: center;
                }
                .spanday{
                    border-radius: 25%;
                    background:#000093;
                    font-size:15px;
                    color:white;
                }
            </style>
            <?php
            $firstDay2 = date("Y-m-01");
            $firstWeekfirstDay2 = date("w", strtotime($firstDay2));
            $m = date("m");
            $y = date("Y");
            $d = date("j");
            echo "<header class='current'><a class='calendar' href='index.php'>";
            echo "Current date" . ":" . $y . "/" .  $m;
            echo "</header>";
            echo "<div class='div2'>";
            for ($i = 0; $i < 7; $i++) {
                echo "<div class='weeks2'>" . $td[$i] . "</div>";
            }
            for ($i = 0; $i < 6; $i++) {
                for ($j = 0; $j < 7; $j++) {

                    if (($i == 0 && $j < $firstWeekfirstDay2)) {
                        echo "<div class='cell22 cell$j'>";
                        echo "&nbsp;";
                        echo "</div>";
                    } else {
                        echo "<div class='cell22 cell$j'>";
                        if ((($y % 4 == 0) && ($y % 100 != 0)) || ($y % 400 == 0)) {
                            $days = $i * 7 + $j + 1 - $firstWeekfirstDay2;
                            if ($days > $b[$m - 1]) {
                                echo "&nbsp;";
                            } else {
                                $date = date("$m-") . $days;
                                if ($days == $d) {
                                    echo "<span class='spanday'>&nbsp;&nbsp;$d&nbsp;&nbsp;</sapn>";
                                } else {

                                    echo $days;
                                }
                            }
                        } else {
                            $days = $i * 7 + $j + 1 - $firstWeekfirstDay2;
                            if ($days > $a[$m - 1]) {
                                echo "&nbsp;";
                            } else {
                                $date = date("$m-") . $days;
                                if ($days == $d) {
                                    echo "<span class='spanday'>&nbsp;&nbsp;$d&nbsp;&nbsp;</sapn>";
                                } else {

                                    echo $days;
                                }
                            }
                        }
                        echo "</div>";
                    }
                }
            }
            echo "</div></a>";
            ?>
            <!-- 小月曆結束 -->
        </aside>
        <style>
            footer,.mine:link,.mine:visited{
                flex-basis: 100%;
                text-align: center;
                color: #cad9d9;
                font-size: 100%;
                padding-top: 40px;
                padding-bottom: 0px;
                background: none;
                text-shadow: 0.1em 0.1em 0.2em black;
            }
            .footer2{
                color:#959c9c;
                background:none;
                text-shadow: 0.1em 0.1em 0.2em black;
            }
            .footer2>a:link,.footer2>a:visited{
                color:#acb5b5;
                background:none;
                text-shadow: 0.1em 0.1em 0.2em black;
            }
        </style>
    <footer>
            &copy;&nbsp;&nbsp; <a class='mine' href="https://github.com/mooncactusmoon">Cactus月</a>&nbsp;&nbsp; 2021<br>
        <span class="footer2">The Image Source :&nbsp; <a href="https://unsplash.com/">Unsplash</a>&nbsp; &&nbsp; <a href="https://www.iconshock.com/">Iconshock</a>&nbsp; &&nbsp; Cactus月 
        <br><img src="./image/other/quarantine_time.png" width="20px" height="20px">&nbsp;&nbsp;Time zone&nbsp;&nbsp;:&nbsp;&nbsp;Asia/Taipei&nbsp;&nbsp;<img src="./image/other/quarantine_time.png" width="20px" height="20px"></span>
    </footer>
    </main>
</body>
<html>