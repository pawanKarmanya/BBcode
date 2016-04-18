<?php

require 'nbbc/nbbc.php';
$bb=new bbcode();

$bb-> AddRule('youtube', array(
    'mode'      =>  BBCODE_MODE_ENHANCED,
    'template'  =>  '<iframe class="youtube-player" width="640" height="385" src="http://www.youtube.com/embed/{$_content}"frameborder="0"></iframe>',
    'class'     =>  'block',
    'allow_in'  =>  null
    ));
$video="watch?v=";

$output="[youtube]nkS_Ar0Yad0[/youtube]";
$result=$bb->Parse($output);
echo $result;
$bbpara=new bbcode();
if(isset($_POST["para"])){
$para=$_POST["para"];

$text="[b][i]"."$para"."[/i][/b]";
$resultpara=$bbpara->Parse($text);
echo "<br><br>";
echo $resultpara;
}
?>