    var timeout;
	function fitLBtimeout() {
        clearTimeout(timeout);
        timeout = setTimeout(fitLightbox, 50);
    }

    /* Lightbox Fit */
    function fitLightbox() {
        var $lightbox = $('.mbr-gallery .modal-content');

        if (!$lightbox.length) {
            return;
        }

        var windowPadding = 0;
        var bottomPadding = 10;
        var wndW = $(window).width() - windowPadding * 2;
        var wndH = $(window).height() - windowPadding * 2;
        $lightbox.each(function() {
            var setWidth, setTop, setHeight;
            var isShown = $(this).hasClass('in');
            var $modalDialog = $(this).find('.modal-body');
            var $currentImg = $modalDialog.find('.item.active > img');

/*            if ($modalDialog.find('.item.prev > img, .carousel-item.next > img').length) {
                $currentImg = $modalDialog.find('.carousel-item.prev > img, .carousel-item.next > img').eq(0);
            }*/
// console.log($currentImg); return;
            var lbW = $currentImg[0].naturalWidth;
            var lbH = $currentImg[0].naturalHeight;
            console.log(lbW + " " + lbH);
            console.log(wndW + " " + wndH)

            // height change
            var needH = wndH - bottomPadding * 2;
            setHeight = needH - 50 - 50;

            if (wndW / wndH > lbW / lbH) {
                setWidth = needH * lbW / lbH;
            }

            // width change
            else {
                setWidth = wndW - bottomPadding * 2;
            }
            // check for maw width
            setWidth = setWidth >= lbW ? lbW : setWidth;

            // set top to vertical center
            setTop = (wndH - setWidth * lbH / lbW) / 2;
            setWidth = wndW * 3 / 5;
            console.log(setWidth);
            $modalDialog.css({
                height: parseInt(setWidth * wndH / wndW),
                // width: parseInt(setWidth),
            });
            $(".modal-dialog").css({
                width: parseInt(setWidth),
                top: setTop + windowPadding,
                height: setHeight
            });
        });
    }
	$("#detailCard").on("click", function () {
		fitLBtimeout();
		/*var $currentImg = $('.carousel-inner > .item > img');
		console.log($currentImg[0].naturalHeight)*/
	});
    $(window).on('resize load', fitLBtimeout);