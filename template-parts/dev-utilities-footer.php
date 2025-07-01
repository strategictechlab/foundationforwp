<?php if (strpos(get_bloginfo('url'), '.local') || strpos(get_bloginfo('url'), '.gwdev')) { ?>
<!-- COPY PASTE YOUR BROWSWER SYNC CODE HERE-->
<script id="__bs_script__">//<![CDATA[
  (function() {
    try {
      var script = document.createElement('script');
      if ('async') {
        script.async = true;
      }
      script.src = 'https://HOST:3000/browser-sync/browser-sync-client.js?v=2.29.3'.replace("HOST", location.hostname);
      if (document.body) {
        document.body.appendChild(script);
      } else if (document.head) {
        document.head.appendChild(script);
      }
    } catch (e) {
      console.error("Browsersync: could not append script tag", e);
    }
  })()
//]]></script>

<style>
	#__bs_notify__ {
	  position: fixed; 
	  top: auto !important;
	  bottom: 0 !important;
	  right: 10px !important;
	  border-radius:  5px 5px 0 0 !important;
	}
</style>
<?php } ?>