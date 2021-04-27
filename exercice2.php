<?php
require_once('class/Vtt.php');
require_once('class/VeloDeRoute.php');

/*exercice 2 language courant
 1- on n'attend 2 parametres le $numMois = numéro du mois && $lang = la langue
 2- on initialise une variable tabMois a null
 3- si lang = 1 on enregistre le tableau $tabMoisSansZero dans la variable tabMois
 4- si lang = 2 on enregistre le tableau $tabMoisSansZeroEN dans la variable tabMois
 5- sinon on attribue par default le tableau $tabMoisSansZero a la variable tabMois
 6- pour finir la méthode intval($numMois) s'assure de bien récuperé un entier
*/
function excercice($numMois,$lang){
    $tabMoisSansZero=array(1=>'Janvier',2=>'Février',3=>'Mars',4=>'Avril',5=>'Mai',6=>'Juin',7=>'Juillet',8=>'Août',9=>'Septembre',10=>'Octobre',11=>'Novembre',12=>'Décembre');
    $tabMoisSansZeroEN=array(1=>'January',2=>'February',3=>'March',4=>'April',5=>'May',6=>'June',7=>'July',8=>'August',9=>'September',10=>'October',11=>'November',12=>'December');
    $tabMois=null;
    if($lang==1){
        $tabMois=Param::$tabMoisSansZero;
    }elseif($lang==2){
        $tabMois=Param::$tabMoisSansZeroEN;
    }else{
        $tabMois=Param::$tabMoisSansZero;
    }
    return $tabMois[intval($numMois)];
}

/* nouvelle fonction simplifié */
function Exo($numMois,$lang)
{
    $tabMoisSansZero=array(1=>'Janvier',2=>'Février',3=>'Mars',4=>'Avril',5=>'Mai',6=>'Juin',7=>'Juillet',8=>'Août',9=>'Septembre',10=>'Octobre',11=>'Novembre',12=>'Décembre');
    $tabMoisSansZeroEN=array(1=>'January',2=>'February',3=>'March',4=>'April',5=>'May',6=>'June',7=>'July',8=>'August',9=>'September',10=>'October',11=>'November',12=>'December');

    $lang == 1 ? $tabMois=$tabMoisSansZero : $tabMois=$tabMoisSansZeroEN;
    var_dump($tabMois[intval($numMois)]);
}
//Exo(6,1);

/*function test qui instancie les objets*/
function objet()
{
    $velo = new Velo('course','bleu','300');
    var_dump($velo);
    $vtt = new Vtt('vtt','rouge','500','30pouces','35','30');
    var_dump($vtt);
    $veloRoute = new VeloDeRoute('bmx','vert','100','50cm','carbone','casque');
    var_dump($veloRoute);
}
objet();

/*function tableau qui compte le nombre de jours des mois*/
function tabMois()
{
    $tab = array();
    $mois31 = array();
    $mois28 = array();
    $mois30 = array();

    for($i=0;$i<=11;$i++)
    {
        array_push($tab,date("t", mktime(null, null, null, $i, 1, 2021)));
    }

    foreach($tab as $mois => $nb)
    {
        if($nb == 31)
        {
            array_push($mois31, $mois);
        }
        if($nb == 28)
        {
            array_push($mois28, $mois);
        }
        if($nb == 30)
        {
            array_push($mois30, $mois);
        }
    }

    include 'index.php';
}
tabMois();
?>



