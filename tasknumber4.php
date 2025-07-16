<?php
header("Content-Type: text/html; charset=UTF-8");
$text = '
<p class="big">
	Год основания:<b>1589 г.</b> Волгоград отмечает день города в <b>2-е воскресенье сентября</b>. <br>В <b>2023 году</b> эта дата - <b>10 сентября</b>.
</p>
<p class="float">
	<img src="https://www.calend.ru/img/content_events/i0/961.jpg" alt="Волгоград" width="300" height="200" itemprop="image">
	<span class="caption gray">Скульптура «Родина-мать зовет!» входит в число семи чудес России (Фото: Art Konovalov, по лицензии shutterstock.com)</span>
</p>
<p>
	<i><b>Великая Отечественная война в истории города</b></i></p><p><i>Важнейшей операцией Советской Армии в Великой Отечественной войне стала <a href="https://www.calend.ru/holidays/0/0/1869/">Сталинградская битва</a> (17.07.1942 - 02.02.1943). Целью боевых действий советских войск являлись оборона  Сталинграда и разгром действовавшей на сталинградском направлении группировки противника. Победа советских войск в Сталинградской битве имела решающее значение для победы Советского Союза в Великой Отечественной войне.</i>
</p>';
echo "Изначальный текст";
echo $text;
echo "<br>";
$pattern="/(?<=[ |>|-|(|\n|\t])[0-9а-яА-ЯёЁa-zA-Z]{1,}(?=[ |<|)|.|!|-|:|,])|(?<=[.])[0-9а-яА-ЯёЁa-zA-Z]{1,}(?=[)])|(?<=[.])[0-9]{1,}(?=[.])|(?<=[.])[0-9]{1,}(?=[ ])|(?<=[.])[0-9]{1,}(?=[)])/Uu";
$text2=preg_match_all($pattern,$text,$matches2);
for($i=0;$i<29;$i++)
{
	if($i<28)
		$text=preg_replace($pattern,$matches2[0][$i]."+++++",$text,1);
	if($i==28)
		$text=preg_replace($pattern,$matches2[0][$i]."+++++...",$text,1);
}
$text10=preg_replace($pattern,"",$text);
$pattern3="/[+][+][+][+][+]/u";
$text11=preg_replace($pattern3,"",$text10);
$pattern4="/[>][ |.|(|)|-]{1,}[.|(|)|-]{1,}[ |.|(|)|-]{1,}[<]/";
$text12=preg_replace($pattern4,"",$text11);
$pattern5="/(?<=[.][.][.])[^<]{1,}(?=[<])/u";
$text13=preg_replace($pattern5,"",$text12);
$pattern6="/[<][^>]{1,}[>][ |\n|\t]{1,}[<][\/][^>]{1,}[>])/u";
$text14=$text13;
while($text14!=$text13)
{
	$text14=$text13;
	$text13=preg_replace($pattern6,"",$text13);
}
echo "Итоговый текст";
echo $text13;
?>