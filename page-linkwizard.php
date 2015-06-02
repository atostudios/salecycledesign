<?php
/*
Template Name: LinkWizard
*/

get_header(); ?>


<div class="code large-6 small-12">
<div id="convert" class="lwbutton"><span class="icon-bolt"></span>Convert</div>
<textarea id="user-html">
</textarea>
</div>
<div class="code large-6 small-12">
<div id="copy-button" data-clipboard-text="It Looks like LinkWizard didn't copy your HTML" title="Click to copy your HTML." class="lwbutton clone">
<span class="icon-clone"></span>Copy
</div>
<div class="copied">Copied</div>
<textarea id="output-html">
</textarea>
</div>









<?php get_footer(); ?>

