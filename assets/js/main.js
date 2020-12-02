/*********************
 Name: Mia Ehrlich
 Final Project
 Purpose: This is a main.js file. It's only role is to remove focus from buttons after clicking
 **********************/

"use strict";
$(document).ready(function() {
    /* Remove focus from buttons after click event */

    $('button').mouseup(function () {
        this.blur();
    });
});