<?php
function getRequestParameter($name)
{
    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : '';
}

function getGetParameter($name)
{
    return isset($_GET[$name]) ? $_GET[$name] : '';
}

function getPostParameter($name)
{
    return isset($_POST[$name]) ? $_POST[$name] : '';
}


//function getFilter($filterValue, $filterName, $currentFilter = '')
//{
//    $filter = getRequestParameter($filterValue);
//    if ($filter)
//    {
//        if ($currentFilter)
//        {
//            $filter = "{$currentFilter} AND {$filterName} = '{$filterValue}''";
//        }
//        else
//        {
//            $filter = "{$filterName} = {$filterValue}";
//        }
//    }
//    return $filter;
//}