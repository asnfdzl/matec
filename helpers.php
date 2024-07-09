<?php

function asset($path) {
    return '/assets/' . trim($path, '/');
}