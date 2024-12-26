function foo(array $arr): void {
  foreach ($arr as $value) {
    // Some code that could potentially cause an error
    if ($value === null) {
      return; //Should not return
    }
    //More code
  }
}