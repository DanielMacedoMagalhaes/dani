<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');

############################################################
include_once "inc/conectabd.inc.php";

$query = 'SELECT faixaEtaria, count(*) as qtdCasos FROM `tb_estatistica_df` group by faixaEtaria';
if ($result = mysqli_query($link, $query)) {
  
    while ($row = mysqli_fetch_assoc($result)) {
        $faixaEtaria = $row["faixaEtaria"];
        $qtdCasos = $row["qtdCasos"];

        $data[] = $qtdCasos;
        $faixa_Etaria[] = $faixaEtaria;
    }
    
      mysqli_free_result($result);
}
mysqli_close($link);

############################################################
// qtdCasos
#$data = array(40,60,21,33);
 
$graph = new PieGraph(600,400);
$graph->SetShadow();
 
$graph->title->Set("Quantidade de casos de COVID19 no df");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
 
$gDateLocale->Set('');
$p1 = new PiePlot($data);
$p1->SetLabelType(PIE_VALUE_ABS);
$p1->value->setformat("%d");
$p1->value->show();
//legendas = Faixas etarias
$p1->SetLegends($faixa_Etaria);
$p1->SetCenter(0.4);
 
$graph->Add($p1);
$graph->Stroke();
 
?>