# PHP foreach Loop with unset() Issue

This repository demonstrates a common issue encountered when using the `unset()` function within a `foreach` loop in PHP.  Modifying the array being iterated over during the loop can lead to unexpected behavior and skipped elements.

The `bug.php` file contains code exhibiting this problem. The `bugSolution.php` file provides a corrected version with explanations.

**Problem:**
When using `unset()` to remove elements from an array while iterating through it with `foreach`, the internal pointer of the loop is not properly adjusted. This can cause elements to be skipped or unexpected results. 

**Solution:**
The solution is to iterate over a copy of the array or use a different approach, such as `array_filter()` which is shown in bugSolution.php