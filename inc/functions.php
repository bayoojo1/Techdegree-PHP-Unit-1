<?php 
/*  PHP - Random Quote Generator
    Author: Ojo Adebayo Samuel
    Project: Techdegree PHP Unit-1 Project
*/ 
// Multi-dimensional Array for the quotes.
$quotes = array();
$quotes[] = array(
    'quote' => 'It is safer and wiser to cure unhealthy rivalry than to suppress it.',
    'source' => 'Chief Obafemi Awolowo',
    'citation' => 'Path to Nigeria Greatness',
    'year' => '1981',
    'tag' => 'Politics',
);
$quotes[] = array(
    'quote' => 'All our dreams can come true, if we have the courage to pursue them.',
    'source' => 'Walt Disney',
    'citation' => 'NG.OBELIO.COM',
    'tag' => 'Life',
);
$quotes[] = array(
    'quote' => 'The secret of getting ahead is getting started. The secret of getting started is breaking your complex overwhelming tasks into small manageable tasks, and starting on the first one.',
    'source' => 'Mark Twain',
    'citation' => 'The Innocent Abroad',
    'year' => '1869',
    'tag' => 'Business',
);
$quotes[] = array(
    'quote' => 'The best time to plant a tree was 20 years ago. The second best time is now.',
    'source' => 'Chinese Proverb',
    'citation' => 'Twitter',
    'tag' => 'Business',
);
$quotes[] = array(
    'quote' => 'Our greatest glory is not in never falling, but in rising each time we fall.',
    'source' => 'Confucius',
    'year' => 'Unknown',
    'tag' => 'Life',
);
$quotes[] = array(
    'quote' => 'Every morning, open your arms awhile, upon the window seal of heaven, and gaze upon the Lord. With that sight in your mind, turn strong to meet the day.',
    'source' => 'Norman Vincent Pearl',
    'citation' => 'The power of positive thinking',
    'year' => '1952',
    'tag' => 'Religion',
);
$quotes[] = array(
    'quote' => 'Everything you can imagine is real.',
    'source' => 'Pablo Picasso',
    'citation' => 'Wikipedia',
    'year' => '1881',
    'tag' => 'Arts',
);

// The getRandomQuuote function that randomly returns the array of quotes by index
function getRandomQuote($quotes) {
    return $quotes[rand(0, 6)]; 
}



// The printQuote funtion. 
function printQuote($quotes) {
    // Call the getRandomQuote function and store the resulting array in results variable
    $results = getRandomQuote($quotes);
    // Create each of the object in the array and store them in variables. 
    $quote = $results['quote'];
    $source = $results['source'];
    // Check if citation object exist, if not return empty string
    if(isset($results['citation'])) {
    $citation = $results['citation'];
    } else {
        $citation = "";
    }
    // Check if year object exist, if not return empty string
    if(isset($results['year'])) {
    $year = $results['year'];
    } else {
        $year = "";
    }
    $tag = $results['tag'];
    // Create an empty string variable to store the output to be displayed
    $output = "";
    $output .= '<p class="quote">' . $quote . '</p>';
    $output .= '<p class="source">' . $source;
    // Check if citation exist and not empty, if not, don't display the span
    if(isset($citation) && !empty($citation)) {
    $output .= '<span class="citation">' . $citation . '</span>';
    }
    // Check if year exist and not empty, if not, don't display the span
    if(isset($year) && !empty($year)) {
    $output .= '<span class="year">' . $year . '</span>';
    }
    $output .= '<span class="tag">' . $tag . '</span>';
    $output .= '</p>';
    // Echo the output
    echo $output;
}
// Call the printQuote function
printQuote($quotes);