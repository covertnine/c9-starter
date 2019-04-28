# Cortextoo
Built with [understrap](https://understrap.com)

## Repos
In addition to this repo, you will need to create and version a `client` folder, which will at a minimum contained `client/client.php`.

To start a new project, either clone the client boilerplate (coming soon), or create you own repo.

- {client name}-client (e.g., [cea-client](https://github.com/covertnine/cea-client) )


## Branches
There are two main branches: 

- main 
- develop

And Two Supporting:

- hotfix
- feature

Unless you have a clear reason not to, default to the `develop` branch. When you develop, pull from develop, commit often, and push back to `develop` at the end of your work. Once the code is **production-ready**, merge your changes back into `main`.

If you make a change to the parent theme _and_ the client folder, make _sure_ to follow the same process for the client.

For developing hotfixes and specific features, follow the steps and naming conventions per [this guide](https://nvie.com/posts/a-successful-git-branching-model/).



## NPM Build-Steps
### Installing Dependencies
- Make sure you have installed Node.js and Browser-Sync (optional) on your computer globally
- Then open your terminal and browse to the location of your UnderStrap copy
- Run: `$ npm install`

### Running
To work with and compile your Sass files on the fly start:

- `$ gulp watch`

