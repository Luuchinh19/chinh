Câu 1: 
<?php
//Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function isEven($number) {
    if ($number % 2 === 0){
        return true;
    } else {
        return false;
    }
}
$number = 4;
if ($number % 2 === 0) {
  echo "{$number} is even num";
} else {
  echo "{$number} is not even num";
}
?>
<br/>
Câu 2:
<?php
//Viết chương trình PHP để tính tổng của các số từ 1 đến n
function sumFromOneToN($n){
    $sum = 0;
    for ($i = 1; $i<= $n; $i++){
        $sum += $i;
    }
    return $sum;
}
$n = 5; 
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
  $sum += $i;
}
echo $sum;
?>
<br/>
Câu 3:
<?php
//Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
//function printMultiplicationTable() {
    //for ($i = 1; $i <= 10; $i++) {
      //echo "Bảng cửu chương {$i}:<br>";
      //for ($j = 1; $j <= 10; $j++) {
        //$result = $i * $j;
        //echo "{$i} x {$j} = {$result}<br>";
      //}
      //echo "<br>";
    //}
  //}
  //for ($i = 1; $i <= 10; $i++) {
    //echo "Bảng cửu chương {$i}:<br>";
    //for ($j = 1; $j <= 10; $j++) {
      //$result = $i * $j;
      //echo "{$i} x {$j} = {$result}<br>";
    //}
  //}
  //?>
  <br/>
Câu 4: 
 <?php
 //Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
  function containsWord($string, $word) {
    return strpos($string, $word) !== false;
}
$string = "Dollar bills";
$word = "world";

if (containsWord($string, $word)) {
    echo "Chuỗi '$string' chứa từ '$word'";
} else {
    echo "Chuỗi '$string' không chứa từ '$word'";
}
?>
<br/>
Câu 5:
<?php
//Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMinMax($array) {
    $min = $array[0];
    $max = $array[0];
    foreach ($array as $value) {
      if ($value < $min) {
        $min = $value;
      }
      if ($value > $max) {
        $max = $value;
      }
    }
    return array('min' => $min, 'max' => $max);
  }
  
  // Khai báo một mảng
  $array = array(5, 2, 7, 1, 9, 3);
  
  // Tìm giá trị lớn nhất và nhỏ nhất trong mảng
  $result = findMinMax($array);
  
  // Xuất ra kết quả
  echo "Min: " . $result['min'] . "<br>";
  echo "Max: " . $result['max'];
?>
<br/>
Câu 6: 
<?php
//Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần
function Ascending($array) {
    sort($array);
    return $array;
}

$array = [5, 3, 8, 2, 1, 9];
$arrange = Ascending($array);
echo "Array after sorting in ascending order: " . implode(", ", $arrange) . "<br>";
?>
Câu 7:
<?php
//Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function Factorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}
$n = 5;
$factorial = Factorial($n);
echo "The factorial of $n is: " . $factorial ."<br>";
?>
Câu 8: 
<?php 
//Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function findPrimes($start, $end) {
    $primes = [];
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

$start = 1;
$end = 20;
$primeNumbers = findPrimes($start, $end);
echo "The prime numbers between $start and $end are: " . implode(", ", $primeNumbers) . "<br>";
?>
Câu 9:
<?php
//Viết chương trình PHP để tính tổng của các số trong một mảng
function arraySum($array) {
    $sumArray = 0;
    foreach ($array as $number) {
        $sumArray += $number;
    }
    return $sumArray;
}

