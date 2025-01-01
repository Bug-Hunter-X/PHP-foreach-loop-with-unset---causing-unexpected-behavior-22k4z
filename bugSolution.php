function foo(array $arr) {
  //Create a copy of the array
  $arrCopy = $arr;
  foreach ($arrCopy as $key => $value) {
    if ($value === 'some_value') {
      unset($arr[$key]);
    }
  }
  return $arr;
}
//Alternative Solution using array_filter
function foo2(array $arr) {
  return array_filter($arr, function($value) { return $value !== 'some_value';});
}