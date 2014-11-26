ytviewhelpers
=============

Typo3 ViewHelpers for reuse in other projects

Usage examples:
---------------
In Fluid file:

```
{namespace yt=YellowTree\ytviewhelpers\ViewHelpers}

...

<f:if condition="{yt:currentPageUid()} == 24">
 <b> Hallo ! </b>
</f:if>

```


```
{namespace yt=YellowTree\ytviewhelpers\ViewHelpers}

<div data-field="<f:format.htmlentities value="<yt:format.json value='{field}'></yt:format.json>"></f:format.htmlentities>">

```

