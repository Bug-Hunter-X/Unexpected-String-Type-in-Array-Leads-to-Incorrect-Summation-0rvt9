```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    if (!is_int($number)) {
      throw new InvalidArgumentException('Array elements must be integers.');
    }
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4];
$sum = calculateSum($numbers);
echo "Sum: " . $sum;

//Demonstrates the exception handling
try{
    $numbersWithInvalid = [1,2,3,'a'];
    $sum = calculateSum($numbersWithInvalid);
}catch (InvalidArgumentException $e){
    echo "Error: " . $e->getMessage();
}
```