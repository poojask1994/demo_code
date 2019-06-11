$str = $_POST['input_string'];
$str = explode(" ",$str);
$x_var = $str[0];
$y_var = $str[1];
$z_var = $str[2];
$walk_string = $str[3];
$cntr = 0;
while($cntr<=strlen($walk_string)){

  if($z_var == 'S'){
      if($walk_string[$cntr]=='R'){
              if($cntr!=strlen($walk_string)){             
                 $x_var = $x_var - (int)$walk_string[$cntr+2];
              }                
        $z_var = 'W';
      }        
      if($walk_string[$cntr]=='L'){
        if($cntr!=strlen($walk_string))
         $x_var = $x_var + (int)$walk_string[$cntr+2];
        $z_var = 'E';
      }
  }
  else if($z_var == 'E'){
      if($walk_string[$cntr]=='R'){
        if($cntr!=strlen($walk_string))
         $y_var = $y_var - (int)$walk_string[$cntr+2];
        $z_var = 'S';
      }        
      if($walk_string[$cntr]=='L'){
        if($cntr!=strlen($walk_string))
         $y_var = $y_var + (int)$walk_string[$cntr+2];
        $z_var = 'N';
      }
  }
  else if($z_var == 'W'){
      
      if($walk_string[$cntr]=='R'){
        if($cntr!=strlen($walk_string))
         $y_var = $y_var + (int)$walk_string[$cntr+2];
        $z_var = 'N';
      }        
      if($walk_string[$cntr]=='L'){
          if($cntr!=strlen($walk_string)){
                $y_var = $y_var - (int)$walk_string[$cntr+2];              
          }                
        $z_var = 'S';
      }
  }
  
  else if($z_var == 'N'){
      if($walk_string[$cntr]=='R'){
        if($cntr!=strlen($walk_string))
         $x_var = $x_var + (int)$walk_string[$cntr+2];
        $z_var = 'E';
      }        
      if($walk_string[$cntr]=='L'){
        if($cntr!=strlen($walk_string))
         $x_var = $x_var - (int)$walk_string[$cntr+2];
        $z_var = 'W';
      }
  }    
  $cntr+=3;
}
echo $x_var." ".$y_var." ".$z_var;
