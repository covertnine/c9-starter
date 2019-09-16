# C9

C9 uses `npm` to compile files and an untracked `client` folder for website-specific code. The goal is to allow a developer to create custom themes, which they can track via git, while allowing their client to still use a child theme if they like. Developers and clients mutually making changes to a child theme is a recipe for chaos.

## Installation

Navigate to the themes directory then:

```
git clone https://github.com/covertnine/cortextoo.git c9
cd c9
git clone https://github.com/covertnine/client-boilerplate.git client
```

This will create a theme directory called `c9` and a client directory called `client`. The client directory has been added to the c9 `.gitignore`, so if you want to track the whole thing together or want to rename your client directory and stil don't want it to be tracked, make sure to change your `.gitignore` accordingly.

## Development

From the `c9` directory run `npm run start`. This process watches `.scss` and `.js` in both the assets directory and in the client assets directory.

We recommend that you only make changes in the `client` directory:

### Scripts and Styles:

#### Frontend css: `c9/client/client-assets/client.scss`

#### Editor css: `c9/client/client-assets/client-editor.scss`

#### JS: `c9/client/client-assets/custom-client.js`

#### PHP:

The main entry point for client files is in `c9/client/client.php`, which includes `c9/client/inc/client-functions.php`.