$array = [1, 2, 3, 4, 5];
$sumArray = arraySum($array);
echo "Sum array: " . $sumArray . "<br>";
?>
Câu 10: 
<?php
//Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
//Dãy số Fibonacci là một dãy số trong đó số tiếp theo bằng tổng của hai số trước đó. Ví dụ dãy số Fibonacci đầu tiên là:
//0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...
function Fibonacci($n) {
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

$n = 10;
$fibonacciNumbers = Fibonacci($n);
echo "The prime numbers between $start and $end are: " . implode(", ", $fibonacciNumbers) . "<br>";
?>
Câu 11: 
<?php
//Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
//Một số Armstrong là một số có số chữ số bằng tổng lũy thừa các chữ số của nó. Ví dụ: 153 là số Armstrong bởi vì 1^3 + 5^3 + 3^3 = 153.
function isArmstrong($number) {
$digits = str_split($number);
//tổng các lũy thừa
$sum = 0;
foreach ($digits as $digit){
  $sum += pow($digit, count($digits));
  //kiểm tra xem tổng có bằng số ban đầu không
  return $sum == $number;
}
}
if (isArmstrong(3)) {
  echo "This is Armstrong";
} else {
  echo "This is not Armstrong";
}
?>
<br/>
Câu 12:
<?php
//Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array, $element, $position) {
  //chèn phần tử vào vị trí $position của mảng $array
  array_splice($array, $position, 0, $element);
  //trả về mảng đã chèn
  return $array;
}
$array = ["Everyone", "silent"];
$element = "listen to my money talk";
$position = 3;
$result = insertElement($array, $element, $position);
print_r($result);
?>
<br/>
Câu 13:
<?php
//Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDulicates($array){
  // Sử dụng hàm array_unique để loại bỏ các phần tử trùng lặp
  $result = array_unique($array);
  return $result;
}
$array = ["Yeah", "eryone", "know", "what","I", "mean", "mean"];
$result = removeDulicates($array);
print_r ($result);
?>
<br/>
Câu 14:
<?php
//Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findIndex($arr, $x)
{ //sử dụng hàm `array_search()` để tìm kiếm giá trị `$x` trong mảng `$arr`.
  // Hàm này sẽ trả về vị trí của giá trị nếu tìm thấy, và `false` nếu không tìm thấy
  $index = array_search($x, $arr);
  
  return $index !== false ? $index : -1;
}
//khởi tạo mảng
$arr = array( 1, 3, 5, 7, 9, 11 );
//tìm vị trí
$x = 1;
//kiểm tra xem có tìm thấy hay không
$index = findIndex($arr, $x);
if($index != -1){
  echo "Vị trí của " . $x . " trong mảng là: " . ($index + 1) ;
} else {
  echo "Không tìm thấy " . $x . " trong mảng ";
}
?>
<br/>
Câu 15:
<?php
//Viết hàm PHP để đảo ngược một chuỗi.
function reverseString($str){
  $n = strlen($str);
  $reversed = "";
  for ($i = $n -1; $i >= 0; $i--){
    $reversed .= $str[$i];
  }
  return $reversed;
  //việc đảo ngược chuỗi được thực hiện trong hàm `reverseString($str)` bằng cách duyệt qua các ký tự từ cuối về đầu và 
  //dùng phép gán chuỗi (`.=`) để thêm ký tự tại vị trí `$i` vào biến `$reversed`
}
$str = "When they see green";
$reversedString = reverseString($str);
echo $reversedString;
?>
<br/>
Câu 16:
<?php
//Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($arr) {
  $count = 0;
  for ($i = 0; $i < count($arr); $i++) {
    $count++;
    //dùng phép tăng `$count++` để đếm số lượng phần tử
  }
  return $count;
  //Kết quả trả về của hàm là giá trị của biến `$count`
}

// Sử dụng hàm để tính số lượng phần tử trong mảng
$myArray = array(1, 2, 3, 4, 5);
$countElements = countElements($myArray);
//hàm `countElements($arr)` bằng cách duyệt qua các phần tử trong mảng
echo $countElements;
?>
<br/>
Câu 17:
<?php
//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
//Một chuỗi Palindrome là chuỗi mà khi được đọc từ trái sang phải hay từ phải sang trái đều cho kết quả giống nhau. Ví dụ: "radar", "level", "deified" là những chuỗi Palindrome.
function isPalindrome($str){
  $n = strlen($str);
  //vòng lặp `for` để duyệt qua các ký tự trong chuỗi và so sánh ký tự ở vị trí `$i` với ký tự ở vị trí `strlen($str) - 1 - $i`.
  for ($i = 0; $i <$n/2; $i++){
    if ($str[$i] != $str[$n - 1 - $i]) 
    {
      return false;
    }
  }
  return true;
  //nếu tất cả các ký tự đều giống nhau thì chuỗi đó là chuỗi Palindrome.
}
$string = "radar";
$isPalindrome = isPalindrome($string);
if ($isPalindrome) {
  echo "\"$string\" is Palindrome.";
} else {
  echo "Chuỗi \"$string\" is not Palindrome.";
}
?>
<br/>
Câu 18:
<?php
//Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($arr, $val) {
  // hàm `countOccurrences($arr, $val)` đếm số lần xuất hiện...  bằng cách duyệt qua từng phần tử trong mảng  
  $count = 0;
  for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] === $val) {
      $count++;
      //dùng phép tăng `$count++` để đếm số lần xuất hiện của phần tử `$val`
    }
  }
  return $count;
}

