# Foundation for WP

[![GitHub version](https://img.shields.io/badge/version-1.0-1779ba)](https://github.com/strategictechlab/foundationforwp/releases)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Foundation Discord](https://img.shields.io/badge/Foundation_Discord-Join_Chat-5865f2)](https://static.foundationcss.com/discord)

This is a starter theme for WordPress based on [Foundation for Sites](https://get.foundation/sites/docs/), the most advanced responsive front-end framework in the world. The purpose of [Foundation for WP](https://foundationforwp.com) is to act as a small and handy toolbox that contains the essentials needed to build any design. It's meant to be a starting point, not the final product.

Please fork, copy, modify, delete, share or do whatever you like with this.

All contributions are welcome!

## Requirements

**This project requires [NodeJS](https://nodejs.org/en/) (Version 12 or greater recommended).** Please be aware that you might encounter problems with the installation if you are using the most current Node version (bleeding edge) with all the latest features.

Foundation for WP uses [Sass](http://Sass-lang.com/) (CSS with superpowers). In short, Sass is a CSS pre-processor that allows you to write styles more effectively and tidy.

If you have not worked with a Sass-based workflow before, I would recommend reading [Foundation for WP for beginners](https://foundationforwp.com/posts/getting-started/), a short blog post that explains what you need to know.

## Quickstart

### 1. Clone the repository and install with npm

```bash
$ cd my-wordpress-folder/wp-content/themes/
$ git clone https://github.com/strategictechlab/foundationforwp.git
$ cd foundationforwp
$ npm install
```

### 2. Configuration

#### YAML config file

At the start of the build process a check is done to see if a `config.yml` file exists. If `config.yml` exists, the configuration will be loaded from `config.yml`.

#### Browsersync setup

If you want to take advantage of [Browsersync](https://www.browsersync.io/) (automatic browser refresh when a file is saved), the project comes bundled with a basic configuration. After your theme is in a watch state, Browsersync will display your script in the terminal. Verify that the script tag loads somewhere on the frontend of your site to keep things updated seamlessly whenever you make changes to your code.

#### Static asset hashing / cache breaker

If you want to make sure your users see the latest changes after re-deploying your theme, you can enable static asset hashing. In your `config.yml`, set `REVISIONING: true;`. Hashing will work on the `npm run build` and `npm run dev` commands. It will not be applied on the start command with browsersync. This is by design. Hashing will only change if there are actual changes in the files.

### 3. Get started

```bash
$ npm start
```

### 4. Compile assets for production

When building for production, the CSS and JS will be minified. To minify the assets in your `/dist` folder, run

```bash
$ npm run build
```

### Project structure

In the `/src` folder you will find the working files for all your assets. Every time you make a change to a file that is watched by Gulp, the output will be saved to the `/dist` folder. The contents of this folder is the compiled code that you should not touch (unless you have a good reason for it).

The rest should be self-explanatory, based on traditional WordPress theme structures.

### Styles and Sass Compilation

- `style.css`: Do not worry about this file. It's required by WordPress. All styling are handled in the Sass files described below

- `src/assets/scss/app.scss`: Make imports for all your styles here
- `src/assets/scss/global/*.scss`: Global settings
- `src/assets/scss/components/*.scss`: Buttons etc.
- `src/assets/scss/modules/*.scss`: Topbar, footer etc.
- `src/assets/scss/templates/*.scss`: Page template styling
- `src/assets/scss/wordpress/*.scss`: WordPress blocks and generic styling

- `dist/assets/css/app.css`: This file is loaded in the `<head>` section of your document, and contains the compiled styles for your project.

If you're new to Sass, please note that you need to have Gulp running in the background (`npm start`), for any changes in your scss files to be compiled to `app.css`.

### JavaScript Compilation

All JavaScript files, including Foundation's modules, are imported through the `src/assets/js/app.js` file. The files are imported using module dependency with [webpack](https://webpack.js.org/) as the module bundler.

Foundation modules are loaded in the `src/assets/js/app.js` file. By default all components are loaded. You can also pick and choose which modules to include. Just follow the instructions in the file.

If you need to output additional JavaScript files separate from `app.js`, do the following:

- Create new `custom.js` file in `src/assets/js/`. If you will be using jQuery, add `import $ from 'jquery';` at the top of the file.
- In `config.yml`, add `src/assets/js/custom.js` to `PATHS.entries`.
- Build (`npm start`)
- You will now have a `custom.js` file outputted to the `dist/assets/js/` directory.

## Demo

- [Clean Foundation for WP install](http://foundationforwp.com/)
- [Foundation for WP Kitchen Sink - see every single element in action](http://foundationforwp.com/kitchen-sink/)

## Local Development

We recommend using one of the following setups for local WordPress development:

- [Local WP](https://localwp.com/)
- [WP Studio](https://developer.wordpress.com/studio/)

## Documentation

- [Foundation Sites Docs](https://get.foundation/sites/docs/)
- [WordPress Codex](http://codex.wordpress.org/)

## Showcase

> Credit goes to all the brilliant designers and developers out there. Have **you** made a site that should be on this list? [Please let us know](https://foundationforwp.com/showcase)

## Roadmap
We're constantly working to improve the features in this project, maintain reliability, and keep up with WordPress core development. See the lists below for what's coming next.

### In Progress
- Search form and search results
- Accordion block template
- Reveal modal block template

### Planning / Wishlist
- Custom post type starting point
- Custom block starting point

## Contributing

#### Here are ways to get involved:

1. [Star](https://github.com/strategictechlab/foundationforwp/stargazers) the project!
2. Answer questions that come through [GitHub issues](https://github.com/strategictechlab/foundationforwp/issues)
3. Report a bug that you find
4. Share a theme you've built on top of Foundation for WP for our Showcase
5. Share your experience of Foundation for WP with other devs.

#### Pull Requests

Pull requests are highly appreciated. Please follow these guidelines:

1. Solve a problem. Features are great, but even better is cleaning-up and fixing issues in the code that you discover
2. Make sure that your code is bug-free and does not introduce new bugs
3. Create a [pull request](https://help.github.com/articles/creating-a-pull-request)
