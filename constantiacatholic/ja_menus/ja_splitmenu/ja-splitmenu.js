/*------------------------------------------------------------------------
# JA Mageia for Joomla 1.5 - Version 1.4 - Licence Owner JA128467
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/
	// Show subNav //
	var _canAni = "show";
	var _incArrayMenu = [0,10,17,21,22];
	var _incArrayUL = [37,27,20,16,15];
	//var _incArrayMenuH = [22,21,17,10,0];
//	var _incArrayULH = [15,16,20,27,37];
	var _animateBy = 40;
	var _isMoz = (navigator.appName == "Netscape");
	var _isIE = (navigator.appName == "Microsoft Internet Explorer");
	var _isIE6 = (navigator.appVersion.search("MSIE 6.0") != -1);
	var _isSafari = (navigator.userAgent.indexOf("Safari") != -1);

	$ = function(_elementID) {
		return document.getElementById(_elementID);
	}

	showSubNav = function(_elementID) {
		_wait = 0;
		if (_canAni == "show") {
			if ($("sublevel").style.height != "22px") {
				_canAni = "";
				for (_i=0;_i<_incArrayMenu.length;_i++) {
					setTimeout("aniSubNav(" + _incArrayMenu[_i] + "," + _incArrayUL[_i] + ")",(_animateBy * _i));
				}
				$("sublevel").style.display = "block";
			}
			_wait = (_incArrayMenu.length * _animateBy);
			setTimeout("menuAniStop('hide')",(_wait + 19));
		}

		fadeElement(_elementID,0);
		for (_i=1;_i<=10;_i++) {
			setTimeout("fadeElement('sub" + _elementID + "'," + _i + ")",(_wait + (_animateBy * _i)));
		}

		highlightNav(_elementID);

		// Close any SubNavs we have open //
		for (_i=0;_i<=_subNavCount;_i++) {
			$("subNav" + _i).style.display = "none";
		}
		$("sub" + _elementID).style.display = "block";
	}

	// Hide subNav //
	hideSubNav = function() {
		//alert("hideSubNav");
/*		_wait = 0;
		if (_canAni == "hide") {
			if ($("subNavContainer").style.height == "22px") {
				_canAni = "";
				for (_i=0;_i<_incArrayMenu.length;_i++) {
					setTimeout("aniSubNav(" + _incArrayMenuH[_i] + "," + _incArrayULH[_i] + ")",(_animateBy * _i));
				}
				_wait = (_incArrayMenu.length * _animateBy);
				setTimeout("menuAniStop('show')",(_wait + 19));
			}
		}
*/	}

	menuOver = function() {
		//alert("menuOver");
		try {
			clearTimeout(_timeOut);
		} catch(_e) {}
	}

	menuOut = function() {
		//alert("menuOut");
		_timeOut = setTimeout("hideSubNav(); highlightNav();",750);
	}
	highlightNav = function(_elementID) {
		//alert("highlightNav");
/*		// Clear any Nav Anchors we have higlighted //
		for (_i=0;_i<=_navCount;_i++) {
			// See .nav li a in ./global.css for values //
			$("Nav" + _i).style.background = "url(/images/navSep.png) right no-repeat";
			$("Nav" + _i).style.color = "#515151";
		}
		if (_elementID) {
			// See .nav li a:hover in ./global.css for values //
			$(_elementID).style.background = "#4e4e4e url(/images/navSep.png) right no-repeat";
			$(_elementID).style.color = "#ffffff";
		}
*/	}

	fadeElement = function(_elementID,_opacity) {
		// Safari seems to think it's funny to throw a moueover event when you move your mouse, so this will flicker: //
		if (_isIE) {
			$(_elementID).style.filter = "alpha(opacity=" + (_opacity * 10) + ")";
		} else if (_isMoz) {
			$(_elementID).style.MozOpacity = (_opacity / 10);
			$(_elementID).style.opacity = (_opacity / 10);
		}
	}
