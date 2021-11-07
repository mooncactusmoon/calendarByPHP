<html>
  <title>萬年曆作業</title>
  <style>
   /*請在這裹撰寫你的CSS*/ 
   *{
        box-sizing: border-box;
        font-family: Impact,Comic Sans MS,'monospace';
    }
    .div1{
        width: 702px;
        height: 492px;
        margin: auto;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: start;
        align-content: start;
        border: 1px solid black;
        color: 	#003060;         
    }
    .cell{
        width: 100px;
        height: 70px;
        border: 1px solid black;
        display: inline-block;
        font-size: 30px;
        text-align: center;
    }
    .cell:hover{
        background-color: #FFEBCD;
    }
    .weeks{
        background-color: rgb(185, 243, 224);
        font-size: 38px;
        padding-top: 10px;
        width: 100px;
        height: 70px;
        border: 1px solid black;
        display: inline-block;
        text-align: center;
    }
    .cell0,.cell6{
        color: rgb(255, 0, 0);
    }
    .spday{
        background-color: #F5F5DC;
        font-size: 16px;
        font-weight: 900;
        
    }
    .div-title{
        text-align: center;
        font-size: 30px;
    }
    a>span{
        font-size: 20px;
        color : #8E8E8E;
    }
    .main{
        display: flex;
        width: 1200px;
        margin: auto;
        
    }
    .section{
        flex-basis: 65%;
        padding: auto;
        margin: auto;
        color: 	#003060;  
    }
    .aside{
        color: 	#003060;  
        flex-basis: 35%;
        padding: auto;
        margin: auto;
    }
    .aside-year{
        font-size: 30px;
        font-family: 'Microsoft YaHei','Noto Sans TC', sans-serif;
    }
    a:link,a:visited,a:hover,a:active {
        color: 	#0072E3;
        text-decoration: none;
    }
  </style>
<body class="main">
<?php
/*請在這裹撰寫你的萬年曆程式碼*/  
?>
<?php
//新增紀念日//
    $specialDate = [
        '1-1' => '元旦',
        '2-14' => '西洋情人節',
        '2-28' => '和平紀念日',
        '3-8' => '婦女節',
        '4-4' => '兒童節',
        '5-1' => '勞動節',
        '8-8' => '父親節',
        '9-25' => '教師節',
        '10-10' => '雙十節',
        '10-31' => '萬聖節',
        '12-25' => '聖誕節',
    ];
  //紀念日每年顯示方法 date('Y-12-25')

     date_default_timezone_set('Asia/Taipei');
     
    //   $year= date("Y");
     //直接訪問本頁不帶值
     //訪問本業帶月份值

    //  $month = date('m');
    //empty(1)=>false  !empty(1)=>!false=>true
    //empty(0)=>true  !empty(0)=>!true=>false
    if(isset($_GET['month'])){
        $month=$_GET['month'];
        $year=$_GET['year'];
    }else{
        $month=date("m");
        $year=date("Y");
    }
    
    $lastmonth=$month-1;
    $lastyear=$year;

    $nextmonth=$month+1;
    $nextyear=$year;
    
    if($month==1){
        $lastmonth=12;
        $lastyear=$year-1;

        $nextmonth=$month+1;
        $nextyear=$year;

    }else if($month==12){

        $lastmonth=$month-1;
        $lastyear=$year;

        $nextmonth=1;
        $nextyear=$year+1;
    }

    $firstDay = date("$year-$month-01");
    $firstWeekfirstDay = date("w", strtotime($firstDay));
    
  //$a為非閏年，$b為閏年
     $a = [31,28,31,30,31,30,31,31,30,31,30,31];
     $b = [31,29,31,30,31,30,31,31,30,31,30,31];
     $td=['Sun.','Mon.','Tue.','Wed.','Thu.','Fri.','Sat.'];
 //31天的有:1.3.5.7.8.10.12
 //30天的有:4.6.9.11
 //閏年2月29天。非閏年2月28天
?>

<section class="section">
<div class="div-title">
    <h1><?=$year;?>/<?=$month;?></h1>
    <a href="index.php?year=<?=$lastyear;?>&month=<?=$lastmonth;?>">Last month<span class="title-day">&nbsp;&nbsp;<?=$lastyear.'/'.$lastmonth;?></span></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="index.php?year=<?=$nextyear;?>&month=<?=$nextmonth;?>">Next month<span class="title-day">&nbsp;&nbsp;<?=$nextyear.'/'.$nextmonth;?></span></a>
</div>
<?php

echo "<div class='div1'>";

for($i=0;$i<7;$i++){
    echo "<div class='weeks'>".$td[$i]."</div>";
}
 for ($i = 0; $i < 6; $i++) {
     for ($j = 0; $j < 7; $j++) {
         
         if (($i == 0 && $j < $firstWeekfirstDay) ) {
             //第一row且$j<第一天星期不顯示數字
             echo "<div class='cell cell$j'>";
             echo "&nbsp;";
             echo "</div>";
         } else {
             echo "<div class='cell cell$j'>";
             if((($year % 4 == 0) && ($year % 100 !=0)) || ($year % 400 ==0)){
                 $days=$i * 7 + $j + 1 - $firstWeekfirstDay;
                 //因為天數字串太長用$days代替,下面else也要在宣告一次
                 if ($days > $b[$month-1]) {
                     echo "&nbsp;";
                 } else {
                     $date=date("$month-").$days;
                    // $date=date("$year-$month-$days");
                     echo $days;
                     if(array_key_exists($date,$specialDate)){
                        echo "<br>";
                        echo "<span class='spday'>";
                        echo $specialDate[$date]."</span>";
                    }
                 }
             } else{
                $days=$i * 7 + $j + 1 - $firstWeekfirstDay;
                 if ($days > $a[$month-1]) {
                     echo "&nbsp;";
                 } else {
                     $date=date("$month-").$days;
                    // $date=date("$year-$month-$days");
                     echo $days;
                     if(array_key_exists($date,$specialDate)){
                        echo "<br>";
                        echo "<span class='spday'>";
                        echo $specialDate[$date]."</span>";
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
$sky=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
$land=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
//1984甲子年
$zodiac=[];
for($i=0;$i<60;$i++){
    $zodiac[]=$sky[$i%10] . $land[$i%12];
}
//  echo "<pre>";
//  print_r($zodiac);
//  echo "</pre>";
$animal=['鼠','牛','虎','兔','龍','蛇','馬','羊','猴','雞','狗','豬'];
echo "<div class='aside-year'>";
echo "<h1>Perpetual Calendar</h1>";
echo $zodiac[($year-4)%60] . '<br>';
echo $animal[($year-4)%12] . '年';
echo "<br><br>";

echo "</div>";
?>
</aside>
</body>
<html>
