/*********************
 Name: Mia Ehrlich
Final Project
 Purpose: This is a .js file using jquery for functionality that shows and hides stories on stories page
    and updates styling for important vs default stories
 **********************/
"use strict";
// Function to change image src for important stories
function importantStories() {
    if($('.story-type-1')) {
        $('.story-type-1').addClass('importantStory');
        $('.importantStory').children('img').attr('src', 'assets/images/zombie.png');
        $('.importantStory').children('a').children('h4').removeClass('font-weight-light');
        $('.importantStory').children('a').children('h4').addClass('font-weight-bold');
    }
}

function defaultStories() {
    if($('.story-type-0')) {
        $('.story-type-0').addClass('defaultStory');
        $('.defaultStory').children('a').children('h4').addClass('font-weight-light');
    }
}

$(document).ready(function () {
    importantStories();
    defaultStories();

    // Hide stories at page load
    $('.story').hide();

    // Show next paragraph when title is clicked
    $('.title').click(function () {
        $(this).next('p').toggle('slow');
    });
});

