ytviewhelpers
=============

Typo3 ViewHelpers for reuse in other projects

Usage:
------
In Fluid file:

<pre>
{namespace yt=YellowTree\ytviewhelpers\ViewHelpers}

<f:if condition="{yt:currentPageUid()} == 24">
 <b> Hallo ! </b>
</f:if>
</pre>
