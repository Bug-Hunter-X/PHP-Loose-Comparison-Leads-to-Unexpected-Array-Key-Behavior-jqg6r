# PHP Loose Comparison with Array Keys

This repository demonstrates a subtle bug in PHP related to loose comparisons (`==`) when dealing with array keys.  The bug arises from PHP's type juggling during loose comparisons which can lead to unexpected results when comparing string and integer keys.

## Bug Description

The bug manifests when using loose comparison (`==`) with `key()` function which returns array key.  When comparing string and integer keys that are numerically equal, unexpected results occur due to PHP's type juggling during comparison.

## How to Reproduce

1. Clone this repository.
2. Run the `bug.php` file.  You will observe unexpected behavior.
3. Run the `bugSolution.php` file to see how to fix it.

## Solution

The solution is to use strict comparison (`===`) in comparisons to prevent PHP's type juggling, ensuring type safety when checking array keys.