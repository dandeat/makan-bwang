print_r(strarr('2019-10-10','2019-10-12'));
function strarr($tgl1,$tgl2)
{
  $j=0;
  for ($i=strtotime($tgl1); $i<=strtotime($tgl2); $i+=86400) {  
       $array[$j]=date("Y-m-d", $i);  
       $j++;
  }  
  return $array;
}
