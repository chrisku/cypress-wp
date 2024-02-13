# cypress-wp
Standard WordPress Settings Plugin

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
  - [Settings](#settings)
  - [Debugging](#debugging)  

## Getting Started

### Prerequisites

WordPress 6.4.3

### Installation

Upload the plugin to WordPress via /wp-admin/plugin-install.php

## Usage

This plugin does two things - set standards for a WordPress install, and add debugging functions.

### Settings

- Disable WordPress email notifications regarding WordPress and plugin updates
- Disable admin email verification prompt
- Remove WordPress Version Number
- Remove Gutenberg Block Library CSS

### Debugging

Debugging functions only work if a user is signed in to WordPress.

cy_dump($var) - var_dump a variable.

cy_debug($var) - echo a variable.

cy_dd($var) - var_dump a variable and die.

cy_cl($var) - console.log a php variable.
