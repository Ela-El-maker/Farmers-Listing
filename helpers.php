<?php

/**
 * Get the base path 
 * 
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}


/**
 * Load a view
 * @param string $name
 * @return void
 */

function loadView($name)
{
    $viewPath = basePath("views/{$name}.view.php");

    // inspect($viewPath);

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View not found: {$name}.view.php";
    }
}


function loadRenterView($name)
{
    $viewPath = basePath("views/renter/{$name}.view.php");

    // inspect($viewPath);

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View not found: {$name}.view.php";
    }
}

function loadRenteeView($name)
{
    $viewPath = basePath("views/rentee/{$name}.view.php");

    // inspect($viewPath);

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View not found: {$name}.view.php";
    }
}


/**
 * Load a partial
 * 
 * @param string $name
 * @return void
 */

function loadPartial($name)
{
    $partialPath = basePath("views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial not found: {$name}.php";
    }
}

/**
 * Load a Renter dashboards
 * 
 * @param string $name
 * @return void
 */

function renterPartial($name)
{
    $partialPath = basePath("views/renter/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Renter Partial not found: {$name}.php";
    }
}

/**
 * Load a Rentee dashboards
 * 
 * @param string $name
 * @return void
 */

function renteePartial($name)
{
    $partialPath = basePath("views/rentee/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Renteee Partial not found: {$name}.php";
    }
}


/***
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void
 */

function inspect($value)
{
    echo "<pre>";
    print_r($value);
    var_dump($value);
    echo "</pre>";
}

/***
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 */

function inspectAndDie($value)
{
    echo "<pre>";
    //  print_r($value);
    die(var_dump($value));
    echo "</pre>";
}
