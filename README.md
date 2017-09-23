### npm install
- Open your terminal
- Change to the directory where you want to add UnderStrap
- Type `npm install understrap`

### WordPress.org install
- Open your WordPress backend
- Click on "Appearance -> Themes"
- Hit the "Add new" button
- Search for "UnderStrap"
- Hit the "install" button
- Activate the theme

## Developing With npm, Gulp and SASS and [Browser Sync][1]

### Installing Dependencies
- Make sure you have installed Node.js and Browser-Sync* (* optional, if you wanna use it) on your computer globally
- Then open your terminal and browse to the location of your UnderStrap copy
- Run: `$ npm install`

### Running
To work and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpfile.js` in the beginning of the file:
```javascript
var browserSyncOptions = {
    proxy: "localhost/theme_test/", // <----- CHANGE HERE
    notify: false
};
```
- then run: `$ gulp watch-bs`

## How to Use the Build-In Widget Slider

The front-page slider is widget driven. Simply add more than one widget to widget position “Hero”.
- Click on Appearance → Widgets.
- Add two, or more, widgets of any kind to widget area “Hero”.
- That’s it.

## RTL styles?
Just add a new file to the themes root folder called rtl.css. Add all alignments to this file according to this description:
https://codex.wordpress.org/Right_to_Left_Language_Support

## Page Templates

### Blank Template

The `blank.php` template is useful when working with various page builders and can be used as a starting blank canvas.

### Empty Template

The `empty.php` template displays a header and a footer only. A good starting point for landing pages.

### Full Width Template

The `fullwidthpage.php` template has full width layout without a sidebar.

[1] Visit [http://browsersync.io](http://browsersync.io) for more information on Browser Sync

Licenses & Credits
=
- Font Awesome: http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
- Bootstrap: http://getbootstrap.com | https://github.com/twbs/bootstrap/blob/master/LICENSE (Code licensed under MIT documentation under CC BY 3.0.)
and of course
- jQuery: https://jquery.org | (Code licensed under MIT)
- WP Bootstrap Navwalker by Edward McIntyre: https://github.com/twittem/wp-bootstrap-navwalker | GNU GPL
- Bootstrap Gallery Script based on Roots Sage Gallery: https://github.com/roots/sage/blob/5b9786b8ceecfe717db55666efe5bcf0c9e1801c/lib/gallery.php