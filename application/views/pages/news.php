<!--
Name: Mia Ehrlich
Final Project
Purpose: This is the search page template to search for articles in the NYTimes database and present them to the user.
It is mobile first, responsive, and uses  bootstrap and jquery.
-->

<div class="form-container container-fluid">
    <h1 class="display-4 text-center text-white mt-3 mb-2">Article Search</h1>
    <p class="text-secondary text-center pb-2">Check the New York Times for articles. Enter your search criteria below.</p>
    <form class=" text-secondary mx-auto my-0">
        <div class="text-center">
                <label for="search">Enter a SINGLE search term (required): </label>
                <input type="text" id="search" class="search" required>
            </div>
            <div class="text-center">
                <label for="start-date">Enter a start date (format YYYYMMDD): </label>
                <input type="date" id="start-date" class="start-date" pattern="[0-9]{8}">
            </div>
            <div class="text-center">
                <label for="end-date">Enter an end date (format YYYYMMDD): </label>
                <input type="date" id="end-date" class="end-date" pattern="[0-9]{8}">
            </div>
            <div class="text-center mt-3">
                <button class="submit btn btn-secondary rounded">Submit search</button>
            </div>
        </form>
    </div>

    <div class="results">
        <nav class="results-nav search-nav">
            <button class="prev btn btn-secondary rounded float-left">Previous 10</button>
            <button class="next btn btn-secondary rounded float-right ">Next 10</button>
        </nav>

        <section class="text-center pt-5">
        </section>
    </div>

</div>
