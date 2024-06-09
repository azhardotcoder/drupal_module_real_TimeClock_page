# Real Time Module Page for Drupal

The Real Time Module Page is a custom Drupal module designed to demonstrate real-time capabilities on a web page. It provides a simple page that displays a real-time, dynamically updating clock. This module is compatible with Drupal 8, 9, and 10.

## Features

- Displays a dynamically updating clock showing the current time on a custom page.
- Utilizes JavaScript to update the clock every second, demonstrating real-time updates on a Drupal site.

## Requirements

- Drupal 8, 9, or 10
- JavaScript enabled in the browser

## Installation

1. **Download and Place the Module:**
   - Clone this repository or download the tarball and place it in your Drupal installation under the `modules/custom` directory.

2. **Enable the Module:**
   - Navigate to the 'Extend' section of your Drupal admin panel.
   - Find the "Real Time Module Page" under the "Custom" package and enable it by checking the checkbox and clicking the install button.
   - Alternatively, you can enable the module using Drush with the following command:
     ```
     drush en real_time_module_page -y
     ```

3. **Verify Installation:**
   - Once enabled, visit `http://yourdrupalsite.com/real-time` to see the module in action.

## Configuration

This module requires no additional configuration and works out of the box following installation.

## Usage

To see the real-time clock:
- Navigate to `/real-time` on your Drupal site (e.g., `http://yourdrupalsite.com/real-time`).
- You will see the current time displayed, updating every second.

## Troubleshooting

If you encounter any issues:
- Ensure the module is correctly placed in the `modules/custom` directory.
- Check that the module is enabled in the Drupal admin panel.
- Clear the cache if the page does not appear as expected.
- Check the JavaScript console for errors if the time does not update as expected.

## Maintainers

- Azhar Khan

