/*********************
 Name: Mia Ehrlich
 Final Project
 Purpose: This is a .js file that connects to the nytimes api, searches their db using the search terms from a form, and
 returns the response (articles) to the user in the html. Some styles were applied to the response html due to issues
 with the cascade in css and ease of use.
 **********************/

"use strict";
// Defining a baseURL and key to as part of the request URL

const baseURL = 'https://api.nytimes.com/svc/search/v2/articlesearch.json';
const key = 'jyKciGhfOt79b6cECdMqYlahSHBWJG4F';
let url;

// Grab references to all the DOM elements you'll need to manipulate

const searchTerm = $('.search');
const startDate = $('.start-date');
const endDate = $('.end-date');
const searchForm = $('form');

const nextBtn = $('.next');
const previousBtn = $('.prev');

const section = $('section');
const nav = $('.results-nav');

// Hide the "Previous"/"Next" navigation to begin with, as we don't need it immediately
nav.style.visibility = 'hidden';

// define the initial page number and status of the navigation being displayed
let pageNumber = 0;

// Event listeners to control the functionality
searchForm.addEventListener('submit', submitSearch);
function submitSearch(e) {
    pageNumber = 0;
    fetchResults(e);
}

function fetchResults(e) {
    // Use preventDefault() to stop the form submitting
    e.preventDefault();

    // Assemble the full URL
    url = baseURL + '?api-key=' + key + '&page=' + pageNumber + '&q=' + searchTerm.value + '&fq=document_type:("article")';

    if(startDate.val() !== '') {
        url += '&begin_date=' + startDate.value;
    };

    if(endDate.val() !== '') {
        url += '&end_date=' + endDate.value;
    };

    // Use fetch() to make the request to the API
    fetch(url).then(function(result) {
        return result.json();
    }).then(function(json) {
        displayResults(json);
    });

    function displayResults(json) {
        while (section.firstChild) {
            section.removeChild(section.firstChild);
        }

        const articles = json.response.docs;

        // Show article nav buttons if there are more than 10 articles
        if(articles.length === 10) {
            nav.style.visibility = 'visible';
        } else {
            nav.style.visibility = 'hidden';
        }

        if(articles.length === 0) {
            const para = document.createElement('p');
            para.textContent = 'No results returned.'
            section.appendChild(para);
        } else {
            for(var i = 0; i < articles.length; i++) {
                const article = document.createElement('article');
                const heading = document.createElement('h2');
                const link = document.createElement('a');
                const img = document.createElement('img');
                const para1 = document.createElement('p');
                const para2 = document.createElement('p');
                const clearfix = document.createElement('div');

                let current = articles[i];
                console.log(current);

                link.href = current.web_url;
                link.textContent = current.headline.main;
                para1.textContent = current.snippet;
                para2.textContent = 'Keywords: ';
                for(let j = 0; j < current.keywords.length; j++) {
                    const span = document.createElement('span');
                    span.textContent += current.keywords[j].value + ' ';
                    para2.appendChild(span);
                }

                if(current.multimedia.length > 0) {
                    img.src = 'http://www.nytimes.com/' + current.multimedia[0].url;
                    img.alt = current.headline.main;
                }

                clearfix.setAttribute('class','clearfix');

                article.appendChild(heading);
                heading.appendChild(link);
                article.appendChild(img);
                article.appendChild(para1);
                article.appendChild(para2);
                article.appendChild(clearfix);
                section.appendChild(article);

                // Styles taken care of by js due to cascade issues
                // I realize this breaks division of concerns and is not best practice
                clearfix.style.clear = 'both';
                img.style.width = '100%';
                img.style.maxWidth = '300px';
                link.style.color = '#86646C';
                para1.style.textAlign = 'left';
                para2.style.textAlign = 'left';
            }
        }
    }
}

nextBtn.addEventListener('click', nextPage);
previousBtn.addEventListener('click', previousPage);

function nextPage(e) {
    pageNumber++;
    fetchResults(e);
};

function previousPage(e) {
    if(pageNumber > 0) {
        pageNumber--;
    } else {
        return;
    }
    fetchResults(e);
};