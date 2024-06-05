# The Conqueror
📝 Assessment: Implementing a "Build Your Own Bundle" Configurator Page
It can be previewed here: [control.anybusiness.ro](http://conqueror.anybusiness.ro/)
> [!WARNING]
> The subdomain does not have an SSL certificate installed

## Overview
- The "Build Your Own Bundle" configurator consists of two main pages: the bundle selection page and the order summary page. 
- The implementation focuses on providing a simple, interactive user experience for selecting items and reviewing the order summary.

## Implementation Steps
- index.php: Implements the basic layout for the bundle configurator, including a header, footer, and a section to display card items. The cards are dynamically included from config/cards.php.
- summary.php: Implements the layout for displaying the order summary. It includes a header, footer, and a section to display selected items and the total cost.

## JavaScript & PHP Functionality
- script.js: Handles the selection of bundle items and the generation of the order summary.
- When a card is clicked, it is either added to or removed from the selected cards array.
- The "View Summary" button saves the selected items to an array and redirects to the summary page after submitting a form.
- summary.php: The saved items are retrieved from the form and displayed along with the total cost on the summary page.

## CSS for Responsiveness
- style.css: Ensures the layout is responsive using flexbox and media queries.
- The layout adjusts for different screen sizes, ensuring usability on both mobile and desktop devices.

## Conclusion
This implementation provides a functional "Build Your Own Bundle" configurator with a focus on simplicity and responsiveness. The code is organized to separate concerns and ensure maintainability.
