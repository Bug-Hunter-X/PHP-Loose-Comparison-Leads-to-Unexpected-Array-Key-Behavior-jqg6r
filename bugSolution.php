The solution involves using strict comparison (`===`) instead of loose comparison (`==`) to avoid the type juggling that causes the unexpected results.  Here's the corrected code:

```php
<?php
$myArray = array("1" => "one", 1 => "two");

if ("1" === key($myArray)) {
  echo "Key is 1 (string)";
} else {
  echo "Key is something else";
}
?>
```

Using strict comparison (`===`) ensures that both the value and type are checked, eliminating the unexpected behavior caused by loose comparison.