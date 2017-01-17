# [WikkaWiki odf action plugin](https://github.com/pepitosoft/wikka-odf-action)

[![WebODF](https://raw.githubusercontent.com/pepitosoft/wikka-odf-action/master/images/webodflogo.png)](http://webodf.org/)
[![WikkaWiki](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/wizard.gif)](http://wikkawiki.org/HomePage)

## What is this?

This is a a action plugin for easily creating WikkaWiki documents from Open Document Format (ODF).

![Write preview](https://raw.githubusercontent.com/pepitosoft/wikka-odf-action/master/images/webodfactionpreview.png)

Easy step:

1. Put this repo on "/plugins/actions/odf" directory.

## Why?

Is a very easy way to create Pages from ODF documents.

## How?

This plugin works like any action plugin on WikkaWiki:

1. Addind the action like usual:

For example:

```markup
 {{odf odffile="welcome.odt"}}
```

- Note1: that you need the ```{{files}}``` action, there you put only the name of the file.
- Note2: Works with spreadsheats.

![Spreadsheat Preview](https://raw.githubusercontent.com/pepitosoft/wikka-odf-action/master/images/webodfactionpreviewods.png)

### How install it?

#### Install the action:

The first is like a simple Action plugin, this meaning that you have to add "/force" directory to actions path:

Drop this repo on your "/plugins/actions/force" directory.

Directory Estructure:

```bash
cd plugins/actions
mkdir odf
git clone https://github.com/pepitosoft/wikka-odf-action.git odf/
```

## FAQs and TODOs

- I part of the default plugins of WikkaWiki

> R: For now, is not, but we gonna to try.

- [ ] TODO: Put a default odf file on the demo... for new users.
- [ ] TODO: Add the odf, odt, ods to allowed list on files.php action.
- [ ] TODO: Fix space problem on file name.
- [ ] TODO: Add support for complete url.. is not dificult.
- [ ] TODO: Check file name.
- [ ] TODO: Better Readme.md.

# Powered by:
- [WebODF](http://webodf.org/) WebODF is a JavaScript library that makes it easy to add Open Document Format (ODF) support to your website and to your mobile or desktop application.

# References:
- [Demos](http://webodf.org/demos/)
