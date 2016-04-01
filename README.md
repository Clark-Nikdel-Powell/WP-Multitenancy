# WordPress Multitenancy

This repo is proof-of-concept for developing WordPress sites in a multi-tenancy environment.

## Installation

### cnp/flask Box

Cnp/flask in a custom box built from scotch/box with slight modifications to its virtual host configs. The custom box is currently available via DropBox. Ask for the link.

### Custom CNP Flask box

Add the custom box to Vagrant.

```
vagrant box add cnp/flask flask.box
```

### Clone this repo

Recursively clone the repo. Fetches the twentysixteen theme and WP core version 4.4.2.

```
git clone --recursive https://github.com/Clark-Nikdel-Powell/WP-Multitenancy.git
```

### Vagrant Up

Start up the box.

```
vagrant up
```
