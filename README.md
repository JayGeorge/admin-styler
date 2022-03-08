# Admin Styler

1. Once the addon is installed create your own file in `/public/vendor/admin-styler/css/admin-styler-custom.css`
2. Copy the CSS below to your new `admin-styler-custom.css` file and customise it to your liking

```css
:root:root {
    /* Examples...
        ## Grayscale
        --colour-main-hue: 225;
        --colour-main-saturation: 0%;
        --colour-main-lightness: 10%;
        --background-saturation: 0%;

        ## Light
        --colour-main-saturation: 0%;
        --colour-main-lightness: 10%;
        --background-saturation: 0%;
        --background-lightness: 98%;
    */
    /* GROUP VARIABLES -- DECORATION -- COLOURS -- THEME
    =================================================== */
    --colour-main-hue: 355;
    --colour-main-saturation: 80%;
    --colour-main-lightness: 50%;

    --colour-black-hue: var(--colour-main-hue);
    /* This is the default Statamic background hue */
    /* --colour-black-hue: 210; */

    --background-saturation: 31%;
    --background-lightness: 95%;

    /* Comment these out to reduce/control the saturation of form field backgrounds */
    /* --colour-grey-light-forms: hsl(var(--colour-black-hue), 0%, 99%); */
    /* --colour-grey-light-forms-1: hsl(var(--colour-black-hue), 0%, 99%); */
}
```

## Installing

`composer require jaygeorge/admin-styler`

## Updating via command line

- Run `composer update`

## Further Reading

### What is this addon?

Admin Styler is a very simple addon that allows you to style Statamic's admin interface for different clients by changing just a few values. Simple styling is possible thanks to CSS Custom Properties and taking advantage of the HSL colour model.

I've been careful not to touch Statamic's beautiful design; just colour it in a little for clients while keeping the same vibe.

### How does it work?

I've taken as many of Statamic's selectors as I can find and mapped them to CSS Custom Properties. So, for example, you can change `--colour-main-hue` to a red hue, and it will roll out across the site, with different degrees of lightness and saturation.

#### Can I look under the hood?

Yep, look in `/vendor/jaygeorge/admin-styler/resources/css/admin-styler-base.css`
Please don't change any of this CSS though, it'll just be overriden when I push an update to the addon. Instead override it with `admin-styler-custom.css` as per the instructions at the top of this README.

### Why use hues?

Designing with hues (rather than RGB or hex codes) makes colour theory a _lot_ easier to understand. It also allows us to easily theme the admin with very few values, without needing to rely on SCSS colour functions and the like.

If you're not sure about HSL I recommend [Sara Soueidan's blog post](https://www.sarasoueidan.com/blog/hex-rgb-to-hsl/), which goes into detail about its advantages.

### Why use :root:root?

`admin-styler-custom.css` needs to use `:root:root` to override the base. Because of the way Statamic loads stylesheets `admin-styler-custom.css` is loaded _before_ `admin-styler-base.css`, we need to increase specificity to override it. Doubling the root was the least messy way to do this. If you're a know-it-all in the addon world and know how to change the stylesheet loading order, please let me know!

## Feedback

Please feel free to get in touch. You can find me on Statamic's Discord channel or on Twitter @_JayGeorge

## Extra Customisation Examples

Here are some extra examples of safely overriding Statamic things.

```css
/* GROUP CUSTOM / LOGIN
=================================================== */
/* 

    Below is an example of a control panel override with a textured background
    Replace 'some-texture' with your own

*/
/* .outside.rad-theme {
    background: black;
}

.outside::before {
    content: "";
    position: absolute;
    z-index: -2;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("/img/some-texture");
    background-size: 100%;
    filter: grayscale(100%);
}

.outside::after {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: hsl(0 0% 0% / 0.8);
} */




/* GROUP COMPONENTS / WHITE LABEL LOGO
=================================================== */
/* Notes...

   - Statamic uses this class for White Label logos

*/

/* .white-label-logo {
    min-width: 50px;
    max-height: 25px!important;
} */
```
