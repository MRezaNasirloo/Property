Product ![Build status...](https://travis-ci.org/Jiro-Commerce/Product.svg?branch=master)
=======

A flexible framework agnostic PHP product catalog with support for Variations, Options and Properties.

### Properties

Properties simply represent a Name / Value pair associated with a product. To use the T-Shirt example:

- Material : Cotton
- Stitching : Lock stitch
- Manufactured : China

### Options

In many cases, you will have products with different variations. A T-Shirt is available in different *sizes* and *colors*. In order to automatically generate appropriate product variants, you need to define options. Every option type is represented by ProductOption and references multiple ProductOptionValue entities.

- Colour 
    - Red
    - Green
    - Blue
- Size
    - Small
    - Medium 
    - Large

### Variations

Product variations represent a unique combination of product options and can have their own pricing configuration, inventory tracking, SKU etc...
