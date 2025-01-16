<?php
header("Content-Type:text/html;charset=UTF-8");
setlocale(LC_ALL,'Russian_Russia');
mb_language("ru");
$text = '<<<TXT
<p class="big">
	Год основания:<b>1589 г.</b> Волгоград отмечает день города в <b>2-е воскресенье сентября</b>. <br>В <b>2023 году</b> эта дата - <b>10 сентября</b>.
</p>
<p class="float">
	<img src="https://www.calend.ru/img/content_events/i0/961.jpg" alt="Волгоград" width="300" height="200" itemprop="image">
	<span class="caption gray">Скульптура «Родина-мать зовет!» входит в число семи чудес России (Фото: Art Konovalov, по лицензии shutterstock.com)</span>
</p>
<p>
	<i><b>Великая Отечественная война в истории города</b></i></p><p><i>Важнейшей операцией Советской Армии в Великой Отечественной войне стала <a href="https://www.calend.ru/holidays/0/0/1869/">Сталинградская битва</a> (17.07.1942 - 02.02.1943). Целью боевых действий советских войск являлись оборона  Сталинграда и разгром действовавшей на сталинградском направлении группировки противника. Победа советских войск в Сталинградской битве имела решающее значение для победы Советского Союза в Великой Отечественной войне.</i>
