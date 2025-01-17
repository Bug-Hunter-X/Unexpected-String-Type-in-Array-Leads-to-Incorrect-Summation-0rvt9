```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, '4']; //Notice the string '4'
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //The output will be unexpected
```