// Sử dụng hàm để đếm số lần xuất hiện của phần tử trong mảng
$myArray = array(1, 2, 3, 4, 4,7,9,7,9,6,4, 5);
$countOccurrences = countOccurrences($myArray, 4);
echo $countOccurrences;
?>
<br/>
Câu 19:
<?php
//Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần
function sortDescending($arr){
  rsort($arr);
  return array_slice($arr, 0, 9);//giới hạn mảng thành phần
}
// mảng `$myArray` theo thứ tự giảm dần được thực hiện trong hàm `sortDescending($arr)` bằng cách sử dụng hàm `rsort()` với tham số là mảng `$arr
$myArray = array(1,2,3,4,5,6,7,8,9);
$myArrayDescending = sortDescending($myArray);
print_r($myArrayDescending);
?>
<br/>
Câu 20:
<?php
//Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
// hàm thêm phần tử vào đầu mảng
function addFirstElement($arr, $value) {
  array_unshift($arr, $value);
  return $arr;
  //`addFirstElement($arr, $value)` sử dụng hàm `array_unshift()` để thêm một phần tử vào đầu mảng.
}
// sử dụng hàm để thêm phần tử vào đầu mảng
$myArray = array(2,3,4);
$myArrayWithAddedFirstElement = addFirstElement($myArray, 1);
print_r($myArrayWithAddedFirstElement);
echo "<br>";

// hàm thêm phần tử vào cuối mảng
function addLastElement($arr, $value) {
  array_push($arr, $value);
  return $arr;
  //addLastElement($arr, $value)` sử dụng hàm `array_push()` để thêm một phần tử vào cuối mảng.
}
// sử dụng hàm để thêm phần tử vào cuối mảng
$myArray = array(5,6,7);
$myArrayWithAddedLastElement = addLastElement($myArray, 8);
print_r($myArrayWithAddedLastElement); 
?>
<br/>
Câu 21:
<?php
//Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($arr) {
  // Tìm giá trị lớn nhất
  $max = max($arr);

  // Loại bỏ giá trị lớn nhất ra khỏi mảng
  $arr = array_diff($arr, [$max]);

  // Nếu mảng đã trở thành rỗng thì trả về null
  if (count($arr) === 0) {
      return null;
  }

  // Trả về giá trị lớn thứ hai
  return max($arr);
}
$arr = [3, 7, 2, 9, 5, 8, 4];
$secondLargest = findSecondLargest($arr);

if ($secondLargest === null) {
    echo "There is no second largest number in the array";
} else {
    echo "Second largest number in " . implode(", ", $arr) . " is: " . $secondLargest;
}
?>
<br/>
Câu 22:
<?php
//Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function gcd($a, $b) {
  while ($b != 0) {
    //Cố định số aa, vòng lặp while sẽ lặp cho đến khi bb bằng 0
      $t = $b;
      //Trong mỗi lần lặp, giá trị bb được gán cho a %ab và giá trị aa được lưu trữ vào biến tạm thời tt.
      $b = $a % $b;
      $a = $t;
  }
  return $a;
  //Khi vòng lặp kết thúc, giá trị aa sẽ là ước số chung lớn nhất của num1num1 và num2num2, và giá trị này được trả về.
}

function lcm($a, $b) {
  return ($a * $b) / gcd($a, $b);
}

$num1 = 12;
$num2 = 18;

echo "Uoc so chung lon nhat cua $num1 va $num2 la: " . gcd($num1, $num2) . "<br>";
echo "Boi so chung nho nhat cua $num1 va $num2 la: " . lcm($num1, $num2);
?>
<br/>
Câu 23:
<?php
//Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
//Một số được gọi là số hoàn hảo nếu tổng tất cả các ước số proper (ước số khác chính nó) của nó bằng chính nó
function isPerfectNumber($num) {
  $sum = 0;

  for ($i = 1; $i <= $num/2; $i++) {
      if ($num % $i == 0) {
          $sum += $i;
      }
  }
//Nếu phần dư của `$ num` chia cho `$ i` bằng 0, nghĩa là `$ i` là một ước số proper của `$ num,` do đó ta thêm `$ i` vào tổng ước số (`$ sum`).
  if ($sum == $num) {
      return true;//nếu `$ sum` bằng `$ num`, thì `$ num` là một số hoàn hảo, và chương trình trả về `true`. 
  } else {
      return false;//`$ num` không phải là số hoàn hảo và chương trình trả về `false`
  }
}
$num = 28;

if (isPerfectNumber($num)) {
    echo "$num is perfect number";
} else {
    echo "$num is not perfect number";
}
?>
<br/>
Câu 24:
<?php
//Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOddNumber($arr) {
  $largestOdd = null;

  for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] % 2 !== 0) { // Nếu phần tử này là số lẻ
          if ($largestOdd === null || $arr[$i] > $largestOdd) { // Nếu chưa tìm được số lẻ hoặc phần tử này lớn hơn số lẻ đã tìm thấy
              $largestOdd = $arr[$i]; // Cập nhật giá trị số lẻ lớn nhất
          }
      }
  }

  return $largestOdd;
}
$arr = [2, 5, 7, 9, 4, 6, 8];
$largestOdd = findLargestOddNumber($arr);

