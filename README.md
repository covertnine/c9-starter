# C9

C9 uses `npm` to compile files and an untracked `client` folder for website-specific code. The goal is to allow a developer to create custom themes, which they can track via git, while allowing their client to still use a child theme if they like. Developers and clients mutually making changes to a child theme is a recipe for chaos.

## Installation

Navigate to the themes directory then:

```
git clone https://github.com/covertnine/c9-starter.git c9-starter
cd c9-starter
git clone https://github.com/covertnine/client-starter.git client
```

This will create a theme directory called `c9-starter` and a client directory called `client`. The client directory has been added to the c9-starter `.gitignore`, so if you want to track the whole thing together or want to rename your client directory and stil don't want it to be tracked, make sure to change your `.gitignore` accordingly.

## Development

From the `c9-starter` directory run `npm run start`. This process watches `.scss` and `.js` in both the assets directory and in the client assets directory.

We recommend that you only make changes in the `client` directory:

### Scripts and Styles:

#### Frontend css: `c9/client/client-assets/client.scss`

#### Editor css: `c9/client/client-assets/client-editor.scss`

#### JS: `c9/client/client-assets/custom-client.js`

#### PHP:

The main entry point for client files is in `c9-starter/client/client.php`, which includes `c9-starter/client/inc/client-functions.php`.

## Git Repos

In addition to this repo, you will need to create and version a `client` folder, which you will keep at the top level of `c9` and at a minimum contain `client/client.php`.

To start a new project, either clone the client boilerplate (coming soon), or create you own repo.

- {client name}-client (e.g., [client-starter](https://github.com/covertnine/client-starter) )

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

`gulp compress` will build a production version of the theme name located in the bundle directory (which is in your .gitignore file) and will be named whatever the themename is in the package.json name field. In the c9-starter theme case, gulp compress will create a file in the theme /bundle/ directory called c9-starter.zip.

### Code Editor

Visual Studio is highly recommended.

### Formatting, Linting, Debugging

#### Javascript

Follow [this debug]()

#### PHP

Use Xdebug. Follow [this guide](https://gist.github.com/ahmadawais/d6e809d45b8103b2b3a79fa8845f9995) to get xdebug working with Vscode and Local by Flywheel. (Remember, with Local by Flywheel, you're spinning up a virtual environment with its own PHP execution.)

Other links:
[Xdebug Functions](https://xdebug.org/docs/all_functions)

[PHP in VSCode](https://code.visualstudio.com/docs/languages/php)

## Addendum: VSCode

Access commands with `cmd-shift-p`:

![Command](./assets/images/vs-command.png)

From this panel, you can navigate to the extension installer and adjust your settings.

### Necessary Extensions:

**PHP**

1. [phpdebug](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-debug)
2. [php intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)

**JS**

1. [Prettier Code formatter](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
2. [ESLint](https://github.com/microsoft/vscode-eslint)

**CSS**

1. [HTML CSS Support](https://marketplace.visualstudio.com/items?itemName=ecmel.vscode-html-css)

### Settings:

Again, use the command panel to access settings.
![Settings](./assets/images/vscode-settings.png)

There's a distinction between Workspace settings and User settings. Workspace settings are, as you might expect, specific to your project, and a `.vscode` directory will be added to the root of your project.

#### Relevant User Settings

```
"editor.formatOnSave": true,
"prettier.requireConfig": true,
"files.autoSave": "afterDelay",
"prettier.eslintIntegration": true,
```

You might also check out [prettier's options for language-specific settings](https://github.com/prettier/prettier-vscode).

### Workspace Settings

Just this one, for

```
{
    "php.validate.executablePath": "/Users/{username}/Local Sites/cortex/conf/php"
}
```

### In Summary

1. Install extensions
2. Update your settings to make the extensions work well with VSCode.
