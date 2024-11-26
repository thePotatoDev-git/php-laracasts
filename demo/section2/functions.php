<?php 
    function dd($value) {
        echo '<pre>';
            var_dump($value);
        echo '</pre>';

        die();
    };

    // dd($_SERVER);

    
    function urlIs($value) {
        echo $_SERVER['REQUEST_URI'] === $value ? "block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" : "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white";
    };
?>