if ($largestOdd === null) {
    echo "There are no odd numbers in the array";
} else {
    echo "Largest odd number in array" . implode(", ", $arr) . " is: " . $largestOdd;
}
?>
<br/>
Câu 25:
<?php
//Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrimeNumber($num) {
  if ($num <= 1) {
      return false;
  }

  for ($i = 2; $i <= sqrt($num); $i++)
  //vòng lặp for để duyệt qua tất cả các số từ 2 đến căn bậc hai của số đang xét
   {
      if ($num % $i === 0) { //Nếu số đó chia hết cho một trong những số đó, nghĩa là nó không phải là số nguyên tố
          return false;
      }
  }

  return true;  //Nếu một số không được chia hết bởi bất kỳ số nào từ 2 đến căn bậc hai của nó, thì nó là số nguyên tố và chương trình trả về `true`.
}
$num = 17;

if (isPrimeNumber($num)) {
    echo "$num is prime";
} else {
    echo "$num is not prime";
}
?>
<br/>
Câu 26:
<?php
//Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositiveNumber($arr) {
  $largestPositive = null;

  for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] > 0) { // Nếu phần tử này là số dương kiểm tra với số 0
          if ($largestPositive === null || $arr[$i] > $largestPositive) { // Nếu chưa tìm được số dương hoặc phần tử này lớn hơn số dương đã tìm thấy
              $largestPositive = $arr[$i]; // Cập nhật giá trị số dương lớn nhất
          }
      }
  }

  return $largestPositive;
}
$arr = [-2, 5, 7, -9, 4, 6, -8];
$largestPositive = findLargestPositiveNumber($arr);

if ($largestPositive === null) {
    echo "There are no positive numbers in the array";
} else {
    echo "Largest positive number in array " . implode(", ", $arr) . " is: " . $largestPositive;
}
?>
<br/>
Câu 27:
<?php
//Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegativeNumber($arr) {
  $largestNegative = null;

  for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] < 0) { // Nếu phần tử này là số âm
          if ($largestNegative === null || $arr[$i] > $largestNegative) { // Nếu chưa tìm được số âm hoặc phần tử này lớn hơn số âm đã tìm thấy
              $largestNegative = $arr[$i]; // Cập nhật giá trị số âm lớn nhất
          }
      }
  }

  return $largestNegative;
}
$arr = [-2, 5, 7, -9, 4, -6, -8];
$largestNegative = findLargestNegativeNumber($arr);

if ($largestNegative === null) {
    echo "There are no negative numbers in the array";
} else {
    echo "Largest negative number in array " . implode(", ", $arr) . " is: " . $largestNegative;
}
?>
<br/>
Câu 28:
<?php
//Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOfOddNumbers($n) {
  $sum = 0;
  for ($i = 1; $i <= $n; $i++) {
      if ($i % 2 != 0) { // Kiểm tra xem số đó có phải số lẻ hay không, chia cho 2
          $sum += $i;// nếu là số lẻ thì cộng giá trị vào biến tổng $sum
      }
  }
  return $sum;
}
$n = 10;
$sum = sumOfOddNumbers($n);
echo "Sum of odd numbers from 1 to " . $n . " is: " . $sum;
?>
<br/>
Câu 29:
<?php
//Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquaresInRange($start, $end) {
  $perfectSquares = array();

  for ($i = $start; $i <= $end; $i++) { 
      $squareRoot = sqrt($i);//tính căn bậc hai
      if ($squareRoot == floor($squareRoot)) { // Nếu căn bậc 2 của số này là một số nguyên
          $perfectSquares[] = $i; // Thêm số này vào mảng các số chính phương
      }
  }

  return $perfectSquares;
}
$start = 1;
$end = 20;
$perfectSquares = findPerfectSquaresInRange($start, $end);

echo "Perfect squares in the range from" . $start . " to " . $end . " is: ";
echo implode(", ", $perfectSquares);
?>
<br/>
Câu 30:
<?php
//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($str, $substr) {
  if (strpos($str, $substr) !== false) {
      return true;
  } else {
      return false;
  }
}
$str = "hello world";
$substr1 = "world";
$substr2 = "john";

if (isSubstring($str, $substr1)) {
    echo $substr1 . " là chuỗi con của " . $str;
} else {
    echo $substr1 . " không phải là chuỗi con của " . $str;
}

echo "<br>";

if (isSubstring($str, $substr2)) {
    echo $substr2 . " là chuỗi con của " . $str;
} else {
    echo $substr2 . " không phải là chuỗi con của " . $str;
}
?>