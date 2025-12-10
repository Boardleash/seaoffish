<?php

require_once "db-connect.php";

//Get the totals count query
$totalsSql = "select (select count(*) from anchovies) as count1, (select count(*) from mackerel) as count2, (select count(*) from sardines) as count3, (select count(*) from other) as count4";
$result = $dbConnection->query($totalsSql);

//Get the top 5 anchovies consumed query
$anchovySql = "select brand,base,consumed from anchovies order by consumed desc limit 5";
$result2 = $dbConnection->query($anchovySql);

//Get the top 10 mackerel consumed query
$mackerelSql = "select brand,base,consumed from mackerel order by consumed desc limit 10";
$result3 = $dbConnection->query($mackerelSql);

//Get the top 10 sardines consumed query
$sardinesSql = "select brand,base,consumed from sardines order by consumed desc limit 10";
$result4 = $dbConnection->query($sardinesSql);

//Get the top 5 additional fare consumed query
$otherSql = "select brand,base,type,consumed from other order by consumed desc limit 5";
$result5 = $dbConnection->query($otherSql);

//Get the top 10 smoked fare consumed query
$smokedSql = "(select brand,type,base,consumed from anchovies where smoked='y') union
              (select brand,type,base,consumed from mackerel where smoked='y') union
              (select brand,type,base,consumed from sardines where smoked='y') union
              (select brand,type,base,consumed from other where smoked='y') order by consumed desc limit 10";
$result6 = $dbConnection->query($smokedSql);

//Get the top 10 non-smoked fare consumed query
$nonsmokedSql = "(select brand,type,base,consumed from anchovies where smoked='n') union
                 (select brand,type,base,consumed from mackerel where smoked='n') union
                 (select brand,type,base,consumed from sardines where smoked='n') union
                 (select brand,type,base,consumed from other where smoked='n') order by consumed desc limit 10";
$result7 = $dbConnection->query($nonsmokedSql);
