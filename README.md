
# inrupt Atomic Design System

A Live respository of UI styles and UX patterns utilized by the inrupt generator for Solid React applications (<a href="https://github.com/inrupt-inc/generator-solid-react" target="_blank">https://github.com/inrupt-inc/generator-solid-react</a>). By leveraging Nick Berens' Atomic Docs framework (inspired by Brad Frost's Atomic design principles) as a base style guide/design system generation tool, the inrupt creative and front-end development team define UI/UX decisions and styled components are documented here to be used across inrupt applications. 
	
This design system can be downloaded and customized for unique theming in your solid react projects. 

inrupt Atomic Design System Demo: <a href="https://design.inrupt.com" target="_blank">https://design.inrupt.com</a>

Note: As this is a living design system, new compenents are continually added and refactored as the design system evolves. 


## Set up For Local Development:

To set up the inrupt atomic design system for local development/custom theming: 

1. Download this repository and add to your local PHP environment.
2. Configure your preprocessor to output `scss/main.scss` to `css/main.css`.
3. Go to `http://localhost/atomic-docs/atomic-core/index.php` and get started.


### To Consume In Applicatons: 

There are two main ways to install the inrupt atomic design system output (which can be replicated for customized themes/systems):

npm install --save @inrupt/inrupt-atomic-style-guide

or 
 
yarn add @inrupt/inrupt-atomic-style-guide 

(Dependent on the dependency tool utilized on your project)

After installation, the design system can be added to your root component as import @inrupt/inrupt-atomic-style-guide

## Built With:
Built using Nick Berens' Atomic Docs Framework based in PHP and SASS/SCSS. 

Additional documentation regarding the Atomic Docs framework and installation can be found at <a href="http://atomicdocs.io/">AtomicDocs.io</a>.


## Goals

We started this project wanting to create a home where creatives and developers could document UI/UX patterns & design decisions, and UI styles and FE guidelines. This framework allows us to reduce siloed knowledge, crafting a source of truth for inrupt application interfaces. This documentation and examples can then be utilized to accellerate additional application projects.  

As we continue working on new applications and features, the inrupt Atomic Design System will evolve as we commit and release new patterns and features. 










