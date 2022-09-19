<!-- Modal "Request a quote"-->
<div class="modal fade" id="servicesListRequestQuote" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="servicesListRequestQuoteLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header d-block text-center position-relative mt-5 pb-0">
				<h5 class="modal-title text-center" id="servicesListRequestQuoteLabel"><?=get_field('form_title_request_quote','options');?></h5>
				<p class="mb-0"><?=get_field('form_sub_title_request_quote','options');?></p>
				<button type="button" class="navbar-toggler" data-bs-dismiss="modal" aria-label="Close">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="modal-body position-relative d-block pt-0 ps-0">
			<!--<script type="text/javascript" src="https://form.jotform.com/jsform/222611497667969"></script> <?//=get_field('code_form_jotform_request_quote','options');?>-->
				<iframe
						id="JotFormIFrame-222611497667969"
						title="naecsol - Request a Quote Form"
						onload="window.parent.scrollTo(0,0)"
						allowtransparency="true"
						allowfullscreen="true"
						allow="geolocation; microphone; camera"
						src="https://form.jotform.com/222611497667969"
						frameborder="0"
						style="
      min-width: 100%;
      height:539px;
      border:none;"
						scrolling="no"
				>
				</iframe>
				<script type="text/javascript">
					var ifr = document.getElementById("JotFormIFrame-222611497667969");
					if (ifr) {
						var src = ifr.src;
						var iframeParams = [];
						if (window.location.href && window.location.href.indexOf("?") > -1) {
							iframeParams = iframeParams.concat(window.location.href.substr(window.location.href.indexOf("?") + 1).split('&'));
						}
						if (src && src.indexOf("?") > -1) {
							iframeParams = iframeParams.concat(src.substr(src.indexOf("?") + 1).split("&"));
							src = src.substr(0, src.indexOf("?"))
						}
						iframeParams.push("isIframeEmbed=1");
						ifr.src = src + "?" + iframeParams.join('&');
					}
					window.handleIFrameMessage = function(e) {
						if (typeof e.data === 'object') { return; }
						var args = e.data.split(":");
						if (args.length > 2) { iframe = document.getElementById("JotFormIFrame-" + args[(args.length - 1)]); } else { iframe = document.getElementById("JotFormIFrame"); }
						if (!iframe) { return; }
						switch (args[0]) {
							case "scrollIntoView":
								iframe.scrollIntoView();
								break;
							case "setHeight":
								iframe.style.height = args[1] + "px";
								break;
							case "collapseErrorPage":
								if (iframe.clientHeight > window.innerHeight) {
									iframe.style.height = window.innerHeight + "px";
								}
								break;
							case "reloadPage":
								window.location.reload();
								break;
							case "loadScript":
								if( !window.isPermitted(e.origin, ['jotform.com', 'jotform.pro']) ) { break; }
								var src = args[1];
								if (args.length > 3) {
									src = args[1] + ':' + args[2];
								}
								var script = document.createElement('script');
								script.src = src;
								script.type = 'text/javascript';
								document.body.appendChild(script);
								break;
							case "exitFullscreen":
								if      (window.document.exitFullscreen)        window.document.exitFullscreen();
								else if (window.document.mozCancelFullScreen)   window.document.mozCancelFullScreen();
								else if (window.document.mozCancelFullscreen)   window.document.mozCancelFullScreen();
								else if (window.document.webkitExitFullscreen)  window.document.webkitExitFullscreen();
								else if (window.document.msExitFullscreen)      window.document.msExitFullscreen();
								break;
						}
						var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false;
						if(isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) {
							var urls = {"docurl":encodeURIComponent(document.URL),"referrer":encodeURIComponent(document.referrer)};
							iframe.contentWindow.postMessage(JSON.stringify({"type":"urls","value":urls}), "*");
						}
					};
					window.isPermitted = function(originUrl, whitelisted_domains) {
						var url = document.createElement('a');
						url.href = originUrl;
						var hostname = url.hostname;
						var result = false;
						if( typeof hostname !== 'undefined' ) {
							whitelisted_domains.forEach(function(element) {
								if( hostname.slice((-1 * element.length - 1)) === '.'.concat(element) ||  hostname === element ) {
									result = true;
								}
							});
							return result;
						}
					};
					if (window.addEventListener) {
						window.addEventListener("message", handleIFrameMessage, false);
					} else if (window.attachEvent) {
						window.attachEvent("onmessage", handleIFrameMessage);
					}
				</script>
			</div>
		</div>
	</div>
</div>
<!--/Modal "Request a quote"-->