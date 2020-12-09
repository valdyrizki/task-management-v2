<?php

function getPriorityName($e){
    $result = '';
    switch ($e) {
        case 1:
            $result = 'Low';
            break;

        case 2:
            $result = 'Medium';
            break;

        case 3:
            $result = 'High';
            break;
        default:
            $result = 'Low';
            break;
    }

    return $result;
}

function getStatusName($e){
    $result = '';
    switch ($e) {
        case 1:
            $result = 'Active';
            break;

        case 2:
            $result = 'Need Review';
            break;

        case 3:
            $result = 'Done';
            break;

        case 9:
            $result = 'Cancel';
            break;

        default:
            $result = 'Active';
            break;
    }

    return $result;
}

function levelToString($e){
    $result = '';
    switch ($e) {
        case 1:
            $result = 'Employee';
            break;

        case 2:
            $result = 'Leader';
            break;

        case 99:
            $result = 'Super User';
            break;

        default:
            $result = 'Employee';
            break;
    }

    return $result;
}
