<?php

// funkcija bez parametara

function writeName()
{
    echo "Hello Alex <br>";
}

writeName();

// funkcijasa jednim parametrom

function writeNameOfYourFavorite(string $name) : void
{
    echo "Hello Alex";
}

writeName('Mario');