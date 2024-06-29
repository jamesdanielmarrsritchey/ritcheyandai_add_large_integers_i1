<?php
function addLargeNumbers(string $num1, string $num2): string {
    // Reverse both numbers to start addition from the least significant digit
    $num1 = strrev($num1);
    $num2 = strrev($num2);
    
    // Determine the longest number
    $maxLength = max(strlen($num1), strlen($num2));
    
    $carry = 0;
    $result = '';
    
    // Loop through each digit and perform addition
    for ($i = 0; $i < $maxLength; $i++) {
        // Get current digits; assume 0 if the digit is not available
        $digit1 = $i < strlen($num1) ? (int)$num1[$i] : 0;
        $digit2 = $i < strlen($num2) ? (int)$num2[$i] : 0;
        
        // Add current digits and the carry from the previous addition
        $sum = $digit1 + $digit2 + $carry;
        
        // If sum is 10 or more, set carry to 1 and subtract 10 from sum
        if ($sum >= 10) {
            $carry = 1;
            $sum -= 10;
        } else {
            $carry = 0;
        }
        
        // Append current sum to the result
        $result .= $sum;
    }
    
    // If there's a carry left after the final addition, append it to the result
    if ($carry > 0) {
        $result .= $carry;
    }
    
    // Reverse the result to get the final sum
    return strrev($result);
}
?>