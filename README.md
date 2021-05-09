# Admin Styler

1. Once the addon is installed create your own file in `/public/vendor/admin-styler/css/admin-styler-custom.css`
2. Copy the CSS below to your new `admin-styler-custom.css` file and customise it to your liking

```css
:root:root {
    /* GROUP VARIABLES -- DECORATION -- COLOURS -- THEME
    =================================================== */
    --colour-main-hue: 240;
    --colour-black-hue: 227;
}
```

## Extra Customisation Examples

```css
/* GROUP CUSTOM / LOGIN
=================================================== */
/* 

    Below is an example of a control panel override with a textured background
    Replace 'some-texture' with your own

*/
/* .outside.rad-mode {
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
```

## Further Reading

### What is this addon?

Admin Styler is a very simple addon that allows you to style Statamic's admin interface for different clients by changing just a few values. Simple styling is possible thanks to CSS Custom Properties and taking advantage of the HSL colour model.

I've been careful not to touch Statamic's beautiful design; just colour it in a little for clients while keeping the same vibe.

## How does it work?

I've taken as many of Statamic's selectors as I can find and mapped them to CSS Custom Properties. So, for example, you can change `--colour-main-hue` to a red hue, and it will roll out across the site, with different degrees of lightness and saturation.

### Why use hues?

Designing with hues (rather than RGB or hex codes) makes colour theory a _lot_ easier to understand. It also allows us to easily theme the admin with very few values, without needing to rely on SCSS colour functions and the like.

If you're not sure about HSL I recommend [Sara Soueidan's blog post](https://www.sarasoueidan.com/blog/hex-rgb-to-hsl/), which goes into detail about its advantages.

## Feedback

Please feel free to get in touch. You can find me on Statamic's Discord channel or on Twitter @_JayGeorge
