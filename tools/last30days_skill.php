<?php
// Wrapper for the 30‑day skill
// This file provides a simple function to invoke the existing last30days_skill tool
// and returns its JSON result. Adjust the implementation as needed.

function call_last30days_skill($topic, $compareWith = null) {
    $input = ['topic' => $topic];
    if ($compareWith !== null) {
        $input['compare_with'] = $compareWith;
    }
    // Use the built‑in tool if available
    $result = json_decode(shell_exec('php -r "echo json_encode(call_user_func(\'last30days_skill\', ' . var_export($input, true) . '));"'), true);
    return $result;
}

// Example usage (can be removed in production)
if (php_sapi_name() === 'cli') {
    $topic = $argv[1] ?? 'AI';
    $res = call_last30days_skill($topic);
    echo json_encode($res, JSON_PRETTY_PRINT);
}
?>