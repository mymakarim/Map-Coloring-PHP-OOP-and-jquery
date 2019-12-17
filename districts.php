<?php

class districts
{
  private $name;
  private $neighbors;
  private $color;
  private $colors = array(0,1,2);
  function __construct($name){
    $this->name = $name;
  }
  function districtColor(){
    if ($this->color == 0) {
      return "red";
    } elseif ($this->color == 1) {
      return "green";
    } elseif ($this->color == 2) {
      return "blue";
    } else {
      return "none";
    }
  }
  function neighbors(...$v){
    $this->neighbors = $v;
  }
  function districtName(){
    return $this->name;
  }
  function getNeighbors(){
    return $this->neighbors;
  }
  function resetDistrictColor($s){
    $this->colors[$s] = -1;
  }
  function setDistrictColor(){
    $c = 0;
    for ($i = 0; $i < 3; $i++) {
      if ($this->colors[$i] != -1) {
        if ($c == $i) {
          foreach ($this->neighbors as $v) {
            $this->color = $c;
            $v->resetDistrictColor($i);
          }
          break;
        }
        else {
          $c++;
        }
      }
      else {
        $color = -1;
        $c++;
      }
    }
  }
 

}

$Kunduz = new districts("Kunduz");
$ChaharDara = new districts("ChaharDara");
$AliAbad = new districts("AliAbad");
$KhanAbad = new districts("KhanAbad");
$Archi = new districts("Archi");
$QalaQazi = new districts("QalaQazi");
$ImamSahib = new districts("ImamSahib");
$Kunduz->neighbors($QalaQazi, $ChaharDara, $AliAbad, $KhanAbad, $Archi, $ImamSahib);
$ChaharDara->neighbors($QalaQazi, $AliAbad, $Kunduz);
$AliAbad->neighbors($ChaharDara, $Kunduz, $KhanAbad);
$KhanAbad->neighbors($AliAbad, $Kunduz, $Archi);
$Archi->neighbors($KhanAbad, $Kunduz, $ImamSahib);
$QalaQazi->neighbors($ChaharDara, $Kunduz);
$ImamSahib->neighbors($Kunduz, $Archi,$ImamSahib);
$districtss = array($Kunduz, $ChaharDara, $AliAbad, $KhanAbad, $Archi, $QalaQazi, $ImamSahib);
foreach($districtss as $v){
  $v->setDistrictColor();
}
foreach($districtss as $v){ ?>
  <input type="text" name="<?php echo $v->districtName(); ?>" value="<?php echo $v->districtColor(); ?>">
<?php } ?>
