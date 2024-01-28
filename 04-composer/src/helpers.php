<?php 

if ( !function_exists('upper') ) {
    function upper($value)
    {
        return Text\Format::upperText($value);
    }
}
