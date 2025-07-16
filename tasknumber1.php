<?php
header("Content-Type:text/html;charset=UTF-8");
$data = [
	['Иванов', 'Математика', 5],
	['Иванов', 'Математика', 4],
	['Иванов', 'Математика', 5],
	['Петров', 'Математика', 5],
	['Сидоров', 'Физика', 4],
	['Иванов', 'Физика', 4],
	['Петров', 'ОБЖ', 4],
];
/*Добавление всех предметов в одном экземпляре. */
$subjects=array();
for($i=0;$i<count($data);$i++)
{
    if(!in_array($data[$i][1],$subjects))
    {
        array_push($subjects,$data[$i][1]);
    }
}
/*Добавление всех людей в одном экземпляре. */
$people=array();
for($i=0;$i<count($data);$i++)
{
    if(!in_array($data[$i][0],$people))
    {
        array_push($people,$data[$i][0]);
    }
}
sort($subjects);
sort($people);
//print_r($subjects);
//print_r($people);
/*Подсчёт итоговых баллов. */
$totalballs=array();
for($i=0;$i<count($subjects);$i++)
{
    array_push($totalballs,array());
    for($j=0;$j<count($people);$j++)
    {
        array_push($totalballs[$i],0);
    }
}
for($k=0;$k<count($data);$k++)
{
    for($i=0;$i<count($subjects);$i++)
    {
        for($j=0;$j<count($people);$j++)
        {
            if(($data[$k][0]==$people[$j]) && ($data[$k][1]==$subjects[$i]))
            {
                $totalballs[$j][$i]=$totalballs[$j][$i]+$data[$k][2];
            }
        }
    }
}
echo "<table>";
echo "<tr>";
echo "<td></td>";
for($i=0;$i<count($subjects);$i++)
{
    echo "<td>".$subjects[$i]."</td>";
}
echo "</tr>";
for($i=0;$i<count($people);$i++)
{
    echo "<tr>";
    echo "<td>".$people[$i]."</td>";
    for($j=0;$j<count($subjects);$j++)
    {
        if($totalballs[$i][$j]!==0)
        {
            echo "<td>".$totalballs[$i][$j]."</td>";
        }
        else
        {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{border:1px solid black;}
    thead{border:1px solid black;}
    tr{border:1px solid black;}
    td{border:1px solid black;}
    </style>
</head>
<body>
</body>
</html>