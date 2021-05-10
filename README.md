
# DEPRECATED

This repo is no longer supported. Use at your own risk.

# Atomic Design System for Solid Applications

Inspired by Brad Frost's Atomic design principles, we use Nick Berens' Atomic Docs framework as a base style guide / design system generation tool for Solid applications. This is a live repository of UI styles and UX patterns utilized in our Software Development Kits for Solid. The design system will continue to evolve as we commit and release new patterns and features.

This design system can be forked and customized for unique theming in your Solid application projects.

To see this applied, check out the [React Application Generator](https://github.com/inrupt-inc/generator-solid-react) in the [Solid React SDK](https://github.com/inrupt-inc/solid-react-sdk).

To see this live, go to [design.inrupt.com](https://design.inrupt.com).

*As this is a living design system, new components are continually added and refactored as the system evolves.*

## To use it in your application

There are two main ways to install the design system output (which can be replicated for customized themes/systems):

#### npm
`npm install --save @inrupt/solid-style-guide`

#### yarn
`yarn add @inrupt/solid-style-guide`

#### Post-install
After installation, the design system can be added to your root component:  
`import '@inrupt/solid-style-guide'`

## To customize your own version

To set up the design system for local development / custom theming:

1. Fork this repository and add to your local PHP environment.
2. Configure your preprocessor to output `scss/main.scss` to `css/main.css`.
3. Go to `http://localhost/atomic-docs/atomic-core/index.php` and get started.

## Credit
Built using Nick Berens' [Atomic Docs](http://atomicdocs.io/) Framework based in PHP and SASS/SCSS.

Check out [AtomicDocs.io](https://www.atomicdocs.io) for more detail on the framework and installation tips.
