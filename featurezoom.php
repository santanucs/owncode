<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="http://www.manyavar.com/skin/frontend/manyavar/default/js/jquery.js"></script>
<script type="text/javascript" src="http://www.manyavar.com/skin/frontend/manyavar/default/js/featuredimagezoomer.js"></script>
</head>

<body>

<div class="big_border">
    <img id="image1" src="http://www.manyavar.com/media/catalog/product/cache/5/image/9df78eab33525d08d6e5fb8d27136e95/0/9/0951d271-304_1.jpg" alt="The Manyavar Royal Silk Sherwani for Men" title="The Manyavar Royal Silk Sherwani for Men" width="336"  /></div>
<div class="zoom" id="track_hint">Roll on to see close up. Drag mouse wheel to see closer.</div>



    	        <div class="thumb">
            <a class="switchimg" onclick="imageswitcher('http://www.manyavar.com/media/catalog/product/cache/5/image/9df78eab33525d08d6e5fb8d27136e95/0/9/0951d271-304_1.jpg');" title=""><img src="http://www.manyavar.com/media/catalog/product/cache/5/thumbnail/56x84/9df78eab33525d08d6e5fb8d27136e95/0/9/0951d271-304_1.jpg" width="56" height="84" alt="" /></a>
        </div>
            	        <div class="thumb">
            <a class="switchimg" onclick="imageswitcher('http://www.manyavar.com/media/catalog/product/cache/5/image/9df78eab33525d08d6e5fb8d27136e95/_/m/_mg_0665_1.jpg');" title=""><img src="http://www.manyavar.com/media/catalog/product/cache/5/thumbnail/56x84/9df78eab33525d08d6e5fb8d27136e95/_/m/_mg_0665_1.jpg" width="56" height="84" alt="" /></a>
        </div>
            	        <div class="thumb">
            <a class="switchimg" onclick="imageswitcher('http://www.manyavar.com/media/catalog/product/cache/5/image/9df78eab33525d08d6e5fb8d27136e95/_/m/_mg_0676_1.jpg');" title=""><img src="http://www.manyavar.com/media/catalog/product/cache/5/thumbnail/56x84/9df78eab33525d08d6e5fb8d27136e95/_/m/_mg_0676_1.jpg" width="56" height="84" alt="" /></a>
        </div>
            	       

		
<style type="text/css">
.magnifyarea{ /* CSS to add shadow to magnified image. Optional */
    box-shadow: 5px 5px 7px #818181;
    -webkit-box-shadow: 5px 5px 7px #818181;
    -moz-box-shadow: 5px 5px 7px #818181;
    filter: progid:DXImageTransform.Microsoft.dropShadow(color=#818181, offX=5, offY=5, positive=true);
    background: white;
}
</style>


<script type="text/javascript">

function imageswitcher(imagename){	
	//var newImg	=	imagename.src;
	
	$('#image1').attr('src',imagename);
	var options	=	{
		zoomrange: [3, 10],
		magnifiersize: [633,395],
		magnifierpos: 'right',
		cursorshade: true,
		largeimage: imagename //<-- No comma after last option!
	}
		$('#image1').addimagezoom(options);
}

function imageswitcher2(imagename){
$('#image2').attr('src',imagename);
}
</script>
<script type="text/javascript">

//<![CDATA[
$(document).ready(function() {

	var windowsize=$(window).width();
	
	if(windowsize>900){
		Event.observe(window, 'load', function() {
			$('#image1').addimagezoom({	
			zoomrange: [3, 10],
			magnifiersize: [633,395],
			magnifierpos: 'right',
			cursorshade: true,		
			largeimage: 'http://www.manyavar.com/media/catalog/product/cache/5/image/9df78eab33525d08d6e5fb8d27136e95/0/9/0951d271-304_1.jpg' //<-- No comma after last option!
		})
		});
		}else{
		 j('#track_hint').hide();
		}
});
//]]>
</script>



</body>
</html>