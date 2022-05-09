<!DOCTYPE html>
<html>


<!-- Mirrored from localhost/josh719/public/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 May 2022 11:36:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COMMUNE - BF</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/lib.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/frontend/custom1.css">
    <!--end of global css-
    <!--page level css-->
    <!--page level css starts-->
<link rel="stylesheet" type="text/css" href="assets/frontend/css/frontend/tabbular.css">
<link rel="stylesheet" type="text/css" href="assets/frontend/vendors/animate/animate.min.css" />
<link rel="stylesheet" type="text/css" href="assets/frontend/css/frontend/jquery.circliful.css">
<link rel="stylesheet" type="text/css" href="assets/frontend/vendors/owl_carousel/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/frontend/vendors/owl_carousel/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/frontend/css/frontend/index.css">
<!--end of page level css-->
    <!--end of page level css-->
<link rel='stylesheet' type='text/css' property='stylesheet' href='_debugbar/assets/stylesheets0f3f.css?v=1623680966&amp;theme=auto'><script type='text/javascript' src='_debugbar/assets/javascriptf87a?v=1623680966'></script><script type="text/javascript">jQuery.noConflict(true);</script>
<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; refStyle.innerHTML = '.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }'; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); refStyle = doc.createElement('style'); (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\bsf-dump-compact\b/.test(oldClass)) { arrow = '▼'; newClass = 'sf-dump-expanded'; } else if (/\bsf-dump-expanded\b/.test(oldClass)) { arrow = '▶'; newClass = 'sf-dump-compact'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent('Event'); event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass); if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-expanded\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-compact\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector('a.sf-dump-toggle'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\bsf-dump-highlight\b/.test(node.className)) { node.className = node.className + ' sf-dump-highlight'; } }); if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) { activeNode.className = activeNode.className + ' sf-dump-highlight-active'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, ''); strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, ''); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), options = {"maxDepth":1,"maxStringLength":160,"fileLinkFormat":false}, elt = root.getElementsByTagName('A'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && 'A' == n.tagName) { if (!/\bsf-dump-toggle\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^'"]+|['"]/g).map(function (part) { if ("'" == part) { return '"\'"'; } if ('"' == part) { return "'\"'"; } return "'" + part + "'"; }); return "concat(" + parts.join(",") + ", '')"; } function xpathHasClass(className) { return "contains(concat(' ', normalize-space(@class), ' '), ' " + className +" ')"; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a, e, c) { if (c) { e.target.style.cursor = "pointer"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = '.phpdebugbar pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e, c) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if (/\bsf-dump-compact\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\bsf-dump-str-toggle\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className); } }); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if ('SAMP' == elt.tagName) { a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += elt.className == 'sf-dump-compact' ? '<span>▶</span>' : '<span>▼</span>'; a.className += ' sf-dump-toggle'; x = 1; if ('sf-dump' != elt.parentNode.className) { x += elt.parentNode.getAttribute('data-depth')/1; } } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) { a = a.substr(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>▶</span>'; } else { elt.innerHTML = '<span>▶</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '…'; elt.className = 'sf-dump-ref'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute('tabindex', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if ('scrollIntoView' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count(); } var search = doc.createElement('div'); search.className = 'sf-dump-search-wrapper sf-dump-search-hidden'; search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> '; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector('.sf-dump-search-input'); var counter = search.querySelector('.sf-dump-search-count'); var searchInputTimer = 0; var previousSearchQuery = ''; addEventListener(searchInput, 'keyup', function (e) { var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if ('' === searchQuery) { counter.textContent = '0 of 0'; return; } var classMatches = [ "sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or '); var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function (btn) { addEventListener(btn, 'click', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf('next') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, 'keydown', function (e) { var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\bsf-dump-search-hidden\b/, ''); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += ' sf-dump-search-hidden'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = ''; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll('.sf-dump-str'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength); elt.className += ' sf-dump-str-collapse'; elt.innerHTML = '<span class=sf-dump-str-collapse>'+h+'<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span>'+ '<span class=sf-dump-str-expand>'+elt.innerHTML+'<a class="sf-dump-ref sf-dump-str-toggle" title="'+x+' remaining characters"> ▶</a></span>'; } } } catch (e) { } }; })(document); </script><style> .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: ""; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none !important; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}.phpdebugbar pre.sf-dump .sf-dump-ellipsis-note{color:#1299DA}</style>
</head>

<body>
    <!-- Header Start -->
    <header>
        <!--Icon Section Start-->
        <div class="icon-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-8 col-md-4 mt-2">
                        <ul class="list-inline">
                            <li>
                                <a href="assets/frontend/#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>
                            <li>
                                <a href="assets/frontend/#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>
                            <li>
                                <a href="assets/frontend/#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>
                            <li>
                                <a href="assets/frontend/#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>
                            <li>
                                <a href="assets/frontend/#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-4 col-md-8 text-right mt-2">
                        <ul class="list-inline">
                            <li>
                                <a href="assets/frontend/mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#fff"></i></a>
                                <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"><a
                                        href="assets/frontend/mailto:" class="text-white">info@joshadmin.com</a></label>
                            </li>
                            <li>
                                <a href="assets/frontend/tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#fff"></i></a>
                                <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"><a
                                        href="assets/frontend/tel:" class="text-white">(703)
                                        717-4200</a></label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container indexpage">

            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <a class="navbar-brand" href="assets/frontend/http://localhost/josh719/public"><img src="assets/frontend/images/logo.png"
                        alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto  margin_right">
                        <li class="nav-item active">
                            <a href="assets/frontend/http://localhost/josh719/public" class="nav-link"> Home</a>
                        </li>
                        <li
                            class=" nav-item dropdown  ">
                            <a href="assets/frontend/#" aria-expanded="false" class="nav-link"> Features</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="assets/frontend/typography.html" class="dropdown-item">Typography</a>
                                </li>
                                <li><a href="assets/frontend/advanced_features.html" class="dropdown-item">Advanced
                                        Features</a>
                                </li>
                                <li><a href="assets/frontend/grid.html" class="dropdown-item">Grid System</a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class=" nav-item dropdown ">
                            <a href="assets/frontend/#" class="nav-link"> Pages</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="assets/frontend/about_us.html" class="dropdown-item">About Us</a>
                                </li>
                                <li><a href="assets/frontend/timeline.html" class="dropdown-item">Timeline</a></li>
                                <li><a href="assets/frontend/price.html" class="dropdown-item">Price</a>
                                </li>
                                <li><a href="assets/frontend/404.html" class="dropdown-item">404 Error</a>
                                </li>
                                <li><a href="assets/frontend/500.html" class="dropdown-item">500 Error</a>
                                </li>
                                <li><a href="assets/frontend/faq.html" class="dropdown-item">FAQ</a>
                                </li>
                                <li><a href="assets/frontend/blank_page.html" class="dropdown-item">Blank</a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item dropdown ">
                            <a href="assets/frontend/#" class="nav-link"> Shop</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="assets/frontend/products.html" class="dropdown-item">Products</a>
                                </li>
                                <li><a href="assets/frontend/single_product.html" class="dropdown-item">Single Product</a>
                                </li>
                                <li><a href="assets/frontend/compareproducts.html" class="dropdown-item">Compare
                                        Products</a>
                                </li>
                                <li><a href="assets/frontend/category.html" class="dropdown-item">Categories</a></li>
                            </ul>
                        </li>
                        <li
                            class="nav-item dropdown ">
                            <a href="assets/frontend/#" class="nav-link"> Portfolio</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="assets/frontend/portfolio.html">Portfolio</a>
                                </li>
                                <li><a href="assets/frontend/portfolioitem.html">Portfolio Item</a>
                                </li>
                            </ul>
                        </li>
                                                <li class="nav-item "><a href="assets/frontend/news.html" class="nav-link">News</a>
                        </li>
                        <li class="nav-item "><a href="assets/frontend/blog.html"
                                class="nav-link">
                                Blog</a>
                        </li>
                        <li class="nav-item "><a href="assets/frontend/contact.html" class="nav-link">Contact</a>
                        </li>

                        
                                                <li class="nav-item"><a href="assets/frontend/login.html" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item"><a href="assets/frontend/register.html" class="nav-link">Register</a>
                        </li>
                                            </ul>
                </div>
            </nav>
            <!-- Nav bar End -->
        </div>
    </header>

    <!-- //Header End -->

    <!-- slider / breadcrumbs section -->
    <!--Carousel Start -->
<div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item img-fluid"><img src="assets/frontend/images/slide_1.jpg" alt="slider-image" />
    </div>
    <div class="item img-fluid"><img src="assets/frontend/images/slide_2.jpg" alt="slider-image">
    </div>
    <div class="item img-fluid"><img src="assets/frontend/images/slide_4.png" alt="slider-image">
    </div>
</div>
<!-- //Carousel End -->

    <!-- Content -->
    <div class="container">
    <section class="purchas-main">
        <div class="container bg-border wow pulse" data-wow-duration="2.5s">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-12 col-lg-8">
                    <h1 class="purchae-hed mt-3">Excellent admin template for laravel</h1>
                </div>
                <div class="col-md-5 col-sm-12 col-12 col-lg-4"><a href="assets/frontend/#"
                        class="btn purchase-styl float-lg-right">Purchase
                        now</a></div>
            </div>
        </div>
    </section>
    <!-- Service Section Start-->
    <div class="row">
        <!-- Responsive Section Start -->
        <div class="col-12 text-center my-3">
            <h3 class="border-primary"><span class="heading_border bg-primary mx-auto">Our Services</span></h3>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow bounceInLeft" data-wow-duration="3.5s">
            <div class="box">
                <div class="box-icon">
                    <i class="livicon icon" data-name="desktop" data-size="55" data-loop="true" data-c="#01bc8c"
                        data-hc="#01bc8c"></i>
                </div>
                <div class="info">
                    <h3 class="success text-center">Responsive</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur
                        corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem
                        architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <div class="text-right primary"><a href="assets/frontend/#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Responsive Section End -->
        <!-- Easy to Use Section Start -->
        <div class="col-sm-6 col-md-6  col-lg-3 col-12 wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.4s">
            <!-- Box Start -->
            <div class="box">
                <div class="box-icon box-icon1">
                    <i class="livicon icon1" data-name="gears" data-size="55" data-loop="true" data-c="#418bca"
                        data-hc="#418bca"></i>
                </div>
                <div class="info">
                    <h3 class="primary text-center">Easy to Use</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur
                        corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem
                        architecto perferendis quas aperiam debitis dolor soluta!.</p>
                    <div class="text-right primary"><a href="assets/frontend/#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Easy to Use Section End -->
        <!-- Clean Design Section Start -->
        <div class="col-sm-6 col-md-6  col-lg-3 col-12 wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.8s">
            <div class="box">
                <div class="box-icon box-icon2">
                    <i class="livicon icon1" data-name="doc-portrait" data-size="55" data-loop="true" data-c="#f89a14"
                        data-hc="#f89a14"></i>
                </div>
                <div class="info">
                    <h3 class="warning text-center">Clean Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur
                        corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem
                        architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <div class="text-right primary"><a href="assets/frontend/#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Clean Design Section End -->
        <!-- 20+ Page Section Start -->
        <div class="col-sm-6 col-md-6 col-lg-3 col-12  wow bounceInRight" data-wow-duration="5s" data-wow-delay="1.2s">
            <div class="box">
                <div class="box-icon box-icon3">
                    <i class="livicon icon1" data-name="folder-open" data-size="55" data-loop="true" data-c="#FFD43C"
                        data-hc="#FFD43C"></i>
                </div>
                <div class="info">
                    <h3 class="yellow text-center">20+ Pages</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur
                        corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem
                        architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <div class="text-right primary"><a href="assets/frontend/#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //20+ Page Section End -->
    </div>
    <!-- //Services Section End -->
</div>
<!-- Layout Section Start -->
<section class="feature-main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-12 col-lg-9 wow zoomIn" data-wow-duration="2s">
                <div class="layout-image">
                    <img src="assets/frontend/images/layout.png" alt="layout" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-4 col-12 wow lightSpeedIn" data-wow-duration="2s">
                <ul class="list-unstyled  text-right layout-styl">
                    <li>
                        <i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> Responsive clean design
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> User friendly
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> HTML5
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> CSS3
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> Bootstrap 4.1.X
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- //Layout Section Start -->
<!-- Accordions Section End -->
<div class="container">
    <div class="row">
        <!-- Accordions Start -->
        <div class="text-center col-12 wow flash my-3" data-wow-duration="3s">
            <h3 class="border-success"><span class="heading_border bg-success">Accordions</span></h3>
            <label class=" text-center"> Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.</label>
        </div>
        <!-- Accordions End -->
        <div class="col-md-6 col-sm-12  col-lg-6 col-12 wow slideInLeft" data-wow-duration="1.5s">
            <!-- Tabbable-Panel Start -->
            <div class="tabbable-panel1 index">
                <!-- Tabbablw-line Start -->
                <div class="tabbable-line">
                    <!-- Nav Nav-tabs Start -->
                    <ul class="nav nav-tabs ">
                        <li class="nav-item ">
                            <a href="assets/frontend/#tab_default_1" data-toggle="tab" class="nav-link active">
                                Web </a>
                        </li>
                        <li class="nav-item">
                            <a href="assets/frontend/#tab_default_2" data-toggle="tab" class="nav-link">
                                Html 5 </a>
                        </li>
                        <li class="clear_both nav-item">
                            <a href="assets/frontend/#tab_default_3" data-toggle="tab" class="nav-link">
                                CSS 3 </a>
                        </li>
                        <li class="nav-item">
                            <a href="assets/frontend/#tab_default_4" data-toggle="tab" class="nav-link">
                                Bootstrap </a>
                        </li>
                    </ul>
                    <hr class="horizontalline">
                    <!-- //Nav Nav-tabs End -->
                    <!-- Tab-content Start -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_default_1">
                            <div class="media">
                                <div class="media-left tab col-sm-12">
                                    <a href="assets/frontend/#">
                                        <img class="media-object img-fluid" src="assets/frontend/images/authors/img1.jpg"
                                            alt="image">
                                    </a>
                                </div>
                            </div>
                            <p>
                                Metrics business-to-business beta bootstrapping virality graphical user interface
                                infrastructure conversion launch party long tail. Strategy virality validation bandwidth
                                creative low hanging fruit long tail startup gen-z business plan technology. Strategy
                                termsheet venture stealth non-disclosure agreement accelerator research & development
                                scrum project product management freemium infographic business plan.
                            </p>
                        </div>
                        <div class="tab-pane" id="tab_default_2">
                            <div class="media">
                                <div class="media-left media-middle tab col-sm-12">
                                    <a href="assets/frontend/#">
                                        <img class="media-object img-fluid" src="assets/frontend/images/authors/img2.jpg"
                                            alt="image">
                                    </a>
                                </div>
                            </div>
                            <p>
                                Branding iteration conversion market sales advisor holy grail entrepreneur backing.
                                Gen-z non-disclosure agreement holy grail business-to-consumer disruptive deployment
                                marketing channels seed money seed round ramen pivot social proof. Venture creative
                                metrics focus A/B testing crowdfunding. IPhone scrum project user experience freemium
                                interaction design long tail stealth ownership hackathon crowdfunding investor.
                            </p>
                        </div>
                        <div class="tab-pane" id="tab_default_3">
                            <div class="media">
                                <div class="media-left media-middle tab col-sm-12">
                                    <a href="assets/frontend/#">
                                        <img class="media-object img-fluid" src="assets/frontend/images/authors/img3.jpg"
                                            alt="image">
                                    </a>
                                </div>
                            </div>
                            <p>
                                Beta analytics startup direct mailing leverage learning curve www.discoverartisans.com
                                business-to-consumer. IPad metrics channels pivot deployment business plan android burn
                                rate hackathon vesting period research & development launch party user experience. Seed
                                round freemium value proposition learning curve series A financing funding research &
                                development crowdsource.
                            </p>
                        </div>
                        <div class="tab-pane" id="tab_default_4">
                            <div class="media">
                                <div class="media-left media-middle tab col-sm-12">
                                    <a href="assets/frontend/#">
                                        <img class="media-object img-fluid" src="assets/frontend/images/authors/img4.jpg"
                                            alt="image">
                                    </a>
                                </div>
                            </div>
                            <p>
                                Paradigm shift twitter pitch research & development venture. Startup partnership
                                www.discoverartisans.com supply chain crowdsource hackathon metrics paradigm shift
                                interaction design influencer holy grail first mover advantage ramen validation. User
                                experience founders burn rate learning curve infographic leverage gen-z supply chain
                                first mover advantage.
                            </p>
                        </div>
                    </div>
                    <!-- Tab-content End -->
                </div>
                <!-- //Tabbablw-line End -->
            </div>
            <!-- Tabbable_panel End -->
        </div>
        <div class="col-md-6 col-sm-12 col-12 col-lg-6 wow slideInRight" data-wow-duration="3s">
            <div id="accordion">
                <div class="card mb-2">
                    <div class="card-header p-0" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-minus success"></i>
                                <span class="success">Why Choose Us</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header p-0" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-plus success"></i>
                                <span class="success">Why Choose Us</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header p-0" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-plus success"></i>
                                <span class="success">Why Choose Us</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- //Accordions Section End -->
<!-- Our Team Start -->
<div class="container">
    <div class="row text-center">
        <div class="col-12 my-3">
            <h3 class="border-danger "><span class="heading_border bg-danger">Our Team</span></h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-6 col-sm-6 col-12 col-lg-3 profile wow fadeInLeft" data-wow-duration="3s"
            data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="assets/frontend/images/img_3.jpg" alt="team-image" class="img-fluid">
                <div class="caption">
                    <b>John Doe</b>
                    <p class="text-center"> Founder & Partner</p>
                    <div class="divide">
                        <a href="assets/frontend/#" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                                data-hc="#3a5795"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                data-hc="#55acee"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                                data-hc="#d73d32"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                                data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInUp" data-wow-duration="3s"
            data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="assets/frontend/images/img_5.jpg" alt="team-image">
                <div class="caption">
                    <b>Francina Steinberg</b>
                    <p class="text-center"> CEO </p>
                    <div class="divide">
                        <a href="assets/frontend/#" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                                data-hc="#3a5795"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                data-hc="#55acee"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                                data-hc="#d73d32"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                                data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInDown" data-wow-duration="3s"
            data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="assets/frontend/images/img_4.jpg" alt="team-image" class="img-fluid">
                <div class="caption">
                    <b>Audrey Sheldon</b>
                    <p class="text-center"> Executive Manager </p>
                    <div class="divide">
                        <a href="assets/frontend/#" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                                data-hc="#3a5795"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                data-hc="#55acee"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                                data-hc="#d73d32"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                                data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInRight" data-wow-duration="3s"
            data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="assets/frontend/images/img_6.jpg" alt="team-image">
                <div class="caption">
                    <b>Sam Bellows</b>
                    <p class="text-center"> Manager </p>
                    <div class="divide">
                        <a href="assets/frontend/#" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                                data-hc="#3a5795"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                data-hc="#55acee"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                                data-hc="#d73d32"></i>
                        </a>
                        <a href="assets/frontend/#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                                data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //Our Team End -->
    <!-- What we are section Start -->
    <div class="row">
        <!-- What we are Start -->
        <div class="col-md-6 col-sm-6 col-lg-6 col-12 wow zoomInLeft" data-wow-duration="3s">
            <div class="text-left">
                <div class="mt-2">
                    <h4 class="border-warning"><span class="heading_border bg-warning">What We Are</span></h4>
                </div>
            </div>
            <img src="assets/frontend/images/image_12.jpg" alt="image_12" class="img-fluid">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p class="text-right primary my-2"><a href="assets/frontend/#">Read more</a>
            </p>
        </div>
        <!-- //What we are End -->
        <!-- About Us Start -->
        <div class="col-md-6 col-sm-6 col-lg-6 col-12 wow zoomInRight" data-wow-duration="3s">
            <div class="text-left">
                <div class="mt-2">
                    <h4 class="border-success"><span class="heading_border bg-success">About Us</span></h4>
                </div>
            </div>
            <img src="assets/frontend/images/image_11.jpg" alt="image_11" class="img-fluid">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p class="text-right primary my-2"><a href="assets/frontend/#">Read more</a>
        </div>
        <!-- //About Us End -->
    </div>
    <!-- //What we are section End -->
    <!-- Testimonial Start -->
    <div class="row">
        <!-- Testimonial Section -->
        <div class=" col-12 text-center mt-3">
            <h3 class="border-primary"><span class="heading_border bg-primary">Testimonials</span></h3>
        </div>
        <div class="col-md-4  col-lg-4 col-12 wow bounceInLeft" data-wow-duration="3s">
            <div class="author">
                <img src="assets/frontend/images/authors/avatar3.jpg" alt="avatar3"
                    class="img-fluid rounded-circle float-left">
                <p class="text-right">
                    Tonny Jakson
                    <br>
                    <small class="text-right">Themeforest.net</small>
                </p>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
        <div class="col-md-4  col-12 col-lg-4 wow bounceIn" data-wow-duration="3s">
            <div class="author">
                <img src="assets/frontend/images/authors/avatar2.jpg" alt="avatar2"
                    class="img-fluid rounded-circle float-left">
                <p class="text-right">
                    Tonny Jakson
                    <br>
                    <small class="text-right">Themeforest.net</small>
                </p>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
        <div class="col-md-4  col-lg-4 col-12 wow bounceInRight" data-wow-duration="3s">
            <div class="author">
                <img src="assets/frontend/images/authors/avatar4.jpg" alt="avatar4"
                    class="img-fluid rounded-circle float-left">
                <p class="text-right">
                    Tonny Jakson
                    <br>
                    <small class="text-right">Themeforest.net</small>
                </p>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
        <!-- Testimonial Section End -->
    </div>
    <!-- Testimonial End -->
    <!-- Features Start -->
    <div class="row features">
        <!--<div class="text-center">-->
        <div class=" col-12 text-center my-3">
            <h3 class="border-warning"><span class="heading_border bg-warning">Features</span></h3>
        </div>
        <!--</div>-->
        <div class="col-md-4 col-sm-4 col-lg-4 col-12 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
            <div>
                <a href="assets/frontend/#"><i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#25a3d8"
                        data-hc="#25a3d8"></i></a>
                <h4>Responsive Design</h4>
            </div>
            <div>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
            <div>
                <a href="assets/frontend/#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#ef8424 "
                        data-hc="#ef8424 "></i>
                </a>
                <h4>Html 5</h4>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4  col-lg-4  col-12 wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.5s">
            <div>
                <a href="assets/frontend/#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#01bc8c"
                        data-hc="#01bc8c"></i>
                </a>
                <h4>Unique Design</h4>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
            <div>
                <a href="assets/frontend/#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#1360b3 "
                        data-hc="#1360b3 "></i>
                </a>
                <h4>Css</h4>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-12 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
            <div>
                <a href="assets/frontend/#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#FFD43C"
                        data-hc="#FFD43C"></i>
                </a>
                <h4>Clean Design</h4>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
            <div>
                <a href="assets/frontend/#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#91d659 "
                        data-hc="#91d659 "></i>
                </a>
                <h4>Bootstrap</h4>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
    </div>
    <!-- //Features End -->
    <!-- Our Skills Start -->

    <div class=" col-12 text-center my-3 marbtm10">
        <h3 class="border-danger"><span class="heading_border bg-danger">Our Skills</span></h3>
    </div>
</div>
<!--</div>-->
<div class="sliders">
    <!-- Our skill Section start -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3.5s">
                <div class="mx-auto">
                    <div id="myStat3" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="90%"
                        data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee">
                    </div>
                    <h4 class="success"><strong>Bootstrap</strong></h4>
                </div>
                <p class="my-3">Lorem Ipsum is simply dummy text of the printing and type setting industry</p>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3s"
                data-wow-delay="0.8s">
                <div class="mx-auto">
                    <div id="myStat4" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="60%"
                        data-width="4" data-fontsize="28" data-percent="60" data-fgcolor="#3abec0" data-bgcolor="#eee">
                    </div>
                    <h4 class="success"><strong>Jquery</strong></h4>
                </div>
                <p class="my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3s"
                data-wow-delay="1.2s">
                <div class="mx-auto">
                    <div id="myStat5" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="100%"
                        data-width="4" data-fontsize="28" data-percent="100" data-fgcolor="#3abec0" data-bgcolor="#eee">
                    </div>
                    <h4 class="success"><strong>Html 5</strong></h4>
                </div>
                <p class="my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3s"
                data-wow-delay="1.8s">
                <div class="mx-auto">
                    <div id="myStat6" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="70%"
                        data-width="4" data-fontsize="28" data-percent="70" data-fgcolor="#3abec0" data-bgcolor="#eee">
                    </div>
                    <h4 class="success"><strong>Css 3</strong></h4>
                </div>
                <p class="my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
        </div>
        <!-- Our skills Section End -->
    </div>
    <!-- //Our Skills End -->
</div>

<!-- //Container End -->

    <!-- Footer Section Start -->
    <footer>
        <div class=" container">
            <div class="footer-text">
                <!-- About Us Section Start -->
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                        <h4>About Us</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industryzzzz's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book.It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <hr id="hr_border2">
                        <h4 class="menu">Follow Us</h4>
                        <ul class="list-inline mb-2">
                            <li>
                                <a href="assets/frontend/#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true"
                                        data-c="#ccc" data-hc="#ccc"></i>
                                </a>
                            </li>
                            <li>
                                <a href="assets/frontend/#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true"
                                        data-c="#ccc" data-hc="#ccc"></i>
                                </a>
                            </li>
                            <li>
                                <a href="assets/frontend/#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true"
                                        data-c="#ccc" data-hc="#ccc"></i>
                                </a>
                            </li>
                            <li>
                                <a href="assets/frontend/#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true"
                                        data-c="#ccc" data-hc="#ccc"></i>
                                </a>
                            </li>
                            <li>
                                <a href="assets/frontend/#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true"
                                        data-c="#ccc" data-hc="#ccc"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //About us Section End -->
                    <!-- Contact Section Start -->
                    <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                        <h4>Contact Us</h4>
                        <ul class="list-unstyled">
                            <li>35,Lorem Lis Street, Park Ave</li>
                            <li>Lis Street, India.</li>
                            <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true"
                                    data-c="#ccc" data-hc="#ccc"></i>Phone:9140 123 4588
                            </li>
                            <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true"
                                    data-c="#ccc" data-hc="#ccc"></i> Fax:400 423 1456
                            </li>
                            <li>
                                <i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true"
                                    data-c="#ccc" data-hc="#ccc"></i>
                                Email: <a class="text-success" href="assets/frontend/mailto:info@joshadmin.com">info@joshadmin.com</a>
                            </li>
                            <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true"
                                    data-c="#ccc" data-hc="#ccc"></i> Skype: <a class="text-success"
                                    href="assets/frontend/skype:Joshadmin">Joshadmin</a>
                            </li>
                        </ul>
                        <hr id="hr_border">
                        <div class="news menu">
                            <h4>News letter</h4>
                            <p>subscribe to our newsletter and stay up to date with the latest news and deals</p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="yourmail@mail.com"
                                    aria-describedby="basic-addon2">
                                <a href="assets/frontend/#" class="btn btn-primary text-white" role="button">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <!-- //Contact Section End -->
                    <!-- Recent post Section Start -->
                    <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                        <h4>Recent Posts</h4>
                        <div class="media">
                            <img class="media-object rounded-circle mr-3" src="assets/frontend/images/image_14.jpg"
                                alt="image">
                            <div class="media-body">
                                <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing
                                    and type setting
                                    industry dummy.</p>
                                <p class="text-right"><i>Sam Bellows</i></p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="media-object rounded-circle mr-3" src="assets/frontend/images/image_15.jpg"
                                alt="image">

                            <div class="media-body">
                                <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing
                                    and type setting
                                    industry dummy.</p>
                                <p class="text-right"><i>Emilly Barbosa Cunha</i></p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="media-object rounded-circle mr-3" src="assets/frontend/images/image_13.jpg"
                                alt="image">
                            <div class="media-body">
                                <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing
                                    and type setting
                                    industry dummy.</p>
                                <p class="text-right"><i>Sinikka Oramo</i></p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="media-object rounded-circle mr-3" src="assets/frontend/images/c1.jpg"
                                alt="image">

                            <div class="media-body">
                                <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing
                                    and type setting
                                    industry dummy.</p>
                                <p class="text-right"><i>Samsa Parras</i></p>
                            </div>
                        </div>
                        <!-- //Recent Post Section End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- //Footer Section End -->
        <div class=" col-12 copyright">
            <div class="container">
                <p>Copyright &copy; Josh Admin Template, 2019</p>
            </div>
        </div>
    </footer>
    <a id="back-to-top" href="assets/frontend/#" class="btn btn-primary btn-lg back-to-top" role="button"
        data-original-title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>



    <!--global js starts-->
    <script type="text/javascript" src="assets/frontend/js/frontend/lib.js"></script>
    <!--global js end-->
    <!-- begin page level js -->
    <!-- page level js starts-->
<script type="text/javascript" src="assets/frontend/js/frontend/jquery.circliful.js"></script>
<script type="text/javascript" src="assets/frontend/vendors/wow/js/wow.min.js"></script>
<script type="text/javascript" src="assets/frontend/vendors/owl_carousel/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/frontend/js/frontend/carousel.js"></script>
<script type="text/javascript" src="assets/frontend/js/frontend/index.js"></script>
<!--page level js ends-->
    <!-- end page level js -->
    <script>
        $(".navbar-toggler-icon").click(function () {
        $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
    })

    $(function () {
        $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
    })
    </script>
<script type="text/javascript">
var phpdebugbar = new PhpDebugBar.DebugBar();
phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({"icon":"code","tooltip":"PHP Version"}), "right");
phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.TemplatesWidget()}));
phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"database","title":"Queries", "widget": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));
phpdebugbar.addTab("models", new PhpDebugBar.DebugBar.Tab({"icon":"cubes","title":"Models", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.addTab("emails", new PhpDebugBar.DebugBar.Tab({"icon":"inbox","title":"Mails", "widget": new PhpDebugBar.Widgets.MailsWidget()}));
phpdebugbar.addTab("gate", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Gate", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.setDataMap({
"php_version": ["php.version", ],
"messages": ["messages.messages", []],
"messages:badge": ["messages.count", null],
"time": ["time.duration_str", '0ms'],
"timeline": ["time", {}],
"memory": ["memory.peak_usage_str", '0B'],
"exceptions": ["exceptions.exceptions", []],
"exceptions:badge": ["exceptions.count", null],
"views": ["views", []],
"views:badge": ["views.nb_templates", 0],
"route": ["route", {}],
"currentroute": ["route.uri", ],
"queries": ["queries", []],
"queries:badge": ["queries.nb_statements", 0],
"models": ["models.data", {}],
"models:badge": ["models.count", 0],
"emails": ["swiftmailer_mails.mails", []],
"emails:badge": ["swiftmailer_mails.count", null],
"gate": ["gate.messages", []],
"gate:badge": ["gate.count", null],
"session": ["session", {}],
"request": ["request", {}]
});
phpdebugbar.restoreState();
phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
phpdebugbar.ajaxHandler.bindToFetch();
phpdebugbar.ajaxHandler.bindToXHR();
phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"http:\/\/localhost\/josh719\/public\/_debugbar\/open"}));
phpdebugbar.addDataSet({"__meta":{"id":"X0a6d4e5b0606fd6167e270572b08d5ee","datetime":"2022-05-07 11:36:27","utime":1651923387.838572,"method":"GET","uri":"\/josh719\/public\/","ip":"::1"},"php":{"version":"7.4.23","interface":"apache2handler"},"messages":{"count":0,"messages":[]},"time":{"start":1651923387.466463,"end":1651923387.838585,"duration":0.37212181091308594,"duration_str":"372ms","measures":[{"label":"Booting","start":1651923387.466463,"relative_start":0,"end":1651923387.780579,"relative_end":1651923387.780579,"duration":0.3141160011291504,"duration_str":"314ms","params":[],"collector":null},{"label":"Application","start":1651923387.783599,"relative_start":0.3171358108520508,"end":1651923387.838587,"relative_end":2.1457672119140625e-6,"duration":0.05498814582824707,"duration_str":"54.99ms","params":[],"collector":null}]},"memory":{"peak_usage":26595168,"peak_usage_str":"25MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":2,"templates":[{"name":"index (\\resources\\views\\index.blade.php)","param_count":0,"params":[],"type":"blade"},{"name":"layouts.default (\\resources\\views\\layouts\\default.blade.php)","param_count":3,"params":["__env","app","errors"],"type":"blade"}]},"route":{"uri":"GET \/","middleware":"web","as":"home","0":{},"uses":"Closure() {#1431\n  class: \"Illuminate\\Routing\\RouteFileRegistrar\"\n  this: Illuminate\\Routing\\RouteFileRegistrar {#347 \u2026}\n  file: \"C:\\xampp\\htdocs\\josh719\\routes\\web.php\"\n  line: \"322 to 324\"\n}","namespace":"App\\Http\\Controllers","prefix":null,"where":[],"file":"\\routes\\web.php:322-324"},"queries":{"nb_statements":0,"nb_failed_statements":0,"accumulated_duration":0,"accumulated_duration_str":"0\u03bcs","statements":[]},"models":{"data":[],"count":0},"swiftmailer_mails":{"count":0,"mails":[]},"gate":{"count":0,"messages":[]},"session":{"_token":"5M09yMlpgIrvTQHwSqIGDrgFn4BYGr1Uy9OjJp8g","_previous":"array:1 [\n  \"url\" => \"http:\/\/localhost\/josh719\/public\"\n]","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]","PHPDEBUGBAR_STACK_DATA":"[]"},"request":{"path_info":"\/","status_code":"<pre class=sf-dump id=sf-dump-458254070 data-indent-pad=\"  \"><span class=sf-dump-num>200<\/span>\n<\/pre><script>Sfdump(\"sf-dump-458254070\", {\"maxDepth\":0})<\/script>\n","status_text":"OK","format":"html","content_type":"text\/html; charset=UTF-8","request_query":"<pre class=sf-dump id=sf-dump-1853498420 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1853498420\", {\"maxDepth\":0})<\/script>\n","request_request":"<pre class=sf-dump id=sf-dump-1246993436 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1246993436\", {\"maxDepth\":0})<\/script>\n","request_headers":"<pre class=sf-dump id=sf-dump-230254674 data-indent-pad=\"  \"><span class=sf-dump-note>array:6<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>connection<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>host<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">localhost<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>user-agent<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"50 characters\">Mozilla\/4.5 (compatible; HTTrack 3.0x; Windows 98)<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"98 characters\">text\/html,image\/png,image\/jpeg,image\/pjpeg,image\/x-xbitmap,image\/svg+xml,image\/gif;q=0.9,*\/*;q=0.1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-language<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"5 characters\">en, *<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-encoding<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"20 characters\">gzip, identity;q=0.9<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-230254674\", {\"maxDepth\":0})<\/script>\n","request_server":"<pre class=sf-dump id=sf-dump-2100542338 data-indent-pad=\"  \"><span class=sf-dump-note>array:39<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>MIBDIRS<\/span>\" => \"<span class=sf-dump-str title=\"24 characters\">C:\/xampp\/php\/extras\/mibs<\/span>\"\n  \"<span class=sf-dump-key>MYSQL_HOME<\/span>\" => \"<span class=sf-dump-str title=\"16 characters\">\\xampp\\mysql\\bin<\/span>\"\n  \"<span class=sf-dump-key>OPENSSL_CONF<\/span>\" => \"<span class=sf-dump-str title=\"31 characters\">C:\/xampp\/apache\/bin\/openssl.cnf<\/span>\"\n  \"<span class=sf-dump-key>PHP_PEAR_SYSCONF_DIR<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\\xampp\\php<\/span>\"\n  \"<span class=sf-dump-key>PHPRC<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\\xampp\\php<\/span>\"\n  \"<span class=sf-dump-key>TMP<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\\xampp\\tmp<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CONNECTION<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  \"<span class=sf-dump-key>HTTP_HOST<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">localhost<\/span>\"\n  \"<span class=sf-dump-key>HTTP_USER_AGENT<\/span>\" => \"<span class=sf-dump-str title=\"50 characters\">Mozilla\/4.5 (compatible; HTTrack 3.0x; Windows 98)<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT<\/span>\" => \"<span class=sf-dump-str title=\"98 characters\">text\/html,image\/png,image\/jpeg,image\/pjpeg,image\/x-xbitmap,image\/svg+xml,image\/gif;q=0.9,*\/*;q=0.1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">en, *<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\/span>\" => \"<span class=sf-dump-str title=\"20 characters\">gzip, identity;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>PATH<\/span>\" => \"<span class=sf-dump-str title=\"1075 characters\">C:\\Program Files (x86)\\Common Files\\Oracle\\Java\\javapath;C:\\Program Files\\Microsoft\\jdk-16.0.2.7-hotspot\\bin;C:\\Program Files\\Common Files\\Oracle\\Java\\javapath;C:\\Windows\\system32;C:\\Windows;C:\\Windows\\System32\\Wbem;C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\;C:\\Windows\\System32\\OpenSSH\\;C:\\xampp\\mysql\\bin;C:\\Program Files\\dotnet\\;C:\\Program Files\\Java\\jdk-11.0.12\\bin;C:\\Program Files\\Git\\cmd;C:\\composer;C:\\Program Files\\nodejs\\;C:\\ProgramData\\chocolatey\\bin;C:\\Program Files (x86)\\dotnet\\;C:\\Program Files\\PowerShell\\7\\;C:\\Program Files\\PostgreSQL\\14\\bin;C:\\Program Files (x86)\\PuTTY\\;C:\\Users\\HSORO\\AppData\\Local\\Programs\\Python\\Python310\\Scripts\\;C:\\Users\\HSORO\\AppData\\Local\\Programs\\Python\\Python310\\;C:\\Users\\HSORO\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\HSORO\\AppData\\Local\\Programs\\Microsoft VS Code\\bin;C:\\xampp\\php;C:\\xampp\\mysql\\bin;C:\\Users\\HSORO\\.dotnet\\tools;C:\\Program Files\\Java\\jdk-11.0.12;C:\\Program Files\\Java\\jdk-11.0.12\\bin;C:\\Users\\HSORO\\AppData\\Roaming\\Composer\\vendor\\bin;C:\\Users\\HSORO\\AppData\\Roaming\\npm;C:\\Program Files\\PostgreSQL\\14\\bin;<\/span>\"\n  \"<span class=sf-dump-key>SystemRoot<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">C:\\Windows<\/span>\"\n  \"<span class=sf-dump-key>COMSPEC<\/span>\" => \"<span class=sf-dump-str title=\"27 characters\">C:\\Windows\\system32\\cmd.exe<\/span>\"\n  \"<span class=sf-dump-key>PATHEXT<\/span>\" => \"<span class=sf-dump-str title=\"53 characters\">.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC<\/span>\"\n  \"<span class=sf-dump-key>WINDIR<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">C:\\Windows<\/span>\"\n  \"<span class=sf-dump-key>SERVER_SIGNATURE<\/span>\" => \"<span class=sf-dump-str title=\"95 characters\">&lt;address&gt;Apache\/2.4.48 (Win64) OpenSSL\/1.1.1l PHP\/7.4.23 Server at localhost Port 80&lt;\/address&gt;<span class=\"sf-dump-default sf-dump-ns\">\\n<\/span><\/span>\"\n  \"<span class=sf-dump-key>SERVER_SOFTWARE<\/span>\" => \"<span class=sf-dump-str title=\"47 characters\">Apache\/2.4.48 (Win64) OpenSSL\/1.1.1l PHP\/7.4.23<\/span>\"\n  \"<span class=sf-dump-key>SERVER_NAME<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">localhost<\/span>\"\n  \"<span class=sf-dump-key>SERVER_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">::1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PORT<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">80<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">::1<\/span>\"\n  \"<span class=sf-dump-key>DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"15 characters\">C:\/xampp\/htdocs<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_SCHEME<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">http<\/span>\"\n  \"<span class=sf-dump-key>CONTEXT_PREFIX<\/span>\" => \"\"\n  \"<span class=sf-dump-key>CONTEXT_DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"15 characters\">C:\/xampp\/htdocs<\/span>\"\n  \"<span class=sf-dump-key>SERVER_ADMIN<\/span>\" => \"<span class=sf-dump-str title=\"20 characters\">postmaster@localhost<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_FILENAME<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">C:\/xampp\/htdocs\/josh719\/public\/index.php<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_PORT<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">59584<\/span>\"\n  \"<span class=sf-dump-key>GATEWAY_INTERFACE<\/span>\" => \"<span class=sf-dump-str title=\"7 characters\">CGI\/1.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PROTOCOL<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">HTTP\/1.1<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_METHOD<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">GET<\/span>\"\n  \"<span class=sf-dump-key>QUERY_STRING<\/span>\" => \"\"\n  \"<span class=sf-dump-key>REQUEST_URI<\/span>\" => \"<span class=sf-dump-str title=\"16 characters\">\/josh719\/public\/<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_NAME<\/span>\" => \"<span class=sf-dump-str title=\"25 characters\">\/josh719\/public\/index.php<\/span>\"\n  \"<span class=sf-dump-key>PHP_SELF<\/span>\" => \"<span class=sf-dump-str title=\"25 characters\">\/josh719\/public\/index.php<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\/span>\" => <span class=sf-dump-num>1651923387.4665<\/span>\n  \"<span class=sf-dump-key>REQUEST_TIME<\/span>\" => <span class=sf-dump-num>1651923387<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-2100542338\", {\"maxDepth\":0})<\/script>\n","request_cookies":"<pre class=sf-dump id=sf-dump-1895641182 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1895641182\", {\"maxDepth\":0})<\/script>\n","response_headers":"<pre class=sf-dump id=sf-dump-1878590855 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>content-type<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">text\/html; charset=UTF-8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">no-cache, private<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>date<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Sat, 07 May 2022 11:36:27 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>set-cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"416 characters\">XSRF-TOKEN=eyJpdiI6ImJENW9kNEtkNHUvQXA1U3lrQkd5YlE9PSIsInZhbHVlIjoiY2VZemhHMkNzNmlFeWZVcTQyTjc4K1JCNHEyWVhRS1VYM0tjeWhkM2c3c1hYS09hVWRTYjRGTE9iRWJUbXBVMzVVQk5GaXVhZGF3VTdpemFoNjcvQXkzR1lKc0JRRlorT042NVFCUEhjNWJYaWJZeWsrN0hCMERiVUJNNklzNVkiLCJtYWMiOiJkNmYxMDA1MGVjNmFhZTBkMjhiYzE1MjQxM2ExMDUyMzA1NmE3Yjk0ZjQxZTg2Y2RlNjZiYTEyOTg3NjdhOWZkIn0%3D; expires=Sat, 07-May-2022 13:36:27 GMT; Max-Age=7200; path=\/; samesite=lax<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"431 characters\">laravel_session=eyJpdiI6IjMyaTlLenFXNDhSd0IyRHBSVnRBdFE9PSIsInZhbHVlIjoiSWw5RkUybEVlYzJKRWVKQWpNMEIzalpoenN1VzRHemJWR2JDSUh2NHNHNmxSZzZkODh1M0VKeXhFM0dHaVpTZVV3ZFUzTmIxZlRNaDJzcERSdW5obzlCNVhEREZXN3Q3eHBXa3ZEYURldXF2alBQelBqL1ROdElCZi9zaDdITVYiLCJtYWMiOiI5Nzk1ODU2NzZkMGJjYmE2ZTM4N2VmNzBjNTEyYTQyODU4MzhiYTA5M2FhZjAwYzVlYzNmMWIwZTk1ZDY2ZTA1In0%3D; expires=Sat, 07-May-2022 13:36:27 GMT; Max-Age=7200; path=\/; httponly; samesite=lax<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>Set-Cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"388 characters\">XSRF-TOKEN=eyJpdiI6ImJENW9kNEtkNHUvQXA1U3lrQkd5YlE9PSIsInZhbHVlIjoiY2VZemhHMkNzNmlFeWZVcTQyTjc4K1JCNHEyWVhRS1VYM0tjeWhkM2c3c1hYS09hVWRTYjRGTE9iRWJUbXBVMzVVQk5GaXVhZGF3VTdpemFoNjcvQXkzR1lKc0JRRlorT042NVFCUEhjNWJYaWJZeWsrN0hCMERiVUJNNklzNVkiLCJtYWMiOiJkNmYxMDA1MGVjNmFhZTBkMjhiYzE1MjQxM2ExMDUyMzA1NmE3Yjk0ZjQxZTg2Y2RlNjZiYTEyOTg3NjdhOWZkIn0%3D; expires=Sat, 07-May-2022 13:36:27 GMT; path=\/<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"403 characters\">laravel_session=eyJpdiI6IjMyaTlLenFXNDhSd0IyRHBSVnRBdFE9PSIsInZhbHVlIjoiSWw5RkUybEVlYzJKRWVKQWpNMEIzalpoenN1VzRHemJWR2JDSUh2NHNHNmxSZzZkODh1M0VKeXhFM0dHaVpTZVV3ZFUzTmIxZlRNaDJzcERSdW5obzlCNVhEREZXN3Q3eHBXa3ZEYURldXF2alBQelBqL1ROdElCZi9zaDdITVYiLCJtYWMiOiI5Nzk1ODU2NzZkMGJjYmE2ZTM4N2VmNzBjNTEyYTQyODU4MzhiYTA5M2FhZjAwYzVlYzNmMWIwZTk1ZDY2ZTA1In0%3D; expires=Sat, 07-May-2022 13:36:27 GMT; path=\/; httponly<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1878590855\", {\"maxDepth\":0})<\/script>\n","session_attributes":"<pre class=sf-dump id=sf-dump-939722578 data-indent-pad=\"  \"><span class=sf-dump-note>array:4<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>_token<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">5M09yMlpgIrvTQHwSqIGDrgFn4BYGr1Uy9OjJp8g<\/span>\"\n  \"<span class=sf-dump-key>_previous<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>url<\/span>\" => \"<span class=sf-dump-str title=\"31 characters\">http:\/\/localhost\/josh719\/public<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>_flash<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>old<\/span>\" => []\n    \"<span class=sf-dump-key>new<\/span>\" => []\n  <\/samp>]\n  \"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\/span>\" => []\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-939722578\", {\"maxDepth\":0})<\/script>\n"}}, "X0a6d4e5b0606fd6167e270572b08d5ee");

</script>
</body>


<!-- Mirrored from localhost/josh719/public/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 May 2022 11:39:08 GMT -->
</html>
