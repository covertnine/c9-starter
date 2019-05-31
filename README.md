# Cortextoo

Based on [understrap](https://understrap.com).

## Git Repos

In addition to this repo, you will need to create and version a `client` folder, which you will keep at the top level of `cortextoo` and at a minimum contain `client/client.php`.

To start a new project, either clone the client boilerplate (coming soon), or create you own repo.

- {client name}-client (e.g., [cea-client](https://github.com/covertnine/cea-client) )

## Git Branches

There are two main branches:

- main
- develop

Unless you have a clear reason not to, default to the `develop` branch. When you develop, pull from develop, commit often, and push back to `develop` at the end of your work. Once the code is **production-ready**, merge your changes back into `main`.

If you make a change to the parent theme _and_ the client folder, make _sure_ to follow the same update process for the client.

### For developing hotfixes and specific features that might break things

Follow the steps and naming conventions per [this guide](https://nvie.com/posts/a-successful-git-branching-model/). Or ask @samirillian.

## NPM Build Steps

### Installing Dependencies

- Make sure you have installed Node.js and Browser-Sync (optional) on your computer globally
- Then open your terminal and browse to the location of your UnderStrap copy
- Run: `npm install`

### Running

To work with and compile your Sass files on the fly start: `npm run start`.

## Build Implementation Details

### Overview

The files relevant to your build in rough order of execution:
`package.json`, `gulpfile.js`, `webpack.config.js`

The files relevant to formatting and linting in order of importance:
`.eslintrc.json`, `.eslintignore`, and `.prettierrc`.

Right now, most everything happens in `.eslintrc.json`. This is where you define the rulesets for formatting and linting.

#### package.json

The package.json file handles the `npm run start` command, and triggers the `gulp watch` command.

#### gulpfile.js

`gulp watch` runs the following code in the gulpfile:

```
gulp.task("watch", ["styles", "scripts"], function() {...});
```

`gulp.task("{taskname}")` allows you to define any job you want to done when building or developing. In the above code, `"styles"` and `"scripts"` are also gulp tasks defined in the gulpfile, which are triggered as part of the `watch` task.

You will hook up any new build steps starting in this file.

### Code Editor

I highly recommend using Visual Studio Code.

### Formatting, Linting, Debugging

#### Javascript
- coming soong -

#### PHP

Use Xdebug. Follow [this guide](https://gist.github.com/ahmadawais/d6e809d45b8103b2b3a79fa8845f9995) to get xdebug working with Vscode and Local by Flywheel. (Remember, with Local by Flywheel, you're spinning up a virtual environment with its own PHP execution.)

[Xdebug Functions](https://xdebug.org/docs/all_functions)

[PHP in VSCode](https://code.visualstudio.com/docs/languages/php)

### Unit Testing

We should do this
