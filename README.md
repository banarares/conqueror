# The Conqueror
📝 Assessment: Implementing a "Build Your Own Bundle" Configurator Page

## Overview
The "Build Your Own Bundle" configurator consists of two main pages: the bundle selection page and the order summary page. The implementation focuses on providing a simple, interactive user experience for selecting items and reviewing the order summary.

## Implementation Steps
index.php: Implements the basic layout for the bundle configurator, including a header, footer, and a section to display card items. The cards are dynamically included from config/cards.php.
summary.php: Implements the layout for displaying the order summary. It includes a header, footer, and a section to display selected items and the total cost.

## JavaScript & PHP Functionality
script.js: Handles the selection of bundle items and the generation of the order summary.
When a card is clicked, it is either added to or removed from the selectedCards array.
The "View Summary" button saves the selected items to an array and redirects to the summary page after submit a form.
summary.php: On the summary page, the saved items are retrieved from the form and displayed along with the total cost.


## CSS for Responsiveness
style.css: Ensures the layout is responsive using flexbox and media queries.
The layout adjusts for different screen sizes, ensuring usability on both mobile and desktop devices.

## Conclusion
This implementation provides a functional "Build Your Own Bundle" configurator with a focus on simplicity and responsiveness. The code is organized to separate concerns and ensure maintainability.