</p>
TXT';
echo $text;
function start($char)
{
	if($char==">")
	{
		return 1;
	}
	if($char=="«")
	{
		return 1;
	}
	if($char=="(")
	{
		return 1;
	}
	if($char==" ")
	{
		return 1;
	}
	if($char==".")
	{
		return 1;
	}
	return 0;
}
function continues($char)
{
	if($char=="-")
	{
		return 1;
	}
	if($char=="А")
	{
		return 1;
	}
	if($char=="Б")
	{
		return 1;
	}
	if($char=="В")
	{
		return 1;
	}
	if($char=="Г")
	{
		return 1;
	}
	if($char=="Д")
	{
		return 1;
	}
	if($char=="Е")
	{
		return 1;
	}
	if($char=="Ё")
	{
		return 1;
	}
	if($char=="Ж")
	{
		return 1;
	}
	if($char=="З")
	{
		return 1;
	}
	if($char=="И")
	{
		return 1;
	}
	if($char=="Й")
	{
		return 1;
	}
	if($char=="К")
	{
		return 1;
	}
	if($char=="Л")
	{
		return 1;
	}
	if($char=="М")
	{
		return 1;
	}
	if($char=="Н")
	{
		return 1;
	}
	if($char=="О")
	{
		return 1;
	}
	if($char=="П")
	{
		return 1;
	}
	if($char=="Р")
	{
		return 1;
	}
	if($char=="С")
	{
		return 1;
	}
	if($char=="Т")
	{
		return 1;
	}
	if($char=="У")
	{
		return 1;
	}
	if($char=="Ф")
	{
		return 1;
	}
	if($char=="Х")
	{
		return 1;
	}
	if($char=="Ц")
	{
		return 1;
	}
	if($char=="Ч")
	{
		return 1;
	}
	if($char=="Ш")
	{
		return 1;
	}
	if($char=="Щ")
	{
		return 1;
	}
	if($char=="Ъ")
	{
		return 1;
	}
	if($char=="Ы")
	{
		return 1;
	}
	if($char=="Ь")
	{
		return 1;
	}
	if($char=="Э")
	{
		return 1;
	}
	if($char=="Ю")
	{
		return 1;
	}
	if($char=="Я")
	{
		return 1;
	}
	if($char=="а")
	{
		return 1;
	}
	if($char=="б")
	{
		return 1;
	}
	if($char=="в")
	{
		return 1;
	}
	if($char=="г")
	{
		return 1;
	}
	if($char=="д")
	{
		return 1;
	}
	if($char=="е")
	{
		return 1;
	}
	if($char=="ё")
	{
		return 1;
	}
	if($char=="ж")
	{
		return 1;
	}
	if($char=="з")
	{
		return 1;
	}
	if($char=="и")
	{
		return 1;
	}
	if($char=="й")
	{
		return 1;
	}
	if($char=="к")
	{
		return 1;
	}
	if($char=="л")
	{
		return 1;
	}
	if($char=="м")
	{
		return 1;
	}
	if($char=="н")
	{
		return 1;
	}
	if($char=="о")
	{
		return 1;
	}
	if($char=="п")
	{
		return 1;
	}
	if($char=="р")
	{
		return 1;
	}
	if($char=="с")
	{
		return 1;
	}
	if($char=="т")
	{
		return 1;
	}
	if($char=="у")
	{
		return 1;
	}
	if($char=="ф")
	{
		return 1;
	}
	if($char=="х")
	{
		return 1;
	}
	if($char=="ц")
	{
		return 1;
	}
	if($char=="ч")
	{
		return 1;
	}
	if($char=="ш")
	{
		return 1;
	}
	if($char=="щ")
	{
		return 1;
	}
	if($char=="ъ")
	{
		return 1;
	}
	if($char=="ы")
	{
		return 1;
	}
	if($char=="ь")
	{
		return 1;
	}
	if($char=="э")
	{
		return 1;
	}
	if($char=="ю")
	{
		return 1;
	}
	if($char=="я")
	{
		return 1;
	}
	if($char=="A")
	{
		return 1;
	}
	if($char=="B")
	{
		return 1;
	}
	if($char=="C")
	{
		return 1;
	}
	if($char=="D")
	{
		return 1;
	}
	if($char=="E")
	{
		return 1;
	}
	if($char=="F")
	{
		return 1;
	}
	if($char=="G")
	{
		return 1;
	}
	if($char=="H")
	{
		return 1;
	}
	if($char=="I")
	{
		return 1;
	}
	if($char=="J")
	{
		return 1;
	}
	if($char=="K")
	{
		return 1;
	}
	if($char=="L")
	{
		return 1;
	}
	if($char=="M")
	{
		return 1;
	}
	if($char=="N")
	{
		return 1;
	}
	if($char=="O")
	{
		return 1;
	}
	if($char=="P")
	{
		return 1;
	}
	if($char=="Q")
	{
		return 1;
	}
	if($char=="R")
	{
		return 1;
	}
	if($char=="S")
	{
		return 1;
	}
	if($char=="T")
	{
		return 1;
	}
	if($char=="U")
	{
		return 1;
	}
	if($char=="V")
	{
		return 1;
	}
	if($char=="W")
	{
		return 1;
	}
	if($char=="X")
	{
		return 1;
	}
	if($char=="Y")
	{
		return 1;
	}
	if($char=="Z")
	{
		return 1;
	}
	if($char=="a")
	{
		return 1;
	}
	if($char=="b")
	{
		return 1;
	}
	if($char=="c")
	{
		return 1;
	}
	if($char=="d")
	{
		return 1;
	}
	if($char=="e")
	{
		return 1;
	}
	if($char=="f")
	{
		return 1;
	}
	if($char=="g")
	{
		return 1;
	}
	if($char=="h")
	{
		return 1;
	}
	if($char=="i")
	{
		return 1;
	}
	if($char=="j")
	{
		return 1;
	}
	if($char=="k")
	{
		return 1;
	}
	if($char=="l")
	{
		return 1;
	}
	if($char=="m")
	{
		return 1;
	}
	if($char=="n")
	{
		return 1;
	}
	if($char=="o")
	{
		return 1;
	}
	if($char=="p")
	{
		return 1;
	}
	if($char=="q")
	{
		return 1;
	}
	if($char=="r")
	{
		return 1;
	}
	if($char=="s")
	{
		return 1;
	}
	if($char=="t")
	{
		return 1;
	}
	if($char=="u")
	{
		return 1;
	}
	if($char=="v")
	{
		return 1;
	}
	if($char=="w")
	{
		return 1;
	}
	if($char=="x")
	{
		return 1;
	}
	if($char=="y")
	{
		return 1;
	}
	if($char=="z")
	{
		return 1;
	}
	if($char=="")
	{
		return 1;
	}
	return 0;
}
function ender($char)
{
	if($char=="<")
	{
		return 1;
	}
	if($char==".")
	{
		return 1;
	}
	if($char==" ")
	{
		return 1;
	}
	if($char==")")
	{
		return 1;
	}
	if($char=="!")
	{
		return 1;
	}
	if($char==":")
	{
		return 1;
	}
	if($char==",")
	{
		return 1;
	}
	return 0;
}
mb_internal_encoding("windows-1251");
$arr=array();
for($i=0;$i<strlen($text);$i++)
{
	array_push($arr,iconv_substr($text,$i,1));
}
$text55=implode($arr);
$elit=0;
$counters=0;
$deleter=0;
$start=array();
$finish=array();
for($i=0;$i<count($arr);$i++)
{
	if($deleter==1)
	{
		if($elit==0)
		{
			if(start($arr[$i])==1)
			{
				$elit=1;
				$currentstart=$i+1;
			}
			continue;
		}
		if($elit==1)
		{
			if(continues($arr[$i])==1)
			{
				$elit=2;
			}
			elseif(start($arr[$i])==1)
			{
				$elit=1;
				$currentstart=$i+1;
			}
			else
			{
				$elit=0;
			}
			continue;
		}
		if($elit==2)
		{
			if(continues($arr[$i])==1)
			{
				$elit=2;
			}
			elseif(ender($arr[$i])==1)
			{
				$elit=3;
				$counters=$counters+1;
				$elit=0;
				array_push($start,$currentstart);
				$currentfinish=$i-1;
				array_push($finish,$currentfinish);
				if(start($arr[$i])==1)
				{
					$elit=1;
					$currentstart=$i+1;
				}
			}
			else
			{
				if(start($arr[$i])==1)
				{
					$elit=1;
					$currentstart=$i+1;
				}
				else
				{
					$elit=0;
				}
			}
			continue;
		}
	}
	if($deleter==0)
	{
		if($elit==0)
		{
			if(start($arr[$i])==1)
			{
				$elit=1;
			}
			continue;
		}
		if($elit==1)
		{
			if(continues($arr[$i])==1)
			{
				$elit=2;
			}
			elseif(start($arr[$i])==1)
			{
				$elit=1;
			}
			else
			{
				$elit=0;
			}
			continue;
		}
		if($elit==2)
		{
			if(continues($arr[$i])==1)
			{
				$elit=2;
			}
			elseif(ender($arr[$i])==1)
			{
				$elit=3;
				$counters=$counters+1;
				$elit=0;
				if(start($arr[$i])==1)
				{
					$elit=1;
				}
				if($counters==29)
				{
					$deleter=1;
					if(start($arr[$i])==1)
					{
						$currentstart=$i+1;
					}
				}
			}
			else
			{
				if(start($arr[$i])==1)
				{
					$elit=1;
				}
				else
				{
					$elit=0;
				}
			}
			continue;
		}
	}
}
echo "<br>";
for($i=0;$i<count($start);$i++)
{
	$strstr=array();
	for($j=$start[$i];$j<$finish[$i]+1;$j++)
	{
		$arr[$j]="~";
	}
}
$text53=implode($arr);
$text54=str_replace("~","",$text53);
echo $text54;
?>
