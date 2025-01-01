function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'some_value') {
      unset($arr[$key]); //This is the problematic line!
    }
  }
  return $arr; 
}